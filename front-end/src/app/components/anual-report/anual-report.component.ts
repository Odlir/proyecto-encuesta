import { Component, OnInit, ViewChild, ElementRef, AfterViewInit } from '@angular/core';
import { Router } from '@angular/router';
/*import { ApiService } from 'src/app/Services/api/api.service';*/
import { ApiBackRequestService } from './../../Services/api-back-request.service';
import Swal from 'sweetalert2';
import {NgProgress,NgProgressRef} from "ngx-progressbar";
import * as moment from 'moment';


export interface Empresa {
	nombre: string;
	id: number;
}

@Component({
	selector: 'app-anual-report',
	templateUrl: './anual-report.component.html',
	styleUrls: ['./anual-report.component.css'],
})
export class AnualReportComponent implements OnInit {
	@ViewChild('dateRangeInput') dateRangeInput!: ElementRef; // Acceso al input
	dateRange: string; // Asume que tienes este campo


	empresas: any[] = [];
	empresa: Empresa = {
		id: null,
		nombre: '',
	};
	disabledButtons: boolean = false;
	statusSchools: any[] = [];
	public progressRef: NgProgressRef;
	constructor(private api: ApiBackRequestService, private router: Router, public ngProgress: NgProgress) {
		this.progressRef = ngProgress.ref();
		this.dateRange = `${moment().startOf('year').format('DD-MM-YYYY')} - ${moment().format('DD-MM-YYYY')}`; // Formato como cadena
		this.options = {
			opens: 'left',
			locale: {
				format: 'DD-MM-YYYY',
			},
			startDate: moment().startOf('year'),
			endDate: moment(),
			maxSpan: {
				days: 365
			},
			ranges: {
				'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
				'Este mes': [moment().startOf('month'), moment().endOf('month')],
				'Último mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
			}
		};
	}
	ngOnInit() {
		this.api.get('empresa_sucursal').subscribe((data) => {
			this.empresas = data.reduce((options: any[], empresa: Empresa) => {
				options.push({
					...empresa,
					label: empresa.nombre,
				});
				return options;
			}, []);
			this.empresas.unshift({ id: 'all', label: 'Todos', nombre: 'Todos' });
		});
	}

	options: any = {
		locale: { format: 'DD/MM/YYYY' },
		startDate: moment().startOf('year').format('DD/MM/YYYY'), // Inicio del año actual
		endDate: moment().format('DD/MM/YYYY'),
	};

	onDateRangeChange(value: string) {

		this.dateRange = value;
	}

	onChangeEmpresa($event) {
		this.empresa.id = $event.id;
		this.empresa.nombre = $event.nombre;
		this.statusSchools = [];
	}

	downloadExcelStatus(dateRangeInput: HTMLInputElement) {
		const inputText = dateRangeInput.value; // Obtener el texto visible en el input
		const [startDate, endDate] = inputText.split(' - ');
		const fecha_inicio = moment(startDate, 'DD-MM-YYYY').format('YYYY-MM-DD');
		const fecha_final = moment(endDate, 'DD-MM-YYYY').format('YYYY-MM-DD');
		console.log('Fecha de inicio:', startDate);


		if (!this.empresa.id) {
			this.mensaje('Por favor complete los campos requeridos');
		} else {
			this.disabledButtons = true;
			const request = {
				empresa_id: this.empresa.id,
				fecha_inicio: fecha_inicio,
				fecha_final: fecha_final,
				archivo:
					this.empresa.nombre +
					'-REPORTE-ANUAL-STATUS.xlsx',
			};

			this.api.downloadFile('getAnualReportExcel', request).subscribe(
				(data) => {
					this.disabledButtons = false;
				},
				async (error) => {
					this.disabledButtons = false;
					this.mensaje(error.error);
				}
			);
		}
	}

	getSchoolsStatus(dateRangeInput: HTMLInputElement) {
		const inputText = dateRangeInput.value; // Obtener el texto visible en el input
		const [startDate, endDate] = inputText.split(' - ');
		const fecha_inicio = moment(startDate, 'DD-MM-YYYY').format('YYYY-MM-DD');
		const fecha_final = moment(endDate, 'DD-MM-YYYY').format('YYYY-MM-DD');
		console.log('Fecha de inicio:', startDate);


		if (!this.empresa.id) {
			this.mensaje('Por favor complete los campos requeridos');
		}
		 else {
			this.disabledButtons = true;
			const params = `empresa_id=${this.empresa.id}&searchValue=${''}&fecha_inicio=${fecha_inicio}&fecha_final=${fecha_final}`;
			this.api.get(`getStatusSchools?${params}`)
				.subscribe(
					(data) => {
						this.statusSchools = data;
						// Verifica si no hay datos
						if (!this.statusSchools || this.statusSchools.length === 0) {
							this.showNoDataAlert(); // Llama a la función para mostrar el modal
						}
						this.disabledButtons = false;

					},
					(error) => {
						this.disabledButtons = false;
						this.mensaje(error.error);
					}
				);
		}
	}

	showNoDataAlert() {
		Swal.fire({
			title: 'No se encontraron datos',
			text: 'No se encontraron datos con los filtros requeridos.',
			icon: 'info', // Cambia el icono según tu preferencia
			confirmButtonText: 'Aceptar',
		});
	}

	getTotal() {
		let total = 0;
		if (this.statusSchools) {
			this.statusSchools.forEach((school) => {
				total += school.total;
			});
		}
		return total;
	}

	getTotalSchools() {
		let total = 0;
		if (this.statusSchools) {
			total = this.statusSchools.length;
		}
		return total;
	}

	getIncompleteSurveys() {
		let total = 0;
		if (this.statusSchools) {
			this.statusSchools.forEach((school) => {
				total += school.noRespondio;
			});
		}
		return total;
	}

	getCompleteSurveys() {
		let total = 0;
		if (this.statusSchools) {
			this.statusSchools.forEach((school) => {
				total += school.respondio;
			});
		}
		return total;
	}

	mensaje(msj) {
		Swal.fire({
			title: msj,
			icon: 'warning',
			timer: 2000,
		});
	}
}

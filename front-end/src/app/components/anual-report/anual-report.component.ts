import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
/*import { ApiService } from 'src/app/Services/api/api.service';*/
import { ApiBackRequestService } from './../../Services/api-back-request.service';
import Swal from 'sweetalert2';
import {NgProgress,NgProgressRef} from "ngx-progressbar";

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

	onChangeEmpresa($event) {
		this.empresa.id = $event.id;
		this.empresa.nombre = $event.nombre;
		this.statusSchools = [];
	}

	downloadExcelStatus() {
		if (!this.empresa.id) {
			this.mensaje('Por favor complete los campos requeridos');
		} else {
			this.disabledButtons = true;
			const request = {
				empresa_id: this.empresa.id,
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

	getSchoolsStatus(searchValue = '') {
		if (!this.empresa.id) {
			this.mensaje('Por favor complete los campos requeridos');
		} else {
			this.disabledButtons = true;
			this.api.get(
					`getStatusSchools?empresa_id=${this.empresa.id}&searchValue=${searchValue}`
				)
				.subscribe(
					(data) => {
						this.statusSchools = data;
						this.disabledButtons = false;
					},
					(error) => {
						this.disabledButtons = false;
						this.mensaje(error.error);
					}
				);
		}
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

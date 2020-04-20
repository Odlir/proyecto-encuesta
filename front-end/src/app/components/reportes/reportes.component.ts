import { Router } from '@angular/router';
import { ApiBackRequestService } from './../../Services/api-back-request.service';
import { Component, OnInit } from '@angular/core';
import Swal from 'sweetalert2';

@Component({
	selector: 'app-reportes',
	templateUrl: './reportes.component.html',
	styleUrls: ['./reportes.component.css']
})
export class ReportesComponent implements OnInit {

	public form = {
		encuesta_id: null,
		campo: 'links',
		archivo: null
	}

	public interes_id: null;

	public temperamento_id: null;

	public sucursales = [];

	public intereses = [];

	public temperamentos = [];

	public sucursal = {
		id: null,
		nombre: null
	}

	constructor(private api: ApiBackRequestService, private router: Router) { }

	ngOnInit(): void {
		this.fetch();
	}

	fetch() {
		this.api.get('empresa_sucursal').subscribe(
			(data) => {
				this.sucursales = data
			}
		);
	}

	obtenerEncuestas() {
		this.intereses = [];
		this.temperamentos = [];

		this.api.get('links?tipo=1&sucursal=' + this.sucursal.id).subscribe(
			(data) => {
				this.intereses = data
			}
		);

		this.api.get('links?tipo=3&sucursal=' + this.sucursal.id).subscribe(
			(data) => {
				this.temperamentos = data
			}
		);
	}

	limpiar() {
		this.form.encuesta_id = null;
		this.form.archivo = null;
	}

	guardar() {
		
		this.form.archivo = this.sucursal.nombre + '-LINKS-INTERESES.xlsx';
		this.form.encuesta_id = this.interes_id;

		this.api.downloadFile('exportar', this.form).subscribe(
			(data) => {
				this.limpiar();
				this.temperamento();
			},
			async (error) => { 
				this.mensaje('No hay alumnos registrados en la Encuesta de Intereses') 
			}
		);
		
	}

	temperamento() {
		this.form.archivo = this.sucursal.nombre + '-LINKS-TEMPERAMENTOS.xlsx';
		this.form.encuesta_id = this.temperamento_id;

		this.api.downloadFile('exportar', this.form).subscribe(
			(data) => { this.limpiar() },
			(error) => { this.mensaje('No hay alumnos registrados en la Encuesta de Temperamentos') }
		);
	}

	mensaje(msj) {
		Swal.fire({
			title: msj,
			icon: 'warning',
			timer: 2000
		});
	}

	return() {
		this.router.navigateByUrl('/dashboard');
	}

}

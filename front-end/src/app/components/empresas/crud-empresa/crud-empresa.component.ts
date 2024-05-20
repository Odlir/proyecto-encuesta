import { MatStepper } from '@angular/material/stepper';
import { HttpParams } from '@angular/common/http';
import { ActivatedRoute, Router } from '@angular/router';
import { TokenService } from '../../../Services/token/token.service';
import { ApiBackRequestService } from './../../../Services/api-back-request.service';
import { Component, OnInit, ViewChild } from '@angular/core';
import { FormGroup } from '@angular/forms';

@Component({
	selector: 'app-crud-empresa',
	templateUrl: './crud-empresa.component.html',
	styleUrls: ['./crud-empresa.component.css']
})
export class CrudEmpresaComponent implements OnInit {

	firstFormGroup: FormGroup;
	secondFormGroup: FormGroup;

	@ViewChild('stepper') stepper: MatStepper;

	public form = {
		razon_social: null,
		contacto: null,
		email: null,
		telefono: null,
		sede: null,
		codigo: null,
		nivel: 'Secundaria',
		gestion: null,
		gestion_departamento: null,
		ubigeo: null,
		distrito: {
			nombre: null,
			provincia_id: null,
			provincia: {
				nombre: null,
				departamento_id: null,
				departamento: {
					nombre: null,
				},
			},
		},
		insert_user_id: this.user.me(),
		edit_user_id: null,
		insert: { name: null },
		edit: { name: '' },
		created_at: null,
		updated_at: null,
		sucursales: []
	};

	public titulo = "CREAR EMPRESA";

	public id: HttpParams;
	public departamentos = [];
	public provincias = [];
	public distritos = [];

	public generarSucursal = false;

	constructor(
		private api: ApiBackRequestService,
		private user: TokenService,
		private activatedRoute: ActivatedRoute,
		private router: Router
	) {

	}

	ngOnInit(): void {
		this.fetch();
		this.activatedRoute.queryParams.subscribe(async params => {
			this.id = params.id;
			let tab = params.tab;
			if (this.id != null) {
				if (tab != null) {
					this.cargarEditar(1);
				}
				else {
					this.cargarEditar();
				}
			}
		});
	}

	fetch() {
		this.api.get('departamentos').subscribe(
			(data) => { this.departamentos = data; }
		);
	}

	getProvincias() {
		this.provincias = [];
		this.distritos = [];
		this.form.distrito.provincia_id = null;
		this.form.ubigeo = null;
		this.api.get('provincias', this.form.distrito.provincia.departamento_id).subscribe(
			(data) => { this.provincias = data; }
		);
	}

	getDistritos() {
		this.distritos = [];
		this.form.ubigeo = null;
		this.api.get('distritos', this.form.distrito.provincia_id).subscribe(
			(data) => { this.distritos = data; }
		);
	}

	getUbigeo() {
		if (this.form.distrito) {
			this.api.get('provincias', this.form.distrito.provincia.departamento_id).subscribe(
				(data) => { this.provincias = data; }
			);

			this.api.get('distritos', this.form.distrito.provincia_id).subscribe(
				(data) => { this.distritos = data; }
			);
		} else {
			this.form.distrito = {
				nombre: null,
				provincia_id: null,
				provincia: {
					nombre: null,
					departamento_id: null,
					departamento: {
						nombre: null,
					},
				},
			};
		}
	}

	cargarEditar(next?) {
		this.titulo = "EDITAR EMPRESA";
		this.api.get('empresas', this.id).subscribe(
			(data) => {
				this.form = data;
				this.stepper.selected.completed = true;
				this.getUbigeo();
				if (next) {
					this.stepper.next();
				}
			}
		);
	}

	guardar() {
		if (this.id) {
			this.editar();
		}
		else {
			this.registrar();
		}
	}

	return() {
		this.router.navigateByUrl('/empresas');
	}

	registrar() {
		this.api.post('empresas', this.form).subscribe(
			(data) => {
				this.handleRegistrar(data);
			}
		);
	}


	handleRegistrar(data) {
		if (this.generarSucursal == false) {
			const form = {
				nombre: data.razon_social,
				empresa_id: data.id,
				insert_user_id: this.user.me(),
			}

			this.api.post('empresa_sucursal', form).subscribe(
				(data) => {
					this.return();
				}
			);
		}
		else {
			this.id = data.id;
			this.form = data;
			this.stepper.selected.completed = true;
			this.stepper.next();
			this.titulo = "EDITAR EMPRESA";
		}
	}

	handleEditar(data) {
		this.form = data;
	}

	editar() {
		this.form.edit_user_id = this.user.me();
		this.api.put('empresas', this.id, this.form).subscribe(
			(data) => {
				this.handleEditar(data);
			}
		);
	}

}


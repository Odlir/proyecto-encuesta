import { HttpParams } from '@angular/common/http';

import { Router, ActivatedRoute } from '@angular/router';
import { ApiBackRequestService } from './../../../Services/api-back-request.service';
import { Component, OnInit } from '@angular/core';
import Swal from 'sweetalert2';
import * as moment from 'moment';

@Component({
  selector: 'app-detalle-encuesta',
  templateUrl: './detalle-encuesta.component.html',
  styleUrls: ['./detalle-encuesta.component.css']
})
export class DetalleEncuestaComponent implements OnInit {

  form = {
    id: null,
    fecha_inicio: null,
    fecha_fin: null,
    general: { seccion: null },
    empresa_sucursal_id: null,
    tipo_encuesta_id: null,
    insert_user_id: null,
    edit_user_id: null,
    insert: { name: null },
    edit: { name: '' },
    created_at: null,
    updated_at: null,
    empresa: { nombre: null },
    tipo: { nombre: null },
	  encuesta_persona_count: null,
	  encuesta_puntaje_count: null,
  }

  public id: HttpParams;

  public tabSelected = 0;

  constructor(private api: ApiBackRequestService, private router: Router, private activatedRoute: ActivatedRoute) { }

  ngOnInit(): void {
    this.activatedRoute.queryParams.subscribe(async params => {
      this.id = params.id;
      this.tabSelected = params.tab;
      if (this.id != null) {
        this.cargar(this.id);
      }
    });
  }

  cargar(id) {
    this.api.get('encuestas', id).subscribe(

      (data) => {	console.log(data);
        this.form = data
        this.form.fecha_inicio = moment(this.form.fecha_inicio).format('DD/MM/YYYY')
        this.form.fecha_fin = moment(this.form.fecha_fin).format('DD/MM/YYYY')
      }
    );
  }

  eliminar(id) {
    Swal.fire({
      title: 'Desea eliminar el registro?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Confirmar'
    }).then((result) => {
      if (result.value) {
        this.api.delete('encuestas', id).subscribe(
          (data) => {
            this.router.navigateByUrl('/encuestas')
          }
        );
      }
    })
  }

	calculateProgress(total: number, responded: number): number {
		if (total === 0) {
			return 0; // Evita la división por cero
		}

		return (responded / total) * 100;
	}

	getCircleClass(total: number, responded: number): string {
		return this.calculateProgress(total, responded) >= 100 ? 'complete' : '';
	}

	getColorForProgress(progress: number): string {
		if (progress < 50) {
			return 'red';
		} else if (progress < 80) {
			return 'orange';
		} else {
			return 'green';
		}
	}
}

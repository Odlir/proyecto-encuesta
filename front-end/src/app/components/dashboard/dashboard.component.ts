import { Component, OnInit, ViewChild } from '@angular/core';
import { ChartOptions, ChartType, ChartDataSets } from 'chart.js';
import { BaseChartDirective, Label } from 'ng2-charts';
import { forkJoin, of } from 'rxjs';
import { catchError, finalize } from 'rxjs/operators';
//import { ApiService } from 'src/app/Services/api/api.service';
import { ApiBackRequestService } from './../../Services/api-back-request.service';
import * as pluginDataLabels from 'chartjs-plugin-datalabels';
import {Router} from "@angular/router";
import {NgProgress, NgProgressRef} from "ngx-progressbar";

@Component({
	selector: 'app-dashboard',
	templateUrl: './dashboard.component.html',
	styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
	/* PIE CHART */
	/*
		public pieChartOptions: ChartOptions = {
			responsive: true,
			title: {
				display: true,
				text: 'Areas de Intereses mas seleccionadas',
				fontSize: 16
			}
		};
		public pieChartLabels: Label[] = ['Administracion', 'Comunicacion', 'Financiero', 'Informatica', 'Salud'];
		public pieChartData: number[] = [30, 25, 20, 15, 10];
		public pieChartType: ChartType = 'doughnut';
		public pieChartLegend = true;
		public pieChartPlugins = [];

		/!* END PIE CHART  *!/

		public barChartOptions: ChartOptions = {
			responsive: true,
			scales: {
				xAxes: [{}],
				yAxes: [{}]
			},
			title: {
				display: true,
				text: 'Comparacion de encuestas realizadas durante este año y el año anterior',
				fontSize: 16
			},
			plugins: {
				datalabels: {
					anchor: 'end',
					align: 'end',
				}
			}
		};
		public barChartLabels: Label[] = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
		public barChartType: ChartType = 'bar';
		public barChartLegend = true;
		public barChartPlugins = [];

		public barChartData: ChartDataSets[] = [
			{ data: [65, 59, 80, 81, 56, 55, 40, 49, 70, 71, 66, 68], label: 'Año Anterior' },
			{ data: [75, 69, 90, 91, 66, 65, 50, 59, 80, 81, 76, 78], label: 'Año Actual' }
		];

		/!**!/

		public polarAreaChartOptions: ChartOptions = {
			responsive: true,
			title: {
				display: true,
				text: 'Talentos mas seleccionados',
				fontSize: 16
			}
		};
		public polarAreaChartLabels: Label[] = ['Critico', 'Analitico', 'Artistico', 'Original', 'Visionario'];
		public polarAreaChartData: ChartDataSets = {
			data: [11, 16, 7, 3, 14]
		};
		public polarAreaChartType: ChartType = 'pie';

		constructor() {
		}

		ngOnInit(): void {

		}
		*/


	@ViewChild(BaseChartDirective) chart: BaseChartDirective;

	public barChartType: ChartType = 'bar';
	public barChartLegend = true;
	public pieChartType: ChartType = 'pie';
	public pieChartLegend = true;
	public barChartPlugins = [pluginDataLabels];
	public barChartLabels: Label[] = [
		'Ene',
		'Feb',
		'Mar',
		'Abr',
		'May',
		'Jun',
		'Jul',
		'Ago',
		'Sep',
		'Oct',
		'Nov',
		'Dic',
	];

	public totalSurveys = 0;
	public carrers = '';
	public completedSurveys = 0;
	public newSurveys = 0;

	/* PIE CHART */

	public pieChartCarrersOptions: ChartOptions = {
		responsive: true,
		title: {
			display: true,
			text: 'Areas mas seleccionadas',
			fontSize: 16,
		}
	};

	public pieChartSchoolsOptions: ChartOptions = {
		responsive: true,
		title: {
			display: true,
			text: 'Alumnos encuestados el último mes agrupados por Colegio',
			fontSize: 16,
		}
	};

	public pieChartCarrersLabels: Label[] = [];
	public pieChartCarrersData: number[] = [];
	public pieChartSchoolsLabels: Label[] = [];
	public pieChartSchoolsData: number[] = [];

	/* END PIE CHART  */

	public barChartCreatedSurveysOptions: ChartOptions = {
		responsive: true,
		scales: {
			xAxes: [{}],
			yAxes: [{}],
		},
		title: {
			display: true,
			text: 'Comparacion de encuestas realizadas durante este año y el año anterior',
			fontSize: 16,
		},
		plugins: {
			datalabels: {
				anchor: 'end',
				align: 'end',
			},
		},
	};

	public barChartCompletedSurveysOptions: ChartOptions = {
		responsive: true,
		scales: {
			xAxes: [{}],
			yAxes: [{}],
		},
		title: {
			display: true,
			text: 'Comparación de encuestas respondidas y no respondidas durante este año y el año anterior',
			fontSize: 16,
		},
		plugins: {
			datalabels: {
				anchor: 'end',
				align: 'end',
			},
		},
	};
	public barChartCreatedSurveysData: ChartDataSets[] = [];
	public barChartCompletedSurveysData: ChartDataSets[] = [];
	public progressRef: NgProgressRef;
	constructor(private api: ApiBackRequestService, private router: Router, public ngProgress: NgProgress) {
		this.progressRef = ngProgress.ref();
	}


	ngOnInit(): void {
		this.getDashboard();
	}

	getDashboard() {
		forkJoin([
			this.api.get('dashboardCards').pipe(
				catchError(error => {
					console.error('Error en dashboardCards', error);
					return of(null);
				})
			),
			this.api.get('dashboardPieCarrers').pipe(
				catchError(error => {
					console.error('Error en dashboardPieCarrers', error);
					return of([]);
				})
			),
			this.api.get('dashboardPieSchools').pipe(
				catchError(error => {
					console.error('Error en dashboardPieSchools', error);
					return of([]);
				})
			),
			this.api.get('dashboardBarCreatedSurveys').pipe(
				catchError(error => {
					console.error('Error en dashboardBarCreatedSurveys', error);
					return of([]);
				})
			),
			this.api.get('dashboardBarCompletedSurveys').pipe(
				catchError(error => {
					console.error('Error en dashboardBarCompletedSurveys', error);
					return of([]);
				})
			)
		]).pipe(
			finalize(() => {
				this.chart.ngOnChanges({});
				console.log('Todos los servicios han finalizado');
			})
		).subscribe(([dashboardCards, dashboardPieCarrers, dashboardPieSchools, dashboardBarCreatedSurveys, dashboardBarCompletedSurveys]: any) => {
			// Procesar los datos recibidos
			if (dashboardCards) {
				this.totalSurveys = dashboardCards.totalSurveys;
				this.carrers = dashboardCards.carrers;
				this.completedSurveys = dashboardCards.completedSurveys;
				this.newSurveys = dashboardCards.newSurveys;
			}

			dashboardPieCarrers.forEach((carrer) => {
				this.pieChartCarrersLabels.push(carrer.nombre);
				this.pieChartCarrersData.push(carrer.puntaje);
			});

			if(!dashboardPieCarrers.length) {
				this.pieChartCarrersLabels.push('Sin datos');
				this.pieChartCarrersData.push(100);
			}

			dashboardPieSchools.forEach((school) => {
				this.pieChartSchoolsLabels.push(school.schoolName);
				this.pieChartSchoolsData.push(school.quantity);
			});

			if(!dashboardPieSchools.length || dashboardPieSchools.every(school => school.quantity === 0)) {
				this.pieChartSchoolsLabels.push('Sin datos');
				this.pieChartSchoolsData.push(100);
			}

			let createdSurveys = [
				{
					data: [],
					label: 'Año Anterior',
				},
				{
					data: [],
					label: 'Año Actual',
				},
			];

			dashboardBarCreatedSurveys.forEach((surveys) => {
				createdSurveys[0].data.push(surveys.lastYear);
				createdSurveys[1].data.push(surveys.currentYear);
			});

			this.barChartCreatedSurveysData = createdSurveys;

			this.barChartCompletedSurveysData = dashboardBarCompletedSurveys;
		});
	}

}

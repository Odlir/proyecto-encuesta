import { Component, OnInit } from '@angular/core';
import { ChartOptions, ChartType, ChartDataSets } from 'chart.js';
import { Label, Color } from 'ng2-charts';

@Component({
	selector: 'app-dashboard',
	templateUrl: './dashboard.component.html',
	styleUrls: ['./dashboard.component.css'],

})
export class DashboardComponent implements OnInit {

	/* PIE CHART */

	public pieChartOptions: ChartOptions = {
		responsive: true,
	};
	public pieChartLabels: Label[] = ['Ingeniería', 'Medicina', 'Arte', 'Negocios', 'Otros'];
	public pieChartData: number[] = [30, 25, 20, 15, 10];
	public pieChartType: ChartType = 'pie';
	public pieChartLegend = true;
	public pieChartPlugins = [];

	/* END PIE CHART  */

	public barChartOptions: ChartOptions = {
		responsive: true,
		scales: {
			xAxes: [{}],
			yAxes: [{}]
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

	/**/

	public polarAreaChartOptions: ChartOptions = {
		responsive: true,
	};
	public polarAreaChartLabels: Label[] = ['Matematica', 'Ciencias', 'Historia', 'Ingles', 'Arte'];
	public polarAreaChartData: ChartDataSets = {
		data: [11, 16, 7, 3, 14]
	};
	public polarAreaChartType: ChartType = 'polarArea';

	constructor() {
	}

	ngOnInit(): void {

	}

}

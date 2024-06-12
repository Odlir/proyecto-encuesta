import { Injectable } from '@angular/core';

@Injectable({
	providedIn: 'root'
})
export class ConstantsService {
	readonly apiUrl: string = 'http://127.0.0.1:8000/api/';

	//VULTR
	// readonly apiUrl: string = 'http://www.gafencuestas.com/public/api/';

	constructor() { }
}

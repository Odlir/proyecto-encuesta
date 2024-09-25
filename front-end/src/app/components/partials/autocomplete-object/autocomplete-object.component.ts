import {
	Component,
	EventEmitter,
	Input,
	OnChanges,
	OnInit,
	Output,
	SimpleChanges,
} from '@angular/core';
import { FormControl } from '@angular/forms';
import { BehaviorSubject, Observable } from 'rxjs';
import { map, startWith } from 'rxjs/operators';

export interface Option {
	id: number;
	label: string;
}

export function filterOptionsByLabel(options: any[], label: string): any[] {
	const value = label.trim().toLowerCase();
	return options.filter((option) => option.label.toLowerCase().includes(value));
}

@Component({
	selector: 'autocomplete-object',
	templateUrl: './autocomplete-object.component.html',
	styleUrls: ['./autocomplete-object.component.css'],
})
export class AutocompleteObjectComponent implements OnInit, OnChanges {
	@Input() options: Option[] = [];
	@Output() optionSelected = new EventEmitter<Option>();

	readonly inputCtrl = new FormControl();
	filteredOptions!: Observable<Option[]>;

	private _options = new BehaviorSubject<any[]>([]);

	constructor() {}

	ngOnInit() {
		this.filteredOptions = this.inputCtrl.valueChanges.pipe(
			startWith(''),
			map((value: string | Option) => {
				console.log('value', value);
				if (typeof value === 'string') {
					return filterOptionsByLabel(this.options, value);
				}
				return this.options;
			})
		);

		this._options.next(this.options);
	}

	ngOnChanges(changes: SimpleChanges) {
		if (changes.options) {
			this._options.next(this.options);
		}
	}

	displayLabelFn(option: Option | null) {
		return option ? option.label : '';
	}

	trackByIdFn(option: Option) {
		return option.id;
	}
}

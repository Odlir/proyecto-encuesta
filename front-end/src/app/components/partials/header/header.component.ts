import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {
  @Input() nombre: string;
  @Input() icono: string;
  constructor() { }

  ngOnInit(): void {
  }

}

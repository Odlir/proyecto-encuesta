import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { AnualReportComponent } from './anual-report.component';

describe('AnualReportComponent', () => {
  let component: AnualReportComponent;
  let fixture: ComponentFixture<AnualReportComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AnualReportComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AnualReportComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { IntercambioNacPage } from './intercambio-nac.page';

describe('IntercambioNacPage', () => {
  let component: IntercambioNacPage;
  let fixture: ComponentFixture<IntercambioNacPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ IntercambioNacPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(IntercambioNacPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

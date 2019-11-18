import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExperienciasPage } from './experiencias.page';

describe('ExperienciasPage', () => {
  let component: ExperienciasPage;
  let fixture: ComponentFixture<ExperienciasPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExperienciasPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExperienciasPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

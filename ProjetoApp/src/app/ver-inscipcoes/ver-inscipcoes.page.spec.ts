import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VerInscipcoesPage } from './ver-inscipcoes.page';

describe('VerInscipcoesPage', () => {
  let component: VerInscipcoesPage;
  let fixture: ComponentFixture<VerInscipcoesPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VerInscipcoesPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VerInscipcoesPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

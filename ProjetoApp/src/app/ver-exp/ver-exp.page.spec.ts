import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VerExpPage } from './ver-exp.page';

describe('VerExpPage', () => {
  let component: VerExpPage;
  let fixture: ComponentFixture<VerExpPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VerExpPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VerExpPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

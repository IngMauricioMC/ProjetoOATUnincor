import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NovoConvPage } from './novo-conv.page';

describe('NovoConvPage', () => {
  let component: NovoConvPage;
  let fixture: ComponentFixture<NovoConvPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NovoConvPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NovoConvPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

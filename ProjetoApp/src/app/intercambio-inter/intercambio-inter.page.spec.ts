import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { IntercambioInterPage } from './intercambio-inter.page';

describe('IntercambioInterPage', () => {
  let component: IntercambioInterPage;
  let fixture: ComponentFixture<IntercambioInterPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ IntercambioInterPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(IntercambioInterPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

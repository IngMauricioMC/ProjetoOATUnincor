import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NovaExpPage } from './nova-exp.page';

describe('NovaExpPage', () => {
  let component: NovaExpPage;
  let fixture: ComponentFixture<NovaExpPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NovaExpPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NovaExpPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

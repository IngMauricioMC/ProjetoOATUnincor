import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VerConvPage } from './ver-conv.page';

describe('VerConvPage', () => {
  let component: VerConvPage;
  let fixture: ComponentFixture<VerConvPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VerConvPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VerConvPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

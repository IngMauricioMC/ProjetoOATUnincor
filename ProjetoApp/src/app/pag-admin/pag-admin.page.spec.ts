import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PagAdminPage } from './pag-admin.page';

describe('PagAdminPage', () => {
  let component: PagAdminPage;
  let fixture: ComponentFixture<PagAdminPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PagAdminPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PagAdminPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

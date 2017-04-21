/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { BiomedicalComponent } from './biomedical.component';

describe('BiomedicalComponent', () => {
  let component: BiomedicalComponent;
  let fixture: ComponentFixture<BiomedicalComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BiomedicalComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BiomedicalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

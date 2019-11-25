import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})

export class HomePage {

 public imag: any;

  constructor() {
   this.imag = [1,3,6];
  }

}

import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-experiencias',
  templateUrl: './experiencias.page.html',
  styleUrls: ['./experiencias.page.scss'],
})
export class ExperienciasPage implements OnInit {

  public exp: any;

  constructor(private apiService: ApiService) {
   this.apiService.getExper().then(data => {
    this.exp = data;
    console.log(this.exp);
   });
  }

  ngOnInit() {
  }

}

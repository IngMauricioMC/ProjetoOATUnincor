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
   this.apiService.getExper().subscribe((data:any)=>{
    this.exp = data.intercambios;
    console.log(this.exp);
   });
  }

  ngOnInit() {
  }

}

import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-intercambio-inter',
  templateUrl: './intercambio-inter.page.html',
  styleUrls: ['./intercambio-inter.page.scss'],
})
export class IntercambioInterPage implements OnInit {

  public conv: any;

  constructor(private apiService: ApiService) {
   this.apiService.getConvenio().subscribe((data:any)=>{
    this.conv = data.convenios;
    console.log(this.conv);
   });
  }

  ngOnInit() {
  }

}

import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-ver-exp',
  templateUrl: './ver-exp.page.html',
  styleUrls: ['./ver-exp.page.scss'],
})
export class VerExpPage implements OnInit {

 public exp: any;

  constructor(private apiService: ApiService) {
   this.apiService.getExper().subscribe((data:any)=>{
    console.log(data);
    this.exp = data.exp;
   });
  }

  ngOnInit() {
  }

}

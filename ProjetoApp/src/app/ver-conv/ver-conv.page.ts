import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-ver-conv',
  templateUrl: './ver-conv.page.html',
  styleUrls: ['./ver-conv.page.scss'],
})
export class VerConvPage implements OnInit {

  public conv: any;

  constructor(private apiService: ApiService) {
   this.apiService.getConvenio().subscribe((data:any)=>{
    console.log(data);
    this.conv = data.convenios;
   });
  }

  ngOnInit() {
  }

  async deleteConv(post) {

   await this.apiService.deleteConv(post).subscribe((data)=>{
     console.log(data);
     let index = this.posts.indexOf(post);
     this.posts.splice(index, 1);
   }, error => {
     console.log(error);
   });

   const alert = await this.alertController.create({
     header: 'Alerta!',
     subHeader: 'Deletado!',
     message: 'Convenio excluído com sucesso!',
     buttons: ['OK']
   });

   await alert.present();

 }

}

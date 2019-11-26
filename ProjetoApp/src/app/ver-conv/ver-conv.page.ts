import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { AlertController } from '@ionic/angular';
import { Router, NavigationExtras } from '@angular/router';

@Component({
  selector: 'app-ver-conv',
  templateUrl: './ver-conv.page.html',
  styleUrls: ['./ver-conv.page.scss'],
})
export class VerConvPage implements OnInit {

  public conv: any;

  constructor(private apiService: ApiService, private alertController: AlertController, private router: Router) {
   this.apiService.getConvenio().subscribe((data:any)=>{
    console.log(data);
    this.conv = data.convenios;
   });
  }

  ngOnInit() {
  }

  editConvenio(post) {
    let navigationExtras: NavigationExtras = {
      state: {
        formDataParams: post
      }
    };
    this.router.navigate(['/novo-conv'], navigationExtras);
  }

  async deleteConv(convenio) {
   console.log(convenio)
   await this.apiService.deleteConv(convenio).subscribe((data)=>{
     console.log(data);
     let index = this.conv.indexOf(convenio);
     this.conv.splice(index, 1);
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

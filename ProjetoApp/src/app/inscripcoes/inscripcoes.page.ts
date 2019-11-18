import { Component, OnInit } from '@angular/core';
import { AlertController } from '@ionic/angular';
import { ApiService } from '../api.service';
import { ToastController } from '@ionic/angular';


@Component({
  selector: 'app-inscripcoes',
  templateUrl: './inscripcoes.page.html',
  styleUrls: ['./inscripcoes.page.scss'],
})
export class InscripcoesPage implements OnInit {

  dadosPessoa = {
      email: '',
      password: ''
  }

  constructor(private apiService : ApiService, private alertController: AlertController, private toastController: ToastController) { }

  ngOnInit() {
  }

  async presentToast() {
    const toast = await this.toastController.create({
      message: 'Your settings have been saved.',
      duration: 2000
    });
    toast.present();
  }

  async formSubmit(){

   await this.apiService.sendPostRequest(this.dadosPessoa).subscribe((data)=>{
     console.log(data);
   }, error => {
     console.log(error);
   });

  	const alert = await this.alertController.create({
      header: 'Alerta!',
      subHeader: 'Formulario API',
      message: 'Cadastro realizado com sucesso.',
      buttons: ['OK']
    });

    await alert.present();
  }

}

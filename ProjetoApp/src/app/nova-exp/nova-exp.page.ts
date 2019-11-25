import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { ActivatedRoute, Router } from '@angular/router';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-nova-exp',
  templateUrl: './nova-exp.page.html',
  styleUrls: ['./nova-exp.page.scss'],
})
export class NovaExpPage implements OnInit {

 dadosExp = {
  author: "",
  exper: "",
  ano: "",
  pais: "",
  foto: "",
 }

  constructor(private apiService: ApiService,  private route: ActivatedRoute, private router: Router, private alertController: AlertController) {
   this.route.queryParams.subscribe(params => {
    if (this.router.getCurrentNavigation().extras.state) {
      this.dadosExp.author = this.router.getCurrentNavigation().extras.state.formDataParams.author;
      this.dadosExp.exper = this.router.getCurrentNavigation().extras.state.formDataParams.exper;
      this.dadosExp.ano = this.router.getCurrentNavigation().extras.state.formDataParams.ano;
      this.dadosExp.pais = this.router.getCurrentNavigation().extras.state.formDataParams.pais;
      this.dadosExp.foto = this.router.getCurrentNavigation().extras.state.formDataParams.foto;
    }
  });

  }

  ngOnInit() {
  }


  async formSubmit(){
   await this.apiService.postNovaExp(this.dadosExp).subscribe((data)=>{
     console.log(data);
   }, error => {
     console.log(error);
   });

  	const alert = await this.alertController.create({
      header: 'Alerta!',
      subHeader: 'Formulario API',
      message: 'Experiencia cadastrada com sucesso.',
      buttons: ['OK']
    });

    await alert.present();

    this.router.navigate(["/pag-admin"]);
  }

}

import { Component, OnInit } from '@angular/core';
import { AlertController } from '@ionic/angular';
import { ApiService } from '../api.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Validators, FormBuilder, FormGroup, FormControl } from '@angular/forms';

@Component({
  selector: 'app-novo-conv',
  templateUrl: './novo-conv.page.html',
  styleUrls: ['./novo-conv.page.scss'],
})
export class NovoConvPage implements OnInit {

  public conv: any;
  dadosConv = {
    id: 0,
    universidade: "",
    foto: "",
    link: "",
    pais: ""
  }

  constructor(private apiService : ApiService, private alertController: AlertController, private route: ActivatedRoute, private router: Router) {
   this.route.queryParams.subscribe(params => {
    if (this.router.getCurrentNavigation().extras.state) {
      this.dadosConv.id = this.router.getCurrentNavigation().extras.state.formDataParams.id;
      this.dadosConv.universidade = this.router.getCurrentNavigation().extras.state.formDataParams.universidade;
      this.dadosConv.foto = this.router.getCurrentNavigation().extras.state.formDataParams.foto;
      this.dadosConv.link = this.router.getCurrentNavigation().extras.state.formDataParams.link;
      this.dadosConv.pais = this.router.getCurrentNavigation().extras.state.formDataParams.pais;
    }
   });
  }

  ngOnInit() {
  }

  async formSubmit(){
   console.log(this.dadosConv);
   console.log(this.dadosConv.id);
   if(this.dadosConv.id > 0){
    // this.dadosConv.id = parseInt(this.dadosConv.id);
    // console.log(this.dadosConv);
    await this.apiService.editConvenio(this.dadosConv).subscribe((data)=>{
        console.log(data);
      }, error => {
        console.log(error);
      });
   }else{
    await this.apiService.postCadastroConv(this.dadosConv).subscribe((data)=>{
      console.log(data);
    }, error => {
      console.log(error);
    });
   }

  	const alert = await this.alertController.create({
      header: 'Alerta!',
      subHeader: 'Formulario API',
      message: 'Convenio cadastrado com sucesso.',
      buttons: ['OK']
    });

    await alert.present();

    this.router.navigate(["/pag-admin"]);

  }

}

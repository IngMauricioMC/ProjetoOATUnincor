import { Component, OnInit } from '@angular/core';
import { AlertController } from '@ionic/angular';
import { ApiService } from '../api.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Validators, FormBuilder, FormGroup, FormControl } from '@angular/forms';

@Component({
  selector: 'app-inscripcoes',
  templateUrl: './inscripcoes.page.html',
  styleUrls: ['./inscripcoes.page.scss'],
})
export class InscripcoesPage implements OnInit {

  public curso: any;
  public periodo: any;

  dadosPessoa = {
   nome: "",
   sobrenome: "",
   email: "",
   curso: 0,
   periodo: 0,
  }

  constructor(private apiService : ApiService, private alertController: AlertController, private route: ActivatedRoute, private router: Router) {

   this.apiService.getCurso().subscribe((data:any)=>{
    console.log(data);
    this.curso = data.curso;
   });

   this.apiService.getPeriodo().subscribe((data:any)=>{
    console.log(data);
    this.periodo = data.periodo;
   });

   this.route.queryParams.subscribe(params => {
     console.log(this.router.getCurrentNavigation().extras.state);
     if (this.router.getCurrentNavigation().extras.state) {
       this.dadosPessoa.nome = this.router.getCurrentNavigation().extras.state.dadosPessoaParams.nome;
       this.dadosPessoa.sobrenome = this.router.getCurrentNavigation().extras.state.dadosPessoaParams.sobrenome;
       this.dadosPessoa.email = this.router.getCurrentNavigation().extras.state.formDataParams.email;
       this.dadosPessoa.curso = this.router.getCurrentNavigation().extras.state.formDataParams.curso;
       this.dadosPessoa.periodo = this.router.getCurrentNavigation().extras.state.formDataParams.periodo;
     }
   });
  }

  ngOnInit() {
  }

  async formSubmit(){
   console.log(this.dadosPessoa.nome+"-"+this.dadosPessoa.sobrenome+"-"+this.dadosPessoa.curso+"-"+this.dadosPessoa.periodo);
   console.log(this.dadosPessoa);
   await this.apiService.postCadastroAluno(this.dadosPessoa).subscribe((data)=>{
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

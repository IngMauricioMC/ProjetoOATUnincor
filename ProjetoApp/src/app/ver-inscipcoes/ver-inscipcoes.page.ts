import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { AlertController } from '@ionic/angular';
import { Router, NavigationExtras } from '@angular/router';

@Component({
  selector: 'app-ver-inscipcoes',
  templateUrl: './ver-inscipcoes.page.html',
  styleUrls: ['./ver-inscipcoes.page.scss'],
})
export class VerInscipcoesPage implements OnInit {

  public ins: any;

  constructor(private apiService: ApiService, private alertController: AlertController, private router: Router) {
   this.apiService.getInscripcao().subscribe((data:any)=>{
    console.log(data);
    this.ins = data.alunos;
   });
  }

  ngOnInit() {
  }

  async deleteInscripcao(inscrip) {
   console.log(inscrip.id)
   await this.apiService.deleteInsc(inscrip.id).subscribe((data)=>{
     console.log(data);
     let index = this.ins.indexOf(inscrip);
     this.ins.splice(index, 1);
   }, error => {
     console.log(error);
   });

   const alert = await this.alertController.create({
     header: 'Alerta!',
     subHeader: 'Deletado!',
     message: 'Inscripcao excluída com sucesso!',
     buttons: ['OK']
   });

   await alert.present();

   this.router.navigate(["/pag-admin"]);

 }

}

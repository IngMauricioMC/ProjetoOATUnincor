import { Component, OnInit } from '@angular/core';
import { AlertController } from '@ionic/angular';
import { ApiService } from '../api.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

  public loginDado: any;
  username = "";
  password = "";

  constructor(private apiService: ApiService, private alertController: AlertController, private router: Router) { }

  ngOnInit() {
  }

  validar(){
   this.apiService.login(this.username).subscribe((data:any)=>{
    console.log(data);
    this.loginDado = data.user;
    const pasSenha = this.loginDado["0"].password;

    if(pasSenha != ""){
     console.log("if - "+pasSenha);
     console.log("if password - "+this.password);
     if(this.password == pasSenha){
      this.router.navigate(["/pag-admin"]);
     }
    }
   });
  }

}

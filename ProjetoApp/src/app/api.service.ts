import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private httpClient: HttpClient) { }

  getCurso(){
   return this.httpClient.get('http://localhost:1996/API/experiencAPI.php?acao=listarCurso');
  }
  getPeriodo(){
   return this.httpClient.get('http://localhost:1996/API/experiencAPI.php?acao=listarPeriodo');
  }
  getExper(){
   return this.httpClient.get('http://localhost:1996/API/experiencAPI.php?acao=exper');
  }
  login(username){
   console.log(username);
   return this.httpClient.get('http://localhost:1996/API/experiencAPI.php?login='+username);
  }

  postCadastroAluno(postData){
   console.log(postData.nome+"-"+postData.curso);
   const httpOptions = {
      headers: new HttpHeaders({
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        })
    };
   return this.httpClient.post('http://localhost:1996/API/experiencAPI.php?acao=inscripcaoInterc', postData, httpOptions)
  }
  postNovaExp(postData){
   console.log(postData.nome+"-"+postData.curso);
   const httpOptions = {
      headers: new HttpHeaders({
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        })
    };
   return this.httpClient.post('http://localhost:1996/API/experiencAPI.php?acao=novaExp', postData, httpOptions)
  }
}

import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private httpClient: HttpClient) { }

  getPosts(page){
    return this.httpClient.get(`https://swapi.co/api/people/?format=json`);
  }

  sendPostRequest(postData){

    const httpOpitions = {
      headers: new HttpHeaders({
        'Acept': 'application/json',
        'Content-Tyoe': 'application/json'
      }),
    }

    return this.httpClient.post("https://reqres.in/api/register", postData, httpOpitions);
  }

}

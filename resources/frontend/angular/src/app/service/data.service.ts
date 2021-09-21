import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import { Employee } from '../modules/employee/employee';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  constructor(private httpClient: HttpClient) {
  }

  getUsers() {
    return this.httpClient.get('http://127.0.0.1:8000/api/users');
  }

  storeUser(data: Employee) {
    return this.httpClient.post('http://127.0.0.1:8000/api/users', data);
  }
}

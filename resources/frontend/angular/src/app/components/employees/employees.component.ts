import { Component, OnInit } from '@angular/core';
import {DataService} from "../../service/data.service";
import {Employee} from "../../modules/employee/employee";

@Component({
  selector: 'app-employees',
  templateUrl: './employees.component.html',
  styleUrls: ['./employees.component.css']
})
export class EmployeesComponent implements OnInit {
  employees:any;
  employee = new Employee();

  constructor(private dataService:DataService) { }

  ngOnInit(): void {
    this.getEmployeesData();
  }

  getEmployeesData() {
    console.log('Hello Employees')

    this.dataService.getUsers().subscribe(res => {
      console.log(res)

      this.employees = res;
    });
  }

  insertData() {
    console.log(this.employee)

    this.dataService.storeUser(this.employee).subscribe(res => {
      console.log(res);
      this.getEmployeesData();
    })
  }

}

import { Component, OnInit, ViewChild } from '@angular/core';
import { FormGroup, FormBuilder }   from '@angular/forms';
import { Http, Response}           from '@angular/http';
import { ContactService } from './contact.service';

//import {ReCaptchaComponent} from 'angular2-recaptcha/lib/captcha.component';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css'],
  providers: [ContactService]
})
export class ContactComponent implements OnInit {

  contactForm : FormGroup;

  constructor(private fb: FormBuilder, private http: Http, private _contactService: ContactService) {
    this.createForm();
  }

  createForm(){
    this.contactForm = this.fb.group({
      name: '',
      email: '',
      phone: '',
      message: ''
    });
  }

  response : any;

  onSubmit(value: any){
      this._contactService.sendMail(value)
          .subscribe(
              response => console.log(response),
              error => console.log(error)
          );

      this.contactForm.reset()
  }

  //@ViewChild(ReCaptchaComponent) captcha:ReCaptchaComponent;

  ngOnInit() {
    console.log("I loaded!");
  }

}

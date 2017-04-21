import { Injectable } from '@angular/core';
import { Headers, RequestOptions}  from '@angular/http';
import { Observable}               from 'rxjs/Observable';
import { URLSearchParams } from '@angular/http';
import { Http, Response}           from '@angular/http';

@Injectable()
export class ContactService {

  constructor(private _http: Http) { }

  public _testURL = 'http://jcrconsulting.co/services/PHPMailer/email.php';

  sendMail(value: any): Observable<any> {
    const body = new URLSearchParams();
    body.set('name', value.name);
    body.set('message', value.message);
    body.set('email', value.email);
    body.set('phone', value.phone);

    console.log(value);

    let headers = new Headers();
    headers.append('Content-Type', 'application/x-www-form-urlencoded');
    return this._http.post(this._testURL, body.toString(), {
      headers : headers
    }).map(this.extractData);
  }

  extractData(res: Response) {
    console.log(res);
    let body;

    // check if empty, before call json
    if (res.text()) {
      body = res.json();
    }

    return body || {};
  }
}

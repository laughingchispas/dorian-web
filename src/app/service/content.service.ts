import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import { BehaviorSubject, Subscription } from 'rxjs';


@Injectable()
export class ContentService {
  public dataSubject: BehaviorSubject<any> = new BehaviorSubject<any>({});
  private siteData: any;
  private dataSub: Subscription;
  constructor(http: Http) {
    this.dataSub = http.get('/assets/data/data.json').subscribe(res => this.handleData(res));
  }
  private handleData(data: Response) {
    this.dataSub.unsubscribe();
    this.siteData = data.json();
    this.dataSubject.next(this.siteData);
  }
}

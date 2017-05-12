/*
import { Component } from '@angular/core';

@Component({
  selector: 'footer-component',
  templateUrl: './footer-component.cmp.html',
  styleUrls: ['./footer-component.cmp.css']
})
export class FooterComponent {


  constructor() { }

}
*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'footer-component',
  templateUrl: './footer-component.cmp.html',
  styleUrls: ['./footer-component.cmp.css'],
})
export class FooterComponent implements OnDestroy {
  content: any = {};

  private contentSvcSub: Subscription;

  constructor(contentService: ContentService) {
    this.contentSvcSub = contentService.dataSubject.subscribe(this.handleData.bind(this));
  }

  private handleData(data: any) {
    this.content = data;
  }
  ngOnDestroy() {
    this.contentSvcSub.unsubscribe();
  }
}



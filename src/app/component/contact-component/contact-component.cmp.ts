/*import { Component } from '@angular/core';

@Component({
  selector: 'contact-component',
  templateUrl: './contact-component.cmp.html',
  styleUrls: ['./contact-component.cmp.css']
})
export class ContactComponent {


  constructor() { }

}*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'contact-component',
  templateUrl: './contact-component.cmp.html',
  styleUrls: ['./contact-component.cmp.css'],
})
export class ContactComponent implements OnDestroy {
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


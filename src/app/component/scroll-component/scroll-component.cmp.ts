/*
import { Component } from '@angular/core';

@Component({
  selector: 'scroll-component',
  templateUrl: './scroll-component.cmp.html',
  styleUrls: ['./scroll-component.cmp.css']
})
export class ScrollComponent {


  constructor() { }

}
*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'scroll-component',
  templateUrl: './scroll-component.cmp.html',
  styleUrls: ['./scroll-component.cmp.css'],
})
export class ScrollComponent implements OnDestroy {
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

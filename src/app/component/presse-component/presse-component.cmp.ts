/*
import { Component } from '@angular/core';

@Component({
  selector: 'presse-component',
  templateUrl: './presse-component.cmp.html',
  styleUrls: ['./presse-component.cmp.css']
})
export class PresseComponent {


  constructor() { }

}
*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'presse-component',
  templateUrl: './presse-component.cmp.html',
  styleUrls: ['./presse-component.cmp.css'],
})
export class PresseComponent implements OnDestroy {
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




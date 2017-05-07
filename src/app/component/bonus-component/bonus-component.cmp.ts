/*
import { Component } from '@angular/core';

@Component({
  selector: 'bonus-component',
  templateUrl: './bonus-component.cmp.html',
  styleUrls: ['./bonus-component.cmp.css']
})
export class BonusComponent {


  constructor() { }

}
*/


import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'bonus-component',
  templateUrl: './bonus-component.cmp.html',
  styleUrls: ['./bonus-component.cmp.css'],
})
export class BonusComponent implements OnDestroy {
  content: any = {};

  private contentSvcSub: Subscription;

  constructor(contentService: ContentService) {
    contentService.dataSubject.subscribe(this.handleData.bind(this));
  }

  private handleData(data: any) {
    this.content = data;
  }
  ngOnDestroy() {
    this.contentSvcSub.unsubscribe();
  }
}




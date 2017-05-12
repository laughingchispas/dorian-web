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

export class Bonus {
  content: string;
}

@Component({
  selector: 'bonus-component',
  templateUrl: './bonus-component.cmp.html',
  styleUrls: ['./bonus-component.cmp.css'],
})
export class BonusComponent implements OnDestroy {
  content: any = {};

  highlightedDiv: number;

  toggleHighlight(newValue: number) {
    if (this.highlightedDiv === newValue) {
      this.highlightedDiv = 0;
    }
    else {
      this.highlightedDiv = newValue;
    }
  }


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




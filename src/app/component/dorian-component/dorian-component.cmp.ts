/*
import { Component } from '@angular/core';

@Component({
  selector: 'dorian-component',
  templateUrl: './dorian-component.cmp.html',
  styleUrls: ['./dorian-component.cmp.css']
})
export class DorianComponent {


  constructor() { }

}
*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'dorian-component',
  templateUrl: './dorian-component.cmp.html',
  styleUrls: ['./dorian-component.cmp.css'],
})
export class DorianComponent implements OnDestroy {
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



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



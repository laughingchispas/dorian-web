/*
import { Component } from '@angular/core';

@Component({
  selector: 'home-component',
  templateUrl: './home-component.cmp.html',
  styleUrls: ['./home-component.cmp.css']
})
export class HomeComponent {


  constructor() { }

}
*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'home-component',
  templateUrl: './home-component.cmp.html',
  styleUrls: ['./home-component.cmp.css'],
})
export class HomeComponent implements OnDestroy {
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


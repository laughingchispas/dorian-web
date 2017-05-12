/*
import { Component } from '@angular/core';

@Component({
  selector: 'navigation-component',
  templateUrl: './navigation-component.cmp.html',
  styleUrls: ['./navigation-component.cmp.css']
})
export class NavigationComponent {


  constructor() { }

}
*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'navigation-component',
  templateUrl: './navigation-component.cmp.html',
  styleUrls: ['./navigation-component.cmp.css'],
})
export class NavigationComponent implements OnDestroy {
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

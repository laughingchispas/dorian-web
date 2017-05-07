/*import { Component } from '@angular/core';

@Component({
  selector: 'left-panel',
  templateUrl: './left-panel.cmp.html',
  styleUrls: ['./left-panel.cmp.css']
})
export class LeftPanelComponent {
  constructor() { }

}*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";
import {DomSanitizer} from '@angular/platform-browser';


@Component({
  selector: 'left-panel',
  templateUrl: './left-panel.cmp.html',
  styleUrls: ['./left-panel.cmp.css'],
})
export class LeftPanelComponent implements OnDestroy {
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


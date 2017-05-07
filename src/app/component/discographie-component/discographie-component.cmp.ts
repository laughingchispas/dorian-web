/*import { Component } from '@angular/core';

@Component({
  selector: 'discographie-component',
  templateUrl: './discographie-component.cmp.html',
  styleUrls: ['./discographie-component.cmp.css']
})
export class DiscographieComponent {


  constructor() { }

}*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'discographie-component',
  templateUrl: './discographie-component.cmp.html',
  styleUrls: ['./discographie-component.cmp.css'],
})
export class DiscographieComponent implements OnDestroy {
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



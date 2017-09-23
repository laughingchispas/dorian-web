/*import { Component } from '@angular/core';

@Component({
  selector: 'agenda-component',
  templateUrl: './agenda-component.cmp.html',
  styleUrls: ['./agenda-component.cmp.css']
})
export class AgendaComponent {


  constructor() { }

}*/


import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


@Component({
  selector: 'agenda-calendar',
  templateUrl: './agenda-component.cmp.html',
  styleUrls: ['./agenda-component.cmp.css'],
})
export class AgendaComponent implements OnDestroy {
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




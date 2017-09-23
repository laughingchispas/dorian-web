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

/*export class Hero {
  id: number;
  name: string;
}*/

export class Album {
  title: string;
  image: string;
  label: string;
  group: string;
}



@Component({
  selector: 'discographie-component',
  templateUrl: './discographie-component.cmp.html',
  styleUrls: ['./discographie-component.cmp.css'],
})
export class DiscographieComponent implements OnDestroy {
  content: any = {};

  selectedAlbum: Album;

  album: Album = {
    title: 'philemon',
    image: '../../../assets/ambum.png',
    label: 'suite',
    group: 'philemon'
  };

  onSelected(album: Album): void {
    this.selectedAlbum = album;
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



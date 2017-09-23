/*import { Component } from '@angular/core';

@Component({
  selector: 'projets-component',
  templateUrl: './projets-component.cmp.html',
  styleUrls: ['./projets-component.cmp.css']
})
export class ProjetsComponent {


  constructor() { }

}*/

import { Component, OnDestroy } from '@angular/core';
import { Subscription } from 'rxjs';
import {ContentService} from "../../service";


export class Project {
  title: string;
  image: string;
}

@Component({
  selector: 'projets-component',
  templateUrl: './projets-component.cmp.html',
  styleUrls: ['./projets-component.cmp.css'],
})
export class ProjetsComponent implements OnDestroy {
  content: any = {};

  selectedProject: Project;

  project: Project = {
    title: 'philemon',
    image: '../../../assets/ambum.png'
  };

  onSelected(project: Project): void {
    this.selectedProject = project;
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


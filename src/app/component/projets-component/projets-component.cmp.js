/*import { Component } from '@angular/core';

@Component({
  selector: 'projets-component',
  templateUrl: './projets-component.cmp.html',
  styleUrls: ['./projets-component.cmp.css']
})
export class ProjetsComponent {


  constructor() { }

}*/
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
import { Component } from '@angular/core';
import { ContentService } from "../../service";
var Project = (function () {
    function Project() {
    }
    return Project;
}());
export { Project };
var ProjetsComponent = (function () {
    function ProjetsComponent(contentService) {
        this.content = {};
        this.project = {
            title: 'philemon',
            image: '../../../assets/ambum.png'
        };
        this.contentSvcSub = contentService.dataSubject.subscribe(this.handleData.bind(this));
    }
    ProjetsComponent.prototype.onSelected = function (project) {
        this.selectedProject = project;
    };
    ProjetsComponent.prototype.handleData = function (data) {
        this.content = data;
    };
    ProjetsComponent.prototype.ngOnDestroy = function () {
        this.contentSvcSub.unsubscribe();
    };
    return ProjetsComponent;
}());
ProjetsComponent = __decorate([
    Component({
        selector: 'projets-component',
        templateUrl: './projets-component.cmp.html',
        styleUrls: ['./projets-component.cmp.css'],
    }),
    __metadata("design:paramtypes", [ContentService])
], ProjetsComponent);
export { ProjetsComponent };
//# sourceMappingURL=projets-component.cmp.js.map
/*import { Component } from '@angular/core';

@Component({
  selector: 'discographie-component',
  templateUrl: './discographie-component.cmp.html',
  styleUrls: ['./discographie-component.cmp.css']
})
export class DiscographieComponent {


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
/*export class Hero {
  id: number;
  name: string;
}*/
var Album = (function () {
    function Album() {
    }
    return Album;
}());
export { Album };
var DiscographieComponent = (function () {
    function DiscographieComponent(contentService) {
        this.content = {};
        this.album = {
            title: 'philemon',
            image: '../../../assets/ambum.png',
            label: 'suite',
            group: 'philemon'
        };
        this.contentSvcSub = contentService.dataSubject.subscribe(this.handleData.bind(this));
    }
    DiscographieComponent.prototype.onSelected = function (album) {
        this.selectedAlbum = album;
    };
    DiscographieComponent.prototype.handleData = function (data) {
        this.content = data;
    };
    DiscographieComponent.prototype.ngOnDestroy = function () {
        this.contentSvcSub.unsubscribe();
    };
    return DiscographieComponent;
}());
DiscographieComponent = __decorate([
    Component({
        selector: 'discographie-component',
        templateUrl: './discographie-component.cmp.html',
        styleUrls: ['./discographie-component.cmp.css'],
    }),
    __metadata("design:paramtypes", [ContentService])
], DiscographieComponent);
export { DiscographieComponent };
//# sourceMappingURL=discographie-component.cmp.js.map
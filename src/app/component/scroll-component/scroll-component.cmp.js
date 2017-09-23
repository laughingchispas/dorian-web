/*
import { Component } from '@angular/core';

@Component({
  selector: 'scroll-component',
  templateUrl: './scroll-component.cmp.html',
  styleUrls: ['./scroll-component.cmp.css']
})
export class ScrollComponent {


  constructor() { }

}
*/
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
var ScrollComponent = (function () {
    function ScrollComponent(contentService) {
        this.content = {};
        this.contentSvcSub = contentService.dataSubject.subscribe(this.handleData.bind(this));
    }
    ScrollComponent.prototype.handleData = function (data) {
        this.content = data;
    };
    ScrollComponent.prototype.ngOnDestroy = function () {
        this.contentSvcSub.unsubscribe();
    };
    return ScrollComponent;
}());
ScrollComponent = __decorate([
    Component({
        selector: 'scroll-component',
        templateUrl: './scroll-component.cmp.html',
        styleUrls: ['./scroll-component.cmp.css'],
    }),
    __metadata("design:paramtypes", [ContentService])
], ScrollComponent);
export { ScrollComponent };
//# sourceMappingURL=scroll-component.cmp.js.map
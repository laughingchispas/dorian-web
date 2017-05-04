"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var platform_browser_1 = require("@angular/platform-browser");
var core_1 = require("@angular/core");
var http_1 = require("@angular/http");
var router_1 = require("@angular/router");
var app_component_1 = require("./app.component");
var _1 = require("./component/");
var appRoutes = [
    { path: '', component: _1.HomeComponent },
    { path: 'agenda', component: _1.AgendaComponent },
    { path: 'bonus', component: _1.BonusComponent },
    { path: 'contact', component: _1.ContactComponent },
    { path: 'discographie', component: _1.DiscographieComponent },
    { path: 'dorian', component: _1.DorianComponent },
    { path: 'musique', component: _1.MusiqueComponent },
    { path: 'news', component: _1.NewsComponent },
    { path: 'presse', component: _1.PresseComponent },
    { path: 'projets', component: _1.ProjetsComponent },
];
var AppModule = (function () {
    function AppModule() {
    }
    return AppModule;
}());
AppModule = __decorate([
    core_1.NgModule({
        declarations: [
            _1.AgendaComponent,
            app_component_1.AppComponent,
            _1.BodyComponent,
            _1.ContactComponent,
            _1.BonusComponent,
            _1.DiscographieComponent,
            _1.DorianComponent,
            _1.FooterComponent,
            _1.HomeComponent,
            _1.LanguageComponent,
            _1.LeftPanelComponent,
            _1.PresseComponent,
            _1.MusiqueComponent,
            _1.NameComponent,
            _1.NavigationComponent,
            _1.NewsComponent,
            _1.ProjetsComponent,
            _1.RightPanelComponent,
            _1.ScrollComponent,
            _1.TopHeader,
        ],
        imports: [
            platform_browser_1.BrowserModule,
            http_1.HttpModule,
            router_1.RouterModule.forRoot(appRoutes)
        ],
        providers: [],
        bootstrap: [app_component_1.AppComponent]
    })
], AppModule);
exports.AppModule = AppModule;

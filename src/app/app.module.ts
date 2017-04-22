import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';

import {
  BodyComponent,
  BonusComponent,
  DiscographieComponent,
  DorianComponent,
  HomeComponent,
  LanguageComponent,
  LeftPanelComponent,
  MusiqueComponent,
  NameComponent,
  NewsComponent,
  NavigationComponent,
  PresseComponent,
  ProjetsComponent,
  RightPanelComponent,
  TopHeader
} from './component/';

const appRoutes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'bonus', component: BonusComponent },
  { path: 'discographie', component: DiscographieComponent },
  { path: 'dorian', component: DorianComponent },
  { path: 'musique', component: MusiqueComponent },
  { path: 'news', component: NewsComponent},
  { path: 'presse', component: PresseComponent},
  { path: 'projets', component: ProjetsComponent},
];

@NgModule({
  declarations: [
    AppComponent,
    BodyComponent,
    BonusComponent,
    DiscographieComponent,
    DorianComponent,
    HomeComponent,
    LanguageComponent,
    LeftPanelComponent,
    PresseComponent,
    MusiqueComponent,
    NameComponent,
    NavigationComponent,
    NewsComponent,
    ProjetsComponent,
    RightPanelComponent,
    TopHeader,
  ],
  imports: [
    BrowserModule,
    HttpModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

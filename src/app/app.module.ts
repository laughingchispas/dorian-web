import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';

import {
  AgendaComponent,
  BodyComponent,
  BonusComponent,
  ContactComponent,
  FooterComponent,
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
  ScrollComponent,
  TopHeader
} from './component/';

const appRoutes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'agenda', component: AgendaComponent},
  { path: 'bonus', component: BonusComponent },
  { path: 'contact', component: ContactComponent },
  { path: 'discographie', component: DiscographieComponent },
  { path: 'dorian', component: DorianComponent },
  { path: 'musique', component: MusiqueComponent },
  { path: 'news', component: NewsComponent},
  { path: 'presse', component: PresseComponent},
  { path: 'projets', component: ProjetsComponent},
];

@NgModule({
  declarations: [
    AgendaComponent,
    AppComponent,
    BodyComponent,
    ContactComponent,
    BonusComponent,
    DiscographieComponent,
    DorianComponent,
    FooterComponent,
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
    ScrollComponent,
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

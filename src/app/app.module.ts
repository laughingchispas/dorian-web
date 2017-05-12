import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule }   from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';
import {ContentService} from './service';
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
    ProjetsComponent,
    RightPanelComponent,
    ScrollComponent,
    TopHeader,
  ],
  imports: [
    BrowserModule,
    HttpModule,
    FormsModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [
    ContentService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

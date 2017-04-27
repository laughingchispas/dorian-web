import { Component } from '@angular/core';
import { FrenchContentService } from './french-content.service';

dorian: Dorian[];

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app works!';
}

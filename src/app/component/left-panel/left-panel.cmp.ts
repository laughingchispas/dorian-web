import { Component } from '@angular/core';

import { dorian } from '../../content-detail';
import { FrenchContentService } from '../../french-content.service';

@Component({
  selector: 'left-panel',
  templateUrl: './left-panel.cmp.html',
  styleUrls: ['./left-panel.cmp.css']
})
export class LeftPanelComponent {

  dorian = DORIAN;

  constructor(private FrenchContentService: FrenchContentService) { }


}


import { Injectable } from '@angular/core';

import { Dorian } from './content-detail';
import { DORIAN } from './french-data';

@Injectable()
export class FrenchContentService {
  getData(): Dorian[] {
    return DORIAN;
  }
}

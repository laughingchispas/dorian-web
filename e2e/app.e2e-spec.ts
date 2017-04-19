import { DorianWebPage } from './app.po';

describe('dorian-web App', () => {
  let page: DorianWebPage;

  beforeEach(() => {
    page = new DorianWebPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});

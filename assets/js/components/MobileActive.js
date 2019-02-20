import { width } from '../shared/width-info';
const IS_ACTIVE = 'is-active';

export default class MobileActive {
  constructor(nav, item) {
    this.nav = document.querySelector(nav);
    this.activeCollection = this.nav ? this.nav.querySelectorAll(`${item}.${IS_ACTIVE}`) : '';
    this.track = this.nav ? this.nav.querySelector(`${nav}-track`) : '';
  }

  init = () => {
    this.main();
  }

  main = () => {
    if (!this.activeCollection.length > 0) 
      return;
    if (width() > 800)
      return;
    
    this.track.scrollLeft = this.activeCollection[0].offsetLeft;
  }
}

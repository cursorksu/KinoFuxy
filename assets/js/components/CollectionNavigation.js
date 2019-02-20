import ScrollMagic from 'scrollmagic';
import 'debug.addIndicators';
import { widthInfo } from '../shared/widthInfo';

class CollectionNavigation {
  constructor(navSelector) {
    this.nav         = document.querySelector(navSelector);
    this.navSelector = navSelector;
    this.controller  = new ScrollMagic.Controller();
    this.scene       = null;
  }

  init() {
    if (!this.check())
      return;
    
    if (widthInfo() < 1280)
      return;

    this.pinNav();
  }

  pinNav() {
    const _this = this;

    this.scene = new ScrollMagic.Scene({
      triggerHook: 0,
      triggerElement: this.nav,
      offset: widthInfo() <= 800 ? '-60px' : '-68px'
    });

    this.scene
      .addTo(this.controller)
      .setClassToggle(this.nav, 'is-pin');
      // .addIndicators();
  }

  check() {
    if (!this.nav)
      return false;

    return true;
  }
}

const collectionNavigation = new CollectionNavigation('.js-nav');

collectionNavigation.init();

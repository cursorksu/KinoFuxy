import { dummy } from '../shared/dummy';
import { widthInfo } from '../shared/widthInfo'; 
import { slider } from './slider';
const IS_ACTIVE = 'is-active';

const DATA_TYPE = 'type';

class GetCollection {
  constructor(btnSelector, before) {
    this.btns   = document.querySelectorAll(btnSelector);
    this.before = document.querySelectorAll(before);
  }

  init() {
    if (!this.check())
      return;

    this.bindEvents();
  }

  bindEvents() {
    const _this = this;

    this.btns.forEach(btn => {
      btn.addEventListener('click', function(e) {
        _this.handler(e, _this);
      });
    });
  }
  
  check() {
    if (!this.btns.length > 0)
      return false;

    return true;
  }

  handler(e, self) {
    e.preventDefault();

    const _this   = self;
    const current = e.target;
    const type    = current.dataset[DATA_TYPE];
    const ifInDom = document.querySelector(`.js-type-${type}`);

    // rewrite next soon
    if (ifInDom) {
      // console.log('in - dom');
      $('html, body').animate({
        scrollTop: ($(ifInDom).offset().top - 174)
      },500);
      _this.rmActive();
      current.classList.add(IS_ACTIVE);
    } else {
        _this.rmActive();
        current.classList.add(IS_ACTIVE);
      // console.log('not in dom');
      if (widthInfo() >= 1280) {
        // console.log('make-slider');
        $(dummy).insertBefore($(this.before));
        slider('.js-slider-ajax', '.js-item', true);
        $('html, body').animate({
          scrollTop: ($('#js-type-real_event').offset().top - 174)
        },500);

       
      } else {
        // console.log('not-make-slider');
        $(dummy).insertBefore($(this.before));
        $('html, body').animate({
          scrollTop: ($('#js-type-real_event').offset().top - 80)
        },500);

        
      }
    }
  }

  rmActive() {
    this.btns.forEach(btn => {
      btn.classList.remove(IS_ACTIVE);
    })
  }
}

const getCollection = new GetCollection('.js-aj', '.js-before-aj');

getCollection.init();
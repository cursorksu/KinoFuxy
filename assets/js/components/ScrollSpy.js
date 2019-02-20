import 'animation.gsap';
import 'debug.addIndicators';
import 'gsap';
import ScrollMagic from 'scrollmagic';
import 'scrollTo';
import { widthInfo } from '../shared/widthInfo';
import { checkExistElementCollection } from '../shared/checkExistElementCollection';


class ScrollSpy {
  constructor(sectionsSelector, tagSelector, tagsTrackSelector) {
    this.sections   = document.querySelectorAll(sectionsSelector);
    this.btns       = document.querySelectorAll(tagSelector);
    this.controller = new ScrollMagic.Controller;
    this.scene      = null;
    this.tagsTrack = document.querySelector(tagsTrackSelector);
  }

  init () {
    if (!checkExistElementCollection(this.sections))
      return;

    this.spy();

    if (!checkExistElementCollection(this.btns))
      return;

    this.bindEvents();
  }

  bindEvents() {
    const _this = this;

    this.btns.forEach(btn => {
      btn.addEventListener('click', function (e) {
        // _this.scrollTo(e, true, null);
        e.preventDefault();
        _this.goTo(e);
      }, false);
    });
  }

  goTo(e) {
    const id = e.target.parentNode.dataset['target'];
    const offset = widthInfo() < 1280 ? 100 : 140;
    $('html, body').animate({
      scrollTop: ($(`#${id}`).offset().top - offset)
    },500);
  }

  spy() {
    const _this = this;
    
    this.sections.forEach(node => {
      const duration = node.children[0].children[1].clientHeight;
      const trigger  = node.children[0];

      _this.scene = new ScrollMagic.Scene({
        triggerHook: 0.3,
        triggerElement: trigger,
        duration: `${duration}px`
      });
    
      const tag = document.querySelectorAll(`[data-target=${node.id}]`);

      _this.scene
        // .addIndicators({
        //   name: 'node'
        // })
        .setClassToggle(tag, 'is-active')
        .addTo(_this.controller);

      _this.scene.on('start', function(event) {
        let offset = event.scrollDirection === 'FORWARD' ? 0 : 175;

        _this.scrollTo(tag[0], false, offset);
      });
    });
  }

  showActive(tag) {
    this.scrollTo(tag, false);
  }

  scrollTo(e, isWindowTrack, offset) {
    const scrollTl = new TimelineMax();
    const target   = e.target ? e.target.dataset.target : e;

    if (isWindowTrack) {
      scrollTl
        .to(window, 0.3, { scrollTo: { y: `#${target}`, offsetY: widthInfo() >= 1280 ? 160 : 110}});
      } else {
      
      // if (widthInfo() >= 1280) {

        scrollTl
          .to(this.tagsTrack, 0.3, { scrollTo: { x: target, offsetX: offset }});
          // this.tagsTrack.scrollLeft = target.offsetLeft;
      // }
    }
  }
}

const scrollSpy = new ScrollSpy('.js-spy', '.js-tag-item', '.js-tags-track');

scrollSpy.init();

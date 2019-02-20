import { checkExistElementCollection } from '../shared/checkExistElementCollection';
import ScrollMagic from 'scrollmagic';
import 'debug.addIndicators';
import { widthInfo } from '../shared/widthInfo';
import { width } from 'window-size';


const IS_ACTIVE = 'is-active';
const IS_REVERSE = 'is-reverse';

class Counter {
  constructor(counterScopeClassname, movieClassname, moviesContainerClassname) {
    this.scope                    = document.querySelector(`.${counterScopeClassname}`);
    this.movieCollection          = document.querySelectorAll(`.${movieClassname}`);
    this.scene                    = null;
    this.showCounterScene         = null;
    this.controller               = new ScrollMagic.Controller();
    this.moviesContainerClassname = moviesContainerClassname;
  }

  init() {
    if (!this.check()) {
      return;
    }

    this.initialLength();
    this.spy();
    this.showCounter();
  }

  showCounter() {
    const _this = this;
    const moviesContainer = document.querySelector(`.${_this.moviesContainerClassname}`);

    if (moviesContainer) {
      _this.showCounterScene = new ScrollMagic.Scene({
        triggerHook: .5,
        triggerElement: moviesContainer,
        duration: moviesContainer.clientHeight
      });

      _this.showCounterScene
        // .addIndicators({
        //   name: 'counter'
        // })
        .setClassToggle(_this.scope, IS_ACTIVE)
        .addTo(_this.controller);

      _this.showCounterScene.on('progress', function(e) {
        if (e.scrollDirection === 'REVERSE') {
          _this.scope.classList.remove(IS_REVERSE);
        } else {
          _this.scope.classList.add(IS_REVERSE);
        }
      });
    }
  }

  spy() {
    const _this   = this;
    const current = this.scope.querySelector('.js-counter-current');
    
    let movies = Array.from(this.movieCollection);

    this.movieCollection.forEach(node => {
      const duration = node.parentNode.clientHeight;
      // const trigger  = node.children[0];
      const trigger  = node.parentNode;

      let triggerHook = widthInfo() < 1280 ? 1 : .6;

      _this.scene = new ScrollMagic.Scene({
        triggerHook,
        triggerElement: trigger,
        duration: `${duration}px`
      });
    
      _this.scene
        // .addIndicators({
        //   name: 'node'
        // })
        .addTo(_this.controller);
      
      _this.scene.on('enter', function(event) {
        // sorry for next magic number
        current.innerText = parseInt(movies.indexOf(node)) + 1;
      });
    });
  }

  initialLength() {
    const lengthContainer = this.scope.querySelector('.js-counter-length');

    if (!checkExistElementCollection(this.movieCollection)) {
      return;
    }
    lengthContainer.innerText = this.movieCollection.length;
  } 

  check() {
    if (!this.scope) {
      return false;
    }
    return true;
  }
}

const counter =  new Counter('js-counter-scope', 'js-movie', 'js-movies');
counter.init();

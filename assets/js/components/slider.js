import 'core-js/fn/object/assign';
import 'slick-carousel';
import { widthInfo } from '../shared/widthInfo';

export { slider };

export default function slider(sliderSelector, themeSlidesToShow = {}, isDesktopOnly) {
    
  const $slider = $(sliderSelector);

  const nextArrow = `
    <button class="c-btn c-arrow c-slider__next c-arrow--next">
      <span class="c-arrow__box">
        <span class="icon-arrow-right"></span>
      </span>
    </button>
  `;

  const prevArrow = `
    <button class="c-btn c-arrow c-slider__prev c-arrow--prev">
      <span class="c-arrow__box">
        <span class="icon-arrow-left"></span>
      </span>
    </button>
  `;
  
  if (!$slider.length > 0)
    return;

  if (!isDesktopOnly) {
    let options = {};

    options = {
      nextArrow,
      prevArrow,
    }

    $slider.slick(Object.assign(themeSlidesToShow, options));

  } else {
    if (widthInfo() >= 1280) {
      // here you can define some only desctop sliders settings
      let options = {};
        options = {
          nextArrow,
          prevArrow,
        };
      $slider.slick(Object.assign(themeSlidesToShow, options));
    }
  }
}

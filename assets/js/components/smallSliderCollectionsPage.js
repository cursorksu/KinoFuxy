import {slider} from './slider';

const collectionsSliderOptions = {
  dots: false,
  accessibility: false,
  // useTransform: false,
  adaptiveHeight: true,
  slidesToScroll: 2, 
  slidesToShow: 4,
  speed: 300,
  infinite: false,
  responsive: [
    {
      breakpoint: 993,
      settings: {
        slidesToScroll: 2,
        slidesToShow: 3,
        arrows: false,
        variableWidth: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToScroll: 1,
        slidesToShow: 2,
        arrows: false,
        variableWidth: true
      }
    },
    {
      breakpoint: 450,
      settings: {
        slidesToScroll: 1,
        slidesToShow: 1,
        arrows: false,
        variableWidth: true,
        centerMode: true,
      }
    }
  ]
};

slider('.js-slider-desktop', collectionsSliderOptions, false);

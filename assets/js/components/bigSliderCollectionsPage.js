import { slider } from './slider';

const bigSliderOptions =       
{
  slidesToScroll: 1,
  slidesToShow: 2,
  dots: false,
  accessibility: false,
  // useTransform: false,
  adaptiveHeight: true,
  speed: 300,
  infinite: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToScroll: 1,
        slidesToShow: 1,
      }
    }
  ]
};

slider('.js-slider', bigSliderOptions, false);

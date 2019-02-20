import { slider } from './slider';

const detailSliderOptions = 
{
  slidesToScroll: 1,
  slidesToShow: 1,
  dots: false,
  accessibility: false,
  // useTransform: false,
  adaptiveHeight: true,
  speed: 300,
  infinite: false,
  rows: 0,
  responsive: [
    {
      breakpoint: 400,
      settings: {
        slidesToScroll: 1,
        slidesToShow: 1,
        centerMode: true,
        arrows: false
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToScroll: 2,
        slidesToShow: 2,
        centerMode: true,
        arrows: false,
        variableWidth: true
      }
    },
    {
      breakpoint: 993,
      settings: {
        slidesToScroll: 2,
        slidesToShow: 2,
        arrows: false,
        variableWidth: true
      }
    },
    {
      breakpoint: 1280,
      settings: {
        slidesToScroll: 1,
        slidesToShow: 2,
        centerMode: false,
        infinite: false,
      }
    }
  ]
};

slider('.js-slider-desktop-theme', detailSliderOptions, false);

import 'tilt.js';
import { widthInfo } from '../shared/widthInfo';


function doTilt(selector) {
  const $collection = $(selector);

  if (!$collection.length > 0)
    return;
    
  if (widthInfo() < 1280)
    return;

  $(selector).tilt({
    perspective: 10000,
    transition:     true,
  });
}

doTilt('.js-tilt')

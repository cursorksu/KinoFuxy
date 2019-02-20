import { isFirefox } from '../shared/isFirefox';

function addFireFoxClases(selector) {
  if (isFirefox()) {
    document.querySelector(selector).classList.add('u-firefox-scroll');
  }
}

addFireFoxClases('.js-scroll-track');

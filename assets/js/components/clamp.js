import '../externals/clamp';
import { widthInfo } from '../shared/widthInfo';

const DATA_CLAMP         = 'clamp';
const DATA_DESKTOP_CLAMP = 'desktop';
const IS_CLAMPED         = 'is-clamped';
const JS_CLAMP_SMALL     = 'js-clamp-small';
 
function clamping(selector) {
  const modules = document.querySelectorAll(selector);

  if (!modules.length > 0)
    return;

  modules.forEach(module => {
      const clamp = widthInfo() >= 993 ? Number(module.dataset[DATA_DESKTOP_CLAMP]) : Number(module.dataset[DATA_CLAMP]);

      if (!module.classList.contains(JS_CLAMP_SMALL)) {
        $clamp(module, {clamp});
      } else {
        if (widthInfo() < 993) {
          $clamp(module, {clamp});
          module.classList.add(IS_CLAMPED);
        }
      }
  });
}

clamping('.js-clamp');

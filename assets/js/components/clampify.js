import 'clampify';
import { widthInfo } from '../shared/widthInfo';

const DATA_CLAMP         = 'clamp';
const DATA_DESKTOP_CLAMP = 'desktop';
const IS_CLAMPED         = 'is-clamped';
const JS_CLAMP_SMALL     = 'js-clamp-small';
 
function clamping(selector, btnSelector) {
  const modules = document.querySelectorAll(selector);

  if (!modules.length > 0)
    return;

  const btns = document.querySelectorAll('.js-panel-btn');

  
  clampElements();
  
  if (!btns.length > 0)
    return;

  bindEvents();

  function handler(instance, btn) {
    btn.style.display = 'none';
    instance.destroy();
  }

  function bindEvents() {
    btns.forEach(btn => {
      btn.addEventListener('click', function(e) {
        const self     = e.target.closest(btnSelector);
        const instance = self.previousElementSibling.clampify;
        handler(instance, btn);
      });
    });
  }

  function clampElements() {

    modules.forEach(module => {
      if (widthInfo() < 993) {
        const maxLines = parseInt(module.dataset[DATA_CLAMP]);

        $clampify(module, {
          maxLines
        })
        module.classList.add(IS_CLAMPED);
      }
        // const clamp = widthInfo() >= 993 ? Number(module.dataset[DATA_DESKTOP_CLAMP]) : Number(module.dataset[DATA_CLAMP]);
  
        // if (!module.classList.contains(JS_CLAMP_SMALL)) {
        //   $clamp(module, {clamp});
        // } else {
        //   if (widthInfo() < 993) {
        //     $clamp(module, {clamp});
        //     module.classList.add(IS_CLAMPED);
        //   }
        // }
    });
  }
}

clamping('.js-clamp', '.js-panel-btn');

const IS_COLLAPSED = 'is-collapsed';
const IS_OPEN = 'is-open';

function more(btnSelector, panelSelector) {
  const btns = document.querySelectorAll(btnSelector);

  if (!btns.length > 0)
    return;

  btns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      handler(e);
    });
  });

  function handler(e) {
    const self  = e.target;
    const panel = self.closest(panelSelector);
    panel.classList.toggle(IS_COLLAPSED);

    self.closest('.field-item').classList.toggle(IS_OPEN);
  }
}

more('.js-panel-btn', '.js-panel');

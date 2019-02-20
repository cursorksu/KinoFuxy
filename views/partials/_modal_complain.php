<!-- Modal complane -->
<div class="modal c-modal fade s-elements" id="complain-modal" tabindex="-1" role="dialog" aria-labelledby="complaneModal" aria-hidden="true">
  <div class="modal-dialog c-modal__dialog c-modal__centered" role="document">
    <div class="modal-content c-modal__content">
      <div type="button" class="c-close c-modal__close" data-dismiss="modal" aria-label="Close">
      </div>
      <div class="c-modal__header">
        <h4 class="t4 c-modal__title">Жалобы</h4>
        <p>Просим указывать в&nbsp;жалобе устройство (наименование, версию) и&nbsp;браузер</p>
      </div>
      <div class="c-form c-modal__form">
        <form id="form-propose-film" action="">
          <div class="c-form__group">
            <div class="c-form__controls">
              <textarea 
                placeholder="Укажите причину вашей жалобы
для администрации" name="collection__propose" id="collection__propose" cols="30" rows="10" required="required"></textarea>
            </div>
          </div>
          <div class="c-form__group">
            <div id="propose-film-captcha"></div>
          </div>
          <div class="c-form__group c-form__group--action">
            <div class="c-form__controls js-catcha-error">
              <button class="button button--inverted button--darken button--full-width button--low">
                <span class="button__help">
                  Отправить
                </span>
              </button>
              <span class="c-form__hint">You didn't pass captcha checking</span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
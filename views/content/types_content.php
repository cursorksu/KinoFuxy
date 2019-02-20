<!-- section top -->
<div class="row">
  <div class="small-12 columns">
    <div class="page-header padding-small">
      <div class="box-top">
        <h1 class="page-title">Настроение</h1>
        <div class="box-social">
          <div class="label">Поделиться в соцсетях:</div>
          <div class="block-social">
            <ul>
              <li>
                <a href="#">
                  <span class="icon-bookmarks"></span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon-vk"></span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon-odnoklassniki"></span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon-facebook"></span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon-twitter"></span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon-telegram"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="page-description c-panel js-panel s-panel">
        <div class="c-panel__inner">
          <div class="c-panel__collapsed">
            <p class="js-clamp js-clamp-small" data-clamp="5" data-desktop="5">
              Зарекомендовавший себя актерский состав, профессионалы и&nbsp;талантливые дебютанты, а&nbsp;также герои популярных телевизионных
              шоу&nbsp;&mdash; всех их&nbsp;можно увидеть в&nbsp;новых русских фильмах 2016&nbsp;года, доступных
              для просмотра онлайн на&nbsp;нашем сайте. Независимо от&nbsp;того, являетесь вы&nbsp;любителем
              легких романтических комедий или захватывающих приключенческих фильмов, в&nbsp;нашей подборке российского
              кино вы&nbsp;найдете подходящий для себя вариант. Понятные всем любовные неурядицы или невероятные
              приключения, ироничные диалоги, а, главное, герои с&nbsp;мировосприятием, близким русскому человеку,
              делают современные фильмы, снятые в&nbsp;России, действительно достойными внимания. Приятного просмотра!
              Независимо от&nbsp;того, являетесь вы&nbsp;любителем легких романтических комедий или захватывающих
              приключенческих фильмов, в&nbsp;нашей подборке российского кино вы&nbsp;найдете подходящий для
              себя вариант. Понятные всем любовные неурядицы или невероятные приключения, ироничные диалоги,
              а, главное, герои с&nbsp;мировосприятием, близким русскому человеку, делают современные фильмы,
              снятые в&nbsp;России, действительно достойными внимания. Приятного просмотра!
            </p>
            <div class="js-panel-btn c-more">
              <div class="c-more__help">
                <span class="c-more__anchor">Читать дальше</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- section subtypes list -->
<section>
  <div class="row">
    <div class="small-12 medium-12 large-8 large-centered columns">
      <div class="c-types">
        <ul class="c-types__list">
          <?php for($i = 0; $i <= 4; $i++) { ?>
            <li class="c-types__item">
              <div class="c-preview c-preview--biggest c-preview--text-large c-preview--types">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/content/partials/_preview.php') ?>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- section stars -->
<section class="c-stars-container u-pt-w">
  <div class="row">
    <div class="small-12 medium-12 large-8 large-centered columns">
      <div class="field-collection-stars c-stars c-stars--symmetry">
        <div class="collection-rating">
          <span>Оценить категорию коллекции:</span>
          <div class="collection-item-rating c-stars__track once" data-start-value="0.7"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section suggest -->
<section class="u-pt-w">
  <div class="o-container u-center">
    <button class="button button--inverted button--rounded button--shadow button--low button--long" data-target="#propose-collection" data-toggle="modal">
      <span class="button__help">предложить коллекцию</span>
    </button>
  </div>
</section>

<!-- section tags -->
<section class="u-pt-w u-desktop-pb">
  <div class="o-container">
    <div class="c-title u-text-center">Другие типы коллекций</div>
  </div>
  <!-- <div class="c-pin"> -->
    <div class="c-tags c-tags--not-delimited c-tags--not-fixed c-tags--pt33">
      <div class="c-tags__track dragscroll">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/views/content/partials/_tags_list.php') ?>
      </div>
    </div>
  <!-- </div> -->
</section>


<!-- Modal propose collection -->
<div class="modal c-modal fade s-elements" id="propose-collection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog c-modal__dialog c-modal__centered" role="document">
    <div class="modal-content c-modal__content">
      <div type="button" class="c-close c-modal__close" data-dismiss="modal" aria-label="Close">
      </div>
      <div class="c-modal__header">
        <h4 class="t4 c-modal__title">Предложить коллекцию</h4>
        <p>Просим пронумеровывать список и&nbsp;оставлять для каждого фильма ссылку с&nbsp;Кинопоиска</p>
      </div>
      <div class="c-form c-modal__form">
        <form id="form-propose-collection" action="">
          <div class="c-form__group">
            <div class="c-form__controls">
              <textarea placeholder="Введите вашу коллекцию" name="collection__propose" id="collection__propose" cols="30" rows="10" required="required"></textarea>
            </div>
          </div>
          <div class="c-form__group">
            <div id="propose-collection-captcha"></div>
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

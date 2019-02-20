<!-- <div class="header-top-line">
  <div class="row">
    <div class="small-12 columns">
      <div class="box-left">
        <ul>
          <li>
            <span>Наши сайты:</span>
          </li>
          <li>
            <a href="http://fanserials.pro/" target="_blank">
              <span>Сериалы</span>
            </a>
          </li>
          <li>
            <a class="home" href="/">
              <span>Fuxy</span>
            </a>
          </li>
          <li>
            <a href="http://multiks.tv/" target="_blank">
              <span>Мультики</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="box-right">
        <ul>
          <li>
            <span>Будь в тренде:</span>
          </li>
          <li>
            <a class="violet" href="http://fuxy.tv/fantastic/2301-mstiteli-voyna-beskonechnosti.html">
              <span>Мстители: Война бесконечности</span>
            </a>
          </li>
          <li class="hide-medium-down">
            <a class="orange" href="http://fanserials.pro/game-of-thrones/" target="_blank">
              <span>Игра Престолов</span>
            </a>
          </li>
          <li class="hide-medium-down">
            <a class="pink" href="http://multiks.tv/1367-fiksiki" target="_blank">
              <span>Фиксики</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div> -->
<div class="l-header">
  <div class="row">
    <div class="small-12 columns">
      <div class="l-header-content clearfix">
        <button id="show-mobile-menu" class="hamburger hamburger--spin" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . '/views/partials/_logo.php');
          ?>
          <nav class="top-nav">
            <ul>
              <li>
                <div class="cuSelect genre">
                  <select name="field-genre" data-placeholder="Жанр">
                    <option value="0" selected="selected"></option>
                    <option value="1">Аниме</option>
                    <option value="2">Биография</option>
                    <option value="3">Боевик</option>
                    <option value="4">Вестерн</option>
                    <option value="5">Военный</option>
                    <option value="6">Детектив</option>
                    <option value="7">Драма</option>
                    <option value="8">История</option>
                    <option value="9">Комедия</option>
                    <option value="10">Криминал</option>
                    <option value="11">Мелодрама</option>
                    <option value="12">Музыка</option>
                    <option value="13">Мультфильм</option>
                    <option value="14">Мюзикл</option>
                    <option value="15">Приключения</option>
                    <option value="16">Семейный</option>
                    <option value="17">Спорт</option>
                    <option value="18">Триллер</option>
                    <option value="19">Ужасы</option>
                    <option value="20">Фантастика</option>
                    <option value="21">Нуар</option>
                    <option value="22">Фэнтези</option>
                  </select>
                </div>
              </li>
              <li>
                <div class="cuSelect year">
                  <select name="field-year" data-placeholder="Год">
                    <option value="0" selected="selected"></option>
                    <option value="1">2017</option>
                    <option value="2">2016</option>
                    <option value="3">2015</option>
                    <option value="4">2010–2014</option>
                    <option value="5">2000–е</option>
                    <option value="6">90–е</option>
                    <option value="7">80–е</option>
                    <option value="8">70–е</option>
                    <option value="9">Раннее</option>
                  </select>
                </div>
              </li>
              <li>
                <a href="#">
                  <span class="help">Коллекции</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="help">Новинки</span>
                </a>
              </li>
            </ul>
          </nav>
          <div class="block-ajax-search">
            <div class="ajax-search-container" id="ajax-s-container">
              <div class="wrap">
                <form autocomplete="off" method="get" action="/">
                  <button type="submit" class="ajax-inp-submit">
                    <span class="icon-search"></span>
                  </button>
                  <input name="do" value="search" type="hidden">
                  <input name="subaction" value="search" type="hidden">
                  <input type="text" name="story" class="ajax-inp" placeholder="Поиск">
                </form>
                <span class="close-ajax-search">
                  <span class="icon-close"></span>
                </span>
              </div>
            </div>
            <div class="response-container">
              <div class="block-ajax-results">
                <div class="cuScroll">
                  <div class="search-dark-list">
                    <div class="item-search clearfix">
                      <div class="box-left">
                        <div class="field-img">
                          <a href="#">
                            <img src="images/posters/search-poster-1.jpg" alt="img">
                          </a>
                        </div>
                        <div class="field-rating">
                          <span>8.5</span>
                        </div>
                        <div class="field-quality">
                          <span>HDRip</span>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="text_ssb">
                          <h2>
                            <a href="#" title="Престиж">
                              <span>Престиж</span>
                            </a>
                          </h2>
                          <div class="field-genre">Фантастика, 2006</div>
                          <div class="field-description">
                            <p>Роберт и Альфред — фокусники-иллюзионисты, которые на рубеже XIX и XX веков соперничали друг
                              с другом в Лондоне. С годами их дружеская конкуренция на профессиональной почве перерастает
                              в настоящую войну. Они готовы на все, чтобы выведать друг у друга секреты фантастических трюков
                              и сорвать их исполнение...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-search clearfix">
                      <div class="box-left">
                        <div class="field-img">
                          <a href="#">
                            <img src="images/posters/search-poster-2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="field-rating">
                          <span>7.1</span>
                        </div>
                        <div class="field-quality">
                          <span>HDRip</span>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="text_ssb">
                          <h2>
                            <a href="#" title="Форсаж 7">
                              <span>Форсаж 7</span>
                            </a>
                          </h2>
                          <div class="field-genre">Боевик, 2015</div>
                          <div class="field-description">
                            <p>Они покорили Токио и Рио, Лос-Анджелес и Лондон. Но мир больше не играет по их правилам. Зной
                              арабских пустынь, неприлично высокие небоскребы, миллионы долларов на колесах и очень, очень
                              знаменитый злодей. Скорость не знает границ.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-search clearfix">
                      <div class="box-left">
                        <div class="field-img">
                          <a href="#">
                            <img src="images/posters/search-poster-3.jpg" alt="img">
                          </a>
                        </div>
                        <div class="field-rating">
                          <span>8.0</span>
                        </div>
                        <div class="field-quality yellow">
                          <span>DVD-Scr</span>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="text_ssb">
                          <h2>
                            <a href="#" title="Дюнкер">
                              <span>Дюнкер</span>
                            </a>
                          </h2>
                          <div class="field-genre">Боевик, 2015</div>
                          <div class="field-description">
                            <p>Фильм расскажет историю чудесного спасения более трехсот тысяч солдат в ходе Дюнкеркской операции,
                              имевшей место в начале Второй мировой войны. События начинаются с окружения сотен тысяч британских
                              и союзных войск силами противника.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-search clearfix">
                      <div class="box-left">
                        <div class="field-img">
                          <a href="#">
                            <img src="images/posters/search-poster-1.jpg" alt="img">
                          </a>
                        </div>
                        <div class="field-rating">
                          <span>8.5</span>
                        </div>
                        <div class="field-quality">
                          <span>HDRip</span>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="text_ssb">
                          <h2>
                            <a href="#" title="Престиж">
                              <span>Престиж</span>
                            </a>
                          </h2>
                          <div class="field-genre">Фантастика, 2006</div>
                          <div class="field-description">
                            <p>Роберт и Альфред — фокусники-иллюзионисты, которые на рубеже XIX и XX веков соперничали друг
                              с другом в Лондоне. С годами их дружеская конкуренция на профессиональной почве перерастает
                              в настоящую войну. Они готовы на все, чтобы выведать друг у друга секреты фантастических трюков
                              и сорвать их исполнение...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-search clearfix">
                      <div class="box-left">
                        <div class="field-img">
                          <a href="#">
                            <img src="images/posters/search-poster-2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="field-rating">
                          <span>7.1</span>
                        </div>
                        <div class="field-quality">
                          <span>HDRip</span>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="text_ssb">
                          <h2>
                            <a href="#" title="Форсаж 7">
                              <span>Форсаж 7</span>
                            </a>
                          </h2>
                          <div class="field-genre">Боевик, 2015</div>
                          <div class="field-description">
                            <p>Они покорили Токио и Рио, Лос-Анджелес и Лондон. Но мир больше не играет по их правилам. Зной
                              арабских пустынь, неприлично высокие небоскребы, миллионы долларов на колесах и очень, очень
                              знаменитый злодей. Скорость не знает границ.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-search clearfix">
                      <div class="box-left">
                        <div class="field-img">
                          <a href="#">
                            <img src="images/posters/search-poster-3.jpg" alt="img">
                          </a>
                        </div>
                        <div class="field-rating">
                          <span>8.0</span>
                        </div>
                        <div class="field-quality yellow">
                          <span>DVD-Scr</span>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="text_ssb">
                          <h2>
                            <a href="#" title="Дюнкер">
                              <span>Дюнкер</span>
                            </a>
                          </h2>
                          <div class="field-genre">Боевик, 2015</div>
                          <div class="field-description">
                            <p>Фильм расскажет историю чудесного спасения более трехсот тысяч солдат в ходе Дюнкеркской операции,
                              имевшей место в начале Второй мировой войны. События начинаются с окружения сотен тысяч британских
                              и союзных войск силами противника.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="view-all">
                  <a href="#">
                    <span class="help">посмотреть все результаты</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="box-right">
            <div class="field-random">
              <a class="btn" href="#">
                <span class="help">Случайный фильм</span>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="search-overlay"></div>
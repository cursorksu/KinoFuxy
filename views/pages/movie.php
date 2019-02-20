<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Fuxy.tv</title>
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="author" content=""/>
  <meta name="copyright" content="(c)">

  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700|Roboto:300,400&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="js/lightGallery/dist/css/lightgallery.min.css"/>
  <link rel="stylesheet" href="css/fuxy.min.css"/>

  <!--[if gte IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
  <meta name="HandheldFriendly" content="True"/>
  <meta http-equiv="Cache-Control" content="no-cache"/>
  <meta http-equiv="cleartype" content="on"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

  <meta name="application-name" content="Title"/>
  <meta name="msapplication-tooltip" content="Description"/>
  <meta name="msapplication-window" content="width=400;height=300"/>
  <meta http-equiv="imagetoolbar" content="no"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="msthemecompatible" content="no"/>
  <meta name="format-detection" content="telephone=no"/>
  <meta name="format-detection" content="address=no"/>

  <?php
    // this need for getting fresh dinamic bundle name
    include_once('./scripts/get_bundle_name.php');
  ?>

  <link rel="stylesheet" href="<?php echo get_bundle_name()['css']; ?>">

</head>
<body>

<div class="wrapper">
   <!-- header part -->
   <header role="presentation">
      <?php include('./views/partials/_header.php') ?>
    </header>
  <main role="main" class="main">
    <div class="l-main">
      <div class="page-movie">
        <div class="page-movie-links page-links" data-magellan-expedition="">
          <div class="row">
            <div class="small-12 columns">
              <ul class="links">
                <li data-magellan-arrival="watch-movie" class="active">
                  <a href="#watch-movie"><span class="help">смотреть фильм</span></a>
                </li>
                <li data-magellan-arrival="about-movie">
                  <a href="#about-movie"><span class="help">о фильме</span></a>
                </li>
                <li><a href="#movieGallery" id="open-movie-gallery"><span class="help">трейлеры и кадры</span></a></li>
                <li data-magellan-arrival="reviews-movie">
                  <a href="#reviews-movie"><span class="help">комментарии</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="page-wrapper">
          <div class="row">
            <div class="small-12 columns">
              <div data-magellan-destination="watch-movie" id="watch-movie">
                <div class="page-header">
                  <h1 class="page-title">Kingsman: Золотое кольцо</h1>
                  <div class="field-movie-assessment">
                    <div class="field-rating">
                      <span>7.1</span>
                    </div>
                    <div class="rating-info">
                      <div class="label">рейтинг на основе:</div>
                      <div class="rating-fields">
                        <div class="item kinopoisk"><a href="#"><span class="icon-kinopoisk"></span></a>9.0</div>
                        <div class="item imdb"><a href="#"><span class="icon-Imdb"></span></a>9.0</div>
                        <div class="item tomatoes"><a href="#"><span class="icon-tomatoes"></span></a>85%</div>
                        <div class="item metacritic"><a href="#"><span class="icon-metacritic"></span></a>85%</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="page-top clearfix">
                  <div class="box-left">
                    <div class="c-line">
                      <div class="c-line__field c-line__original">
                        <div class="field-original-title">Kingsman: The Golden Circle</div>
                      </div>
                      <div class="c-line__field c-line__link">
                        <a class="c-link" rel="nofollow" target="_blank" href="#">
                          <span class="c-link__anchor">
                              Наша группа&nbsp;<span class="u-hide-large">ВК</span><span class="u-hide-medium u-hide-small">в&nbsp;контакте</span></span>
                        </a>
                      </div>
                    </div>
                    <div class="field-player">
                      <div class="flex-video">
                        <iframe width="730" height="415" src="https://www.youtube.com/embed/6Nxc-3WpMbg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div class="field-quality">
                        <span>HDRip</span>
                      </div>
                    </div>
                    <div class="c-underline">
                      <a  href="#" class="c-link c-link--sky c-link--light" rel="nofollow" target="_blank">
                        <span class="c-link__anchor">
                          В&nbsp;хорошем качестве&nbsp;&mdash; 10&nbsp;февраля!
                          <span class="u-hide-small u-hide-medium">Подпишись, чтобы не&nbsp;пропустить!</span> 
                        </span>
                      </a>

                    </div>
                    <div class="bottom-line">
                      <div class="block-social">
                        <ul>
                          <li>
                            <a href="#"><span class="icon-vk"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-odnoklassniki"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                          </li>
                          <li>
                            <a href="#"><span class="icon-telegram"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="field-btn-trailer">
                        <a href="#movieGallery" class="btn gradient"><span class="help">смотреть трейлер</span></a>
                      </div>
                      <div class="movie-rating incategorypage">
                        <span>Рейтинг:</span>
                        <div class="movie-item-rating clickonce" data-start-value="0.8"></div>
                      </div>
                      <div class="btn-complain">
                        <a href="#">Пожаловаться</a>
                      </div>
                    </div>
                  </div>
                  <div class="box-right">
                    <div class="c-line">
                    </div>
                    <div class="field-promo js-field-promo" data-suggest-link="//fuxy.tv/best-films/">
                      <script type="text/javascript" src="https://vk.com/js/api/openapi.js?156"></script>

                      <!-- VK Widget -->
                      <div id="vk_groups"></div>
                      <script type="text/javascript">
                      try {
                        VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, no_cover: 1, width: "auto", height: "462", color1: '011B36', color2: 'FFFFFF', color3: '5283BA'}, 164355370);
                      } catch (error) {
                        var jsField = document.querySelector('.js-field-promo');
                        var href = jsField.dataset['suggestLink'];
                        var suggestHtml = `
                        <a href="${href}" class="block-promo">
                          <span class="triangle"></span>
                          <span class="vertical">
                            <span class="icon">
                              <span class="icon-promo-1"></span>
                            </span>
                            <span class="field-label"><span>#что_посмотреть?</span></span>
                            <span class="field-title">Топ лучших фильмов<br> по версии Фукси ТВ</span>
                            <span class="field-btn">
                              <span class="gradient">
                                <span class="help">Смотреть</span>
                                <span class="border"></span>
                              </span>
                            </span>
                          </span>
                        </a>
                        `;
                        jsField.innerHTML = suggestHtml;
                      }
                      </script>
                    </div>
                  </div>
                </div>
              </div>
              <div class="page-about clearfix" data-magellan-destination="about-movie" id="about-movie">
                <div class="block-about-movie">
                  <h2 class="title">О фильме</h2>
                  <div class="about-wrapper clearfix">
                    <div class="box-left">
                      <div class="movie-posters-slider" id="posterGallery">
                        <a class="item lightgallery-photo" href="images/movie/gallery/poster-1.jpg">
                          <img src="images/movie/gallery/poster-m-1.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                        </a>
                        <a class="item lightgallery-photo" href="images/movie/gallery/poster-1.jpg">
                          <img src="images/movie/gallery/poster-m-1.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                        </a>
                        <a class="item lightgallery-photo" href="images/movie/gallery/poster-1.jpg">
                          <img src="images/movie/gallery/poster-m-1.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                        </a>
                        <a class="item lightgallery-photo" href="images/movie/gallery/poster-1.jpg">
                          <img src="images/movie/gallery/poster-m-1.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                        </a>
                        <a class="item lightgallery-photo" href="images/movie/gallery/poster-1.jpg">
                          <img src="images/movie/gallery/poster-m-1.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                        </a>
                      </div>
                      <div class="movie-assessment">
                        <div class="label">Рейтинг зрителей:</div>
                        <ul class="assessment-list">
                          <li>
                            <div class="field-assessment kinopoisk"><a href="#"><span class="icon-kinopoisk"></span></a>9.0</div>
                          </li>
                          <li>
                            <div class="field-assessment imdb"><a href="#"><span class="icon-Imdb"></span></a>9.5</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-right">
                      <div class="movie-assessment">
                        <ul class="assessment-list">
                          <li>
                            <div class="field-assessment kinopoisk">9.0</div>
                          </li>
                          <li>
                            <div class="field-assessment imdb">9.5</div>
                          </li>
                        </ul>
                      </div>
                      <div class="movie-info-fields">
                        <div class="field-item">
                          <div class="label">Год:</div>
                          <div class="content">
                            <div class="links">
                              <a href="#"><span>2017</span></a>
                            </div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Жанр:</div>
                          <div class="content">
                            <div class="links">
                              <a href="#"><span>боевик</span></a>, <a href="#"><span>комедия</span></a>, <a href="#"><span>приключения</span></a>, ...
                            </div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Страна:</div>
                          <div class="content">
                            <div class="links">
                              <a href="#"><span>Великобритания</span></a>, <a href="#"><span>США</span></a>
                            </div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Слоган:</div>
                          <div class="content">
                            <div class="text">«Reports of my death have been greatly exaggerated»</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Режиссер:</div>
                          <div class="content">
                            <div class="text">Мэттью Вон</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Сценарий:</div>
                          <div class="content">
                            <div class="text">Джейн Голдман, Мэттью Вон, Марк Миллар, Марк Миллар, Марк Миллар,</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Продюсер:</div>
                          <div class="content">
                            <div class="text">Джейн Голдман, Мэттью Вон, Марк Миллар, Марк Миллар,</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Опреатор:</div>
                          <div class="content">
                            <div class="text">Адам Болинг, Дэвид Рейд, Мэттью Вон, Мэттью Вон, Мэттью Вон,</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Композитор:</div>
                          <div class="content">
                            <div class="text">Джордж Ричмонд</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Художник:</div>
                          <div class="content">
                            <div class="text">Даррен Гилфорд, Грант Армстронг, Джо Ховард, Джо Ховард,</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Монтаж:</div>
                          <div class="content">
                            <div class="text">Эдди Хэмилтон</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Премьера (мир):</div>
                          <div class="content">
                            <div class="text">20 сентября 2017</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Премьера (РФ):</div>
                          <div class="content">
                            <div class="text">21 сентября 2017</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Возраст:</div>
                          <div class="content">
                            <div class="text">18+</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Время:</div>
                          <div class="content">
                            <div class="text">141 мин. / 02:21</div>
                          </div>
                        </div>
                      </div>
                      <!--Вывод на мобиле-->
                      <div class="movie-info-fields mobile">
                        <div class="field-item">
                          <div class="label">Год:</div>
                          <div class="content">
                            <div class="links">
                              <a href="#"><span>2017</span></a>
                            </div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Жанр:</div>
                          <div class="content">
                            <div class="links">
                              <a href="#"><span>боевик</span></a>, <a href="#"><span>комедия</span></a>, <a href="#"><span>приключения</span></a>, ...
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="field-collapse-info-btn show-for-small-only">
                        <a class="collapse-movie-info-btn" data-shown-text="Все характеристики" data-hide-text="Свернуть" role="button" data-toggle="collapse" href="#collapseMobileInfo" aria-expanded="false" aria-controls="collapseMobileInfo">Все характеристики</a>
                      </div>
                      <!--Конец вывода на мобиле-->
                    </div>
                  </div>
                  <!--Вывод на мобиле-->
                  <div class="movie-description collapse" id="collapseMobileInfo">
                    <div class="well">
                      <div class="movie-info-fields mobile other-fields">
                        <div class="field-item">
                          <div class="label">Страна:</div>
                          <div class="content">
                            <div class="links">
                              <a href="#"><span>Великобритания</span></a>, <a href="#"><span>США</span></a>
                            </div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Слоган:</div>
                          <div class="content">
                            <div class="text">«Reports of my death have been greatly exaggerated»</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Режиссер:</div>
                          <div class="content">
                            <div class="text">Мэттью Вон</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Сценарий:</div>
                          <div class="content">
                            <div class="text">Джейн Голдман, Мэттью Вон, Марк Миллар, Марк Миллар, Марк Миллар,</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Продюсер:</div>
                          <div class="content">
                            <div class="text">Джейн Голдман, Мэттью Вон, Марк Миллар, Марк Миллар,</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Опреатор:</div>
                          <div class="content">
                            <div class="text">Адам Болинг, Дэвид Рейд, Мэттью Вон, Мэттью Вон, Мэттью Вон,</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Композитор:</div>
                          <div class="content">
                            <div class="text">Джордж Ричмонд</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Художник:</div>
                          <div class="content">
                            <div class="text">Даррен Гилфорд, Грант Армстронг, Джо Ховард, Джо Ховард,</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Монтаж:</div>
                          <div class="content">
                            <div class="text">Эдди Хэмилтон</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Премьера (мир):</div>
                          <div class="content">
                            <div class="text">20 сентября 2017</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Премьера (РФ):</div>
                          <div class="content">
                            <div class="text">21 сентября 2017</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Возраст:</div>
                          <div class="content">
                            <div class="text">18+</div>
                          </div>
                        </div>
                        <div class="field-item">
                          <div class="label">Время:</div>
                          <div class="content">
                            <div class="text">141 мин. / 02:21</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Конец вывода на мобиле-->
                  <div class="field-movie-description">
                    <div class="field-label">Описание</div>
                    <div class="movie-description collapse" id="collapseMovieDescription" style="min-height: 156px;">
                      <div class="well">
                        <p itemprop="description">Когда штаб-квартиры секретной службы «Kingsman» уничтожены, и весь мир оказался в заложниках у неизвестных, британские суперагенты обнаруживают, что в один день вместе с их организацией была еще создана американская разведка — «Statesman». Теперь эти две элитные спецслужбы должны объединиться и бросить вызов общему безжалостному врагу, чтобы спасти мир, то есть заняться тем, что для Эггси становится обычным делом.  Теперь эти две элитные спецслужбы должны объединиться и бросить вызов общему безжалостному врагу, чтобы спасти мир, то есть заняться тем, что для Эггси становится обычным делом. Когда штаб-квартиры секретной службы... уничтожены, и весь мир оказался в заложниках у неизвестных, британские суперагенты уничтожены, и весь мир оказался в заложниках у неизвестных, британские суперагенты</p>
                      </div>
                    </div>
                    <div class="box-btn">
                      <a class="collapse-movie-description-btn" data-shown-text="Читать дальше" data-hide-text="Свернуть описание" role="button" data-toggle="collapse" href="#collapseMovieDescription" aria-expanded="false" aria-controls="collapseMovieDescription">Читать дальше</a>
                    </div>
                  </div>
                </div>
                <div class="block-movie-gallery">
                  <h2 class="title">Трейлеры и кадры</h2>
                  <!--movie-gallery-wrapper выводить только на десктопах-->
                  <div class="movie-gallery-wrapper">
                    <div class="galleryControls">
                      <a class="slidePrev" href="#">
                        <span class="box"><span class="help"><span class="icon-arrow-up"></span></span></span>
                      </a>
                      <a class="slideNext" href="#">
                        <span class="box"><span class="help"><span class="icon-arrow-down"></span></span></span>
                      </a>
                    </div>
                    <ul class="movie-gallery-slider">
                      <li class="item lightgallery-video" data-src="https://www.youtube.com/watch?v=gZL0ihbvNg4" style="background-image: url('images/movie/gallery/img-m-1.jpg')">
                        <img src="images/movie/gallery/img-m-1.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-video" data-src="https://www.youtube.com/watch?v=1hxYR9bZf5U" style="background-image: url('images/movie/gallery/img-m-2.jpg')">
                        <img src="images/movie/gallery/img-m-2.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-3.jpg" style="background-image: url('images/movie/gallery/img-m-3.jpg')">
                        <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                      <li class="item lightgallery-photo" data-src="images/movie/gallery/img-4.jpg" style="background-image: url('images/movie/gallery/img-m-4.jpg')">
                        <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                      </li>
                    </ul>
                  </div>
                  <!--movie-gallery выводить только мобильном и планшете-->
                  <div class="movie-gallery" id="movieGallery">
                    <a class="item lightgallery-video" href="https://www.youtube.com/watch?v=gZL0ihbvNg4">
                      <img src="images/movie/gallery/img-m-1.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-video" href="https://www.youtube.com/watch?v=1hxYR9bZf5U">
                      <img src="images/movie/gallery/img-m-2.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-photo" href="images/movie/gallery/img-3.jpg">
                      <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-photo" href="images/movie/gallery/img-4.jpg">
                      <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-photo" href="images/movie/gallery/img-3.jpg">
                      <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-photo" href="images/movie/gallery/img-4.jpg">
                      <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-photo" href="images/movie/gallery/img-3.jpg">
                      <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-photo" href="images/movie/gallery/img-4.jpg">
                      <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-photo" href="images/movie/gallery/img-3.jpg">
                      <img src="images/movie/gallery/img-m-3.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                    <a class="item lightgallery-photo" href="images/movie/gallery/img-4.jpg">
                      <img src="images/movie/gallery/img-m-4.jpg" alt="Kingsman: Золотое кольцо" title="Kingsman: Золотое кольцо">
                    </a>
                  </div>
                </div>
              </div>
              <div class="block-recommendations">
                <h2 class="block-title">Рекомендации</h2>
                <div class="block-content">
                  <div class="recommendations-slider violet-arrows">
                    <div class="item">
                      <div class="item-cart-movie">
                        <div class="box-top">
                          <div class="field-img">
                            <a href="#"><img src="images/movie/img-1.jpg" alt="img"></a>
                          </div>
                          <div class="box-rating">
                            <div class="field-rating">
                              <span>8.5</span>
                            </div>
                            <div class="rating-info">
                              <div class="label">рейтинг на основе:</div>
                              <div class="rating-fields">
                                <div class="item kinopoisk"><a href="#"><span class="icon-kinopoisk"></span></a>9.0</div>
                                <div class="item imdb"><a href="#"><span class="icon-Imdb"></span></a>9.0</div>
                                <div class="item tomatoes"><a href="#"><span class="icon-tomatoes"></span></a>85%</div>
                                <div class="item metacritic"><a href="#"><span class="icon-metacritic"></span></a>85%</div>
                              </div>
                            </div>
                          </div>
                          <div class="box-links">
                            <ul class="links">
                              <li><a class="btn-tralier btn icon-left" href="#lightGallery-1"><span class="help"><span class="icon-traler"></span>Трейлер</span></a></li>
                              <li><a class="btn icon-left" href="#"><span class="help"><span class="icon-watch"></span>Смотреть</span></a></li>
                              <li><a class="btn icon-left" href="#"><span class="help"><span class="icon-download"></span>Скачать</span></a></li>
                            </ul>
                          </div>
                          <div class="field-quality">
                            <span>HDRip</span>
                          </div>
                        </div>
                        <div class="box-info">
                          <h2><a href="#" title="Престиж"><span>Престиж</span></a></h2>
                          <div class="field-genre">Фантастика, 2006</div>
                          <div class="field-description">
                            <div class="cuScroll">
                              <p>Роберт и Альфред — фокусники-иллюзионисты, которые на рубеже XIX и XX веков соперничали друг с другом в Лондоне. С годами их дружеская конкуренция на профессиональной почве перерастает в настоящую войну. Они готовы на все, чтобы выведать друг у друга секреты фантастических трюков и сорвать их исполнение...</p>
                            </div>
                          </div>
                        </div>
                        <div class="item-gallery" id="lightGallery-1" title="Трейлеры и кадры «Престиж»" data-link="https://www.youtube.com/">
                          <a class="item lightgallery-video" href="https://www.youtube.com/watch?v=0B6O17m9sWE">
                            <img src="images/gallery/img-m-0.jpg" alt="Престиж" title="Престиж">
                          </a>
                          <a class="item lightgallery-photo" href="images/gallery/img-1.jpg">
                            <img src="images/gallery/img-m-1.jpg" alt="Престиж" title="Престиж">
                          </a>
                          <a class="item lightgallery-photo" href="images/gallery/img-2.jpg">
                            <img src="images/gallery/img-m-2.jpg" alt="Престиж" title="Престиж">
                          </a>
                          <a class="item lightgallery-photo" href="images/gallery/img-3.jpg">
                            <img src="images/gallery/img-m-3.jpg" alt="Престиж" title="Престиж">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="item-cart-movie">
                        <div class="box-top">
                          <div class="field-img">
                            <a href="#"><img src="images/movie/img-2.jpg" alt="img"></a>
                          </div>
                          <div class="box-rating">
                            <div class="field-rating">
                              <span>7.1</span>
                            </div>
                            <div class="rating-info">
                              <div class="label">рейтинг на основе:</div>
                              <div class="rating-fields">
                                <div class="item kinopoisk"><a href="#"><span class="icon-kinopoisk"></span></a>9.0</div>
                                <div class="item imdb"><a href="#"><span class="icon-Imdb"></span></a>9.0</div>
                                <div class="item tomatoes"><a href="#"><span class="icon-tomatoes"></span></a>85%</div>
                                <div class="item metacritic"><a href="#"><span class="icon-metacritic"></span></a>85%</div>
                              </div>
                            </div>
                          </div>
                          <div class="box-links">
                            <ul class="links">
                              <li><a class="btn-tralier btn icon-left" href="#lightGallery-2"><span class="help"><span class="icon-traler"></span>Трейлер</span></a></li>
                              <li><a class="btn icon-left" href="#"><span class="help"><span class="icon-watch"></span>Смотреть</span></a></li>
                              <li><a class="btn icon-left" href="#"><span class="help"><span class="icon-download"></span>Скачать</span></a></li>
                            </ul>
                          </div>
                          <div class="field-quality">
                            <span>HDRip</span>
                          </div>
                        </div>
                        <div class="box-info">
                          <h2><a href="#" title="Престиж"><span>Форсаж 7</span></a></h2>
                          <div class="field-genre">Боевик, 2015</div>
                          <div class="field-description">
                            <div class="cuScroll">
                              <p>Они покорили Токио и Рио, Лос-Анджелес и Лондон. Но мир больше не играет по их правилам. Зной арабских пустынь, неприлично высокие небоскребы, миллионы долларов на колесах и очень, очень знаменитый злодей. Скорость не знает границ.</p>
                            </div>
                          </div>
                        </div>
                        <div class="item-gallery" id="lightGallery-2" title="Трейлеры и кадры «Форсаж 7»" data-link="https://test.front-end.if.ua/">
                          <a class="item lightgallery-video" href="https://www.youtube.com/watch?v=0B6O17m9sWE">
                            <img src="images/gallery/img-m-0.jpg" alt="Форсаж 7" title="Форсаж 7">
                          </a>
                          <a class="item lightgallery-photo" href="images/gallery/img-1.jpg">
                            <img src="images/gallery/img-m-1.jpg" alt="Форсаж 7" title="Форсаж 7">
                          </a>
                          <a class="item lightgallery-photo" href="images/gallery/img-2.jpg">
                            <img src="images/gallery/img-m-2.jpg" alt="Форсаж 7" title="Форсаж 7">
                          </a>
                          <a class="item lightgallery-photo" href="images/gallery/img-3.jpg">
                            <img src="images/gallery/img-m-3.jpg" alt="Форсаж 7" title="Форсаж 7">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="recommendations-movie" id="recommendations-movie">
                    <div class="recommendations-collapse collapse" id="collapseMobileRecommendations">
                      <div class="well">
                        <div class="recommendations-list">
                          <div class="item">
                            <div class="item-cart-movie">
                              <div class="box-top">
                                <div class="field-img">
                                  <a href="#"><img src="images/movie/img-1.jpg" alt="img"></a>
                                </div>
                                <div class="box-rating">
                                  <div class="field-rating">
                                    <span>8.5</span>
                                  </div>
                                  <div class="rating-info">
                                    <div class="label">рейтинг на основе:</div>
                                    <div class="rating-fields">
                                      <div class="item kinopoisk"><a href="#"><span class="icon-kinopoisk"></span></a>9.0</div>
                                      <div class="item imdb"><a href="#"><span class="icon-Imdb"></span></a>9.0</div>
                                      <div class="item tomatoes"><a href="#"><span class="icon-tomatoes"></span></a>85%</div>
                                      <div class="item metacritic"><a href="#"><span class="icon-metacritic"></span></a>85%</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="box-links">
                                  <ul class="links">
                                    <li><a class="btn-tralier btn icon-left" href="#lightGallery-1"><span class="help"><span class="icon-traler"></span>Трейлер</span></a></li>
                                    <li><a class="btn icon-left" href="#"><span class="help"><span class="icon-watch"></span>Смотреть</span></a></li>
                                    <li><a class="btn icon-left" href="#"><span class="help"><span class="icon-download"></span>Скачать</span></a></li>
                                  </ul>
                                </div>
                                <div class="field-quality">
                                  <span>HDRip</span>
                                </div>
                              </div>
                              <div class="box-info">
                                <h2><a href="#" title="Престиж"><span>Престиж</span></a></h2>
                                <div class="field-genre">Фантастика, 2006</div>
                                <div class="field-description">
                                  <div class="cuScroll">
                                    <p>Роберт и Альфред — фокусники-иллюзионисты, которые на рубеже XIX и XX веков соперничали друг с другом в Лондоне. С годами их дружеская конкуренция на профессиональной почве перерастает в настоящую войну. Они готовы на все, чтобы выведать друг у друга секреты фантастических трюков и сорвать их исполнение...</p>
                                  </div>
                                </div>
                              </div>
                              <div class="item-gallery" id="lightGallery-1" title="Трейлеры и кадры «Престиж»" data-link="https://www.youtube.com/">
                                <a class="item lightgallery-video" href="https://www.youtube.com/watch?v=0B6O17m9sWE">
                                  <img src="images/gallery/img-m-0.jpg" alt="Престиж" title="Престиж">
                                </a>
                                <a class="item lightgallery-photo" href="images/gallery/img-1.jpg">
                                  <img src="images/gallery/img-m-1.jpg" alt="Престиж" title="Престиж">
                                </a>
                                <a class="item lightgallery-photo" href="images/gallery/img-2.jpg">
                                  <img src="images/gallery/img-m-2.jpg" alt="Престиж" title="Престиж">
                                </a>
                                <a class="item lightgallery-photo" href="images/gallery/img-3.jpg">
                                  <img src="images/gallery/img-m-3.jpg" alt="Престиж" title="Престиж">
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="item-cart-movie">
                              <div class="box-top">
                                <div class="field-img">
                                  <a href="#"><img src="images/movie/img-2.jpg" alt="img"></a>
                                </div>
                                <div class="box-rating">
                                  <div class="field-rating">
                                    <span>7.1</span>
                                  </div>
                                  <div class="rating-info">
                                    <div class="label">рейтинг на основе:</div>
                                    <div class="rating-fields">
                                      <div class="item kinopoisk"><a href="#"><span class="icon-kinopoisk"></span></a>9.0</div>
                                      <div class="item imdb"><a href="#"><span class="icon-Imdb"></span></a>9.0</div>
                                      <div class="item tomatoes"><a href="#"><span class="icon-tomatoes"></span></a>85%</div>
                                      <div class="item metacritic"><a href="#"><span class="icon-metacritic"></span></a>85%</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="box-links">
                                  <ul class="links">
                                    <li><a class="btn-tralier btn icon-left" href="#lightGallery-2"><span class="help"><span class="icon-traler"></span>Трейлер</span></a></li>
                                    <li><a class="btn icon-left" href="#"><span class="help"><span class="icon-watch"></span>Смотреть</span></a></li>
                                    <li><a class="btn icon-left" href="#"><span class="help"><span class="icon-download"></span>Скачать</span></a></li>
                                  </ul>
                                </div>
                                <div class="field-quality">
                                  <span>HDRip</span>
                                </div>
                              </div>
                              <div class="box-info">
                                <h2><a href="#" title="Престиж"><span>Форсаж 7</span></a></h2>
                                <div class="field-genre">Боевик, 2015</div>
                                <div class="field-description">
                                  <div class="cuScroll">
                                    <p>Они покорили Токио и Рио, Лос-Анджелес и Лондон. Но мир больше не играет по их правилам. Зной арабских пустынь, неприлично высокие небоскребы, миллионы долларов на колесах и очень, очень знаменитый злодей. Скорость не знает границ.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="item-gallery" id="lightGallery-2" title="Трейлеры и кадры «Форсаж 7»" data-link="https://test.front-end.if.ua/">
                                <a class="item lightgallery-video" href="https://www.youtube.com/watch?v=0B6O17m9sWE">
                                  <img src="images/gallery/img-m-0.jpg" alt="Форсаж 7" title="Форсаж 7">
                                </a>
                                <a class="item lightgallery-photo" href="images/gallery/img-1.jpg">
                                  <img src="images/gallery/img-m-1.jpg" alt="Форсаж 7" title="Форсаж 7">
                                </a>
                                <a class="item lightgallery-photo" href="images/gallery/img-2.jpg">
                                  <img src="images/gallery/img-m-2.jpg" alt="Форсаж 7" title="Форсаж 7">
                                </a>
                                <a class="item lightgallery-photo" href="images/gallery/img-3.jpg">
                                  <img src="images/gallery/img-m-3.jpg" alt="Форсаж 7" title="Форсаж 7">
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="field-mobile-collapse-recommendations">
                      <a class="btn violet-fill" role="button" data-toggle="collapse" href="#collapseMobileRecommendations" aria-expanded="false" aria-controls="collapseMobileRecommendations">
                        <span class="box">
                          <span class="help">показать ещё<span class="icon-arrow-down"></span></span>
                        </span>
                      </a>
                    </div>
                    <div class="btn-load-more">
                      <a href="#" class="btn violet-fill">
                      <span class="box">
                        <span class="help">показать ещё<span class="icon-arrow-down"></span></span>
                      </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="page-reviews clearfix" data-magellan-destination="reviews-movie" id="reviews-movie">
                <div class="row">
                  <div class="small-12 medium-8 large-9 columns">
                    <div class="block-movie-comments">
                      <h2 class="block-title">Комментарии</h2>
                    </div>
                  </div>
                  <div class="box-promo small-12 medium-4 large-3 columns">
                    <div class="promo" style="margin-bottom: 22px;">
                      <img src="images/promo-2.png" alt="">
                    </div>
                    <div class="promo">
                      <img src="images/promo-3.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<nav id="mobile-nav">
  <div>
    <div class="field-select">
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
    </div>
    <div class="field-select">
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
    </div>
    <ul>
      <li><a href="#">Коллекции</a></li>
      <li><a href="#">Новинки</a></li>
    </ul>
    <div class="field-link">
      <a href="#" class="btn"><span class="help">Случайный фильм</span></a>
    </div>
  </div>
</nav>

<footer role="contentinfo">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <div class="l-footer">
        <div class="box-breadcrumbs">
          <ul class="breadcrumbs">
            <li>
              <a href="/"><span>Главная</span></a>
            </li>
            <li class="current">
              <a href="#"><span>Kingsman: Золотое кольцо</span></a>
            </li>
          </ul>
        </div>
        <div class="top-line clearfix">
          <div class="logo">
            <a href="/" class="logotype" title=""><img src="images/logo.svg" alt=""></a>
          </div>
          <div class="copyright">Copyright © 2017 Fuxy.tv</div>
        </div>
        <div class="second-line clearfix">
          <div class="block-nav">
            <ul class="menu">
              <li><a href="#"><span>Соглашение</span></a></li>
              <li><a href="#"><span>Правообладателям</span></a></li>
              <li><a href="#"><span>Коллекции</span></a></li>
              <li><a href="#"><span>Новинки</span></a></li>
            </ul>
          </div>
          <div class="social-links">
            <ul class="social">
              <li><a class="vk" href="#"><span class="icon-vk"></span></a></li>
              <li><a class="twitter" href="#"><span class="icon-twitter"></span></a></li>
              <li><a class="instagram" href="#"><span class="icon-telegram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="block-text">
          <p>Все используемые аудиовизуальные материалы, представленные на данном сайте, являются собственностью их изготовителя (владельца прав) и охраняются международными правовыми конвенциями. Эти материалы предназначены только для ознакомления - для прочих целей Вы должны купить лицензионную запись.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" class="scrollToTop">
  <span class="box">
    <span class="help"><span class="icon-double-top"></span></span>
  </span>
</a>


<script src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/fuxy.lib.min.js"></script>
<script type="text/javascript" src="js/lightGallery/dist/js/lightgallery-all.js"></script>
<script type="text/javascript" src="js/bundle.js"></script>

</body>
</html>
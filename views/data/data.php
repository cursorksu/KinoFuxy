<?php

$pages[0] = (object) array(
  'href' => '/collections', 
  'title' => 'Collections page', 
  'path' => '/views/pages/collections.php', 
  'status' => (object) array(
    '1' => 'archived',
  ),
  'task' => null
);

$pages[1] = (object) array(
  'href' => '/types', 
  'title' => 'Type of collections', 
  'path' => '/views/pages/types.php', 
  'status' => (object) array(
    '1' => 'archived',
  ),
  'task' => (object) array(
    '[Жалобы и Предложить коллекцию/Предложить фильм в коллекцию]' => '//trello.com/c/7lEgDwtH/43',
    '[Тип коллекции]' => '//trello.com/c/hZGiU6wo/44'
  )
);

$pages[2] = (object) array(
  'href' => '/movie', 
  'title' => 'Movie — links above player', 
  'path' => '/views/pages/movie.php', 
  'status' => (object) array(
    '1' => 'archived',
  ),
  'task' => null
);

$pages[3] = (object) array(
  'href' => '/type-collection-detail', 
  'title' => 'Detail of type of collection', 
  'path' => '/views/pages/types_detail.php', 
  'status' => (object) array(
    '1' => 'done',
    '2' => 'need-approval'
  ),
  'task' => (object) array(
    '[Деталка коллекции] Верстка новой страницы' => '//trello.com/c/JoJvsoIa/48'
  )
);

$pages[4] = (object) array(
  'href' => '/detail-sugest-block', 
  'title' => '1) [Деталка] Вернуть для Украины рекламный баннер справа; 2) [Жалобы и Предложить коллекцию/Предложить фильм в коллекцию] Перерисовать окно; 3) [Характеристики фильма] Вывод кода; 4)[Деталка] Объединить 2 слайдера', 
  'path' => '/views/pages/movie_suggest.php', 
  'status' => (object) array(
    '1' => 'done',
    '2' => 'need-approval'
  ),
  'task' => (object) array(
    '[Деталка] Вернуть для Украины рекламный баннер справа' => 'https://trello.com/c/J83pjJQL/53',
    '[Жалобы и Предложить коллекцию/Предложить фильм в коллекцию] Перерисовать окно' => 'https://trello.com/c/7lEgDwtH/43',
    '[Характеристики фильма] Вывод кода' => 'https://trello.com/c/HaW6ekoc/49',
    '[Деталка] Объединить 2 слайдера' => 'https://trello.com/c/OoBclYYU/51'
  )
);

$pages = array_reverse($pages);

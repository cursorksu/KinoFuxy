<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Fuxy.tv</title>

  <!-- favcon part -->
  <?php include('./views/partials/_favicon.php');?>

  <!-- seo meta -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="copyright" content="(c)">

  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700|Roboto:300,400&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="js/lightGallery/dist/css/lightgallery.min.css" />
  <link rel="stylesheet" href="css/fuxy.min.css" />

  <?php
    // this need for getting fresh dinamic bundle name
    include_once('./scripts/get_bundle_name.php');
  ?>

  <!-- collections pages styles -->
  <link rel="stylesheet" href="<?php echo get_bundle_name()['css']; ?>">

  <!--[if gte IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- other meta -->
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"
  />
  <meta name="HandheldFriendly" content="True" />
  <meta http-equiv="Cache-Control" content="no-cache" />
  <meta http-equiv="cleartype" content="on" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="application-name" content="Title" />
  <meta name="msapplication-tooltip" content="Description" />
  <meta name="msapplication-window" content="width=400;height=300" />
  <meta http-equiv="imagetoolbar" content="no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="msthemecompatible" content="no" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="format-detection" content="address=no" />
</head>

<body>
  <div class="wrapper">
    <!-- header part -->
    <header role="presentation">
      <?php include('./views/partials/_header.php') ?>
    </header>
    <main role="main" class="main">
      <div class="l-main">
        <div class="page-category socials-bottom">

          <!-- collections index content -->
          <?php include('./views/content/types_content.php'); ?>
        </div>
      </div>
    </main>
  </div>

  <!-- mobile nav part -->
  <nav id="mobile-nav">
    <?php
      include('./views/partials/_mobile_nav.php');
    ?> 
  </nav>

  <!-- footer part -->
  <footer role="contentinfo">
    <?php
      include('./views/partials/_footer.php');
    ?>
  </footer>

  <!-- scroll to top part -->
  <?php
    include('./views/partials/_scroll_to_top.php');
  ?>

  <script src="js/vendor/jquery.js"></script>
  <script type="text/javascript" src="js/fuxy.lib.min.js"></script>
  <script type="text/javascript" src="js/lightGallery/dist/js/lightgallery-all.js"></script>
  <script type="text/javascript" src="js/bundle.js"></script>
  <script src="<?php echo get_bundle_name()['js']; ?>"></script>

  <script>

    var cb = function() {
      window.proposeCollection = grecaptcha.render('propose-collection-captcha', {
        'sitekey' : '6Lfwb2AUAAAAAH843cSHvNbEcb_18vyRZvJjkJeg',
        'callback': window.check
      });
    };

    window.formSubmitter('form-propose-collection', window.proposeCollection);

    function myFunction() {
      console.log('hello');
    }

  </script>

  <script src="https://www.google.com/recaptcha/api.js?onload=cb&render=explicit" async defer></script>

</body>

</html>
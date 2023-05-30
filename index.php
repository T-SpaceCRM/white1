<?php
// Query params are: undefined 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://travelia-me.ru/', 'fsXFMZdqpdFyxv7k');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
     
    <title>Главная</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Page Content
    ================================================== -->
    <!-- Hero -->

    <section class="hero" style="background-image: url('./assets/images/bulksplash-pinkmarina-9bchjkanyzg.jpg')">
      <div class="container text-center">
        <div class="col-md-12">
          <h1>Популярное</h1>
        </div>
      </div>
    </section>
    <!-- /Hero -->

    <!-- Header -->
    <header id="header">
      <div class="container" style="display: flex; justify-content: space-between">
        <div id="logo" class="pull-left">
          <a href="index.php" style="color: #fff; font-size: 15px">Бродячая Рапсодия</a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="index.php">Главная</a></li>
            <li><a href="blog.php">Статьи</a></li>
            <li><a href="contact.php">Контакты</a></li>
            <li><a href="policy.php">Политика конфиденциальности</a></li>
            <li><a href="terms.php">Условия и положения</a></li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->

    <!-- Team -->

    <section class="team" id="team">
      <div class="container">
        <h2 class="text-center">Статьи</h2>
        <div class="row">
          
          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="nD0BijcFqRmeTC.php"
                ><img alt="" class="team-img" src="./assets/images/bulksplash-pinkmarina-9bchjkanyzg.jpg" />
                <div class="card-title-wrap">
                  <span class="card-title">Полезные советы для начинающих...</span>
                </div>

                <div class="team-over">
                  <nav class="social-nav">
                    <a href="nD0BijcFqRmeTC.php">Читать далее</a>
                  </nav>
                </div>
              </a>
            </div>
          </div>
          

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="rbNO3gIjDKYrERzcjkRUKYy7GH62g.php"
                ><img alt="" class="team-img" src="./assets/images/bulksplash-knipszimmer-w6ax4z6x_rs.jpg" />
                <div class="card-title-wrap">
                  <span class="card-title">Подарите себе незабываемое путеше...</span>
                </div>

                <div class="team-over">
                  <nav class="social-nav">
                    <a href="rbNO3gIjDKYrERzcjkRUKYy7GH62g.php">Читать далее</a>
                  </nav>
                </div>
              </a>
            </div>
          </div>
          

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="33f339e720f4ccb839bf51a4ab5b8c79.php"
                ><img alt="" class="team-img" src="./assets/images/bulksplash-sadswim-3nca3tbae5i.jpg" />
                <div class="card-title-wrap">
                  <span class="card-title">7 бескомпромиссных советов для начинающих</span>
                </div>

                <div class="team-over">
                  <nav class="social-nav">
                    <a href="33f339e720f4ccb839bf51a4ab5b8c79.php">Читать далее</a>
                  </nav>
                </div>
              </a>
            </div>
          </div>
          

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="73315ce28bc4510a6ebc62daab1b1194.php"
                ><img alt="" class="team-img" src="./assets/images/bulksplash-myfreeapps_com-1ix7s1zxg7u.jpg" />
                <div class="card-title-wrap">
                  <span class="card-title">Начните свое приключение сейчас...</span>
                </div>

                <div class="team-over">
                  <nav class="social-nav">
                    <a href="73315ce28bc4510a6ebc62daab1b1194.php">Читать далее</a>
                  </nav>
                </div>
              </a>
            </div>
          </div>
          

        </div>
      </div>
    </section>
    <!-- /Team -->
    <!-- @component: footer -->

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Контакты</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12">
            <div class="info text-center">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>032436, Воронежская область, город Серебряные Пруды, спуск Чехова, 05</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>ylian.denisova@rozkova.ru</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+2327185059870</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="site-footer">
      <div class="bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-xs-12 text-lg-left text-center">
              <p class="copyright-text text-center">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Copyright
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

    <div class="cookie-banner">
      <p style="color: #000000">
        Сайт использует файлы cookie. Они позволяют узнавать вас и получать информацию о вашем пользовательском опыте.Продолжая просмотр сайта, я соглашаюсь с использованием файлов cookie владельцем сайта в соответствии с
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >Политикой cookie</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/tether/js/tether.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/easing/easing.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/lockfixed/lockfixed.min.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>
  </body>
</html>

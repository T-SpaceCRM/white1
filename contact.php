<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
     
    <title>Контакты</title>
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
          <h1>Контакты</h1>
        </div>
      </div>
    </section>
    <!-- /Hero -->

    <!-- Header -->
    <header id="header">
      <div class="container" style="display: flex; justify-content: space-between">
        <div id="logo" class="pull-left">
          <a href="index.php" style="color: #fff; font-size: 15px">Страна чудес путника</a>
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

    <section id="contact">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12">
            <div class="info text-center">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>245230, Рязанская область, город Наро-Фоминск, пр. Ладыгина, 96</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>irina.zimin@bk.ru</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+5168316405317</p>
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

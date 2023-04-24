<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
     
    <title>Контакты</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
    <!-- Tweaks for older IEs-->
    <link
      rel="stylesheet"
      href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen"
    />
  </head>
  <!-- body -->
  <body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
      <!-- header inner -->
      <div class="head_top">
        <div class="container">
          <div class="header">
            <div class="row" style="align-items: center">
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                  <div class="center-desk">
                    <div class="logo">
                      <a href="index.php">Евро</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark">
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarsExample04"
                    aria-controls="navbarsExample04"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto" style="flex-wrap: wrap">
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Главная</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blog.php">Статьи</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Контакты</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="policy.php">Политика конфиденциальности</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="terms.php">Условия и положения</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- end header inner -->
        <!-- end header -->
        <!-- banner -->
        <section class="banner_main">
          <div class="container">
            <div class="row d_flex">
              <div class="col-md-12">
                <div class="text-bg">
                  <h1>Контакты</h1>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </header>
    <!-- end banner -->

    <!-- testimonial -->
    <div class="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage">
              <p class="mb-4 mt-5">279289, Пензенская область, город Серпухов, пр. Балканская, 02</p>
              <p class="mb-4">+9530287351839</p>
              <p class="mb-4">dobryny47@safonova.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end testimonial -->
    <!--  footer -->
    <footer>
      <div class="footer">
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p>
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
      </div>
    </footer>
    <!-- end footer -->
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
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  </body>
</html>

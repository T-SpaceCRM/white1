<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

     
    <title>Контакты</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="container">
      <section class="tm-section-head" id="top">
        <header id="header" class="text-center tm-text-gray">
          <h1>Прогулка пилигрима</h1>
        </header>

        <nav class="navbar narbar-light">
          <a class="navbar-brand tm-text-gray" href="#"> </a>
          <button
            type="button"
            id="nav-toggle"
            class="navbar-toggler collapsed"
            data-toggle="collapse"
            data-target="#mainNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon">
              <i class="fa fa-navicon tm-fa-toggler-icon"></i>
            </span>
          </button>
          <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link tm-text-gray" href="index.php">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tm-text-gray" href="blog.php">Статьи</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tm-text-gray" href="contact.php">Контакты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tm-text-gray" href="privacy.php">Политика конфиденциальности</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tm-text-gray" href="terms.php">Условия и положения</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="navbar navbar-default navbar-fixed-top">
          <a href="index.php" class="navbar-brand"></a>
          <botton class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </botton>
        </div>

        <div class="collapse navbar-collapse" id="mydropdown">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Главная</a></li>
            <li><a href="blog.php">Статьи</a></li>
            <li><a href="contact.php">Контакты</a></li>
            <li><a href="privacy.php">Политика конфиденциальности</a></li>
            <li><a href="terms.php">Условия и положения</a></li>
          </ul>
        </div>
      </section>

      <section class="row" id="tm-section-1">
        <div class="col-lg-12 tm-slider-col">
          <div class="tm-img-slider">
            <div class="tm-img-slider-item">
              <img src="./assets/images/bulksplash-picsbyjameslee-uti8tqgkr1i.jpg" alt="Image" class="tm-slider-img" />
            </div>
          </div>
        </div>
      </section>

      <section class="tm-section-6" id="tm-section-6">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-xs-12">
            <div class="contact_message">
              <form action="" method="post" class="contact-form">
                <div class="row mb-2">
                  <div class="form-group col-xl-12 pl-xl-1">
                    <input
                      type="email"
                      id="contact_email"
                      name="contact_email"
                      class="form-control"
                      required
                    />
                  </div>
                </div>

                <a href="thanks.php" class="btn tm-btn-submit float-right btn-big">
                  Подписаться
                </a>
              </form>
            </div>
          </div>

          <div class="col-lg-5 col-md-5 col-xs-12 tm-contact-right">
            <div class="tm-address-box">
              <h2 class="mb-4">Контакты</h2>
              <address>025997, Иркутская область, город Павловский Посад, пл. Гагарина, 28</address>
            </div>
          </div>
        </div>
      </section>
      <footer class="mt-5">
        <p class="text-center">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          Copyright
        </p>
      </footer>
    </div>

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

    <!-- load JS files -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
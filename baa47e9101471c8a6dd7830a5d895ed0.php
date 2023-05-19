<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
     
    <title>Статья</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

  <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="navbar">
      <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="index.php"> Путь Профессионала </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
            <li class="nav-item"><a class="nav-link" href="index.php">Главная</a></li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Статьи</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Контакты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="privacy.php">Политика конфиденциальности</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="terms.php">Условия и положения</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- START SOFTWERE-HOME -->
    <section class="softwere-home" id="home" style="background-image: url('./assets/images/bulksplash-alicekat-z9f_yk4nmf8.jpg')">
      <div class="bg-overlay"></div>
      <div class="home-center">
        <div class="home-desc-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="softwere-home-content text-white mt-4">
                  <h4 class="softwere-home-title text-uppercase line-height_1_4 letter-spacing_4">
                    Статья
                  </h4>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="softwere-home-shape-img">
                <img
                  src="images/home-softwere-shape.png"
                  alt=""
                  class="img-fluid mx-auto d-block"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- START BLOG -->
    <section class="section blog" id="news">
      <div class="container">
        <div class="col mt-5 pt-3">
          <h3>Основные советы путешественникам для начинающих: как извлечь максимум пользы из своего путешествия</h3>
          <p><strong></strong> Путешествие может быть захватывающим, а иногда и ошеломляющим опытом, особенно для новичков. Независимо от того, путешествуете ли вы впервые или просто нуждаетесь в дополнительных советах, вот основные рекомендации по путешествиям, которые помогут сделать вашу следующую поездку максимально возможной. 

Во-первых, планируйте заранее! Изучите свой пункт назначения как можно подробнее, прежде чем покинуть дом; это гарантирует, что вы будете готовы ко всему, что встретится вам во время путешествия. Подумайте, какими видами деятельности вы хотите заняться, находясь там, и закажите их в заранее, если это необходимо (например, экскурсии). Обязательно также ознакомьтесь с визовыми требованиями, обменными курсами, местными обычаями / законами, чтобы иметь всю необходимую информацию перед отправлением в путешествие. 

Во-вторых, в путешествии упаковывайте вещи налегке, но с умом! Берите с собой только абсолютно необходимые вещи и оставьте место на случай каких-либо неожиданных покупок по пути. Возьмите с собой многоцелевые предметы одежды, такие как шарфы, которые можно использовать в качестве одеяла или средства защиты от солнца в зависимости от того, куда вы идете. Также подумайте о том, чтобы взять с собой универсальный адаптер питания с USB-портами, чтобы все устройства оставались заряженными в течение всего продолжительность поездки без использования нескольких адаптеров, занимающих место в багаже! 

В-третьих, не забывайте о безопасности! Прежде чем отправиться в какое-либо путешествие за границу, создайте копии важных документов, таких как паспорта и т.д., храните их отдельно друг от друга и сохраните одну цифровую копию в Интернете (например, на Google Диске) на случай, если что-то случится дома или вне дома соответственно. Кроме того, всегда полезно иметь под рукой контактные номера, например, номер посольства, адрес отеля / номер телефона и т.д., На случай, если что-то пойдет не так во время планирования поездки, тогда легче быстро получить помощь если понадобится!   Наконец - наслаждайтесь и делайте много фотографий – в конце концов, эти воспоминания останутся навсегда :)</p>
        </div>
      </div>
    </section>
    <!-- END BLOG -->

    <!-- START FOOTER -->
    <footer class="section-footer bg-softwere-footer">
      <div class="container">
        <div class="row mt-4 py-4">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="copy-rights text-white mb-0">
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
    <!-- END FOOTER -->

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

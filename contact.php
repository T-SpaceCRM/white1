<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ora theme tempalte">
    <meta name="author" content="NDT">
    <meta name="keywords" content="Ora theme template">

    <!-- Title Page-->
     
    <title>Треккинговые Путешествия</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/linearicons-free/css/linearicons-free.css" rel="stylesheet" media="all">
    <link href="vendor/elegant-icons/css/elegant-icons.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/lightbox/css/lightbox.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


</head>

<body class="page-wrapper">


<header class="header">
    <!-- header desktop-->
    <div class="header-primary header-fixed d-lg-block d-none">
        <div class="container-fluid">
            <div class="section-inner header-bar">
                <div class="header-bar-logo">
                    <a style="font-size: 26px;font-weight: bold;" class="logo-link" href="index.php">
                        Венчурная Перспектива
                    </a>
                </div>
                <div class="header-bar-menu">
                    <nav class="navbar-primary">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown"><a href="index.php" class="nav-link">Главная</a>
                            </li>
                            <li class="nav-item dropdown"><a href="blog.php"
                                                             class="nav-link">Статьи</a></li>
                            <li class="nav-item dropdown"><a href="contact.php" class="nav-link">Контакты</a>
                            </li>
                            <li class="nav-item dropdown"><a href="policy.php"
                                                             class="nav-link">Политика конфиденциальности</a></li>
                            <li class="nav-item"><a class="nav-link" href="terms.php">Условия и положения</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <!-- end header desktop-->

    <!-- header mobile-->

    <!-- end header mobile-->
</header>
    <!-- end heading page-->

    <!-- section contact-->
    <section class="section section-contact bg-white p-t-120 p-b-135">
        <div class="container">
            <div class="section-inner">

                <form class="co-form" action="thanks.php">
                    <div class="row co-form-input">
                        <div class="col-lg-6">
                            <div class="input-item">
                                <div class="input-title">
                                    <span class="input-label"> Новые телефона</span>
                                </div>
                                <input class="au-input au-input-border-light au-input-radius" >
                            </div>
                            <div class="input-item">
                                <div class="input-title">
                                    <span class="input-label"> Email</span>
                                </div>
                                <input class="au-input au-input-border-light au-input-radius" type="email" id="email" name="email">
                            </div>
                            <div class="input-item">
                                <div class="input-title">
                                    <span class="input-label"> Номер телефона</span>
                                </div>
                                <input class="au-input au-input-border-light au-input-radius" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-item">

                                <textarea  class="au-input au-input-border-light au-input-radius" style="height: 230px;margin-top: 27px;" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="co-form-btn">
                        <input type="checkbox" name="terms" value="check" required=""/>
                        <a href="policy.php" target="_blank">
                            Я прочитал и согласен с условиями пользовательского соглашения
                        </a>
                        <button class="au-btn au-btn-radius au-btn-primary" type="submit" >  Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end section contact-->

    <!-- Map start-->

    <!-- Map end-->

    <!-- footer-->
    <footer class="footer footer-primary bg-dark-2 p-t-30 p-b-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 fo-left">
                    <p class="fo-copy">@ 2017 All rights reserved</p>
                </div>

            </div>
        </div>
    </footer>
    <!-- end footer-->
    <div class='cookie-banner'>
        <p>
            Сайт использует файлы cookie. Они позволяют узнавать вас и получать информацию о вашем пользовательском опыте.Продолжая просмотр сайта, я соглашаюсь с использованием файлов cookie владельцем сайта в соответствии с <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Политикой cookie</a>
        </p>
        <button class='close-cookie'>&times;</button>
    </div>
    <script>
        window.onload = function () {
            $('.close-cookie').click(function () {
                $('.cookie-banner').fadeOut();
            })
        }
    </script>
    <script>
        let elems = document.querySelectorAll('.server-name');
        elems.forEach((elem) => {
            elem.innerHTML = window.location.hostname
        })
    </script>
    <div id="up-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/popper.js/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/lightbox/js/lightbox.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/wowjs/wow.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>

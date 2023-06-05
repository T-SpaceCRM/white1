<?php
// Query params are: undefined 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://camptrip.ru/', '8x37ztPG6jSXmXwM');
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

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="res-pack/js-pack/jqueryMar2Pol.file.min.js"></script>
        <script src="res-pack/js-pack/bootstrapMar2Pol.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">

        <title>«Расширьте возможности своего Traders' Triumph продвинутые учебные курсы по Форекс»</title>
        <meta property="og:title" content="«Расширьте возможности своего Traders' Triumph продвинутые учебные курсы по Форекс»" />
        <meta property="og:image" content="1690130026.webp"/>
        
        <meta property="og:description" content="«Расширьте возможности своего Traders' Triumph продвинутые учебные курсы по Форекс»">
        <meta name="description" content="«Расширьте возможности своего Traders' Triumph продвинутые учебные курсы по Форекс»">
        <link rel="shortcut icon" href="logotip.svg" type="image/x-icon">

        <link rel="stylesheet" href="res-pack/style-pack/BootstSTMar2Pol.css">
        <link rel="stylesheet" href="res-pack/style-pack/BootstSTMar2Pol.min.css.map">
        <link rel="stylesheet" href="res-pack/style-pack/jqueryMar2Pol.fancybox.min.css">
        <link rel="stylesheet" href="res-pack/style-pack/icons_picMar2Pol.css">
        <link rel="stylesheet" href="res-pack/style-pack/buttonsMar2Pol.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="res-pack/js-pack/jqueryMar2Pol.cookie.file.js"> </script>
        <style>
            body{
                direction: ltr;
                font-family: 'Raleway', sans-serif !important;
                font-size: 17px;
                margin: 0;
                padding: 0px;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                margin: 0;
            }

            ul {
                margin: 0;
                padding: 0;
            }

            button {
                cursor: pointer;
            }

            img {
                display: block;
            }

            a {
                text-decoration: none;
            }

            li {
                list-style: none;
            }

            video, img {
                max-width: 100%;

            }

            .head-main-back {
                background: linear-gradient(to top, #77d250, #5fcb5d, #47c468, #2cbc72, #00b47a);
                width: 100%;
                height: auto;
                overflow: hidden;
            }

            .head-back-opasity {
                background: url(bg/0_opacity.png);
                background-position: center;
                background-size: cover;
                width: 100%;
                height: auto;
                overflow: hidden;
            }

            .fix-head {
                background: linear-gradient(to top, #77d250, #5fcb5d, #47c468, #2cbc72, #00b47a);
                position: fixed;
                z-index: 999;
                width: 100%;
                top: 0;
                left: 0;
            }

            .head-main-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-bottom: 13px;
                padding-top: 13px;
            }

            .site-logo {
                display: flex;
                align-items: center;
                gap: 8px;
                flex-direction: column;
            }

            .log-img {
                width: 55px;
                padding: 0;

            }

            .s-name {
                color: #000000;
                font-weight: 700;
                font-size: 18px;
            }

            .nav-wrap {
                display: flex;
                align-items: center;
                gap: 15px;
                flex-direction: row;
            }

            .head-nav {
                display: flex;
                gap: 21px;
            }

            .nav-link {
                color: #000000;
                font-size: 18px;
                font-weight: 700;

            }

            .main-screen {
                display: flex;
                gap: 30px;
                flex-direction: row;
                padding-top:   193px;
                padding-bottom:   193px;
            }

            .main-text {
                width: calc(100% / 2 - 15px);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .main-title {
                color: #000000;
                font-size: 45px;
            }

            .main-link-btn {
                margin-top:  120px;
                width: 100%;
            }

            .main-img  {
                width: calc(100% / 2 - 15px);
            }

            .main-img img {
                height: auto;
                max-width: 50%;
                margin: 0 auto;
            }

            .decor {
                position: relative;
                width: 100%;
                height: auto;
            }

            .decor-first {
                position: absolute;
                top: -100px;
                left: 0;
                z-index: 9;
                width: 100%;
                height: 100px;
                background-image: url(bg/deco-wave-light.png);
                background-repeat: repeat-x;
                background-size: 51% 100px;
                background-position: 397px 0;
                transform: scale(2.5,1);
            }


            .decor-second {
                position: absolute;
                top: -100px;
                left: 0;
                z-index: 8;
                width: 100%;
                height: 100px;
                background-image: url(bg/deco-wave-light.png);
                background-repeat: repeat-x;
                background-size: 51% 100px;
                background-position: 0 0;
                transform: scale(2.5,1);
                opacity: .2;
                animation: move 25s linear infinite;
            }

            .decor-third {
                position: absolute;
                top: -100px;
                left: 0;
                z-index: 8;
                width: 100%;
                height: 100px;
                background-image: url(bg/deco-wave-light.png);
                background-repeat: repeat-x;
                background-size: 51% 100px;
                background-position: 0 0;
                transform: scale(2.5,1);
                opacity: .2;
                animation: move 20s linear infinite;
            }

            @keyframes move {
                0% {
                    background-position: 0 0;
                    transform: scale(2,1);
                }
                50% {
                    background-position: 50% -50%;
                    transform: scale(2.3,1.2);
                }
                100% {
                    background-position: 100% 0;
                    transform: scale(2,1);
                }
            }

            .about-block {
                display: flex;
                gap: 80px;
                flex-direction: row;
                padding-top: 147px;
                padding-bottom: 147px;
            }

            .ab-pic {
                width: calc(100% / 2 - 40px);
            }

            .ab-us {
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: calc(100% / 2 - 40px);
            }

            .ab-title {
                color: inherit;
                font-size: 40px;
                margin-bottom: 44px;

            }

            .dec{
                width: 66px;
                height: 13px;
                border-radius: 12px;
                background: linear-gradient(to top, #77d250, #5fcb5d, #47c468, #2cbc72, #00b47a);
                margin-bottom: 44px;
            }

            .ab-text {
                color: inherit;
                font-size: 26px;
            }

            .content-block {
                display: flex;
                flex-direction:  row;
                gap: 44px;
                padding-bottom: 80px;
            }

            .media-content {
                display: flex;
                flex-direction:  row;
                gap: 30px;
            }

            .video-box {
                width: calc(100% / 2 - 15px);
                overflow: hidden;
                display: flex;
                align-items: center;
            }

            .video-box video {
                border-radius: 0px;
                width: 100%;
            }

            .img-box {
                width: calc(100% / 2 - 15px);
                display: flex;
                justify-content: center;
                overflow: hidden;
            }

            .img-box img {
                border-radius: 0px;
                object-fit: cover;
            }

            .text-content {
                width: 100%;
            }

            .text-content div {
                margin-left: auto;
                margin-right: auto;
            }

            .content-text {
                font-size: 15px;
                color: inherit;
            }

            .content-title {
                font-weight: 700;
                text-transform: uppercase;
                font-size: 40px;
                text-align: center;
                color: inherit;
                margin-bottom:  26px;
            }

            .price {
                margin-top: 21px;
                font-family: 700;
                font-style: fw-bold;
                font-size: 26px;
                color: inherit;
            }

            .service-block {
                padding-top: 80px;
                padding-bottom: 143px;
            }

            .service-title {
                text-align: center;
                color: #000000;
                font-size: 40px;
                margin-bottom: 80px;
            }

            .service-wrap {
                display: flex;
                gap: 15px;
                flex-direction: row;
                justify-content: space-between;
                margin-bottom: 44px;
            }


            .service-box {
                display: flex;
                flex-direction: column;
                flex: 1;
                padding: 25px;
                border-radius: 10px;
                background-color: #8CEF61;

            }

            .service-img {
                color: #000000;
                font-size: 40px;
                margin-bottom:26px;
            }

            .service-text {
                color: #000000;
                font-size: 18px;
            }

            .service-epilog {
                color: #000000;
                font-size: 26px;
            }

            .faq-block {
                padding-top: 147px;
            }

            .faq-title {
                color: inherit;
                font-size: 40px;
                margin-bottom: 44px;
            }

            .faq-wrap {
                display: flex;
                gap: 30px;
                flex-direction: row;
            }

            .faq-img  {
                display: none;
                width: calc(100% / 2 - 15px);
            }

            .faq-img img {
                height: auto;
                max-width: 80%;
                margin: 0 auto;
            }

            .client-form {
                width: calc(100% / 2 - 15px);
            }

            .form-box {
                display: flex;
                flex-direction: column;
            }

            .form-item {
                display: flex;
                gap: 10px;
                margin-bottom: 21px;
            }

            .form-text {
                display: block;
                width: 100%;
                height: auto;
                padding: 6px 12px;
                font-size: 18px;
                color: #555;
                border: 2px solid #8CEF61;
            }

            .form-item textarea {
                display: block;
                width: 100%;
                height: auto;
                padding: 6px 12px;
                font-size: 18px;
                color: #555;
                border: 2px solid #8CEF61;
            }

            .faq-accordion {
                width: calc(100% / 2 - 15px);
            }

            .rhomb {
                margin-right: 15px;
                color: #8CEF61;
                font-size: 20px;
                font-weight: 700;
            }

            .footer-back {
                position: relative;
                width: 100%;
                height: auto;
                overflow: hidden;
            }

            .footer-decor:before {
                background-image: url(bg/footer-deco-light.svg);
            }

            .footer-decor:before {
                background-repeat: no-repeat;
                background-position: top left;
                background-size: 100% auto;
                top: -3px;
                content: "";
                width: 100%;
                height: 270px;
                position: absolute;
                z-index: 10;
            }

            .footer-decor {
                position: relative;
                z-index: 80;
                top: 0;
                padding-top: 320px;
            }

            .footer-block {
                display: flex;
                gap: 30px;
                flex-direction: row;
                justify-content: space-between;
                padding-top: 80px;
                padding-bottom: 44px;
                border-bottom: 1px solid #efefef;
            }

            .footer-wrap {
                display: flex;
                flex-direction: column;
                gap: 20px;
                width: calc(100% / 3 - 45px);
            }

            .footer-nav {
                display: flex;
                gap: 10px;
                flex-direction: column;
            }

            .footer-title {
                height: 55px;
            }

            .footer-title  h4 {
                font-size:  22px;
                color: #000000;
                font-weight: 700;
            }

            .contact-list {
                display: flex;
                flex-direction: column-reverse;
            }

            .contact-item {
                display: flex;
                gap: 10px;
                align-items: baseline;
                padding: 0.5rem 1rem;
            }

            .contact-item i {
                font-size: 18px;
                color: #000000;
            }

            .contact-text {
                font-size: 18px;
                color: #000000;
                font-weight: 700;
            }

            .map-title {
                font-size: 26px;
                color: #000000;
                font-weight: 700;
            }

            .footer-site-logo {
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .politic-block {
                margin-top: 20px;
                display: flex;
                flex-direction: row;
                gap: 20px;
                justify-content: center;
                padding-bottom: 44px;
            }

            .politic-block a {
                font-size: 18px;
                color: #000000;
                font-weight: 700;
            }




            #cookie-nYAGRzt{
                display: none;
                justify-content: space-between;
                align-items: center;
                position: fixed;
                bottom: 21px;
                left: 50%;
                width: 1189px;
                max-width: 90%;
                transform: translateX(-50%);
                padding: 21px;
                background-color:  #321D2F;
                border-radius: 0px;
                box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.5);
                gap: 21px;
                z-index: 999999;
            }
            #cookie-nYAGRzt button{
                max-width: 200px;
                width: 100%;
            }

            #cookie-nYAGRzt p{
                margin: 0;
                font-size: 15px;
                color: #fff;
            }


            @media (min-width: 576px){
                #cookie-nYAGRzt.show{
                    display: flex;
                }
                .cookie_accept{
                    margin: 0 0 0 25px;
                }
            }

            @media (max-width: 575px){
                #cookie-nYAGRzt.show{
                    display: flex;
                    flex-direction: column;
                }
                .cookie_accept{
                    margin: 10px 0 0 0;
                }
                button{
                    width: 100%;
                }
            }
        </style>
        <link rel="stylesheet" href="res-pack/style-pack/medQueMar2Pol.css">
        
    </head>

        <body>

            <section>
                <div class="head-main-back">
                    <div class="head-back-opasity">
                        <div class="fix-head">
                            <div class="container head-main-bar">
                                <div class="site-logo">
                                    <img class="log-img" src="logotip.svg" alt="">
                                    <h2 class="s-name"> Traders' Triumph </h2>
                                </div>
                                <div class="nav-wrap">
                                    <nav>
                                        <ul class="head-nav ">
                                            <li>
                                                <a class="nav-link" href="#about"> О нас</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#service"> Наши услуги</a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#faq"> FAQ </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                 
                            </div>
                        </div>
                        <div class="container main-screen">
                            <div class="main-text">
                                <h1 class="main-title">
                                    Спасибо, что заглянули на сайт нашей компании! Нашими услуги всегда можно воспользоваться на сайте. Мы рады приветствовать новых клиентов в нашей компании.
                                </h1>
                                 
                            </div>
                            <div class="main-img">
                                <img src="bg/0_vectimg.svg" alt="">
                            </div>
                        </div>
                        <div class="decor">
                            <div class="decor-first"></div>
                            <div class="decor-back">
                                <div class="decor-second"></div>
                                <div class="decor-third"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div id="about" class="container about-block">
                    <div class="ab-pic">
                        <img src="gallery/0-gallery.jpg" alt="">
                    </div>
                    <div class="ab-us">
                        <h2 class="ab-title viTLij6Di"> О нас</h2>
                        <div class="dec"> </div>
                        <p class="ab-text"> Наша финансовая компания построена на основе доверия, прозрачности и исключительного обслуживания. Мы предлагаем широкий спектр финансовых услуг, призванных помочь нашим клиентам уверенно справляться со сложными личными и деловыми финансами.</p>
                    </div>
                </div>
            </section>

            <section>
                <div class="container content-block">
                    <div class="media-content">
                        <div class="video-box">
                            <video src="video/0-video.mp4" muted loop controls="controls"></video>
                        </div>
                        <div class="img-box">
                            <img class="content-img " src="1690130026.webp" alt="">
                        </div>
                    </div>
                    <div class="text-content">
                        <h2 class="content-title"> «Расширьте возможности своего Traders' Triumph продвинутые учебные курсы по Форекс»</h2>
                        <div class="dec"> </div>
                        <p class="content-text"> <p>Traders' Triumph является первопроходцем в предоставлении комплексных учебных курсов Forex, призванных помочь людям уверенно и прибыльно ориентироваться в мире валютных рынков. Наша компания стремится к тому, чтобы наши клиенты получали самое передовое и практическое обучение для достижения своих финансовых целей. Мы используем многогранный подход к обучению Forex, сочетая теорию, практические упражнения и торговые симуляции в реальном времени,  чтобы предложить всестороннее понимание ландшафта Forex.</p>
<p>Нашей основной услугой является курс Forex Mastery Course, комплексная программа, предназначенная для людей с любым уровнем опыта. Эта программа сочетает в себе комплексную платформу электронного обучения с живыми вебинарами, индивидуальным наставничеством и рядом дополнительных ресурсов. Вы научитесь понимать и анализировать рыночные тенденции, эффективно управлять рисками и разрабатывать свою уникальную торговую стратегию. Наши опытные инструкторы, все из которых являются опытными  трейдерами, предлагают бесценную информацию и практические рекомендации на протяжении всего курса.</p>
<p>Признавая важность реального опыта, Traders' Triumph предлагает уникальную программу демо-трейдинга. Эта безрисковая платформа позволяет учащимся применять свои новые знания в смоделированной, но реалистичной среде торговли на рынке Форекс. Под бдительным руководством наших опытных наставников студенты получат непосредственный опыт, учатся на успехах и понимают, как справляться с трудностями без какого-либо финансового риска.</p>
<p>В дополнение к нашим основным учебным курсам Traders' Triumph предлагает дополнительные услуги, такие как регулярные отчеты по анализу рынка и прогнозы тенденций. Эти ресурсы предназначены для того, чтобы помочь нашим студентам оставаться в курсе постоянно меняющихся тенденций на рынке Форекс и совершенствовать свои торговые стратегии. Подписчики получат эксклюзивный доступ к этой информации, что поможет им принимать обоснованные торговые решения.</p>
<p>Более того, в Traders' Triumph мы верим в развитие динамичного сообщества трейдеров. Мы регулярно проводим сетевые мероприятия, вебинары и дискуссионные форумы, где трейдеры могут обмениваться идеями, делиться своим торговым опытом и учиться друг у друга. Эти инициативы по созданию сообщества продвигают культуру взаимного роста и общего успеха, еще больше укрепляя репутацию Traders' Triumph как всестороннего поставщика услуг по обучению Forex.</p>
<p>Наконец, что не менее важно, Traders' Triumph стремится предлагать беспрецедентное обслуживание клиентов. Мы понимаем, что путь каждого трейдера уникален, и стремимся предоставить индивидуальную поддержку для удовлетворения ваших индивидуальных потребностей. Наша специальная служба поддержки клиентов доступна круглосуточно для решения любых вопросов или проблем, обеспечивая беспрепятственный и обогащающий процесс обучения.</p>
<p>Доверьтесь Traders' Triumph как своему партнеру в обучении Forex, который даст вам знания, навыки и уверенность, чтобы взять под контроль свое финансовое будущее.</p> </p>
                         
                    </div>
                </div>
            </section>

            <section>
                <div class="head-main-back">
                    <div id="service" class="container service-block">
                        <h2 class="service-title">Измените свою финансовую жизнь с помощью наших инновационных услуг! Наша команда экспертов поможет вам разобраться в финансовых сложностях и построить надежное финансовое будущее.</h2>
                        <div class="service-wrap">
                            <div class="service-box">
                                <i class="bi bi-archive-fill service-img"></i>
                                <p class="service-text">Финансирование образования: Планируйте расходы на образование ваших детей или внуков с помощью наших стратегий финансирования образования, включая планы 529, сберегательные счета на образование и другие инвестиционные инструменты.</p>
                            </div>
                            <div class="service-box">
                                <i class="bi bi-menu-button-fill service-img"></i>
                                <p class="service-text">Социально ответственное инвестирование: приведите свои инвестиции в соответствие со своими ценностями, включив в свой портфель экологические, социальные и управленческие факторы (ESG) с помощью наших услуг социально ответственного инвестирования.</p>
                            </div>
                            <div class="service-box">
                                <i class="bi bi-pie-chart-fill service-img"></i>
                                <p class="service-text">Финансовое образование. Расширьте свои финансовые знания с помощью наших образовательных ресурсов, мастер-классов и семинаров, посвященных различным темам личных финансов и инвестиций.</p>
                            </div>
                            <div class="service-box">
                                <i class="bi bi-kanban-fill service-img"></i>
                                <p class="service-text">Управление денежными средствами: оптимизируйте свою ликвидность и более эффективно управляйте своими денежными ресурсами с помощью наших решений по управлению денежными средствами.</p>
                            </div>
                        </div>
                        <h5 class="service-epilog">Исследуйте потенциал наших финансовых услуг и начните движение в направлении, которое позволит изменить вашу жизнь, приведя к финансовой стабильности и росту. Наша команда экспертов готова оказывать вам поддержку на каждом этапе этого процесса.</h5>
                    </div>
                    <div class="decor">
                        <div class="decor-first"></div>
                        <div class="decor-back">
                            <div class="decor-second"></div>
                            <div class="decor-third"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div id="faq" class="container faq-block">
                    <h2 class="faq-title"> FAQ </h2>
                    <div class="dec"> </div>
                    <div class="faq-wrap">
                        <div class="faq-img">
                            <img src="bg/1_vectimg.svg " alt="">
                        </div>
                         
                        <div class="faq-accordion">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq-question-one">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-answer-one" aria-expanded="true"
                                            aria-controls="faq-answer-one">
                                            <i class="bi bi-diamond rhomb"></i> Могу ли я изменить свой финансовый план или стратегию в случае изменения моих обстоятельств?
                                        </button>
                                    </h2>
                                    <div id="faq-answer-one" class="accordion-collapse collapse show"
                                        aria-labelledby="faq-question-one">
                                        <div class="accordion-body">
                                            <i class="bi bi-diamond-fill rhomb"></i> Да, мы понимаем, что изменения в жизни могут повлиять на ваши финансовые цели и потребности. Наши финансовые консультанты будут регулярно пересматривать и корректировать ваш финансовый план и стратегии по мере необходимости, чтобы обеспечить их соответствие вашим меняющимся обстоятельствам.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq-question-two">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-answer-two" aria-expanded="false"
                                            aria-controls="faq-answer-two">
                                            <i class="bi bi-diamond rhomb"></i> Не могли бы вы помочь мне в разработке финансовой стратегии, чтобы накопить деньги на обучение моих детей в колледже?
                                        </button>
                                    </h2>
                                    <div id="faq-answer-two" class="accordion-collapse collapse"
                                        aria-labelledby="faq-question-two">
                                        <div class="accordion-body i46SvtY2YC">
                                            <i class="bi bi-diamond-fill rhomb"></i> Абсолютно! Наши финансовые консультанты могут помочь вам оценить различные варианты сбережений в колледже, такие как планы 529, и порекомендовать подходящие стратегии в зависимости от ваших финансовых целей и обстоятельств.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq-question-three">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-answer-three" aria-expanded="false"
                                            aria-controls="faq-answer-three">
                                            <i class="bi bi-diamond rhomb"></i> Как ваша компания определяет комиссию за финансовые услуги, которые она предоставляет?
                                        </button>
                                    </h2>
                                    <div id="faq-answer-three" class="accordion-collapse collapse"
                                        aria-labelledby="faq-question-three">
                                        <div class="accordion-body">
                                            <i class="bi bi-diamond-fill rhomb"></i> То, как мы определяем нашу комиссионную структуру, зависит от конкретных услуг, которые мы предлагаем. Это может быть фиксированная сумма, почасовая ставка или часть активов, которыми мы управляем. В процессе консультации наши консультанты подробно разъяснят размер комиссий и сборов.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq-question-four">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-answer-four" aria-expanded="false"
                                            aria-controls="faq-answer-four">
                                            <i class="bi bi-diamond rhomb"></i> Могу ли я получить доступ к своей финансовой информации и портфелю онлайн через вашу платформу?
                                        </button>
                                    </h2>
                                    <div id="faq-answer-four" class="accordion-collapse collapse"
                                        aria-labelledby="faq-question-four">
                                        <div class="accordion-body">
                                            <i class="bi bi-diamond-fill rhomb"></i> Да, мы предлагаем безопасный онлайн-доступ к вашей финансовой информации и портфелю, что позволяет вам отслеживать свои инвестиции и финансовый прогресс в удобное для вас время.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="head-main-back footer-back">
                    <div class="footer-decor">
                    </div>
                    <div class="container footer-block">
                        <div class="footer-wrap lqIQl">
                            <div class="footer-site-logo">
                                <img class="log-img" src="logotip.svg" alt="">
                                <h2 class="s-name"> Traders' Triumph </h2>
                            </div>
                            <nav>
                                <ul class="footer-nav">
                                    <li>
                                        <a class="nav-link" href="#about"> О нас</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#service"> Наши услуги</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#faq"> FAQ </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="footer-wrap">
                            <div class="footer-title"> <h4> Контакты</h4></div>

                            <ul class="contact-list">
                                <li class="contact-item ">
                                    <i class="bi bi-chevron-right"></i>
                                    <p class="contact-text"> +7 495 970-25-19</p>
                                </li>
                                <li class="contact-item ">
                                    <i class="bi bi-chevron-right"></i>
                                    <p class="contact-text"> evencompany@mail.com</p>
                                </li>
                                <li class="contact-item ">
                                    <i class="bi bi-chevron-right"></i>
                                    <p class="contact-text"> АО "ВОСТОК ТРЕЙД ИНВЕСТ", ИНН 9705144294, ОГРН 1207700186210, КПП 770301001 ул. Павлова, 38, Красноярск, Красноярский край, Россия, 660003</p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-wrap">
                            <div class="footer-title">
                                <h4> Адрес Местоположение</h4>
                            </div>
                            <div class="map">
                                <iframe src="https://maps.google.com/maps?hl=en&q=%D1%83%D0%BB.%20%D0%9F%D0%B0%D0%B2%D0%BB%D0%BE%D0%B2%D0%B0%2C%2038%2C%20%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D1%8F%D1%80%D1%81%D0%BA%2C%20%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D1%8F%D1%80%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BA%D1%80%D0%B0%D0%B9%2C%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20660003&ie=UTF8&t=&z=8&iwloc=B&output=embed" width="100%"
                                    height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="politic-block">
                        <a href="privacy/privacyitp1uvP9CKgrgAqW.html"> Политика конфиденциальности</a>
                        <a href="privacy/term1OvJMoOqAx.html"> Сроки и условия</a>
                        <a href="privacy/disclaimerGQThdcHB8sEQErI.html"> Отказ от ответственности</a>
                    </div>
            </footer>

        <div id="cookie-nYAGRzt">
            <p>Мы используем файлы cookie для улучшения сайта и его взаимодействия с пользователями. Продолжая использовать сайт, вы соглашаетесь на использование файлов cookie. Вы всегда можете отключить файлы cookie в настройках вашего браузера.</p>
            <button class="button-3 cookie_accept" style="margin: 0;">Принимать</button>
        </div>

        <script type="text/javascript" src="res-pack/js-pack/jqueryMar2Pol.fancybox.min.js"></script>
        <script type="text/javascript" src="res-pack/js-pack/scriptMar2Pol.js"></script>


        <script type="text/javascript">

            function checkCookiesMss(){
                let cookieDate = localStorage.getItem('cookie-nYAGRzt--cookieDate');
                let cookieNotification = document.getElementById('cookie-nYAGRzt');
                let cookieBtn = cookieNotification.querySelector('.cookie_accept');

                if( !cookieDate || (+cookieDate + 31536000000) < Date.now() ){
                    cookieNotification.classList.add('show');
                }

                cookieBtn.addEventListener('click', function(){
                    localStorage.setItem( 'cookie-nYAGRzt--cookieDate', Date.now() );
                    cookieNotification.classList.remove('show');
                })
            }
            checkCookiesMss();
        </script>

        <script>

            let color = $('.service-box').css('background-color');

            function convertHex(hex, opacity) {
                hex = hex.replace('#', '');
                r = parseInt(hex.substring(0, 2), 16);
                g = parseInt(hex.substring(2, 4), 16);
                b = parseInt(hex.substring(4, 6), 16);

                result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
                return result;
            }

            $('.service-box').css('background-color', convertHex('#8CEF61', 30));

        </script>

        <script>
            if ($('.media-content').css('flex-direction') == 'column') {
                    $('.video-box').css({ 'width': '100%' });
                    $('.img-box').css({ 'width': '100%' });

                }
        </script>

        <script>
            if($('.content-block').css('flex-direction') == 'row') {
                $('.media-content').css({'flex-direction' :  'column-reverse'})
                $('.video-box').css({ 'width': 'auto', 'height': 'calc(100% / 2 - 15px)' });
                $('.img-box').css({ 'width': 'auto', 'height' : 'calc(100% / 2 - 15px)' });
            }
        </script>

        <script>
            if($('.footer-block').css('flex-direction') == 'row-reverse') {
                $('.footer-wrap').css('align-items', 'center')
            }
        </script>

        <script>
            if ($('.button-1'.lenght < 1)) {
                    $('.form-box').css('padding-bottom', '75px');
                }
        </script>

        <script>
            if ($('.client-form'.lenght < 1)) {
                    $('.faq-img').css('display', 'block');
                }
        </script>



            
    </body>
</html>


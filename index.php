

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="REsouRcEpack/jsCcomponents/jqueryFe22Pol.file.min.js"></script>
        <script type="text/javascript" src="REsouRcEpack/jsCcomponents/slickFe22Pol.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&display=swap" rel="stylesheet">

        <title>Аутсорсинг бизнес-процессов</title>
        <meta property="og:title" content="Аутсорсинг бизнес-процессов" />
        <meta property="og:image" content="1687687029.webp"/>
        
        <meta property="og:description" content="Аутсорсинг бизнес-процессов">
        <meta name="description" content="Аутсорсинг бизнес-процессов">
        <link rel="shortcut icon" href="logotip.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="REsouRcEpack/cssStylePack/slickFe22Pol.css" />
        <link rel="stylesheet" type="text/css" href="REsouRcEpack/cssStylePack/slick-themeFe22Pol.css" />
        <link rel="stylesheet" href="REsouRcEpack/cssStylePack/BootstST.css">
        <link rel="stylesheet" href="REsouRcEpack/cssStylePack/BootstST.min.css.map">
        <link rel="stylesheet" href="REsouRcEpack/cssStylePack/icons_picFe22Pol.css">
        <link rel="stylesheet" href="REsouRcEpack/cssStylePack/buttonsFe22Pol.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="REsouRcEpack/jsCcomponents/jqueryFe22Pol.cookie.file.js"> </script>
        <style>
            body{
                direction: ltr;
                font-family: 'Nunito Sans', sans-serif !important;
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

            .head {
                padding: 40px 0;
                display: flex;
                gap: 10px;
                align-items: center;
                justify-content: space-between;
                flex-direction: column;
            }

            .logo {
                display: flex;
                align-items: center;
            }

            .log_img {
                width:45px;
                padding: 0;
                margin: 0 15px;
            }

            .s_name {
                color: inherit;
                font-weight: 500;
                font-size: 25px;
            }

            .nav-wrap {
                display: flex;
                align-items: center;
                gap: 15px;
                flex-direction: row;
            }

            .head-nav {
                display: flex;
                gap: 20px;
                box-shadow: inset -1px 0 0 rgb(71, 71, 71);
                padding: 0 11px;
            }

            .nav-link {
                color: inherit;
                font-size: 17px;
                font-weight: 500;
                text-transform: uppercase
            }

            .search-form {
                display: flex;

            }

            .search-link {
                padding: 11px;
            }

            .bi-search {
                color: black;
                font-size: 17px;
            }

            .main-view {
                position: relative;
                width: 100%;
                height: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                padding:  395px 0;
            }

            .back-video {
                position: absolute;
                width: 100%;
                height: 100%;

            }

            .color-overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: rgba(54, 51, 83, 0.6);
                opacity: 0.5;
            }

            .back-video > video {
                display: block;
                height: 100%;
                width: 100%;
                object-fit: cover;
            }

            .main-block {
                display: flex;
                flex-direction: column;
                align-items: center;
                z-index: 1;
            }

            .main-title {
                color: #ffffff;
                font-size:  44px;
                font-weight: 500;
                text-transform: uppercase;
                line-height: 1.2;
                margin-bottom: 51px;
                text-align: center;
            }

            .statistics {
                position: relative;
                padding-top: 166px;
                padding-bottom:  166px;
                display: flex;
                justify-content: center;
                gap: 30px;
                flex-direction: row;
            }

            .left, .right {
                width: calc(100% / 2 - 15px);
            }

            .left {
                position: relative;
                display: flex;
                justify-content: center;
                flex-direction: row;
            }

            .up-block {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }

            .down-block {
                display: flex;
                flex-direction: column;

            }

            .stats-box {
                padding: 24px 24px;
                margin: 22px;
                width: 174px;
                border-radius: 30px;
                background: #ffffff;
                box-shadow: 0 1.5px 12px 2px rgb(0 0 0 / 6%);
            }

            .stats-img {
                font-size: 72px;

            }

            .stats-value {
                font-size: 25px;
                font-weight: 600;
                margin: 7px 0px;
            }

            .stats-text {
                font-size: 17px;
                font-weight: bold;
                word-break: break-word;
            }

            .back-hexa-opacity {
                position: absolute;
                z-index: -2;
                left: 0;
                top: 166px;
            }

            .back-hexa {
                position: absolute;
                z-index: -1;
                bottom: 0;
            }

            .right {
                display: flex;
                flex-direction:  column-reverse;
            }

            .stats-title {
                margin-top: 40px;
                font-size: 41px;
                font-weight: 500;
                text-transform: uppercase;
                margin-bottom: 40px;
            }

            .stats-text-second-title {
                font-size: 22px;
                margin-bottom: 20px;
            }

            .video-box {
                margin-bottom: 20px;
                border-radius: 0px;
                overflow: hidden;
            }


            .primary-content-box {
                display: flex;
                flex-direction: column-reverse;
                gap: 20px;
                align-items: center;
            }


            .content-wrap-img {
                width: 50%;
                display: flex;
                justify-content: center;
                overflow: hidden;
            }

            .content-img  {
                object-fit: cover;
            }

            .content-wrap-text {
                padding-left: 36px;
                padding-right: 36px;
                width: 100%;
            }


            .content-text {
                font-family: 500;
                font-style: fw-normal;
                font-size: 14px;
                color: inherit;
            }

            .content-title {
                font-weight: 500;
                text-transform: uppercase;
                font-size: 41px;
                text-align: center;
                color: inherit;
                margin-bottom:  36px;
            }

            .price {
                margin-top: 24px;
                font-family: 500;
                font-style: fw-normal;
                font-size: 22px;
                color: inherit;
            }


            .work-stages {
                padding-top: 166px;
                padding-bottom: 166px;
            }

            .work-stages-title {
                font-weight: 500;
                text-transform: uppercase;
                font-size: 41px;
                text-align: center;
                color: inherit;
                margin-bottom:  36px;
            }


            .work-stages-wrap-row {
                display: flex;
                justify-content: center;
                gap: 30px;
                flex-direction:row;
                align-items: center;
            }

            .work-stages-item, .work-stages-img {
                width: calc(100% / 2 - 15px);
            }

            .work-stages-item {
                display: flex;
                flex-direction: column;
            }

            .work-stages-img img {
                max-width: 449px;
                max-height:  395px;
                display: block;
                margin: 0 auto;
            }

            .work-stages-text {
                margin-top: 36px;
                font-size: 21px;
                text-transform: uppercase;
                font-weight: 600;
            }

            .customer-review-title {
                font-weight: 500;
                text-transform: uppercase;
                font-size: 41px;
                text-align: center;
                color: inherit;
                margin-bottom:115px;
            }

            .comment-box {
                margin: 65px 0 24px 0;
                padding: 40px 120px 40px 120px;
                box-shadow: 0 0 15px rgb(0 0 0 / 10%);
                border: 2px solid #F94A29;
                border-radius: 20px;
                direction: ltr;
            }

            .slider__item {
                display: flex;
                flex-direction: column;
                justify-content: center;
                position: relative;
            }

            .pic img {
                margin: 0 auto;
                border-radius: 0%;
                position: absolute;
                top: -50px;
                left: 50%;
                transform: translate(-50%, -50%);
                border: 4px solid #F94A29;
                box-shadow: 0px 0px 0px #F94A29;

            }

            .slick-slide{
                height: auto;
            }

            .slick-prev {
                left: -80px;
            }

            .slick-next {
                right: -80px;
            }

            .slick-prev:before, .slick-next:before{
                color: #F94A29;
                font-size: 41px;
            }

            .slick-prev {
                left: -51px;
            }

            .slick-next {
                right: -51px;
            }

            .slick-list {
                overflow-x: clip;
                overflow-y: inherit;
            }

            .comment-person {
                text-align: center;
                margin-top: 24px;
                margin-bottom: 20px;
                font-weight: 500;
                font-size:   25px;
                color: inherit;
            }

            .comment-text {
                text-align: center;
                margin-bottom: 20px;
                font-size:   17px;
                color: inherit;
            }

            .contact-us {
                display: flex;
                gap: 30px;
                padding-top: 166px;
                padding-bottom: 166px;
                flex-direction: row;
            }

            .contact-us-img {
                background: url(bg/0_bg.jpg);
                background-position: center;
                background-size: cover;
                width: 100%;
            }

            .contact-us-form {
                display: flex;
                flex-direction: column;
            }

            .form {
                display: flex;
                flex-direction: column;
            }

            .form-field {
                display: flex;
                gap: 10px;
                margin-bottom: 20px;
            }

            .form-input {
                display: block;
                width: 100%;
                height: auto;
                padding: 6px 12px;
                font-size: 13px;
                color: #555;
                border: 1px solid #F94A29;
            }

            .form-field textarea {
                border: 1px solid #F94A29;
                width: 100%;
            }


            .address-title, .mail-title, .phone-title {
                margin-bottom: 20px;
                font-size: 13px;
                font-weight: 600;
                color: inherit;
            }

            .address, .mail, .phone {
                margin-bottom: 40px;
                font-size:  22px;
                font-weight: 500;
                color: inherit;
            }

            .spesial-link {
                display: flex;
                flex-direction: row;
                justify-content: center;
                gap:  166px;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .spesial-link a {
                font-size: 13px;
                font-weight: 500;
                color: #555;
            }

            #cookie-8X{
                display: none;
                justify-content: space-between;
                align-items: center;
                position: fixed;
                bottom: 20px;
                left: 50%;
                width: 1213px;
                max-width: 90%;
                transform: translateX(-50%);
                padding: 20px;
                background-color:  #1A1A2E;
                border-radius: 0px;
                box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.9);
                gap: 20px;
                z-index: 999999;
            }
            #cookie-8X button{
                max-width: 200px;
                width: 100%;
            }

            #cookie-8X p{
                margin: 0;
                font-size: 14px;
                color: #fff;
            }


            @media (min-width: 576px){
                #cookie-8X.show{
                    display: flex;
                }
                .cookie_accept{
                    margin: 0 0 0 25px;
                }
            }

            @media (max-width: 575px){
                #cookie-8X.show{
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
        <link rel="stylesheet" href="REsouRcEpack/cssStylePack/medQueFe22Pol.css">
        
        </head>

        <body>

            <section>
                <div class="container head">
                    <div class="logo">
                        <img class="log_img" src="logotip.svg" alt="">
                        <h2 class="s_name"> Public Finance </h2>
                    </div>
                    <div class="nav-wrap">
                        <nav>
                            <ul class="head-nav J7gSXU ">
                                <li>
                                    <a class="nav-link" href="#stats"> Взгляните на нашу статистику </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#how-work">Этапы рабочего процесса, которым мы следуем</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#contacts"> Контакты </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="search-form">
                            <input type="text" class="search form-control" placeholder="Искать">
                            <a href="#" class="search-link"><i class="bi bi-search"></i></a>
                        </div>
                    </div>
                </div>
                <div class="main-view">
                    <div class="container main-block">
                        <h1 class="main-title"> Добро пожаловать на наш онлайн-сайт! Мы очень рады видеть вас здесь. </h1>
                         
                    </div>
                    <div class="back-video">
                    <div class="color-overlay"></div>
                    <video src="video/0-video.mp4" autoplay muted loop></video>
                    </div>
                </div>
            </section>

            <section>
                <div id="stats" class="container statistics">
                    <div class="back-hexa-opacity bigFigure">
                        <svg width="500px" height="550px" viewBox="0 0 38 43" version="1.1" fill-opacity="0.0">
                            <defs>
                                <linearGradient id="secondary-hexa" x1="56.1985951%" y1="11.7667404%" x2="20.6835068%" y2="110.664023%">
                                    <stop stop-color=" #F94A29 " offset="0%"></stop>
                                    <stop stop-color=" #D61355 " offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path
                                    d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                    fill="url(#secondary-hexa)"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="left">
                        <div class="up-block">
                            <div class="stats-box">
                                <i class="bi stats-img bi-archive"></i>
                                <h5 class="stats-value"> 29159 </h5>
                                <p class="stats-text">Успешно завершенные проекты</p>
                            </div>
                            <div class="stats-box">
                                <i class="bi stats-img bi-bag-check"></i>
                                <h5 class="stats-value"> 3101 </h5>
                                <p class="stats-text">Исполнено заявок</p>
                            </div>
                        </div>
                        <div class="down-block">
                            <div class="stats-box">
                                <i class="bi stats-img bi-person-check"></i>
                                <h5 class="stats-value"> 221 </h5>
                                <p class="stats-text">Принято заявок</p>
                            </div>
                            <div class="stats-box">
                                <i class="bi stats-img bi-pie-chart"></i>
                                <h5 class="stats-value"> 2000 </h5>
                                <p class="stats-text">Вопросов закрыто</p>
                            </div>
                        </div>
                        <div class="back-hexa">
                            <svg width="410px" height="484px" viewBox="0 0 377 440" version="1.1">
                                <defs>
                                    <linearGradient id="primary-hexa" x1="34.1359172%" y1="14.3140713%" x2="132.662444%" y2="100%">
                                        <stop stop-color="#FFCEFE " offset="0%"></stop>
                                        <stop stop-color="#D9ACF5" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient id="secondary-hexa" x1="56.1985951%" y1="11.7667404%" x2="20.6835068%" y2="110.664023%">
                                        <stop stop-color=" #F94A29 " offset="0%"></stop>
                                        <stop stop-color=" #D61355 " offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient id="accent-hexa" x1="56.2159946%" y1="11.7667404%" x2="20.6012149%" y2="110.664023%">
                                        <stop stop-color="#FCE22A" offset="0%"></stop>
                                        <stop stop-color="#F94A29" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Main-Feature" transform="translate(-208.000000, -968.000000)">
                                        <g transform="translate(112.000000, 782.000000)">
                                            <g id="Group-3" transform="translate(96.000000, 186.000000)">
                                                <path
                                                    d="M0,293.262681 C0,308.794648 8.32197774,323.147545 21.8317273,330.913528 L166.668273,414.175512 C180.178022,421.941496 196.821978,421.941496 210.331727,414.175512 L355.168273,330.913528 C368.678022,323.147545 377,308.794648 377,293.262681 L377,126.738016 C377,111.205352 368.678022,96.8531518 355.168273,89.0864719 L210.331727,5.8244876 C196.821978,-1.94149587 180.178022,-1.94149587 166.668273,5.8244876 L21.8317273,89.0864719 C8.32197774,96.8531518 0,111.205352 0,126.738016 L0,293.262681 Z"
                                                    fill="url(#secondary-hexa)"></path>
                                                <path
                                                    d="M315,360.877113 C315,363.465775 316.368601,365.857924 318.590364,367.152255 L342.409636,381.029252 C344.631399,382.323583 347.368601,382.323583 349.590364,381.029252 L373.409636,367.152255 C375.631399,365.857924 377,363.465775 377,360.877113 L377,333.123003 C377,330.534225 375.631399,328.142192 373.409636,326.847745 L349.590364,312.970748 C347.368601,311.676417 344.631399,311.676417 342.409636,312.970748 L318.590364,326.847745 C316.368601,328.142192 315,330.534225 315,333.123003 L315,360.877113 Z"
                                                    fill="url(#primary-hexa)"></path>
                                                <path
                                                    d="M15,405.298115 C15,409.550915 17.2515696,413.480875 20.9067273,415.607276 L60.0932727,438.4052 C63.7484304,440.5316 68.2515696,440.5316 71.9067273,438.4052 L111.093273,415.607276 C114.74843,413.480875 117,409.550915 117,405.298115 L117,359.702076 C117,355.449085 114.74843,351.519315 111.093273,349.392724 L71.9067273,326.5948 C68.2515696,324.4684 63.7484304,324.4684 60.0932727,326.5948 L20.9067273,349.392724 C17.2515696,351.519315 15,355.449085 15,359.702076 L15,405.298115 Z"
                                                    fill="url(#accent-hexa)"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="right">
                        <div class="stats-title-wrap">
                            <svg width="49px" height="55px" viewBox="0 0 38 43" version="1.1">
                                <defs>
                                    <linearGradient id="secondary-hexa" x1="56.1985951%" y1="11.7667404%" x2="20.6835068%" y2="110.664023%">
                                        <stop stop-color=" #F94A29 " offset="0%"></stop>
                                        <stop stop-color=" #D61355 " offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path
                                        d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                        fill="url(#secondary-hexa)"></path>
                                </g>
                            </svg>
                            <h2 class="stats-title DBKe22NY "> Взгляните на нашу статистику</h2>
                            <p class="stats-text-second-title"> Обладая большим опытом и проверенной репутацией, мы уверены, что поможем вам достичь ваших целей и новых высот. </p>
                        </div>
                        <div class="video-box">
                            <video src="video/1-video.mp4" muted loop controls="controls"></video>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container primary-content">
                    <div class="primary-content-box">
                        <div class="content-wrap-img">
                            <img class="content-img " src="1687687029.webp" alt="">
                        </div>
                        <div class="content-wrap-text ">
                            <h2 class="content-title"> Аутсорсинг бизнес-процессов</h2>
                            <p class="content-text"> <p>Добро пожаловать в нашу компанию, где мы специализируемся на предоставлении первоклассных услуг по аутсорсингу бизнес-процессов (BPO). Благодаря нашему опыту и самоотверженности мы предлагаем комплексные решения, отвечающие уникальным потребностям предприятий в различных отраслях.</p>
<p><strong>В нашей компании мы понимаем, что управление непрофильными бизнес-процессами может занимать много времени и ресурсов. Вот почему мы здесь, чтобы помочь оптимизировать ваши операции, позволяя вам сосредоточиться на своих основных областях деятельности и стратегических инициативах.&nbsp;</strong></p>
<p>Используя наши услуги BPO, вы можете оптимизировать эффективность, снизить затраты и повысить общую производительность.</p>
<p><strong>Наш широкий спектр услуг BPO охватывает различные области, включая, помимо прочего:</strong></p>
<ul>
<li>Поддержка клиентов: мы обеспечиваем отличное обслуживание клиентов по нескольким каналам, обеспечивая быстрое и удовлетворительное решение запросов, жалоб и проблем клиентов.</li>
<li>Техническая поддержка: наша квалифицированная команда технической поддержки готова решать технические проблемы, устранять неполадки и предоставлять экспертные рекомендации вашим клиентам или сотрудникам.</li>
<li>Ввод и обработка данных: мы предлагаем точные и эффективные услуги по вводу данных, проверке данных, очистке данных, добыче данных и анализу данных для поддержки ваших процессов принятия решений на основе данных.</li>
<li>Человеческие ресурсы: наши услуги по аутсорсингу кадров включают в себя расчет заработной платы, прием на работу и увольнение сотрудников, управление льготами, управление производительностью и соответствие требованиям HR, чтобы облегчить вашу рабочую нагрузку на HR.</li>
<li>Финансы и бухгалтерский учет: наши финансовые и бухгалтерские услуги включают управление кредиторской/дебиторской задолженностью, бухгалтерский учет, финансовый анализ, налоговую подготовку и финансовую отчетность, обеспечивая бесперебойное функционирование ваших финансовых операций.</li>
<li>Служба ИТ-поддержки: мы предоставляем всестороннюю ИТ-поддержку, решая технические проблемы, управляя установкой программного и аппаратного обеспечения и обеспечивая бесперебойную работу вашей ИТ-инфраструктуры.</li>
<li>Закупки и цепочка поставок: наши услуги по закупкам и цепочке поставок помогают оптимизировать процессы закупок, управление поставщиками, обработку заказов, управление запасами и логистику, оптимизируя эффективность вашей цепочки поставок.</li>
</ul>
<p>Сотрудничая с нашей компанией в сфере услуг BPO, вы получаете доступ к специальной команде опытных профессионалов, которые стремятся к достижению исключительных результатов. Мы используем самые современные технологии, надежные меры безопасности и лучшие отраслевые практики для обеспечения высочайших стандартов качества и конфиденциальности.</p>
<p>Наши гибкие модели взаимодействия и масштабируемые решения позволяют нам обслуживать компании любого размера, от стартапов до крупных предприятий. Мы тесно сотрудничаем с нашими клиентами, чтобы понять их уникальные требования и соответствующим образом адаптировать наши услуги.</p>
<p><strong>Оцените преимущества оптимизированных операций, снижения затрат, повышения удовлетворенности клиентов и повышения конкурентоспособности, выбрав нашу компанию для удовлетворения ваших потребностей в аутсорсинге бизнес-процессов.&nbsp;</strong></p>
<p>Свяжитесь с нами сегодня, чтобы узнать, как мы можем помочь вашей организации добиться успеха в современном динамичном бизнес-ландшафте.</p> </p>
                             
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div id="how-work" class="container work-stages">
                    <h2 class="work-stages-title"> Этапы рабочего процесса, которым мы следуем</h2>
                        <div class="work-stages-wrap-row dfgdfg1">
                            <div class="work-stages-item">
                                <svg width="49px" height="55px" viewBox="0 0 38 43" version="1.1">
                                    <defs>
                                        <linearGradient id="primary-hexa" x1="34.1359172%" y1="14.3140713%" x2="132.662444%" y2="100%">
                                            <stop stop-color="#FFCEFE " offset="0%"></stop>
                                            <stop stop-color="#D9ACF5" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path
                                            d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                            fill="url(#secondary-hexa)"></path>
                                    </g>
                                </svg>
                                <p class="work-stages-text"> Заявка на консультацию.</p>
                            </div>
                            <div class="work-stages-img">
                                <img src="bg/0_vectimg.svg" alt="">
                            </div>
                        </div>
                        <div class="work-stages-wrap-row dfgdfg2">
                            <div class="work-stages-img">
                                <img src="bg/1_vectimg.svg" alt="">
                            </div>
                            <div class="work-stages-item">
                                <svg width="49px" height="55px" viewBox="0 0 38 43" version="1.1">
                                    <defs>
                                        <linearGradient id="secondary-hexa" x1="56.1985951%" y1="11.7667404%" x2="20.6835068%" y2="110.664023%">
                                            <stop stop-color=" #F94A29 " offset="0%"></stop>
                                            <stop stop-color=" #D61355 " offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path
                                            d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                            fill="url(#secondary-hexa)"></path>
                                    </g>
                                </svg>
                                <p class="work-stages-text"> Подробно объясните нам свою проблему. Используйте наш контрольный список, чтобы систематически отвечать на вопросы.</p>
                            </div>
                        </div>
                        <div class="work-stages-wrap-row dfgdfg3">
                            <div class="work-stages-item">
                                <svg width="49px" height="55px" viewBox="0 0 38 43" version="1.1">
                                    <defs>
                                        <linearGradient id="accent-hexa" x1="56.2159946%" y1="11.7667404%" x2="20.6012149%" y2="110.664023%">
                                            <stop stop-color="#FCE22A" offset="0%"></stop>
                                            <stop stop-color="#F94A29" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <path
                                            d="M0,30.0245126 C0,31.6146901 0.838820037,33.0841534 2.20054545,33.8792422 L16.7994545,42.4036834 C18.16118,43.1987722 19.83882,43.1987722 21.2005455,42.4036834 L35.7994545,33.8792422 C37.16118,33.0841534 38,31.6146901 38,30.0245126 L38,12.9755587 C38,11.3853099 37.16118,9.91591793 35.7994545,9.12075784 L21.2005455,0.596316588 C19.83882,-0.198772196 18.16118,-0.198772196 16.7994545,0.596316588 L2.20054545,9.12075784 C0.838820037,9.91591793 0,11.3853099 0,12.9755587 L0,30.0245126 Z"
                                            fill="url(#secondary-hexa)"></path>
                                    </g>
                                </svg>
                                <p class="work-stages-text"> Мы внимательно вас выслушаем и предложим идеальное решение.</p>
                            </div>
                            <div class="work-stages-img">
                                <img src="bg/2_vectimg.svg" alt="">
                            </div>
                        </div>
                </div>
            </section>

            <section>
                <div class="container customer-review">
                    <h2 class="customer-review-title iHV ">Комментарии</h2>
                        <div class="comment-box">
                            <div class="slider—block">
                                <div class="slider__box">
                                    <div class="slider__item">
                                        <div class="pic">
                                            <img src="avatar/m-0.jpg" alt="client" width=" 86">
                                        </div>
                                        <h5 class="comment-person">Ty Owens</h5>
                                        <p class="comment-text fst-italic">Сборы за некоторые из их инвестиционных продуктов кажутся немного высокими по сравнению с конкурентами.</p>
                                    </div>
                                </div>
                                <div class="slider__box">
                                    <div class="slider__item">
                                        <div>
                                            <div class="pic">
                                                <img src="avatar/m-1.jpg" alt="client" width=" 86">
                                            </div>
                                            <h5 class="comment-person">Roman Bradshaw</h5>
                                            <p class="comment-text fst-italic">Надежные меры безопасности компании дают мне уверенность в том, что моя финансовая информация надежно защищена.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider__box">
                                    <div class="slider__item">
                                        <div class="pic">
                                            <img src="avatar/m-2.jpg" alt="client" width=" 86">
                                        </div>
                                        <h5 class="comment-person">Kacy Castillo</h5>
                                        <p class="comment-text fst-italic">Я ценю широкий спектр доступных финансовых продуктов и услуг, отвечающих различным потребностям и целям.</p>
                                    </div>
                                </div>
                                <div class="slider__box">
                                    <div class="slider__item">
                                        <div class="pic">
                                            <img src=" avatar/w-0.jpg " alt="client" width=" 86">
                                        </div>
                                        <h5 class="comment-person">Allegra Newman</h5>
                                        <p class="comment-text fst-italic">Стремление финансовой компании к инновациям и опережение отраслевых тенденций вселяет уверенность в их услугах.</p>
                                    </div>
                                </div>
                                <div class="slider__box">
                                    <div class="slider__item">
                                        <div class="pic">
                                            <img src="avatar/m-3.jpg" alt="client" width=" 86">
                                        </div>
                                        <h5 class="comment-person">Alistair Cash</h5>
                                        <p class="comment-text fst-italic">Блог компании всегда полон полезных советов по личным финансам.</p>
                                    </div>
                                </div>
                                <div class="slider__box">
                                    <div class="slider__item">
                                        <div class="pic">
                                            <img src=" avatar/w-1.jpg " alt="client" width=" 86">
                                        </div>
                                        <h5 class="comment-person">Elis Pace</h5>
                                        <p class="comment-text fst-italic">Финансовые консультанты здесь хорошо осведомлены и искренне заботятся о том, чтобы помочь клиентам в достижении их финансовых целей.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>

            <section>
                <div id="contacts" class=" container contact-us">
                    <div class="contact-us-img "></div>
                    <div class="contact-us-form">
                        <p class="address-title"> Адрес Местоположение</p>
                        <h3 class="address">ООО "ТОРГ", ИНН 7901546670, ОГРН 1157901001576, КПП 790101001 пл. Юности, 3, 1 этаж, Зеленоград, Москва, Россия, 124482</h3>
                        <p class="mail-title">Почтовый адрес</p>
                        <h3 class="mail">feedbackzealous@mail.com</h3>
                        <p class="phone-title">Номер телефона</p>
                        <h3 class="phone">+7 922 482-16-81</h3>
                        <form action="thanks_ru.html" class="form">
                            <div class="form-field">
                                <input type="text" name="username" class="form-input" placeholder="Введите Ваше имя" />
                            </div>
                                <div class="form-field">
                                    <input type="tel" name="phone-number" class="form-input" placeholder="Введите свой телефон" />
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="button-2">Задать вопрос
                                        <i class="bi bi-cursor"></i>
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="map">
                    <iframe src="https://maps.google.com/maps?hl=en&q=%D0%BF%D0%BB.%20%D0%AE%D0%BD%D0%BE%D1%81%D1%82%D0%B8%2C%203%2C%201%20%D1%8D%D1%82%D0%B0%D0%B6%2C%20%D0%97%D0%B5%D0%BB%D0%B5%D0%BD%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%2C%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20124482&ie=UTF8&t=&z=8&iwloc=B&output=embed" width="100%"
                        height="344" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>

            <section>
                <div class="container spesial-link">
                    <a href="privacy/privacyu1nkXohklkk.html"> Политика конфиденциальности</a>
                    <a href="privacy/termA91BSj6x5YwRd9m.html"> Сроки и условия </a>
                    <a href="privacy/disclaimer1gq78cb3a.html">Отказ от ответственности</a>
                </div>
            </section>

        <div id="cookie-8X">
            <p>Мы используем файлы cookie для улучшения сайта и его взаимодействия с пользователями. Продолжая использовать сайт, вы соглашаетесь на использование файлов cookie. Вы всегда можете отключить файлы cookie в настройках вашего браузера.</p>
            <button class="button-3 cookie_accept" style="margin: 0;">Принимать</button>
        </div>


        <script>
            if($('.main-block').css('flex-direction') == 'row') {
                $('.main-title').css({'font-size' : '45px', 'text-align' : 'start', 'margin-bottom': '0' });
                $('.main-block').css('gap' , '30px');
                $('.main-title').css('width' , 'calc(100% / 2 - 15px)');
                $('.head-btn').css('width', 'calc(100% / 2 - 15px)');
            }
        </script>

        <script>
            if($('.statistics').css('flex-direction') == 'row-reverse') {
                $('.back-hexa-opacity').css({'right': '0', 'left' : 'initial'})
            }
            if($('.bigFigure svg').attr('fill-opacity') == '0.0'){
                $('.left').css('height','100%');
            }
        </script>

        <script>

        $('.search-link').click(function(){
                let valSearch = $('.search').val();
                if(valSearch != ''){
                    $(this).attr('href','https://www.google.com/search?q='+valSearch);
                }
            });
            if($('.up-block').css('justify-content') == 'flex-start') {
                $('.down-block').css('justify-content', 'center')
            }
        </script>

        <script>

            if($('.primary-content-box').css('flex-direction') == 'column' || $('.primary-content-box').css('flex-direction') == 'column-reverse') {
                $('.content-wrap-img img').css({'max-width': '800px'});
            }

        </script>

        <script>

            $(document).ready(function () {

            $('.slider—block').slick({
            dots: false,
            slidesToShow: 1,
            arrows: true,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
                }
            ]
            });
        });
        </script>

        <script>
            if($('.contact-us').css('flex-direction') == 'column') {
                $('.contact-us-img').css('height' , '600px');
                $('.form-button').css({'display' : 'flex' , 'justify-content' : 'center'})
            }

            let myHeStyle = $('.content-img').prop('naturalHeight');
            let myWiStyle = $('.content-img').prop('naturalWidth');

            if(myHeStyle == myWiStyle){
                if(myWiStyle > 600){
                    $('.content-img').css({'width':'50%'});
                }
            }
            if(myHeStyle > myWiStyle){
                if(myHeStyle < 2000 && myHeStyle > 700){
                    $('.content-img').css({'width':'20%'});
                }
                if(myHeStyle < 700 && myHeStyle > 500){
                    $('.content-img"').css({'width':'50%'});
                }
            }
            if(myHeStyle < myWiStyle){
                if(myWiStyle < 600){
                    $('.content-img').css({'width':'500px'});
                }
            }

        </script>

        <script type="text/javascript">

            function checkCookiesMss(){
                let cookieDate = localStorage.getItem('cookie-8X--cookieDate');
                let cookieNotification = document.getElementById('cookie-8X');
                let cookieBtn = cookieNotification.querySelector('.cookie_accept');

                if( !cookieDate || (+cookieDate + 31536000000) < Date.now() ){
                    cookieNotification.classList.add('show');
                }

                cookieBtn.addEventListener('click', function(){
                    localStorage.setItem( 'cookie-8X--cookieDate', Date.now() );
                    cookieNotification.classList.remove('show');
                })
            }
            checkCookiesMss();
        </script>


            
    </body>
</html>


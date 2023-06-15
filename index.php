<?php
// Query params are: undefined 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://all-traveler.ru/', 'QB4JzNNnPDmzxYMb');
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


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="Инвестиции, которые работают: как увеличить свой капитал без риска" />
        <meta property="og:description" content="Инвестиции, которые работают: как увеличить свой капитал без риска" />
        <meta property="og:image" content="1695984141.jpg"/>
        <link rel="shortcut icon" href="logotip.svg" type="image/x-icon">
        <link rel="stylesheet" href="my-style/bootstrap.min.css">
        <link rel="stylesheet" href="my-style/bootstrap.min.css.map">
        <link rel="stylesheet" href="my-style/fancyboxx.css">
        
        <script type="text/javascript" src='https://code.jquery.com/jquery-latest.min.js'></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Инвестиции, которые работают: как увеличить свой капитал без риска</title>


        </script>
        <style>
            body{
                font-family: 'Cormorant', sans-serif;
                direction: ltr;
                background: #1D2D50;
                font-size: 16px;
                line-height: 18px;
            }
            li{
                list-style: none;
            }
            .dark_color{
                background: #151515;
            }
            .container{
                padding-top: 23px;
                padding-bottom:23px;
                width: 1140px;
            }
            .top_ver_first-images img{
                width: 100%;
                height: 350px;
                object-fit: contain;
            }
            .spec_title{

            }
            .spec_title_v1{
                display: block;
            }
            .spec_title_v2{
                display: none;
            }
            .spec_title{
                margin: 16px 0px;
            }
            .spec_title span{
                background: #5B69E7;
                padding: 5px;
                width: 100px;
                text-align: center;
                border-radius: 35px;
            }
            .auth_v1{
                display: block;
            }
            .auth_v2{
                display: none;
            }
            .article_info_list{
                padding: 0px 0px 16px 0px;
                margin: 16px  0px;
                border-bottom: 0px solid #ccc;
            }
            .article_info_list i{
                opacity: 0.9;
            }
            .article_info_list li{
                display: flex;
                align-items: center;
                column-gap: 7px;
                margin: 10px 0px;
            }
            .my_sidebar{
                display: flex;
                flex-direction: column;
                row-gap: 70px;
            }
            .my_sidebar__item{
                font-size: 15px;
            }
            .my_sidebar__item-title{
                font-size: 17px;
                line-height: calc(17px + 4px);
                font-weight: 700;
                text-transform: uppercase;
                display: flex;
                align-items: center;
                column-gap: 7px;
                margin-bottom: 23px;
            }
            .my_sidebar__item-title i{
                opacity: 0.9;
            }
            .newsletter button{
                width: 100%;
                margin-top: 10px;
            }
            .top_category{

            }
            .top_category ul{
                padding: 0px;
            }
            .top_category ul > li{
                width: 100%;
                display: flex;
                justify-content: space-between;
                text-transform: uppercase;
            }
            .top_category ul > li span{
                font-weight: 700;
            }
            .popular_tags{
                display: flex;
                row-gap: 10px;
                column-gap: 8px;
                flex-wrap: wrap;
            }
            .our_fans ul{
                padding: 0px;
            }
            .our_fans ul > li{
                list-style: none;
                padding: 5px 0px;
            }
            .our_fans ul > li span{
                font-weight: 600;
            }
            .top_article ul{
                padding: 0px;
            }
            .top_article ul > li{
                list-style: none;
                padding: 10px 0px;
                border-bottom: 0px solid #dadada;
            }
            .top_article ul > li p{
                margin-bottom: 5px;
                font-size: 13px;
            }
            .article_content{

            }
            .article_auth_date{
                display: flex;
                align-items: center;
                margin-top: 5px;
                font-size: 13px;
                display: block;
            }
            .sidebar_contactBox ul{
                padding: 0px;
            }
            .sidebar_contactBox ul li{
                list-style: none;
                margin: 10px 0px;
            }
            .sidebar_contactBox ul li:first-child{
                margin-top: 0px;
            }
            .sidebar_contactBox ul li i{
                opacity: 0.9;
            }
            .sidebar_contactBox ul li a{
                color: inherit;
            }
            .sidebar_contactBox ul li a:hover{
                text-decoration: none;
            }
            .privacy_side_link{
                margin-top: 20px !important;
            }
            .newslatter_display{
                display: block;
            }
            .side_contact_display{
                display: none;
            }
            .top_category_display{
                display: block;
            }
            .top_article_display{
                display: none;
            }
            .cenaBox{
                justify-content: center;
                align-items: center;
                margin: 16px 0px;
                font-size: 20px;
                line-height: 20px;
            }
            .cenaBox{
                margin-bottom: 0px;
            }
            .cenaBox span{
                font-weight: bold;
            }
            .btn_order{
                justify-content: center;
                margin: 16px 0px;
            }
            .form_order{
                justify-content: center;
                margin: 16px 0px;
            }
            .form_order form{
                max-width: 400px;
                width: 100%;
            }
            .form_order button{
                width: 100%;
            }
            .content_tags{
                display: none;
            }
            .content_tags-box{
                display: flex;
                row-gap: 10px;
                column-gap: 15px;
                margin: 23px 0px;
                font-size: 13px;
                flex-wrap: wrap;
            }
            .content_tags-box span{
                padding: 8px;
                border-radius:  50%;
            }
            .content_popularBox{
                display: flex;
                column-gap: 30px;
                row-gap: 20px;
                margin: 70px 0px;
            }
            .content_popularBox > div{
                width: 50%;
            }
            .content_relArtices{
                display: none;
            }
            .content_topCategory{
                display: none;
            }
            .content_relArtices-items{
                display: flex;
                column-gap: 10px;
                align-items: center;
                margin-bottom: 20px;
            }
            .relArtices-items__imgBlock{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .relArtices-items__imgBlock img{
                display: block;
                width: 90px;
                height: 80px;
                object-fit: cover;
                border-radius: 50%;
            }
            .relArtices-items__imgBlock i{
                display: none;
                font-size: 40px;
                opacity: 0.9;
            }
            .relArtices-items__content h4{
                font-size: 17px;
            }
            .relArtices-items__content h4 a{
                text-decoration: none;
                color: #333;
            }
            .relArtices-items__content p{
                margin-bottom: 0px;
                opacity: 0.9;
                font-size: 13px;
                align-items: center;
                column-gap: 5px;
                display: flex;
            }
            .content_topCategory ul{
                padding: 0px;
            }
            .content_topCategory ul li{
                list-style: none;
                display: flex;
                justify-content: start;
                column-gap: 10px;
            }
            .content_topCategory ul li span{
                font-weight: bold;
                opacity: 0.9;
            }





            .commentsMain_block{
                padding: 70px 0px;
            }
            .commentsMain_block h4{
                font-size: 20px;
                line-height: 20px;
            }
            .commentsMain{
                padding: 23px 0px;
            }
            .commentsMain_item{
                padding: 10px;
                display: flex;
                align-items: start;
                column-gap: 10px;
                border: 1px solid #d7d7d7;
                margin: 10px 0px;
            }
            .replay_comm{
                margin-left: 50px;
            }
            .commentsMain_item img{
                border-radius: 50%;
                width: 80px;
            }
            .commentsMain_item-top{
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 10px;
            }
            .commentsMain_item-top p{
                font-size: 17px;
                margin: 0px;
                padding: 0px;
                font-weight: bold;
            }
            .commentsMain_item-top span{
                opacity: 0.9;
            }
            .commentsMain_item-text p{

            }
            .commentsMain_item-text{
                width: 100%;
            }
            .not_comments{
                display: block;
                margin-bottom: 23px;
            }
            .more_comments{
                display: none;
                margin-bottom: 23px;
            }
            .addCommentDiv{
                margin: 70px 0px;
            }
            .already_add_comm{
                display: none;
            }
            footer{
                display: none;
                align-items: center;
                justify-content: center;
                margin-top: 30px;
            }
            footer > div{
                width: 50%;
            }
            footer li{
                list-style: none;
                margin: 5px 0px;
            }
            footer li a{
                font-size: 15px;
                text-decoration: none;
                color: inherit;
            }
            footer li a:hover{
                text-decoration: underline;
            }
            #cookie-at{
                display: none;
                justify-content: space-between;
                align-items: center;
                position: fixed;
                bottom: 16px;
                left: 50%;
                width: 1140px;
                max-width: 90%;
                transform: translateX(-50%);
                padding: 16px;
                background-color:  #230338;
                border-radius: 20px;
                box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.9);
                gap: 16px;
                z-index: 999999;
            }
            #cookie-at button{
                max-width: 200px;
            }

            #cookie-at p{
                margin: 0;
                font-size: 15px;
                color: #fff;
            }
            .main_picture{
                margin-bottom: 20px;
            }


            @media (min-width: 576px){
                #cookie-at.show{
                    display: flex;
                }
                .cookie_accept{
                    margin: 0 0 0 25px;
                }
            }

            @media (max-width: 575px){
                #cookie-at.show{
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

            @media (max-width:760px){
                .my_sidebar{
                    display: none;
                }
                .my_content{
                    width: 100%;
                }
                .top_ver_first-images{
                    width: 100%;
                }
                .top_ver_first-text{
                    width: 100%;
                    margin: 23px 0px;
                }
                .content_popularBox > div{
                    width: 100%;
                }
                .content_popularBox{
                    flex-direction: column;
                }
                footer{
                    display: flex;
                    flex-direction: column;
                    row-gap: 30px;
                    align-items: center;
                    text-align: center;
                }
                footer > div{
                    width: 100%;
                }
                footer > div ul{
                    padding-left: 0px;
                }
            }
            @media (max-width:576px){
                .content_tags-box{
                    flex-wrap: wrap;
                }
                .container{
                    width: 100%;
                }
            }

        </style>

        
    </head>

    <body>

        <div class="body-class">
            <div class="container main-container mUvosIS">
                <div class="row flex-row-reverse">
                    <div class="col-9 my_content">
                        <div class="top_ver_first">
                            <div class="row topContentBlock align-items-start flex-row">
                                <div class="col-6 top_ver_first-text">
                                    <h2>Инвестиции, которые работают: как увеличить свой капитал без риска</h2>
                                    <div class="top_ver_first-text__info">
                                        <div class="spec_title">
                                            <span class="spec_title_v1">Статья</span>
                                            <span class="spec_title_v2">Блог</span>
                                        </div>
                                        <ul class="article_info_list">
                                            <li><i class="bi bi-calendar-check"></i> <span class="artDate"></span></li>
                                            <li><i class="bi bi-person-square"></i> <span class="auth_v1">Nikola Flores</span><span class="auth_v2">Ryley Guest</span></li>
                                            <li><i class="bi bi-book"></i> 3713</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 top_ver_first-images">
                                    <img class="main_picture" src="1695984141.jpg" alt="">
                                </div>
                            </div>
                            <div class="centerContentBlock">
                                <p>Инвестирование является одним из наиболее эффективных способов увеличить свой капитал и обеспечить финансовую стабильность в долгосрочной перспективе. Однако многие люди испытывают опасения и риски, связанные с инвестициями. В этой статье мы рассмотрим несколько стратегий и инструментов, которые помогут вам увеличить свой капитал без риска.</p>
<p><em><strong>Банковские депозиты:</strong></em><br />Банковские депозиты являются одним из наиболее безопасных способов инвестирования. Вы можете разместить свои деньги на депозите в банке и получать проценты на них. Большинство стран имеют системы страхования вкладов, которые гарантируют безопасность ваших средств в случае банкротства банка.</p>
<p><em><strong>Государственные облигации:</strong></em><br />Государственные облигации считаются одними из самых надежных инвестиций. Вы можете купить облигации государства и получать фиксированный доход в виде процентов. Государство обычно считается стабильным заемщиком, что уменьшает риск потери инвестиций.</p>
<p><em><strong>Фонды рынка денег:</strong></em><br />Фонды рынка денег представляют собой инвестиционные инструменты, которые позволяют вам вложить свои деньги в различные краткосрочные финансовые инструменты, такие как срочные депозиты и короткосрочные облигации. Эти фонды обычно имеют низкую степень риска и предлагают стабильный доход.</p>
<p><em><strong>Дивидендные акции:</strong></em><br />Инвестирование в дивидендные акции может предоставить вам возможность получать доход в виде дивидендов. Выбирайте акции компаний, которые регулярно выплачивают дивиденды и имеют стабильные финансовые показатели. Это может быть более рискованным, чем предыдущие варианты, но выбор стабильных компаний может уменьшить риск потерь.</p>
<p><em><strong>Диверсификация портфеля:</strong></em><br />Одним из ключевых принципов инвестирования без риска является диверсификация портфеля. Это означает, что вы распределяете свои инвестиции между различными активами и рынками. Разнообразие помогает уменьшить риск, связанный с возможными потерями в одном конкретном активе или секторе. Различные классы активов, такие как акции, облигации, недвижимость и сырьевые товары, имеют различные уровни риска и доходности. Путем балансирования вашего  портфеля вы можете снизить общий уровень риска и защитить свои инвестиции.</p>
<p><em><strong>Индексные фонды:</strong></em><br />Индексные фонды являются еще одним безопасным инвестиционным инструментом. Они отслеживают производительность определенного рыночного индекса, такого как S&amp;P 500, и предлагают инвесторам возможность получить широкое представление о рынке. Поскольку они распределяют свои инвестиции по всем компаниям, входящим в индекс, они обычно имеют более низкую степень риска по сравнению с активным управлением портфелем. Индексные фонды также обладают  преимуществами в виде низких комиссий и удобства в управлении.</p>
<p><em><strong>Пенсионные фонды и IRA:</strong></em><br />Если вы рассматриваете инвестиции в долгосрочной перспективе, то пенсионные фонды и индивидуальные пенсионные счета (IRA) могут быть хорошим выбором. Эти инструменты позволяют вам откладывать деньги на пенсию, получая налоговые льготы. Пенсионные фонды обычно диверсифицируют свои инвестиции и управляются профессиональными финансовыми учреждениями, что помогает снизить риски и повысить доходность в долгосрочной перспективе.</p>
<p><em><strong>Заключение:</strong></em><br />Увеличение капитала без риска может быть вызовом, но с правильным подходом и стратегией это возможно. Банковские депозиты, государственные облигации, фонды рынка денег, дивидендные акции, диверсификация портфеля, индексные фонды, пенсионные фонды и IRA - все эти инструменты предлагают возможность увеличить свой капитал без существенных рисков.</p>
<p>Однако важно помнить, что даже с наиболее безопасными инвестициями всегда присутствует определенная степень риска. Перед тем как принять решение об инвестициях, необходимо провести тщательный анализ и изучить все возможные риски и потенциальные доходы.</p>
<p>Кроме того, стоит отметить, что инвестирование без риска обычно связано с более низкой доходностью по сравнению с инвестициями, которые предполагают определенные уровни риска. Это означает, что вы можете ожидать более стабильный, но более низкий доход. Поэтому важно четко определить свои финансовые цели и рискотерпимость, чтобы выбрать наиболее подходящие инвестиционные стратегии.</p>
<p>В конечном счете, не существует абсолютно безрисковых инвестиций. Однако, с помощью правильного планирования, диверсификации портфеля и выбора надежных инвестиционных инструментов, вы можете снизить риски и увеличить свой капитал без существенных потерь. Всегда помните о необходимости консультации с финансовым советником и проведении собственного исследования, чтобы принять осознанное решение об инвестициях.</p>
<p>Инвестирование является долгосрочным процессом, и успех зависит от терпения, финансовой грамотности и способности адаптироваться к изменяющимся условиям рынка. Не забывайте о возможности роста и принимайте обоснованные инвестиционные решения, которые соответствуют вашим финансовым целям и рискам.</p>
                                 
                                 
                                <div class="d-flex form_order">
                                    <form action="" method="POST">
                                        <div class="mb-2">
                                            <label for="example1" class="form-label">Введите Ваше имя</label>
                                            <input type="text" class="form-control" required="">

                                          </div>
                                          <div class="mb-2">
                                            <label for="example2" class="form-label">Адрес электронной почты</label>
                                            <input type="tel" class="form-control" required="">
                                          </div>
                                          <button type="submit" class="btn btn-secondary">Задать вопрос</button>
                                    </form>
                                </div>
                                <div class="content_tags wtppKmHG">
                                    <div class="content_tags-box">
                                        <span>#photooftheday</span>
                                        <span>#fitfam</span>
                                        <span>#cute</span>
                                        <span>#styleinspo</span>
                                        <span>#outfitoftheday</span>
                                        <span>#photographylovers</span>
                                        <span>#gym</span>
                                    </div>
                                </div>
                                <div class="content_popularBox wtppKmHG">
                                    <div class="content_relArtices">
                                        <div class="content_relArtices-items">
                                            <div class="relArtices-items__imgBlock">
                                                <img src="gallery/0-gallery.jpg" alt="">
                                                <i class="bi bi-pin-fill"></i>
                                            </div>
                                            <div class="relArtices-items__content">
                                                <h4><a href="" class="fan">О способах финансирования с участием иностранного капитала</a></h4>
                                                <p><i class="bi bi-clock-history"></i> <span class="newsDate1"></span></p>
                                            </div>
                                        </div>
                                        <div class="content_relArtices-items">
                                            <div class="relArtices-items__imgBlock">
                                                <img src="gallery/1-gallery.jpg" alt="">
                                                <i class="bi bi-pin-fill"></i>
                                            </div>
                                            <div class="relArtices-items__content">
                                                <h4><a href="" class="fan">Мышление богатого и бедного человека. Как стать богатым и успешным?</a></h4>
                                                <p><i class="bi bi-clock-history"></i> <span class="newsDate2"></span></p>
                                            </div>
                                        </div>
                                        <div class="content_relArtices-items">
                                            <div class="relArtices-items__imgBlock">
                                                <img src="gallery/2-gallery.jpg" alt="">
                                                <i class="bi bi-pin-fill"></i>
                                            </div>
                                            <div class="relArtices-items__content">
                                                <h4><a href="" class="fan">Может ли банк изменить договор в одностороннем порядке?</a></h4>
                                                <p><i class="bi bi-clock-history"></i> <span class="newsDate3"></span></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="commentsMain_block wtppKmHG">
                                    <h4><i class="bi bi-chat-square-text"></i> Комментарии</h4>
                                    <div class="commentsMain">
                                        <div class="not_comments">
                                            Комментариев пока нет, первый можно написать.
                                        </div>
                                        <div class="more_comments">
                                            <div class="commentsMain_item">
                                                <img src="avatar/w-0.jpg" alt="">
                                                <div class="commentsMain_item-text">
                                                    <div class="commentsMain_item-top">
                                                        <p>Cora Patterson</p>
                                                        <span class="newsDate3"></span>
                                                    </div>
                                                    <p>Этот сайт должны посетить все, кто ищет простую для себя информацию. Статьи хорошо написаны и дают отличные идеи.</p>
                                                </div>
                                            </div>
                                            <div class="commentsMain_item replay_comm">
                                                <img src="avatar/m-0.jpg" alt="">
                                                <div class="commentsMain_item-text kALkBCQ9Jc">
                                                    <div class="commentsMain_item-top">
                                                        <p>Steve Wicks</p>
                                                        <span class="newsDate2"></span>
                                                    </div>
                                                    <p>Статьи на этом сайте рекомендую прочесть всем, кто хочет узнать больше по теме. Они информативны и доступны.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="addCommentDiv">
                                            <div class="forms">
                                                <div class="mb-3">
                                                    <label class="form-label">Введите Ваше имя</label>
                                                    <input type="text" class="form-control comm_input">
                                                </div>
                                                <div class="alert alert-danger nameAlert" role="alert" style="display: none;">
                                                    Введите Ваше имя
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Адрес электронной почты</label>
                                                    <input type="email" class="form-control"  placeholder="name@example.com">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Введите Ваше сообщение</label>
                                                    <textarea class="form-control textarea_comm" rows="3"></textarea>
                                                </div>
                                                <div class="alert alert-danger massAlert" role="alert" style="display: none;">
                                                    Введите Ваше сообщение
                                                </div>
                                                <button type="button" class="btn btn-secondary">Добавить комментарий</button>
                                            </div>
                                            <div class="already_add_comm">
                                                <p class="alert alert-info">Спасибо, что оставили комментарий! После модерации он будет опубликован.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top_ver_second"></div>
                    </div>
                    <div class="col-3 my_sidebar  flex-column">
                        <div class="my_sidebar__item newslatter_display">
                            <h4 class="my_sidebar__item-title"><i class="bi bi-newspaper"></i> Информационный бюллетень</h4>
                            <div class="newsletter">
                                <p>Подпишитесь, чтобы получать последние новости, предложения и специальные объявления.</p>
                                <form action="thanks_ru.html" method="post">
                                    <input class="form-control" type="text" placeholder="Адрес электронной почты">
                                    <button class="btn btn-outline-success">Подписываться</button>
                                </form>
                            </div>
                        </div>

                        <div class="my_sidebar__item wtppKmHG">
                            <h4 class="my_sidebar__item-title"><i class="bi bi-tags"></i> Популярные теги</h4>
                            <div class="popular_tags">
                                <span>#photooftheday</span>
                                <span>#fitfam</span>
                                <span>#cute</span>
                                <span>#styleinspo</span>
                                <span>#outfitoftheday</span>
                                <span>#photographylovers</span>
                                <span>#gym</span>
                            </div>
                        </div>
                        <div class="my_sidebar__item">
                            <h4 class="my_sidebar__item-title"><i class="bi bi-people"></i> Оставайтесь на связи</h4>
                            <div class="our_fans">
                                <ul>
                                    <li><i class="bi bi-facebook"></i> Друзей: <span>148940</span></li>
                                    <li><i class="bi bi-twitter"></i> Последователей: <span>3713</span></li>
                                    <li><i class="bi bi-youtube"></i> Абоненты: <span>2001</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="my_sidebar__item top_article_display wtppKmHG">
                            <div class="top_article">
                                <ul>
                                    <li>
                                        <p class="fst-normal">{category_2}</p>
                                        <div class="article_content">О способах финансирования с участием иностранного капитала</div>
                                        <div class="article_auth_date fst-normal">
                                            <span>Renesmae Todd</span>
                                            -
                                            <span class="newsDate1"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="fst-normal">{category_3}</p>
                                        <div class="article_content">Мышление богатого и бедного человека. Как стать богатым и успешным?</div>
                                        <div class="article_auth_date fst-normal">
                                            <span>Rui Clifford</span>
                                            -
                                            <span class="newsDate2"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="fst-normal">{category_6}</p>
                                        <div class="article_content">Может ли банк изменить договор в одностороннем порядке?</div>
                                        <div class="article_auth_date fst-normal">
                                            <span>Lina Sanchez</span>
                                            -
                                            <span class="newsDate3"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="my_sidebar__item side_contact_display">
                            <div class="sidebar_contactBox">
                                <ul>
                                    <li><i class="bi bi-house"></i> АО "МОБИЛИТИ ГРУП", ИНН 9703017244, ОГРН 1207700331134, КПП 770301001 ул. Коммунистическая, 90, Самара, Самарская обл., Россия, 443013</li>
                                    <li><i class="bi bi-telephone-outbound"></i> +7 834 247-85-23</li>
                                    <li><i class="bi bi-mailbox"></i> postweak@mail.ru</li>
                                    <li></li>
                                    <li class="privacy_side_link"><a href="privacy/privacysgiHSiepYhw.html">Политика конфиденциальности</a></li>
                                    <li><a href="privacy/term4GlkdErlJ0Q1rZ.html">Сроки и условия</a></li>
                                    <li><a href="privacy/disclaimer7esVSuEEyJQwhtiP.html">Отказ от ответственности</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div>
                        <ul>
                            <li><i class="bi bi-house"></i> АО "МОБИЛИТИ ГРУП", ИНН 9703017244, ОГРН 1207700331134, КПП 770301001 ул. Коммунистическая, 90, Самара, Самарская обл., Россия, 443013</li>
                            <li><i class="bi bi-telephone-outbound"></i> +7 834 247-85-23</li>
                            <li><i class="bi bi-mailbox"></i> postweak@mail.ru</li>
                            <li></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li class="privacy_side_link"><a href="privacy/privacysgiHSiepYhw.html">Политика конфиденциальности</a></li>
                            <li><a href="privacy/term4GlkdErlJ0Q1rZ.html">Сроки и условия</a></li>
                            <li><a href="privacy/disclaimer7esVSuEEyJQwhtiP.html">Отказ от ответственности</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>

        <span class="dark_color"></span>
        <span class="3" id="dateClass"></span>

        <script type="text/javascript" src="script/bootstrap.min.js"></script>
        <script type="text/javascript" src="script/tinycolor.js"></script>
        <script type="text/javascript" src="script/pack.js"></script>
        <script type="text/javascript" src="script/main-scripts.js"></script>


        <div id="cookie-at">
            <p>Мы используем файлы cookie для улучшения сайта и его взаимодействия с пользователями. Продолжая использовать сайт, вы соглашаетесь на использование файлов cookie. Вы всегда можете отключить файлы cookie в настройках вашего браузера.</p>
            <button class="btn btn-secondary cookie_accept" style="margin: 0;">Принимать</button>
        </div>

        <script type="text/javascript">
            function checkCookies(){
                let cookieDate = localStorage.getItem('cookie-at--cookieDate');
                let cookieNotification = document.getElementById('cookie-at');
                let cookieBtn = cookieNotification.querySelector('.cookie_accept');

                if( !cookieDate || (+cookieDate + 31536000000) < Date.now() ){
                    cookieNotification.classList.add('show');
                }

                cookieBtn.addEventListener('click', function(){
                    localStorage.setItem( 'cookie-at--cookieDate', Date.now() );
                    cookieNotification.classList.remove('show');
                })
            }
            checkCookies();
        </script>

            
    </body>
</html>


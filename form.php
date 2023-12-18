<!DOCTYPE html>
<!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Thu Dec 14 2023 15:40:01 GMT+0000 (Coordinated Universal Time)  -->
<html
  data-wf-page="657abdaedc760d86228ed4e5"
  data-wf-site="657abdaedc760d86228ed4e7"
>
  <head>
    <meta charset="utf-8" />
    <title>form</title>
    <meta content="form" property="og:title" />
    <meta content="form" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/webflow.css" rel="stylesheet" type="text/css" />
    <link
      href="css/sber-quiz141223.webflow.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link
      href="https://fonts.gstatic.com"
      rel="preconnect"
      crossorigin="anonymous"
    />
    <script
      src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
      type="text/javascript"
    ></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: [
            "Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic",
            "Roboto:300,regular,500,700,900",
          ],
        },
      });
    </script>
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        (n.className += t + "js"),
          ("ontouchstart" in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
      })(window, document);
    </script>
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="images/webclip.png" rel="apple-touch-icon" />
    <script type="application/javascript" src="js/keitaro.js"></script>
    <script src="js/libphonenumber-js.min.js"></script>
    <script>
      window.bgdataLayer = window.bgdataLayer || [];
      function bge() {bgdataLayer.push(arguments);}
      bge('init', '<?= $_GET['bge'] ?>');
    </script>
    <script
      async
      src="https://api.imotech.video/ad/events.js?pixel_id=<?= $_GET['bge'] ?>"
    ></script>
  </head>
  <body class="body-2">
    <section class="section-3">
      <div class="div-block-33">
        <div class="div-block-39">
          <div class="div-block-34">
            <img
              src="images/Без-названия-2.png"
              loading="lazy"
              alt=""
              class="image-5"
            />
            <div class="heading">
              <strong class="bold-text-2">ПОЗДРАВЛЯЕМ! 🎁<br /></strong
              ><br /><strong class="bold-text"
                >ВЫ ПРОШЛИ ОПРОС И ПОЛУЧАЕТЕ ДОСТУП К ПРОГРАММЕ</strong
              >
            </div>
          </div>
          <div class="div-block-35">
            <div class="div-block-41">
              <div class="text-block-16">Сумма инвестиций</div>
              <div class="text-block-17">9 500 ₽</div>
            </div>
            <div class="div-block-47">
              <div class="div-block-51">
                <div class="div-block-48">
                  <div class="text-block-20">9 500 ₽</div>
                </div>
                <div class="div-block-48 gray">
                  <div class="text-block-20 gray">200 000+ ₽</div>
                </div>
              </div>
              <div class="div-block-49">
                <div class="div-block-46"></div>
                <div class="div-block-36"></div>
              </div>
              <div class="div-block-50">
                <div class="text-block-21">9 500</div>
                <div class="text-block-21">57 125</div>
                <div class="text-block-21">104 750</div>
                <div class="text-block-21">152 375</div>
                <div class="text-block-21">200 000</div>
              </div>
            </div>
            <div class="div-block-42">
              <div class="text-block-16">Выберите срок инвестирования</div>
              <div class="div-block-38">
                <div class="div-block-37 active">
                  <div class="text-block-19 white">7 дней</div>
                </div>
                <div class="div-block-37">
                  <div class="text-block-19">14 дней</div>
                </div>
                <div class="div-block-37">
                  <div class="text-block-19">28 дней</div>
                </div>
                <div class="div-block-37">
                  <div class="text-block-19">56 дней</div>
                </div>
              </div>
            </div>
            <div class="div-block-40">
              <div class="div-block-43">
                <div class="text-block-16">Прибыль</div>
                <div class="text-block-18">1 995 ₽</div>
              </div>
              <div class="div-block-44">
                <div class="text-block-16">В процентах</div>
                <div class="text-block-18">21%</div>
              </div>
              <div class="div-block-45">
                <div class="text-block-16">Итого</div>
                <div class="text-block-18 black">11 495 ₽</div>
              </div>
            </div>
          </div>
        </div>
        <div class="div-block-16">
          <div class="text-block-6">
            <strong
              >Оставьте Ваши контактные данные и персональный менеджер свяжется
              с Вами в ближайшее время для подтверждения регистрации</strong
            >
          </div>
          <div class="w-form">
            <form
              id="email-form"
              name="email-form"
              data-name="Email Form"
              redirect="/thanks-page"
              data-redirect="/thanks-page"
              method="get"
              data-wf-page-id="657abdaedc760d86228ed4e5"
              data-wf-element-id="2e1467a9-ab86-b822-e9c5-c0915833ae15"
            >
              <label for="name" class="field-label">Введите имя</label
              ><input
                type="text"
                class="text-field w-input"
                maxlength="256"
                name="name"
                data-name="Name"
                placeholder=""
                id="name"
                required=""
              /><label for="name-2" class="field-label">Введите фамилию</label
              ><input
                type="text"
                class="text-field w-input"
                maxlength="256"
                name="name-2"
                data-name="Name 2"
                placeholder=""
                id="lname"
                required=""
              /><label for="Phone" class="field-label">Введите телефон</label>
              <input
                type="tel"
                class="text-field w-input"
                maxlength="12"
                name="phone"
                data-name="Phone"
                placeholder="+7"
                id="phone"
                required=""
                oninput="formatPhoneNumber(this)"
                value="+7"
              />
              <div class="div-block-17">
                <input
                  type="submit" 
                  id="submitButton"
                  value="Получить консультацию"
                  data-wait="Подождите"
                  class="submit-button w-button"
                />
                <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
                <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
                <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
                <input type="hidden" id="source" value='<?= $_GET['source'] ?>'>
                <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'>
              </div>
            </form>
          </div>
        </div>
        <div class="div-block-35 mobile">
          <div class="div-block-41">
            <div class="text-block-16">Сумма инвестиций</div>
            <div class="text-block-17">9 500 ₽</div>
          </div>
          <div class="div-block-47">
            <div class="div-block-51">
              <div class="div-block-48">
                <div class="text-block-20">9 500 ₽</div>
              </div>
              <div class="div-block-48 gray">
                <div class="text-block-20 gray">200 000+ ₽</div>
              </div>
            </div>
            <div class="div-block-49">
              <div class="div-block-46"></div>
              <div class="div-block-36"></div>
            </div>
            <div class="div-block-50">
              <div class="text-block-21">9 500</div>
              <div class="text-block-21">57 125</div>
              <div class="text-block-21">104 750</div>
              <div class="text-block-21">152 375</div>
              <div class="text-block-21">200 000</div>
            </div>
          </div>
          <div class="div-block-42">
            <div class="text-block-16">Выберите срок инвестирования</div>
            <div class="div-block-38">
              <div class="div-block-37 active">
                <div class="text-block-19 white">7 дней</div>
              </div>
              <div class="div-block-37">
                <div class="text-block-19">14 дней</div>
              </div>
              <div class="div-block-37">
                <div class="text-block-19">28 дней</div>
              </div>
              <div class="div-block-37">
                <div class="text-block-19">56 дней</div>
              </div>
            </div>
          </div>
          <div class="div-block-40">
            <div class="div-block-43">
              <div class="text-block-16">Прибыль</div>
              <div class="text-block-18">1 995 ₽</div>
            </div>
            <div class="div-block-44">
              <div class="text-block-16">В процентах</div>
              <div class="text-block-18">21%</div>
            </div>
            <div class="div-block-45">
              <div class="text-block-16">Итого</div>
              <div class="text-block-18 black">11 495 ₽</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=657abdaedc760d86228ed4e7"
      type="text/javascript"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <script src="js/form.js"></script>
  </body>
</html>

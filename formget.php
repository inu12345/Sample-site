<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>◯◯◯運営サイト</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="efect.css">
<link rel="stylesheet" type="text/css" href="jquery.sidr.dark.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<link rel="stylesheet" type="text/css" href="swiper.css">
<link rel="stylesheet" type="text/css" href="part.css">

<!-- 外部js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
<!-- drawer.js -->
<script src="jquery.particleground.min.js"></script>
<script src="jquery.sidr.min.js"></script>
<script src="aaaaa"></script>
<script src="app.json"></script>
<script src="app.js"></script>
<script src="hanba.js"></script>
<script src="swiper.js"></script>



  </head>
<body>


  <!-- 上のバー -->
  <div class="header">
    <div class="header-left">
      <a href="./index.html" >◯◯◯運営サイト</a>
    </div>
    <div class="header-right">

      <li class="selected"><div class="link_box"><a href="./工事.html" ></a>関連サイト</div></li>

      <li class="selected"><div class="link_box"><a href="./工事.html" ></a>データベース</div></li>

      <li class="selected"><div class="link_box"><a href="./工事.html" ></a>よくある質問</div></li>

    </div>
  </div>


  <!-- はんばが -->
  <div id="Contents"><!-- コンテンツ -->
  <div class="drawer drawer--left">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger" hidefocus="true">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button>

  <nav class="drawer-nav" role="navigation">

  <div class="flex_test-box">

    <ul class="drawer-menu">



      <center>
          <div class="back">
              <div class="button_base b03_skewed_slide_in">
                <div>
                  <a href="./index.html" >ホーム</a>
                    </a>
                  </div>
                <div></div>
                <div>
                  <a href="./index.html" >ホーム</a>
                </div>
              </div>
            </div>

            <div class="back">
              <div class="button_base b03_skewed_slide_in">
                <div><a href="./最新情報.html" >最新情報</a></div>
                <div></div>
                <div><a href="./最新情報.html" >最新情報</a></div>
              </div>
          </div>

          <div class="back">
            <div class="button_base b03_skewed_slide_in">
              <div><a href="./お知らせ.html" >お知らせ</a></div>
              <div></div>
              <div><a href="./お知らせ.html" >お知らせ</a></div>
            </div>
        </div>

        <div class="back">
            <div class="button_base b03_skewed_slide_in">
              <div><a href="./問い合わせ.html" >問い合わせ</a></div>
              <div></div>
              <div><a href="./問い合わせ.html" >問い合わせ</a></div>
            </div>
          </div>
          </center>

          <div class="waku">
            <img src ="black0065.png">
          </div>
      </div>
        </div>

      </div>

          </ul>
        </nav>


  <div class="main">
    <div class="thanks-message">お問い合わせ内容を送信しました。</div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>

      <!-- indexのname受け取りecho -->
      <?php echo $_POST["name"]; ?>

      <div class="form-item">■ メールアドレス</div>
       <?php echo $_POST["mail"]; ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST["body"]; ?>

    </div>

  </div>

<div class="footer">

    </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='KAZUKI YAGATA ポートフォリオ'>
  <meta property='og:url' content='URLが入る'>
  <meta property='og:description' content='KAZUKI YAGATAのポートフォリオサイトです。'>
  <meta property="og:image" content="img/ogp.png">
  <meta name="description" content="KAZUKI YAGATAのポートフォリオサイトです" />
  <title>KAZUKI YAGATA ポートフォリオ</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <link href="css/ress.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel=”canonical” href=”URLが入る” />
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">

    <!-- header -->
    <header class="header ">
      <div class="container">
        <h1 class="header-logo">
          <a href=".">KAZUKI YAGATA</a>
        </h1>
        <nav class="gnav">
          <ul class="gnav-list">
            <li class="gnav-item"><a href="#works">WORKS</a></li>
            <li class="gnav-item"><a href="#skill">SKILL</a></li>
            <li class="gnav-item"><a href="#about">ABOUT</a></li>
            <li class="gnav-item"><a href="#contact">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- /header -->

    <main class="content">

      <!-- mv -->
      <div class="mv fadeIn">
        <div class="mv-container">
          <p class="mv-title">KAZUKI YAGATA</p>
          <p class="mv-subtitle">PORTFOLIO</p>
          <p class="mv-text">
            ユーザーとお客様が心から満足できる<br class="sp-only">サイトをお作りいたします。<br>
            コーディングは<br class="sp-only">おまかせください。<br>
          </p>
        </div>
      </div>
      <!-- /mv -->

      <!-- works -->
      <section class="works section fadeIn" id="works">
        <h2 class="title">WORKS</h2>
        <p class="tac">公開可能なもののみ、こちらに掲示しております。</p>
        <div class="swiper">
          <!-- 必要に応じたwrapper -->
          <div class="swiper-wrapper">
            <!-- スライド -->
            <div class="works-item swiper-slide" href="works-template.html">
              <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/amor.png" alt="" /></div>
              <p class="works-name">アモール　サッカースクールクラブ</p>
              <p class="works-info">Coding(Responsive) / WordPress</p>
            </div>
            <div class="works-item swiper-slide" href="works-template.html">
              <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/hepere.png" alt="" /></div>
              <p class="works-name">HEPERE</p>
              <p class="works-info">Coding(Responsive) / jQuery(Slick) / WordPress</p>
            </div>
            <div class="works-item swiper-slide" href="works-template.html">
              <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/yokitomo.png" alt="" /></div>
              <p class="works-name">よきとも</p>
              <p class="works-info">Coding(Responsive)</p>
            </div>
            <div class="works-item swiper-slide" href="works-template.html">
              <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/trial.png" alt="" /></div>
              <p class="works-name">トライアル</p>
              <p class="works-info">Coding(Responsive)</p>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <!-- 必要に応じてナビボタン -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </section>
      <!-- /works -->

      <!-- skill -->
      <section class="skill section fadeIn" id="skill">
        <div class="container">
          <h2 class="title">SKILL</h2>
          <div class="skill-list">
            <div class="skill-item fadeLeft">
              <p class="skill-img">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" />
              </p>
              <div class="skill-body">
                <h3 class="skill-name">HTML5/CSS3</h3>
                <p class="skill-text">
                  W3Cのルールにのっとったコーディングが可能となっております。</p>
              </div>
            </div>
            <div class="skill-item fadeRight">
              <p class="skill-img">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" />
              </p>
              <div class="skill-body">
                <h3 class="skill-name">WordPress</h3>
                <p class="skill-text">
                  静的サイトのWordPress化、およびWordPressでのコーディング、WordPress製サイトの改修等が可能となっております。</p>
              </div>
            </div>
            <div class="skill-item fadeLeft">
              <p class="skill-img">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" />
              </p>
              <div class="skill-body">
                <h3 class="skill-name">JavaScript(jQuery)</h3>
                <p class="skill-text">
                    各種アニメーションの実装、およびスライダー（swiper.js,slick.js）の実装が可能となっております。
                </p>
              </div>
            </div>
            <div class="skill-item fadeRight">
              <p class="skill-img">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg" />
              </p>
              <div class="skill-body">
                <h3 class="skill-name">Adobe Tools</h3>
                <p class="skill-text">
                  Photoshop,Illustrator,Adobe XDからのコーディングが可能となっております。<br>
                  デザインカンプに忠実なコーディングをいたします。
                </p>
              </div>
            </div>
            <div class="skill-item fadeLeft">
              <p class="skill-img">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/illustrator/illustrator-plain.svg" />
              </p>
              <div class="skill-body">
                <h3 class="skill-name">SEO対策</h3>
                <p class="skill-text">
                  テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。</p>
              </div>
            </div>
            <div class="skill-item fadeRight">
              <p class="skill-img">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original-wordmark.svg" />
              </p>
              <div class="skill-body">
                <h3 class="skill-name">Python</h3>
                <p class="skill-text">
                  Beautiful Soupを用いたスクレイピングが可能となっております。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /skill -->

      <!-- about -->
      <section class="about section fadeIn" id="about">
        <div class="container">
          <h2 class="title">ABOUT</h2>
          <div class="profile">
            <p class="profile-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt="">
            </p>
            <div class="profile-body">
              <p>
                お客様にご満足いただけるよう、全力で案件にあたらせていただきます。
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- /about -->

      <!-- contact -->
      <section class="contact section fadeIn" id="contact">
        <div class="container">
          <h2 class="title">CONTACT</h2>
          <p class="lead">
            お問い合わせは、<br class="sp-only">メールにてお願いいたします。
          </p>
          <div class="contact-list">
            <a class="contact-item" href="mailto:lucasclaus123@gmail.com">lucasclaus123@gmail.com</a>
          </div>
        </div>
      </section>
      <!-- /contact -->
      <div class="page-top" id="js-page-top">
        <span class="material-icons-outlined">expand_less</span>
      </div>
    </main>

    <!-- footer -->
    <footer class="footer">
      <div class="copyright">&copy;KAZUKI YAGATA</div>
    </footer>
    <!-- /footer -->

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type='text/javascript' src="js/script.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
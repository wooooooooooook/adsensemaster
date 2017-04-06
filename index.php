<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="help with making adsense codes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Adsense Helper</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=ko">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-84604651-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <h1 class="mdl-layout__title">Adsense Helper</h1>
                </span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link<?php if (strpos($_SERVER['REQUEST_URI'], "?") == false){echo " is-active";} ?>" href="index.php">Home</a>
                <a class="mdl-navigation__link<?php if (strpos($_SERVER['REQUEST_URI'], "codeMaker") !== false){echo " is-active";} ?>" href="index.php?id=codeMaker.html">삽입 코드 생성기</a>
                <a class="mdl-navigation__link<?php if (strpos($_SERVER['REQUEST_URI'], "advancedMaker") !== false){echo " is-active";} ?>" href="index.php?id=advancedMaker.html">고급 코드 생성기</a>
                <a class="mdl-navigation__link<?php if (strpos($_SERVER['REQUEST_URI'], "ABTester") !== false){echo " is-active";} ?>" href="index.php?id=ABTester.html">A/B 테스터</a>
                <a class="mdl-navigation__link<?php if (strpos($_SERVER['REQUEST_URI'], "contact") !== false){echo " is-active";} ?>" href="index.php?id=contact.html">Contact</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Adsense helper -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-0503973014303096"
                         data-ad-slot="5327287896"
                         data-ad-format="auto"></ins>
                    <?php
                    if (!empty($_GET['id'])){
                      echo file_get_contents($_GET['id']);
                    }else{
                      include("home.php");
                    }
                    ?>
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-0503973014303096"
                         data-ad-slot="5327287896"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>


            </div>
            <footer class="mdl-mini-footer">
              <div class="mdl-mini-footer__left-section">
                <div class="mdl-logo">애드센스 도우미</div>
                <ul class="mdl-mini-footer__link-list">
                  <li>Copyright <?php echo date("Y"); ?>.<a href="http://nubiz.tistory.com/" target="_blank">뭐하라(nubiz)</a> all rights reserved.</li>
                  <li>Contact - <a href="http://nubiz.tistory.com/guestbook" target="_blank">http://nubiz.tistory.com/guestbook</a></li>
                </ul>
              </div>
            </footer>
        </main>
    </div>
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script>
    </script>
</body>

</html>

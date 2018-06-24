<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Tot el que necessites per aprovar, documentació, apunts i exercicis pràctics de cada assignatura."/>

  <meta name="theme-color" content="#424242"/>

  <title>Fibers | Assignatures i estat del contingut</title>

  <meta property="og:title" content="Fibers | Documents, apunts i exercicis FIB" />
  <meta property="og:description" content="Tot el que necessites per aprovar, documentació, apunts i exercicis pràctics de cada assignatura." />
  <meta property="og:image" content="assets/img/logo_3.png" />
  <meta property="og:type" content="website" />

  <link rel="shortcut icon" href="assets/img/logo.png"/>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="assets/css/m.min.css" type="text/css" rel="stylesheet"/>
  <!-- Sass version -->
  <!-- <link href="assets/css/materialize.css" type="text/css" rel="stylesheet"/> -->
  <link href="assets/css/f-a.min.css" type="text/css" rel="stylesheet"/>
  <link href="assets/css/styles.css" type="text/css" rel="stylesheet"/>

  <script src="assets/js/jq.min.js" type="application/javascript"></script>
  <script src="assets/js/m.min.js" type="application/javascript"></script>
  <script src="assets/js/main.js" type="application/javascript"></script>

  <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
           m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-84592115-1', 'auto');
      ga('send', 'pageview');

  </script>
</head>
<body>

  <?php include "views/layouts/_leftNavBar.php" ?>

  <section class="page">
    <div class="header">
      <?php include "views/layouts/_rightTopNavBar.php" ?>
    </div>
    <div class="header-mobile">
        <a href="/">Fibers.cat</a> <span id="navbar-toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>

    <div class="content">
      <div class="about-us">
        Fibers.cat es una plataforma que facilita als usuaris aportar contingut i fer-ho accesible per a tothom.
        <br>
        <br>
        <span class="special-c">- - - - -</span>
        <br>
        <br>
        Creat per
        <br>
        <span class="special-c">-</span>
        <br>

        <div class="row" style="margin-top:25px;">
          <div class="col s12 m6">
            <img class="img-responsive avatar" src="assets/img/z.jpg" alt="">
            Qu4k3
            <br>
            <span class="special-c"><&#47; </span>Desenvolupador <span class="special-c">/></span>
          </div>
          <div class="col s12 m6">
            <img class="img-responsive avatar" src="assets/img/w.jpg" alt="">
            Welcius
            <br>
            <span class="special-c">**</span> Administrador <span class="special-c">**</span>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-mobile">
        <?php include "views/layouts/_footer.php" ?>
    </div>

  </section>

  <?php include "views/condicions-us.php" ?>

</body>
</html>

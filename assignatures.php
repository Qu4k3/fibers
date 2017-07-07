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

    <div class="content">
      <div class="grid-container">
        <?php include "views/estat-assignatures.php" ?>
      </div>
    </div>

  </section>

</body>
</html>

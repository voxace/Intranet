<!DOCTYPE html>
<html lang="en">
  <head>
    <script>
      if (/Trident.*rv[ :]*11\./.test(navigator.userAgent)) {
        window.location = "http://intranet.mullumtas.com/ie/index.html";
      }
    </script>
    <!--[if IE]>
      <script type="text/javascript">
        window.location = "http://intranet.mullumtas.com/ie/index.html";
      </script>
    <![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MHS Student Intranet</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css?ver=1.3" rel="stylesheet ">
    <link href="css/menu.css " rel="stylesheet ">
  </head>

  <body>
    <div class="wrapper" id="wrapper">

      <!--- HEADER --->
      <div id="header">
        <a href="index.php">
          <img src="img/logo.png" class="img-responsive" />
        </a>
      </div>

      <?php include 'toolbar.php' ?>

      <!--- LEFT COLUMN --->
      <aside class="sidebar">
        <?php include 'mainmenu.php' ?>
        <?php include 'searchbox.php' ?>
        <?php include 'datebox.php' ?>
      </aside>

      <!--- CONTENT --->
      <article id="content">
        <?php include 'getpage.php' ?>
      </article>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/clock.js"></script>
    <script src="js/menu.js"></script>
  </body>
</html>

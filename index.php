<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body> 
  <div id="page">
 <?php 

 require('views/header.php'); 
  require('views/hero.php'); 

 ?>





  </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729 livereload.js?snipver=1"></' + 'script>')</script>
  </body>
</html>

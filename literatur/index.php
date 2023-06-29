<!doctype html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset='utf-8'>
    <title>Comic-Blog</title>
  </head>

<body>

  <!--<input type="checkbox" id="darkmode-toggle"/>
  <label for="darkmode-toggle"> `-->

  <?php
    include 'moduls/header_index.php';
    include 'moduls/video.php';
    include 'moduls/main_content.php';
    include 'moduls/bewertungen.php';
  ?>

  <?php

    if (isset($_POST['do'])) {

      $do = $_POST['do'];

      if ($do == '0') {
        ?>
          <a href="index.php">
        <?php
      } elseif ($do == '1') {
        ?>
          <a href="moduls/login.php">;
        <?php
      } elseif ($do == '2') {
        ?>
          <a href="moduls/upload.php">;
        <?php
      } elseif ($do == '3') {
        ?>
          <a href="moduls/support.php">;
        <?php
      } else {
          //Aktion? freie Leitung;
      }
    }

      include 'moduls/footer.html';
    ?>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Сайт-визитка</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="flex-container">
      <div class="header">
        <?php include 'logo.php' ?>
        <?php include 'menu.php' ?>
      </div>
      <div class="about_me">
        <h1>  <?php  echo $h1  ?> </h1>
        <h2>  <?php  echo $h2  ?> </h2>
        <p>
          <?php
            echo 'Меня зовут <span>',  $name, ' ', $surname . '</span>,<br/>';
            echo 'Я студент <span>',  $school, '</span> на курсе «этичный хакинг».' . '<br/>';
            echo 'Город: <span>',  $city, '</span>, мне <span>',  $age, '</span> лет.';
          ?>
        </p>
      </div>
      <div class="knowledge">
        <h3><?php include 'knowledge.php'; echo $text_1?> </h3>
        <div class="container">
          <div class="section">
            <?php
              echo '<img src="img/php_logo.png" width="250">';
              echo '<p>', $text_2, '</p>';
            ?>
          </div>
          <div class="section">
            <?php
              echo '<img src="img/xampp_logo.png" width="250">';
              echo '<p>', $text_3, '</p>';
            ?>
          </div>
        </div>
        <div class="container">
          <div class="section">
            <?php
              echo '<p>Среднее арифметическое чисел ', implode(', ', $array), ':</p>';
              echo '<h3>', $avg, '</h3>';
              echo '<p>Ваш IP:</p>';
              echo '<h3>', $ip, '</h3>';
            ?>
          </div>
        </div>
      </div>
      <?php include 'footer.php'?>
      <div class="bg"/></div>
    </div>
  </body>
</html>

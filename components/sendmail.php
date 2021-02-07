<?php


if (isset($_POST['name'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $note = $_POST['note'];

  $to = 'zeltaurkis@gmail.com';
  $subject = 'Vēlos rezervēt Zelta Urķi';
  $headers = 'No ' . $name;
  $txt = 'Vārds: ' . $name . '\n\n E-pasts: ' . $email . '\n\n Tālrunis: ' . $phone . '\n\n Piezīmes: ' . $note;
  mail($to, $subject, $txt, $note);
  if (mail($to, $subject, $txt, $note)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/style.css">
      <title>Pasūtīt Zelta Urķi</title>
      <link rel="apple-touch-icon" sizes="180x180" href="../css/img/logo/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../css/img/logo/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../css/img/logo/favicon/favicon-16x16.png">
      <link rel="manifest" href="../css/img/logo/favicon/site.webmanifest">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    </head>

  <?php
    echo "<div id='cover'>";
    echo "<div id='pop-up'>";
    echo "<h3><strong>" . $name . "</strong>, tavs pieprasījums ir veiksmīgi aizsūtīts.</br>Mēs ar tevi sazināsimies tuvākajā laikā!</h3>";
    echo "<div class='button'><a href='../index.html'>OK</a></div>";
    echo "</div>";
    echo "</div></br>";
    echo "</body>";
    echo "</html>";
  } else {
  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/style.css">
      <title>Pasūtīt Zelta Urķi</title>
      <link rel="apple-touch-icon" sizes="180x180" href="../css/img/logo/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../css/img/logo/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../css/img/logo/favicon/favicon-16x16.png">
      <link rel="manifest" href="../css/img/logo/favicon/site.webmanifest">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    </head>

    <body>


  <?php
    echo "<div id='cover'>";
    echo "<div id='pop-up'>";
    echo "<h3>Ups!</br>Kaut kas nav tā ar tiem sakariem.</br>Pasūti Urķi, uzrakstot mums</br>e-pastu <strong>zeltaurkis@gmail.com</strong>!</h3>";

    echo "<div class='button'><a href='../index.html'>ATGRIEZTIES SĀKUMLAPĀ</a></div>";
    echo "</br>";
    echo "<div class='button'><a href='../components/order-form-lv.html'>MĒĢINĀT VĒLREIZ</a></div> </br>";
    echo "</div>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
  }
}
  ?>
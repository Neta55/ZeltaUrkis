<?php
// $recaptcha = $_POST['g-recaptcha-response'];

// if(!empty($recaptcha)) {
//     $recaptcha = $_REQUEST['g-recaptcha-response'];
//     $secret = 'secret key';
//     $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
//     $curl = curl_init();
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($curl, CURLOPT_TIMEOUT, 10);
//     curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0");
//     $curlData = curl_exec($curl);
//     curl_close($curl); 
//     $curlData = json_decode($curlData, true);
//     if($curlData['success']) {
// pieliekot robotu apakšā 1 rinda dzēšās

if (isset($_POST['name'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $note = $_POST['note'];

  $mailTo = 'ineta.priga@gmail.com';
  $subject = 'Vēlos rezervēt Zelta Urķi';
  $headers = 'No ' . $name;
  $txt = 'Vārds: ' . $name . '\n\n E-pasts: ' . $email . '\n\n Tālrunis: ' . $phone . '\n\n Piezīmes: ' . $note;
  if (mail($mailTo, $subject, $txt, $note)) {
?>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/ZeltaUrkis/css/style.css">
      <title>Pasūtīt Zelta Urķi</title>
      <link rel="apple-touch-icon" sizes="180x180" href="/ZeltaUrkis/css/img/logo/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/ZeltaUrkis/css/img/logo/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/ZeltaUrkis/css/img/logo/favicon/favicon-16x16.png">
      <link rel="manifest" href="/ZeltaUrkis/css/img/logo/favicon/site.webmanifest">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    </head>
  <?php
    echo "<div id='cover'>";
    echo "<div id='pop-up'>";
    echo "<h3><strong>" . $name . "</strong>, tavs pieprasījums ir veiksmīgi aizsūtīts.</br>Mēs ar tevi sazināsimies tuvākajā laikā!</h3>";
    echo "<div class='button'><a href='/ZeltaUrkis/index.html'>OK</a></div>";
    echo "</div>";
    echo "</div>";
  } else {
  ?>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/ZeltaUrkis/css/style.css">
      <title>Pasūtīt Zelta Urķi</title>
      <link rel="apple-touch-icon" sizes="180x180" href="/ZeltaUrkis/css/img/logo/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/ZeltaUrkis/css/img/logo/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/ZeltaUrkis/css/img/logo/favicon/favicon-16x16.png">
      <link rel="manifest" href="/ZeltaUrkis/css/img/logo/favicon/site.webmanifest">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    </head>
<?php
    echo "<div id='cover'>";
    echo "<div id='pop-up'>";
    echo "<h3>Ups!</br>Kaut kas nav tā ar tiem sakariem.</br>Mēģini pasūtīt Urķi, piezvanot</br>pa tālr. <strong>26 008 102</strong>!</h3>";

    echo "<div class='button'><a href='/ZeltaUrkis/index.html'>ATGRIEZTIES SĀKUMLAPĀ</a></div>";
    echo "</br>";
    echo "<div class='button'><a href='/ZeltaUrkis/components/order-form-lv.html'>MĒĢINĀT VĒLREIZ</a></div>";
    echo "</div>";
    echo "</div>";
  }
}
// else {
//   echo "Atzīmē, ka neesi robots, un mēģini vēlreiz";
// }
// }
// else {
// echo "Atzīmē, ka neesi robots ieliekot ķeksīti, un mēģini vēlreiz";
// }
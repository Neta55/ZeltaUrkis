<?php
if (isset($_POST['order-game'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  // $message = $_POST['message'];

  $mailTo = 'ineta.priga@gmail.com';
  $subject = 'Vēlos rezervēt Zelta Urķi';
  $headers = 'No ' . $name;
  $txt = 'Vārds: ' . $name . '\n\n E-pasts: ' . $email . '\n\n Tālrunis: ' . $phone;

  mail($mailTo, $subject, $txt);
  header('Location: /ZeltaUrkis/components/order-form-lv.html');
} else {
  header('Location: /ZeltaUrkis/components/order-form-lv.html');
}

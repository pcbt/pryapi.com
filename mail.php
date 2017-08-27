<?php
    $to = "batutr2@gmail.com"; // this is your Email address
    $from = "info@pryapi.com"; // this is the sender's Email address
    $ad = $_POST['ad-soyad'];
    $telefon = $_POST['telefon'];
    $eposta = $_POST['eposta'];
    $proje-tipi = $_POST['proje-tipi'];
    $ay=$_POST['ay'];
    $yil=$_POST['yil'];
    $enkisasure=$_POST['en_kisa_surede'];
    $butce=$_POST['butce'];
    $aciklama=$_POST['aciklama'];
    $subject = "Yeni Proje Istegi";

    $message = $ad . " " . $telefon . $eposta . $proje-tipi . $ay . $yil . $butce . $aciklama ;


    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

    echo "Mail Sent. Thank you " . $ad . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
     mail($to, $subject, $body)
?>
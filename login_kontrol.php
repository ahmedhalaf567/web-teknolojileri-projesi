<?php
$dogru_email = "b251210559@sakarya.edu.tr";
$dogru_sifre = "b251210559";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelen_email = $_POST['email'];
    $gelen_sifre = $_POST['password'];

    if (empty($gelen_email) || empty($gelen_sifre)) {
        header("Location: login.php?hata=bos");
        exit();
    }

    if ($gelen_email == $dogru_email && $gelen_sifre == $dogru_sifre) {
        header("Location: hosgeldin.php?user=" . $gelen_sifre);
        exit();
    } else {
        header("Location: login.php?hata=yanlis");
        exit();
    }
}
?>
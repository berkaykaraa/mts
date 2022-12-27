<?php
$host= "localhost";
$k_adi= "root";
$sifre = "";
$vt_adi = "medikal_takip_sistemi";
$baglan = mysqli_connect($host, $k_adi , $sifre, $vt_adi);
if (!$baglan) {
    echo "Veri Tabanı Bağlantısı Başarısız!";
}

$baglan->set_charset("utf8");
?>

<?php
include("db_conn.php");

$sorgu=mysqli_query($baglan,"SELECT satis_sorumlulari.satis_sorumlusu_ad FROM satis_sorumlulari WHERE satis_sorumlulari.satis_sorumlusu_id='01'");
if(mysqli_num_rows($sorgu)>0){
    $satissorumlusu1=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT satis_sorumlulari.satis_sorumlusu_ad FROM satis_sorumlulari WHERE satis_sorumlulari.satis_sorumlusu_id='02'");
if(mysqli_num_rows($sorgu)>0){
    $satissorumlusu2=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT satis_sorumlulari.satis_sorumlusu_ad FROM satis_sorumlulari WHERE satis_sorumlulari.satis_sorumlusu_id='03'");
if(mysqli_num_rows($sorgu)>0){
    $satissorumlusu3=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT satis_sorumlulari.satis_sorumlusu_ad FROM satis_sorumlulari WHERE satis_sorumlulari.satis_sorumlusu_id='04'");
if(mysqli_num_rows($sorgu)>0){
    $satissorumlusu4=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT yillik_satislar.satis_adedi FROM yillik_satislar WHERE yillik_satislar.urun_id=11");
if(mysqli_num_rows($sorgu)>0){
    $satisadet1=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT yillik_satislar.satis_adedi FROM yillik_satislar WHERE yillik_satislar.urun_id=4");
if(mysqli_num_rows($sorgu)>0){
    $satisadet2=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT yillik_satislar.satis_adedi FROM yillik_satislar WHERE yillik_satislar.urun_id=1");
if(mysqli_num_rows($sorgu)>0){
    $satisadet3=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT yillik_satislar.satis_adedi FROM yillik_satislar WHERE yillik_satislar.urun_id=1");
if(mysqli_num_rows($sorgu)>0){
    $satisadet4=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT yillik_satislar.satis_adedi FROM yillik_satislar WHERE yillik_satislar.urun_id=6");
if(mysqli_num_rows($sorgu)>0){
    $satisadet5=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT yillik_satislar.satis_adedi FROM yillik_satislar WHERE yillik_satislar.urun_id=9");
if(mysqli_num_rows($sorgu)>0){
    $satisadet6=mysqli_fetch_row($sorgu);
}



$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=203");
if(mysqli_num_rows($sorgu)>0){
    $hastane1=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=201");
if(mysqli_num_rows($sorgu)>0){
    $hastane2=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=205");
if(mysqli_num_rows($sorgu)>0){
    $hastane3=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=204");
if(mysqli_num_rows($sorgu)>0){
    $hastane4=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=202");
if(mysqli_num_rows($sorgu)>0){
    $hastane5=mysqli_fetch_row($sorgu);
}

$sorgu=mysqli_query($baglan,"SELECT hastaneler.hastane_adi FROM hastaneler WHERE hastaneler.hastane_id=204");
if(mysqli_num_rows($sorgu)>0){
    $hastane6=mysqli_fetch_row($sorgu);
}



$yillikhedefciro=20000000;
$yillikhedefciro=number_format($yillikhedefciro,2);
$yillikkar=62;
$subesayisi=11;
$sorgu=mysqli_query($baglan,"SELECT COUNT(satis_sorumlulari.satis_sorumlusu_id) FROM satis_sorumlulari");
if(mysqli_num_rows($sorgu)>0){
    $calisansayi=mysqli_fetch_row($sorgu);
}





?>
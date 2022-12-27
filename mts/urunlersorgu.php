<?php
include("db_conn.php");

$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=1");
if(mysqli_num_rows($sorgu)>0){
    $cerrahibone=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=2");
if(mysqli_num_rows($sorgu)>0){
    $serumaski=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=3");
if(mysqli_num_rows($sorgu)>0){
    $koruyucumaske=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=4");
if(mysqli_num_rows($sorgu)>0){
    $flowmetre=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=5");
if(mysqli_num_rows($sorgu)>0){
    $oksijenterapi=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=6");
if(mysqli_num_rows($sorgu)>0){
    $koruyucutulum=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=7");
if(mysqli_num_rows($sorgu)>0){
    $medikalgaz=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=8");
if(mysqli_num_rows($sorgu)>0){
    $sedyeortu=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=9");
if(mysqli_num_rows($sorgu)>0){
    $vakumregulator=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=10");
if(mysqli_num_rows($sorgu)>0){
    $vakumkavanoz=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=11");
if(mysqli_num_rows($sorgu)>0){
    $pulse=mysqli_fetch_row($sorgu);
}
$sorgu=mysqli_query($baglan,"SELECT urunler.urun_fiyati FROM urunler WHERE urunler.urun_id=12");
if(mysqli_num_rows($sorgu)>0){
    $flowkavanoz=mysqli_fetch_row($sorgu);
}




?>
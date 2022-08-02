<?php 
include "baglan.php";
if(@$_POST['giris']){
	$kmail=$_POST['uye_mail'];
	$ksifre=$_POST['uye_sifre'];
$tara=mysqli_query($baglan, "SELECT * FROM uye WHERE uye_mail='$kmail' AND uye_sifre='$ksifre' ");
if(mysqli_num_rows($tara) == 1)
{
	$sonuc=mysqli_fetch_assoc($tara);
	$_SESSION['uye_mail']=$sonuc['uye_mail'];
	$_SESSION['uye_id']=$sonuc['uye_id'];
	$_SESSION['uye_ad']=$sonuc['uye_ad'];
header ("location:anasayfa.php"); exit;
}
}

else if($_POST['kayit'])
{
	$kmail=$_POST['uye_mail'];
	$ksifre=$_POST['uye_sifre'];
	$kad=$_POST['uye_ad'];
$tara=mysqli_query($baglan, " SELECT * FROM uye WHERE uye_mail='$kmail' AND uye_sifre='$ksifre' ");
if(mysqli_num_rows($tara) == 1)
{ header ("location:kayit.html?durum=hata"); exit; }
else {
$kayit=mysqli_query($baglan,"INSERT INTO uye (`uye_ad`, `uye_mail`, `uye_sifre`) VALUES ('$kad', '$kmail', '$ksifre')");

$tara=mysqli_query($baglan, " SELECT * FROM uye WHERE uye_mail='$kmail' AND uye_sifre='$ksifre' ");
	$sonuc=mysqli_fetch_assoc($tara);
	$_SESSION['uye_mail']=$kmail;
	$_SESSION['uye_id']=$sonuc['uye_id'];
	$_SESSION['uye_ad']=$kad;
	header ("location:anasayfa.php"); exit;
}
}
 header ("location:index.html?durum=hata");
 ?>
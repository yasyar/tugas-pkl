<?php
//input poto
$photo1 = $_FILES['gbr1']['name'];
$extensionList = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
$dir = "gambar_news/";
$pecah1 = explode(".", $photo1);
$ekstensi1 = $pecah1[1];
if (in_array($ekstensi1,$extensionList))
{
	$tmp1 = $_FILES['gbr1']['tmp_name'];
	$nama_baru1 = $id_news.'1'.".";
	$nama_baru1 = $nama_baru1.$ekstensi1;
	$upload = move_uploaded_file($tmp1,$dir.$nama_baru1);
 } else {echo "hanya diperbolehkan file ekstension jpeg,jpg,png "; } 
 if (!empty($judul))
?>
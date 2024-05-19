<?php

session_start();
ob_start();


if(($_POST["user"]=="B231210372@ogr.sakarya.edu.tr") && ($_POST["pass"]=="B231210372"))
{

$_SESSION["login"] = "true";
$_SESSION["user"] = "B231210372@ogr.sakarya.edu.tr";
$_SESSION["pass"] = "B231210372";

echo "Hosgeldiniz. Giriş basarili. Anasayfaya yonlendiriliyorsunuz. Lütfen bekleyin..";
header("Refresh:2; url=dogru.html");

}
elseif(($_POST["user"]=="") && ($_POST["pass"]==""))
{
echo "Kullanici adi veya sifre bos birakilamaz.";
header("Refresh: 2; url=index.html");
}
else
{
echo "Kullanici adi veya sifre yanlis.";
header("Refresh: 2; url=index.html");
}


ob_end_flush();
?>
<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 22.11.2017.
 * Time: 8:05
 */
$ime=$_POST['ime'];
$prezime=$_POST['prez'];
$adresa=$_POST['adr'];
$mjesto=$_POST['mjesto'];
$broj=$_POST['broj'];
$datoteka = fopen("osoba.txt","w");
fwrite($datoteka,$ime . "\r\n");
fwrite($datoteka,$prezime . "\r\n");
fwrite($datoteka,$adresa. "\r\n");
fwrite($datoteka,$mjesto. "\r\n");
fwrite($datoteka,$broj. "\r\n");
fclose($datoteka);
?>
<?php 
session_start();

if($_SESSION["nama"] && $_SESSION["msg"]) 

echo "NAMA : " . $_SESSION["nama"] . " -> " . $_SESSION["msg"];
echo "Anda Baru Terkoneksi Dengan kami";
 
?>
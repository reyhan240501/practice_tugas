<?php

try {

    $db =new PDO("mysql:host=localhost;dbname=tugas","root","",[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
   
} catch (Exception $error) {
    echo $error->getMessage();
}
$daftar=$db->query("select * from daftar");
$data_daftar=$daftar->fetchAll();
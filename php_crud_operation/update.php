<?php

include "connection.php";

$update=$db->exec("update daftar set nama='".$_POST["nama"]."',club='".$_POST["club"]."'where id=".$_POST["id"]);

if ($update) {
    header("Location:index.php");
}    
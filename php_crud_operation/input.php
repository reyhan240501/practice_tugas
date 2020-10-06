<?php

include "connection.php";


$input=$db->exec("insert into daftar (nama,club) values('".$_POST['nama']."','".$_POST['club']."')");

if($input)
{
    header("Location:index.php");
}


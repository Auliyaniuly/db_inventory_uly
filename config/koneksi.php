<?php

$conn = mysqli_connect('localhost','root','','db_inventory_uly_xipplg4');
if(!$conn){
    die("koneksi gagal".mysqli_connect_error());
}
<?php

define("SERVERNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","sanpham1");

$conn= mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

if(!$conn){
    die("Ket noi CSDL loi : " .mysqli_connect_error());
}
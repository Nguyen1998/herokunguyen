<?php
include_once "config.php";
if(isset($_POST['Ten']) && isset($_POST['Gia'])&& isset($_POST['TonKho'])&&
    isset($_POST['NCC'])&& isset($_POST['NgayTao'])){
    if($_POST['Ten'] && ($_POST['Gia'])>0 && $_POST['TonKho'] && $_POST['NCC']
        && $_POST['NgayTao']){
        $Ten = $_POST['Ten'];
        $Gia = $_POST['Gia'];
        $TonKho = $_POST['TonKho'];
        $NCC = $_POST['NCC'];
        $NgayTao = $_POST['NgayTao'];
        $sqlUpdate = "UPDATE SanPham SET Ten='$Ten', Gia=$Gia , TonKho = $TonKho ,
NCC='$NCC', NgayTao ='$NgayTao' WHERE ID = " .(int) $_POST['ID'];
        if(mysqli_query($conn,$sqlUpdate)){
            echo "Update thành công";
            header ('Location: index.php');
            exit;
        }else{
            echo "Update thất bại";
        }
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
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
        $sqlInsert = "INSERT INTO SanPham(Ten,Gia,TonKho,NCC, NgayTao) VALUES ('$Ten',$Gia,$TonKho,'$NCC','$NgayTao')";
        if(mysqli_query($conn,$sqlInsert)){
            echo "Insert thành công";
            header ('Location: index.php');
            exit;
        }else{
            echo "Insert thất bại";
        }
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo sản phẩm mới</h1>
            <div>
                <form name="creat" action="" method="post">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="Ten">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="Gia">
                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="TonKho">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="NCC">
                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="text" class="form-control" name="NgayTao">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
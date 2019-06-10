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
$Ten = '';
$Gia='';
$TonKho = '';
$NCC = '';
$NgayTao = '';
if(isset($_GET['ID'])){
    $ID = (int) $_GET['ID'];
    $sqlSelect = "SELECT * FROM SanPham WHERE ID = ". $ID;
    $result = mysqli_query($conn, $sqlSelect);
    $row = mysqli_fetch_assoc($result);
    // cú pháp rút gon của if else ( condition ? câu lênh chạy khi đc la true : câu lệnh chạy khi dc = false
    $Ten = isset($row['Ten'])? $row['Ten']:'';
    $Gia = isset($row['Gia'])? $row['Gia']:'';
    $TonKho = isset($row['TonKho'])? $row['TonKho']:'';
    $NCC = isset($row['NCC'])? $row['NCC']:'';
    $NgayTao = isset($row['NgayTao'])? $row['NgayTao']:'';
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa sản phẩm</h1>

            <div>
                <form name="edit" action="update.php" method="post">
                    <input type="hidden" name="ID" value="<?php echo (int)$_GET['ID'] ?>">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="Ten" value="<?php echo $Ten ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="Gia" value="<?php echo $Gia ?>">
                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="TonKho" value="<?php echo $TonKho ?>">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="NCC" value="<?php echo $NCC ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="text" class="form-control" name="NgayTao" value="<?php echo $NgayTao ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
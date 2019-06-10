<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
include "config.php";
$sqlSelect = "SELECT * FROM SanPham";
$result = mysqli_query($conn,$sqlSelect);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div style="margin: 30px 0">
                <a  class="btn btn-success" href="create.php">Thêm sản phẩm</a>
            </div>
            <table class="table" >
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Tồn kho</th>
                    <th scope="col">Nhà cung cấp</th>
                    <th scope="col">Ngày tạo</th>

                </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['ID'] ?></th>
                            <td><?php echo $row['Ten'] ?></td>
                            <td><?php echo $row['Gia'] ?></td>
                            <td><?php echo $row['TonKho'] ?></td>
                            <td><?php echo $row['NCC'] ?></td>
                            <td><?php echo $row['NgayTao'] ?></td>
                            <td>
                                <div style="margin: 10px 0;">
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['ID']?>">Sửa sản phầm</a>
                                </div>
                                <div>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['ID']?>">Xóa sản phầm</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                }else{
                    echo "<br> không có bản ghi nào trong CSDL";
                }
                ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
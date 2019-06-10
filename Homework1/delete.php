<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
include_once "config.php";
$ID='';
$ten='';
$gia='';
$ton='';
$ncc='';
$ngay='';
if(isset($_GET['ID'])){
    $sanpham_id=(int) $_GET['ID'];

    $sqlselect="select * from SanPham where ID=" .$sanpham_id;
    $result=mysqli_query($conn,$sqlselect);
    $row=mysqli_fetch_assoc($result);

    $name=isset($row['Ten']) ? $row['Ten']: '';
}

if(isset($_POST['action']) && ($_POST['action']=='delete')){
    if(isset($_POST['ID']) && ($_POST['ID']>0)){
        $id=(int) $_POST['ID'];

        $sqldelete="delete from SanPham where ID=$id";
        if(mysqli_query($conn,$sqldelete)){
            header('location:index.php');
            exit;
        }else{
            echo "Xoa that bai";
        }
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xoá nhân viên </h1>

            <div>
                <form name="edit" action="" method="post">
                    <input type="hidden" name="ID" value="<?php echo (int) $_GET['ID'] ?>">
                    <input type="hidden" name="action" value="delete">
                    <div class="form-group">
                        <label>Tên : <?php echo $ten ?></label>
                    </div>
                    <button type="submit" class="btn btn-delete">Xoá nhân viên</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

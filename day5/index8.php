<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/23/2019
 * Time: 8:54 PM
 */

class Hinhtron{
    public static $r;

    public static function datBankinh($r){
        self::$r=$r;
        return self::$r;
    }

    public static function tinhchuvi($r){
        $cv=$r*2*3.14;
        return $cv;
    }

    public static function tinhdientich($r){
        $s=$r*$r*3.14;
        return $s;
    }
}
/**
 * khi khởi tạo đối tượng thông thường
 * $doituong = new TenClass();
 * gọi đến thuộc tính hay phương thức của class
 * thì sẽ phải gọi qua đối tượng
 * $doituong->tenthuoctinh;
 * $doituong->tenphuongthuc();
 */
/**
 * khi class có các thuộc tính hay phương thức có từ khoá static
 * thì không cần khởi tạo đối tượng bằng từ khoá new
 * gọi đến thuộc tính statuc bằng cách
 * TenClass::TenThuocTinh;
 * gọi đến phương thức static bằng cách
 * TenClass::TenPhuongThuc();
 *
 *
 */
$bankinh=Hinhtron::datBankinh(7);
echo "<br> ban kinh: " .$bankinh;

$chuvi=Hinhtron::tinhchuvi(7);
echo "<br> chu vi: " .$chuvi;

$dientich=Hinhtron::tinhdientich(7);
echo "<br> dien tich: " .$dientich;

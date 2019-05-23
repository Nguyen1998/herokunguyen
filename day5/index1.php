<?php
/**
 * khai báo class trong php
 * class student
 */
class Student
{
    public $name;
    public $age;
    public $location;
    public $point;

    public function __construct($name_param, $age_param, $location_param)
    {
        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $location_param;
    }

    public function calculatepoint($point_arr_param)
    {
        if (is_array($point_arr_param) && !empty($point_arr_param)) {
            $count = 0;
            $total = 0;
            foreach ($point_arr_param as $key => $value) {
                $total += $value;
                $count++;
            }

            $point = $total / $count;
            $this->point = $point;
        }
        return false;
    }
}

$name = "nguyen van tuan";
$age = 21;
$location = "bac ninh";
$tuan = new Student($name, $age, $location);
echo "<pre>";
print_r($tuan);
echo "</pre>";
$point = array(
    'java' => 5,
    'database' => 3,
    'php' => 6,
    'html' => 2,
    'oop' => 7,
    '.net' => 9
);
// gọi đến phương thức của class
$tuan->calculatePoint($point);
$cal_point = $tuan->point;
echo "diem trung binh : " . $cal_point;
echo "<pre>";
print_r($tuan);
echo "</pre>";

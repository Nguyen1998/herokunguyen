<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/23/2019
 * Time: 8:00 PM
 */
class Test{
    public $a=5;
    protected $b=7;
    private $c =9;
}
 class Test1 extends Test{
    public function truycapthuoctinhpubliccha(){
        echo"<br> ".__METHOD__." " .$this->a;
    }
     public function truycapthuoctinhprocha(){
         echo"<br> ".__METHOD__." " .$this->b;
     }
     public function truycapthuoctinhpricha(){
         echo"<br> ".__METHOD__." " .$this->c;
     }
 }

 $t=new Test1();
$t->truycapthuoctinhpubliccha();
$t->truycapthuoctinhprocha();
//không thể truy cập vào private
$t->truycapthuoctinhpricha();
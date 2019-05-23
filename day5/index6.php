<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/23/2019
 * Time: 8:12 PM
 */
class Test{
    public $a=5;
    protected $b=7;
    private $c =9;

    public function getC(){
        echo "<br>".__METHOD__." " .$this->c;
    }
}
$t=new Test();
$t->getC();

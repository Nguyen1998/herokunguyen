<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/23/2019
 * Time: 8:23 PM
 */
class Test{
    public $a=5;
    protected $b=7;
    private $c =9;

    public function methoda(){
        echo "<br>".__METHOD__;
    }
    protected function methodb(){
        echo "<br>".__METHOD__;
    }
    private function methodc(){
        echo "<br>".__METHOD__;
    }
}

class Test1 extends Test{
    public function truycapulica(){
        echo"<br>".__METHOD__." " .$this->methoda();
    }
    public function truycaprob(){
        echo"<br>".__METHOD__." " .$this->methodb();
    }
    public function truycapric(){
        echo"<br>".__METHOD__." " .$this->methodc();
    }
}

$t=new Test1();
$t->truycapulica();
$t->truycaprob();
$t->truycapric();
<?php

class Test{
    public $a=5;
    protected $b=7;
    //private $c =9;
}
$t=new Test();

echo"<br>" .$t->a;
/*
 * Error: Cannot access protected property
 */
echo"<br>" .$t->b;

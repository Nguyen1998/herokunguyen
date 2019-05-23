<?php

class Test{
    public $a=5;
    protected $b=7;
    private $c=9;
}
$t=new Test();

echo"<br>" .$t->a;
/*
 *  Cannot access private property
 * khong the truy cap vao private
 */
echo"<br>" .$t->c;
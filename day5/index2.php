<?php

class BasePhone{
    public $name;
    public $model;
    public $manufacture;

    public function __construct($name,$model,$manufacture)
    {
        $this->name=$name;
        $this->model=$model;
        $this->manufacture=$manufacture;
    }

    /*
     * gui tin nhan SMS
     * @param $phone
     */
    public function sendSms($phone){
        echo"<br>" .__METHOD__." " .$phone;
    }

    /*
     * nhan tin nhan SMS
     * @param $phone
     */
    public function receiveSms($phone){
        echo"<br>" .__METHOD__." " .$phone;
    }

    /*
     * goi dien
     * @param $phone
     */
    public function callNumber($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }
}


    class Smartphone extends BasePhone{
        public function __construct($name, $model, $manufacture)
        {
            parent::__construct($name, $model, $manufacture);
        }
        public function sendEmail($address_email)
        {
           echo"<br>".__METHOD__." " .$address_email;
        }
        public function facebook($account)
        {
            echo"<br>".__METHOD__." " .$account;
        }
        public function playgame($game_name)
        {
            echo"<br>".__METHOD__." " .$game_name;
        }
    }

    $samsungi8=new Smartphone('samsung i8','i8','samsung');
    $samsungi8->sendSms('0123465');
    $samsungi8->facebook('ha1111');

    echo "<pre>";
    print_r($samsungi8);
    echo "</pre>";
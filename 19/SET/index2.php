<?php

class ConNguoi
{
    public $name;

    public function __set($key, $value)
    {
        die('Phương thức __set() được gọi');
    }

    public function getName()
    {
        echo $this->name;
    }
}

$connguoi = new ConNguoi();
$connguoi->name = "Vũ Thanh Tài";
$connguoi->getName();
$connguoi->age = 20;

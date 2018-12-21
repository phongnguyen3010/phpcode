<?php

class ConNguoi
{
    private static $name;

    public function __isset($name)
    {
        echo 'Bạn vừa kiểm tra thuộc tính: ' . $name;
    }
}

$connguoi = new ConNguoi();

isset($connguoi->name);

empty($connguoi->name);

isset($connguoi->age);

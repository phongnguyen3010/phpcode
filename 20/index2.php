<?php

class ConNguoi
{
    private $name;

    public function __unset($name)
    {
        echo 'Bạn vừa hủy thuộc tính: ' . $name;
    }
}

$connguoi = new ConNguoi();

unset($connguoi->name);

unset($connguoi->age);

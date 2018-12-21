<?php

class ConNguoi
{
    private $name = "Vũ Thanh Tài";

    public function __get($key)
    {
        if (property_exists($this, $key)) {
            //tiến hành lấy giá trị
            return $this->$key;
        } else {
            die('Không tồn tại thuộc tính');
        }
    }

    public function getName()
    {
        echo $this->name;
    }
}

$connguoi = new ConNguoi();

echo $connguoi->name;
$connguoi->age;

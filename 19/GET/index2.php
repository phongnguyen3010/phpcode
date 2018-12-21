<?php
class ConNguoi
{
    public $name = 'Vũ Thanh Tài';
    private $age = 20;
    public function __get($key)
    {
        die('Phương thức __get() được gọi');
    }
}
$connguoi = new ConNguoi();
echo $connguoi->name;
$connguoi->age;

<?php
include 'SetGetName.php';
include 'SetGetAge.php';

class ConNguoi{
    private $name;
    private $age;

    use SetGetName;

    use SetGetAge\SetGetAge;
}

$connguoi = new ConNguoi();
$connguoi->setName('Vu Thanh Tai');
echo $connguoi->getName();
echo '<br/>';

$connguoi->setAge(22);
echo $connguoi->getAge();
?>
<?php
class Person{
    public $name= 'Geeta University';
    public $age;

    public function Message(){
        echo '<br><br>Hello Devuuuu.....<BR>';
    }
    public function age($value){
echo $this->age ='<br>Person age is: '.$value.'<BR>';
    }
}
$p = new Person;
echo $p->name;
// echo $p->age=19;
$p->age('19');
echo $p->Message();
define('NAME', 'Lovepreet Kaur');
echo NAME;
echo '<br>NAME is :'.NAME;
?>
<?php
class Fruit{
    public $name;
    public $color;
    function set_name($name){
        $this -> name = $name;
 
       

    }
    function get_name(){
        return $this -> name;
       
       
        
    }
    function set_color($color){
        $this -> color = $color;
    }
    function get_color(){
        return $this -> color;
    }
    

}

$a=new Fruit();
$b=new Fruit();

$a->set_name('apple');
$b->set_name('banana');
$a->set_color('red');
$b->set_color('yellow');

echo $a->get_name();
echo " <br>";
echo $b->get_name();
echo " <br>";
echo $a->get_color();
echo " <br>";
echo $b->get_color();



?>
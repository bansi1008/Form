<?php


class fru{
    public $name;
    public $color;
    function __construct($name,$color){
        $this->name = $name;    
        $this->color = $color;  

}
    function __destruct()
    {
        echo"the fruit name is {$this->name} and color is {$this->color}";
    }
}
$a= new fru('apple','red');




?>

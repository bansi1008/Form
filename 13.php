<?php
abstract class car{
  public $name;
  public $color;
  public function __construct($name,$color){   
    $this->name = $name;
    $this->color=$color;
}
 abstract public function intro();
}
class audi extends car{
    public function intro()  {   
        return "$this->name , $this->color";
        

        
    }
}
$audi = new audi('audi','red');
echo $audi->intro();





?>
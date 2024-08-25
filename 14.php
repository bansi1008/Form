<?php
interface animal{
    public function makesound();
}

class cat implements animal{
    public function makesound(){

        echo "meoww";
    
}
}

$a = new cat();
$a->makesound();





?>

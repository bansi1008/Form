<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
$color = "red";
echo" <br>colour is= $color";

$i=0;
while($i<6){
    echo" <br>$i";
    $i++;
}

function my(){
    echo"hello";
}
my();
function my2($f_name){
    echo "<br> $f_name dobariya";
}
my2("bansi");
echo"<br>";


      function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      
      $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
      echo "$a";

      echo"<br>";
      function addNumbers(int $a, int $b) {
        return $a + $b;
      }
      echo addNumbers(5, 6);
      echo "<br>";


        echo"<br>";
        
        echo $_SERVER['PHP_SELF'];
        echo"<br>";
        echo $_SERVER['SERVER_NAME'];
        echo '<br>';
        echo $_SERVER['HTTP_HOST'];

        echo"<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo '<br>';
        echo $_SERVER['HTTP_USER_AGENT'];
        echo"<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo '<br>';


      





?>

</body>
</html>
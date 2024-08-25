<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <?php
 $conn=mysqli_connect("localhost","root","","info");
 if($conn===false){
    die("could not connect".mysqli_connect_error());
 }
 $name=$_REQUEST['$name'];
 $nationality=$_REQUEST['$nationality'];
 $number=$_REQUEST['$number'];
    ?>
</body>
</html>
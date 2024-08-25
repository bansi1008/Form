<!DOCTYPE html>
<head>
    <title>heyy</title>
</head>
<body>
<?php
 $conn = mysqli_connect("localhost","root","","gym");
if ($conn===false) {
    die("error: could not connect"

    .mysqli_connect_error());
}
$name=$_REQUEST['name'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];
$locality=$_REQUEST['locality'];
$email=$_REQUEST['email'];
$number=$_REQUEST['number'];

$sql = "INSERT INTO dat values('$name','$age','$gender','$locality','$email','$number')";

if(mysqli_query($conn,$sql)){   
    echo "data has been stored";
}

else{
    echo "error:hush! sorry"
    .mysqli_error($conn);
}
 mysqli_close($conn);

?>    

</body>
</html>
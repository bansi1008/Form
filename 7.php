<!DOCTYPE html>

<head>
    <title>Document</title>
</head>
<body>
  <center>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "st");
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $name1 = $_REQUEST['name1'];
    $email = $_REQUEST["email"];

    $sql = "INSERT INTO coll VALUES ('$name1','$email')";

    if(mysqli_query($conn, $sql)){
        echo ""
            . " Thank you!!";
            
    
        
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

// Close connection
mysqli_close($conn);
?>        

    
  </center>
</body>
</html>
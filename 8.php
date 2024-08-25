<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bansi fitness</title>
</head>
<link rel="stylesheet" href="css//style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0px;
        padding: 0px;
        background: url('img/bg.png.jpg');
        color: whitesmoke;
        font-family: 'Balsamiq Sans', cursive;
        
       
    }

    .left {

        
        display: inline-block;
        left: 63px;
        top: 20px;
        position:absolute;

    }

    .left img {
        width: 136px;

    }

    .left div {
        text-align: center;
        line-height: 19px;
        font-size: 26px;
    }

    .mid {
        
        display: block;
        width: 50%;
        margin: 20px auto;
        



    }

    .right {
        position:fixed;
        right: 34px;
        top: 20px;        
        display: inline-block;
    
    }

    .navbar {
        display: inline;
        position:static;

    }

    .navbar li {
        display: inline-block;

        font-size: 25px;
        
    }

    .navbar li a {
        color: whitesmoke;
        text-decoration: none;
        padding: 34px 23px;
        
    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: gray;
        
    }

    .btn {
        margin: 0px 9px;
        background-color: black;
        padding: 4px 14px;
       
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        color: ghostwhite;
    }

    .btn:hover {
        background-color: darksalmon;
    }

    .container {
        border: 2px solid deeppink;
        margin: 112px 190px;
        padding: 62px 312px;

        width: 30%;
        border-radius: 75px;
        text-align: center;
    }

    .form-group input {
        text-align: center;
        display: block;
        width: 344px;
        padding: 8px;
        
        margin: 11px auto;
        font-size: 20px;
        border-radius: 8px;
        font-family: 'Balsamiq Sans', cursive;
    }

    .container h1 {
        text-align: center;
    }

    .container button {
        display: block;
        width: 23%;
        margin: auto;
        
    }
    #ban{
        color: black;
        font-size: 2em;
    }
</style>

<body>
    <header class="header">
        <div class="left">
            <img src="img/gm.png.jpg" alt="">
            <div>fitnees</div>

        </div>

        <div class="mid">
            <ui class="navbar">
                <li><a href="#" class="active"> Home</a></li>
                <li><a href="#">About us</a> </li>
                <li><a href="#">Fitnees calculator</a> </li>
                <li><a href="#"> contact us</a></li>
            </ui>

        </div>
        <div class="right">
            <buyyon class="btn">call us</buyyon>
            <buyyon class="btn">email us</buyyon>
        </div>

    </header>
    <div class="container">
        <h1>join the best gym of city now</h1>
        <form action="9.php" method="post">
    <div class="form-group">
        <p id="ban"> enter your name:<input type="text" name="name" placeholder="enter your name" required></p>
    </div>
    <div class="form-group">
        <input type="text" name="age" placeholder="enter your age" required>
    </div>
    <div class="form-group">
        <input type="text" name="gender" placeholder="enter your gender">
    </div>
    <div class="form-group">
        <input type="text" name="locality" placeholder="enter your locality">
    </div>
    <div class="form-group">
        <input type="text" name="email" placeholder="enter your email id">
    </div>
    <div class="form-group">
        <input type="text" name="number" placeholder="enter your number">
    </div>
    <button class="btn">submit</button>
</form>

    </div>
</body>

</html>
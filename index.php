<?php
    // msg vars
    $msg ="";
    $msgClass="";

    // check for submit
if (filter_has_var(INPUT_POST,"submit")) {
    // get from data 
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $email=$_POST["email"];
    if (!empty($name) && !empty($surname) && !empty($email) ) {
       // Check Email
       if (filter_var($email,FILTER_VALIDATE_EMAIL)=== false) {
        $msg ="Please use valid email";
        $msgClass="Please use valid email";
       }
       else {
            echo "passed";
       };
    }
    else {
        $msg ="Please fill in all fields";
        $msgClass="alert-danger";
    }

};







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h2>Website</h2>
        </div>
    </div>
    <div class="alert">
        <?php if($msg != ""){
                echo $msgClass;
        };
        ?>
           
       
    </div>
    <form action="login.php" method="POST">
        
            <label for="name">Name</label><br>
            <input type="text" name="name" placeholder="Name"> <br>
            <label for="Surname">Surname</label><br>
            <input type="text" name="surname" placeholder="Surname"> <br>
            <label for="name">Email</label><br>
            <input type="email" name="email" placeholder="Email"> <br>
            <input type="submit" value="Submit" name="submit">
    </form>   

<style>
    ::placeholder{
        color: whitesmoke;
        font-size: 15px;
    }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    form{
        margin: 5% auto;
        padding: 100px;
        width: 500px;
        text-align: center;
        background-color: burlywood;
        border-radius: 10px;
    }
    .wrapper{
        background-color:burlywood;
        padding: 20px;
        color: whitesmoke;
        width: 100%;
    }
    label{
        font-size: 20px;
        color: whitesmoke;
    }
    input{
        margin-top: 10px;
        background-color: #bc6c25;
        padding: 5px 15px;
        border-radius: 3px;
        border: none;
        cursor: pointer;
    }
</style>


</body>
</html>

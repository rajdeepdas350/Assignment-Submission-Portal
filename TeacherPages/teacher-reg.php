<?php
include("../PHP/connection.php");
$success = false;
if($_SERVER['REQUEST_METHOD'] =="POST"){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "insert into teacher_reg (name,subject,username,password) values('$name','$subject','$username','$password');";
    mysqli_query($conn,$sql);
    $success = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration</title>
    <link rel="stylesheet" href="../CSS//registration.css">
    <link rel="stylesheet" href="../../5th Semester//CSS//registration-style.css">
    <link rel="stylesheet" href="../CSS//bg.css">
</head>
<body>
    <h1 class="heading">ENTER YOUR DETAILS</h1>
    <div class="col">
        <form method="post">
            <div class="row">
                <input type="text" name="name" required autocomplete="off">
                <span class="desc">SET NAME</span>
            </div>
            <div class="row">
                <input type="text" name="subject" required autocomplete="off">
                <span class="desc">SET SUBJECT</span>
            </div>
            <div class="row">
                <input type="text" name="username"required autocomplete="off">
                <span class="desc">SET USERNAME</span>
            </div>
            <div class="row">
                <input type="password" name="password" required autocomplete="off">
                <span class="desc">SET PASSWORD</span>
            </div>
            <div class="col">
            <button type="submit">SIGN IN AS TEACHER</button>
            </div>
        </form>
        <a href="../homepage.html">
            <button>HOME</button>
        </a>
        <div id="msg">
            <p class="shw">teacher profile saved successfully :)</p>
        </div>
        <?php
            if($_SERVER['REQUEST_METHOD'] =="POST" && $success){
                echo '
                        <script>
                        document.getElementById("msg").style.visibility = "visible";
                        </script>
                     ';
            }
        ?>
    </div>
</body>

</html>
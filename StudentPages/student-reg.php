<?php
include("../PHP/connection.php");
$success=false;
if($_SERVER['REQUEST_METHOD'] =="POST")
{
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $rollnumber = $_POST['rollno'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO `student_reg`(`name`, `branch`, `semester`, `roll_no`, `username`, `password`) values('$name','$branch','$semester','$rollnumber','$username','$password')";
    mysqli_query($conn,$sql);
    $success=true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="../CSS//registration.css">
    <link rel="stylesheet" href="../../5th Semester//CSS//registration-style.css">
    <link rel="stylesheet" href="../CSS//bg.css">
</head>
<body>
    <h1 class="heading">ENTER YOUR DETAILS</h1>
    <div class="col">
        <form method="post">
            <div class="row">
                <input type="text"  required autocomplete="off" name="name">
                <span class="desc">SET NAME</span>
            </div>
            <div class="row">
                <input type="text"  required autocomplete="off" name="branch">
                <span class="desc">SET BRANCH</span>
            </div>
            <div class="row">
                <input type="text"  required autocomplete="off" name="semester">
                <span class="desc">SET SEMESTER</span>
            </div>
            <div class="row">
                <input type="text"  required autocomplete="off" name="rollno">
                <span class="desc">SET ROLL NO</span>
            </div>
            <div class="row">
                <input type="text"  required autocomplete="off" name="username">
                <span class="desc">SET USERNAME</span>
            </div>
            <div class="row">
                <input type="password"  required autocomplete="off" name="password">
                <span class="desc">SET PASSWORD</span>
            </div>
            <div class="col">
            <button type="submit">SIGN IN AS STUDENT</button>
            </div>
        </form>
        <a href="../homepage.html">
            <button>HOME</button>
        </a>
        <div id="msg">
            <p class="shw">student profile saved successfully :)</p>
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
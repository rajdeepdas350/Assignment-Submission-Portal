<?php
include('../PHP/connection.php');
include('../PHP/session_checker.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Homepage</title>
    <link rel="stylesheet" href="../CSS/teacher.css">
    <link rel="stylesheet" href="../CSS//navbar.css">
    <link rel="stylesheet" href="../CSS//registration-style.css">
    <link rel="stylesheet" href="../CSS//bg.css">
</head>

<body>
    <nav>
    <ul>
            <li>
                <a href="../homepage.html" class="uppercase">assignment submission PORTAL</a>
            </li>
            <div class="together">
                <li class="brd">
                    <a href="../PHP/logout.php">LOGOUT <span><?php echo $_SESSION['username'];?></span></a>
                </li>
            </div>
        </ul>
    </nav>
    <div class="container">
        <h1>Welcome <?php echo $_SESSION['name'].'!';?></h1>
        <a href="t-1.php">
            <button>Upload Assignment Question</button>
        </a>
        <a href="show-assignments.php">
            <button>Show Submitted Assignment</button>
        </a>
    </div>
</body>

</html>
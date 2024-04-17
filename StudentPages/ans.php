<?php
include('../PHP/connection.php');
include('../PHP/session_checker.php');

if($_SERVER['REQUEST_METHOD'] =="GET"){
        $ans = $_GET['ans'];
        $roll_no = $_GET['roll_no'];
        $sub = $_GET['sub'];
        $question = $_GET['question'];
        $sql = "insert into answers(roll_no,sub,question,ans,upload_date) values('$roll_no','$sub','$question','$ans',NOW());";
        mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../CSS//navbar.css">
    <link rel="stylesheet" href="../CSS//student.css">
    <link rel="stylesheet" href="../../5th Semester//CSS//registration-style.css">
    <link rel="stylesheet" href="../CSS//bg.css">
    <link rel="stylesheet" href="../CSS//ans_upload.css">
    <title>Upload Answer</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="../homepage.html" class="uppercase">Assignment Submission Portal</a>
            </li>
            <div class="together">
                <li>
                    <a href="student-homepage.php">HOME</a>
                </li>
                <li class="brd">
                    <a href="../PHP/logout.php">LOGOUT <span><?php echo $_SESSION['username']; ?></span></a>
                </li>
            </div>
        </ul>
    </nav>
    <div class="container">
        <div class="box">
        <h1>ASSIGNMENT SUBMITTED!</h1>
        <p>ON</p>
        <span class="date">
            <?php
                echo date("l").", ".date("d M Y");
            ?>
        </span>
        </div>
    </div>
</body>
</html>
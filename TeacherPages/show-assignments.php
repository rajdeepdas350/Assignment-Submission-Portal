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
    <title>Evaluate Assignment Answers</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../CSS//teacher.css">
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
                <li>
                    <a href="teacher-homepage.php">HOME</a>
                </li>
                <li class="brd">
                    <a href="../PHP/logout.php">LOGOUT <span><?php echo $_SESSION['username'];?></span></a>
                </li>
            </div>
        </ul>
    </nav>
    <div class="container">
        <h1>Evaluate the Assignments</h1>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Question</th>
                    <th>Subject</th>
                    <th>Submited By (ROLL NO)</th>
                    <th>Answer</th>
                    <th>Upload Date</th>
                </tr>
            </thead>  
            <tbody>
            <?php
                $subject = $_SESSION['subject'];
                $sql_T="select * from answers where sub = '$subject';";
                $result_T = mysqli_query($conn,$sql_T);
                $i = 1;
                while($row = mysqli_fetch_assoc($result_T)){
                    echo"
                        <tr>
                            <td>".$i."</td>
                            <td>".$row['question']."</td>
                            <td>".$subject."</td>
                            <td>".$row['roll_no']."</td>
                            <td>".$row['ans']."</td>
                            <td>".$row['upload_date']."</td>
                        </tr>
                        ";
                        $i++;
                }
                ?>
            </tbody>  
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
</html>
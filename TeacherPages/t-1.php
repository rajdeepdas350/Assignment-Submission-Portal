<?php
include("../PHP/connection.php");
include("../PHP/session_checker.php");
$success = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $question = $_POST['question'];
    $subject = $_SESSION['subject'];
    $sql = "insert into assignments(subject,question) values ('$subject','$question')";
    $result = mysqli_query($conn, $sql);
    $success = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Questions</title>
    <link rel="stylesheet" href="../CSS/teacher.css">
    <link rel="stylesheet" href="../CSS//navbar.css">
    <link rel="stylesheet" href="../../5th Semester//CSS//registration-style.css">
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
                    <a href="../PHP/logout.php">LOGOUT <span><?php echo $_SESSION['username']; ?></span></a>
                </li>
            </div>
        </ul>
    </nav>

    <div class="container">
        <h1 class="heading">SET THE QUESTION</h1>
        <form method="post">
            <div class="row">
                <textarea name="question"></textarea>
                <span class="btm">Enter your Question</span>
            </div>
            <button type="submit">Upload Assignment Question</button>
        </form>
        <div id="msg" style="width: 295px;">
            <p class="shw">assignment uploaded :)</p>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST" && $success) {
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
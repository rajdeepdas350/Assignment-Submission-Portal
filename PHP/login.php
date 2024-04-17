<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $individual = $_POST['individual'];
    $loggedin = false;

    if ($individual == '') {
        header('Location:../PHP/login.php');
        die();
    }

    $sql = "select * from $individual where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $loggedin = true;
        if ($individual == 'student_reg') {
            session_unset();
            session_start();
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['roll_no'] = $row['roll_no'];
            $_SESSION['loggedin'] = true;
            header('Location:../StudentPages/student-homepage.php');
            die();
        } else {
            session_unset();
            session_start();
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['subject'] = $row['subject'];
            $_SESSION['loggedin'] = true;
            header('Location:../TeacherPages/teacher-homepage.php');
            die();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN</title>
    <link rel="stylesheet" href="../CSS//login.css">
    <link rel="stylesheet" href="..//CSS//registration-style.css">
    <link rel="stylesheet" href="../CSS//bg.css">
</head>

<body>
    <h1>USER LOGIN</h1>
    <div class="col">
        <form method="post">
            <div class="row">
                <input type="text" required autocomplete="off" name="username">
                <span class="desc">USERNAME</span>
            </div>
            <div class="row">
                <input type="password" required autocomplete="off" name="password">
                <span class="desc" n>PASSWORD</span>
            </div>
            <div class="row">
                <select name="individual">
                    <option value="" selected>--select--</option>
                    <option value="teacher_reg">Teacher</option>
                    <option value="student_reg">Student</option>
                </select>
                <span class="desc sel">YOU ARE</span>
            </div>
            <div class="col">
                <button type="submit">LOGIN</button>
            </div>
        </form>
        <a href="../homepage.html">
            <button>HOME</button>
        </a>
        <div id="errmsg">
            <p class="errmsg">Invalid credentials :(</p>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$loggedin) {
            echo '<script>
                            document.getElementById("errmsg").style.visibility="visible";
                      </script>';
        }
        ?>
    </div>
</body>

</html>
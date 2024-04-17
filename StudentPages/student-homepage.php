<?php
include('../PHP/connection.php');
include('../PHP/session_checker.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Homepage</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../CSS//navbar.css">
    <link rel="stylesheet" href="../CSS//student.css">
    <link rel="stylesheet" href="../../5th Semester//CSS//registration-style.css">
    <link rel="stylesheet" href="../../5th Semester//CSS//modal.css">
    <link rel="stylesheet" href="../CSS//bg.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="../homepage.html" class="uppercase">Assignment Submission Portal</a>
            </li>
            <li class="brd">
                <a href="../PHP/logout.php">LOGOUT <span><?php echo $_SESSION['username'];?></span></a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1>Welcome <?php echo $_SESSION['name'].'!';?></h1>
        <h3>ROLL NO: <span id='session_roll_no'><?php echo $_SESSION['roll_no'];?></span></h3>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Question</th>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql_T="select * from assignments where question NOT IN (select question from answers where roll_no =".$_SESSION['roll_no'].");";
                $result_T = mysqli_query($conn,$sql_T);
                $i = 1;
                while($row = mysqli_fetch_assoc($result_T)){
                    echo"
                        <tr>
                            <td>".$i."</td>
                            <td>".$row['question']."</td>
                            <td>".$row['subject']."</td>
                            <td><button class='small' id=".$row['sl_no'].">Upload</button></td>
                        </tr>
                        ";
                        $i++;
                }
                ?>
            </tbody>
        </table>
        <div id="modal">
            <h1 class="ans">WRITE YOUR ANSWER HERE...</h1>
            <div class="bcol">
            <form method="get" action="ans.php" target="_blank">
                <div class="row">
                    <p class="info"><u>your roll no:</u> </p>
                    <input id='roll_no' class="description" name ="roll_no" readonly>
                </div>
                <div class="row">
                    <p class="info"><u>subject:</u> </p>
                    <input id='sub' class="description" name ="sub" readonly>
                </div>
                <div class="row">
                    <p class="info"><u>question:</u> </p>
                    <input id='question' class="description" name="question" readonly>
                </div>
                </div>
                <div class="row">
                    <textarea name="ans" class="uinp" placeholder="WRITE YOUR ANSWER HERE..." required></textarea>
                </div>
                <div class="brow">
                    <button type="submit" class="small upBtn cBtn">UPLOAD ANSWER</button>
                    <button  type='button' onclick="closeModal()" class="small cBtn cancel">CANCEL</button>
                </div>
            </form> 
        </div>
    </div>      
</body>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>

<script>
    let upload = document.getElementsByClassName('small');
    Array.from(upload).forEach((element)=>{
        element.addEventListener('click',(e)=>{
            tr = e.target.parentNode.parentNode;
            sl_no = tr.getElementsByTagName('td')[0].innerText;
            roll_no = document.getElementById('session_roll_no').innerText;
            question = tr.getElementsByTagName('td')[1].innerText;
            subject = tr.getElementsByTagName('td')[2].innerText;
            document.getElementById('sub').value=subject;
            document.getElementById('roll_no').value = roll_no;
            document.getElementById('question').value=question;
            document.getElementById('modal').style.visibility='visible';
            document.getElementById('modal').style.transform='scale(1)';
            // console.log(roll_no,'\nquestion: ',question,'\nsubject:',subject);
        })
    })
    function closeModal(){
        document.getElementById('modal').style.visibility='hidden';
        document.getElementById('modal').style.transform='scale(0)';
    }
</script>
</html>

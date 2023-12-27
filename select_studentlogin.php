<?php
@session_start();
if(isset($_POST['submit']))
{   

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * from  student_master where login_id = '$email' and password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    $count = mysqli_num_rows($result);

    if($count==1 && $row['block_unblock']=='N')
    {   
        $_SESSION['student_id'] = $row['id'];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);

        echo "<script> window.location.href='book_request.php';</script>";
    }

    else if($count==1 && $row['block_unblock']=='Y'){
        echo '<script>alert("You are Blocked")</script>';
    }
    else{
        echo '<script>alert("Username and password is Inncorect")</script>';
    }
}

?>

<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * from insta_user where email_id = '$email' and password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    $count = mysqli_num_rows($result);
    
    if($count==1)
    {   
        
        $_SESSION['email_id'] = $row['email_id'];
        $_SESSION['logedin_userid'] = $row['id'];
        $_SESSION['start'] = time();
        $_SESSION['expired'] = $_SESSION['start'] + (30 * 60);
        
        echo "<script> window.location.href='index.php';</script>";
    }

    else{
        echo '<script>alert("Username and Password inncorrect")</script>';
    }
}

?>

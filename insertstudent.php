<?php

    if(isset($_POST['submit']))
    {
        $profile_id = $_POST['profile_id'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $phone_number = $_POST['phone'];
        $enroll = $_POST['Enum'];
        $login_id = $_POST['login'];
        $password = $_POST['pass'];
        
        $checkuser = "INSERT INTO `student_master` 
                    (`id`, `first_name`, `last_name`, `m_number`, `enroll_no`, `login_id`, `password`) 
                    VALUES ('$profile_id', '$firstname', '$lastname', '$phone_number', '$enroll', '$login_id', '$password')";
                    $check = mysqli_query($conn, $checkuser);

    }
?>
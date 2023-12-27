<?php

    if(isset($_POST['submit']))
    {
        $profile_id = $_POST['profile_id'];
        $cname = $_POST['addcourse'];
        
        $checkuser = "INSERT INTO `state_master` (`id`, `state_name`) VALUES ('$profile_id', '$cname')";
                    $check = mysqli_query($conn, $checkuser);

    }
?>
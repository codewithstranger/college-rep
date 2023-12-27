<?php

    if(isset($_POST['submit']))
    {
        $profile_id = $_POST['profile_id'];
        $cname = $_POST['addcourse'];
        
        $checkuser = "INSERT INTO `city_master` (`id`, `city_name`) VALUES ('$profile_id', '$cname')";
                    $check = mysqli_query($conn, $checkuser);

    }
?>
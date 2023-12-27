<?php

    if(isset($_POST['submit']))
    {
        $profile_id = $_POST['profile_id'];
        $lang_name = $_POST['addcourse'];
        
        $checkuser = "INSERT INTO `language_master` (`id`, `lang_name`) VALUES ('$profile_id', '$lang_name')";
                    $check = mysqli_query($conn, $checkuser);

    }
?>
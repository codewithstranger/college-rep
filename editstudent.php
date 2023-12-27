<?php
    if(isset($_POST['submit1']))
    {   
        $profile = $_POST['profile'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone_number = $_POST['phonenumber'];
        $enroll = $_POST['Enrollnum'];
        $login_id = $_POST['login_id'];
        $password = $_POST['password'];

        $queryedit = "UPDATE `student_master` 
                    SET `first_name` = '$firstname',
                    `last_name` = '$lastname',
                    `m_number` = '$phone_number',
                    `enroll_no` = '$enroll',
                    `login_id` = '$login_id',
                    `password` = '$password' 
                    WHERE `id`= '$profile'";

                    $checkedit = mysqli_query($conn, $queryedit);

    }
    else if(isset($_GET['del_usr_id']))
    {
      $del_usr_id = $_GET['del_usr_id'];

      if($del_usr_id)
      {
        $qry = "UPDATE `student_master` SET `removed` = 'Y' WHERE `id`= '$del_usr_id'";
        $res = mysqli_query($conn, $qry);
      }
    }

?>
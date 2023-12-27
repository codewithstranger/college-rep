<?php
    if(isset($_POST['submit1']))
    {   
        $profile = $_POST['profile'];
        $course_n = $_POST['editcourse'];

        $queryedit = "UPDATE `course_master` 
                    SET `course_name` = '$course_n' 
                    WHERE `id`= '$profile'";

                    $checkedit = mysqli_query($conn, $queryedit);

    }
    else if(isset($_GET['del_usr_id']))
    {
      $del_usr_id = $_GET['del_usr_id'];

      if($del_usr_id)
      {
        $qry = "UPDATE `course_master` SET `removed` = 'Y' WHERE `id`= '$del_usr_id'";
        $res = mysqli_query($conn, $qry);
      }
    }

?>
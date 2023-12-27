<?php
    if(isset($_POST['submit1']))
    {   
        $profile = $_POST['profile'];
        $state_n = $_POST['editcourse'];

        $queryedit = "UPDATE `state_master` 
                    SET `state_name` = '$state_n' 
                    WHERE `id`= '$profile'";

                    $checkedit = mysqli_query($conn, $queryedit);

    }
    else if(isset($_GET['del_usr_id']))
    {
      $del_usr_id = $_GET['del_usr_id'];

      if($del_usr_id)
      {
        $qry = "UPDATE `state_master` SET `removed` = 'Y' WHERE `id`= '$del_usr_id'";
        $res = mysqli_query($conn, $qry);
      }
    }

?>
<?php
    if(isset($_POST['submit1']))
    {   
        $profile = $_POST['profile'];
        $city_n = $_POST['editcourse'];

        $queryedit = "UPDATE `city_master` 
                    SET `city_name` = '$city_n' 
                    WHERE `id`= '$profile'";

                    $checkedit = mysqli_query($conn, $queryedit);

    }
    else if(isset($_GET['del_usr_id']))
    {
      $del_usr_id = $_GET['del_usr_id'];

      if($del_usr_id)
      {
        $qry = "UPDATE `city_master` SET `removed` = 'Y' WHERE `id`= '$del_usr_id'";
        $res = mysqli_query($conn, $qry);
      }
    }

?>
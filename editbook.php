<?php
    if(isset($_POST['submit1']))
    {   
        // print_r($_FILES['image1']);
        $profile = $_POST['profile'];
        @$filename = $_FILES['image']['name'];
        @$tmpname = $_FILES['image']['tmp_name'];
        $destination_path = getcwd().DIRECTORY_SEPARATOR;
        move_uploaded_file($tmpname, $destination_path.'uploads/'.$filename);
        $Bookname = $_POST['Bookname'];
        $isbn = $_POST['isbn_no'];
        $author = $_POST['author_name'];

        $queryedit = "UPDATE `book_master` 
                    SET `book_name` = '$Bookname',
                    `isbn` = '$isbn',
                    `image` = '$filename',
                    `author` = '$author' 
                    WHERE `id`= '$profile'";

                    $checkedit = mysqli_query($conn, $queryedit);

    }
    else if(isset($_GET['del_usr_id']))
    {
      $del_usr_id = $_GET['del_usr_id'];

      if($del_usr_id)
      {
        $qry = "UPDATE `book_master` SET `removed` = 'Y' WHERE `id`= '$del_usr_id'";
        $res = mysqli_query($conn, $qry);
      }
    }

?>
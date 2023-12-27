<?php
    @session_start();
    if(isset($_POST['submit1']))
    {   
        $profile = $_POST['profile'];
        $Bookname = $_POST['editbook'];
        $from_d = $_POST['from_d'];
        $to_d = $_POST['to_d'];
        $student_reply = $_POST['student_reply'];
        $date = $_POST['date'];

        $queryedit = "UPDATE book_master, request_book
        SET book_master.book_name = '$Bookname'
        , request_book.date = '$date'
        , request_book.date_from = '$from_d'
        , request_book.return_date = '$to_d'
        , request_book.remark_student = '$student_reply'
        WHERE book_master.id = $profile AND book_master.id=request_book.book_name";
        
        $checkedit = mysqli_query($conn, $queryedit);

    }
    else if(isset($_GET['del_usr_id']))
    {
      $del_usr_id = $_GET['del_usr_id'];

      if($del_usr_id)
      {
        $qry = "UPDATE `request_book` SET `removed` = 'Y' WHERE `id`= '$del_usr_id'";
        $res = mysqli_query($conn, $qry);
      }
    }

?>
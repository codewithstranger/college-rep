<?php

    if(isset($_POST['submit555']))
    {
        @$profile_id = $_POST['profile'];
        $curruntdate = date('Y-m-d');
        $status = $_POST['optradio'];
        $book_name = $_POST['book_n'];
        $isbn_num = $_POST['isbn_n'];
        $frm_dte = $_POST['frm_dte'];
        $to_dte = $_POST['to_dte'];
        $remark = $_POST['remark'];

        if($status == "Rejected" and $remark == "")
        {
            echo "<script>alert('Please Enter Remark For Rejected Book');</script>";
        }
        else if($status == "Accepted")
        {
            
            $checkuser = "SELECT book_name_id,profile_id FROM issued_book WHERE book_name_id='$book_name' AND book_return_date = '0000-00-00'";
            $result = mysqli_query($conn, $checkuser);
            $count = mysqli_num_rows($result);
            if($count > 0)
                    {
                        echo "<script>alert('You Are Already Accepted This Book..!');</script>";
                    }
             
            else if($frm_dte >= $curruntdate && $to_dte >= $frm_dte)
            {
                $checkuser = "INSERT INTO `issued_book` 
            (`profile_id`, `book_name_id`, `isbn_number`, `form_date`, `to_date`) 
            VALUES ('$profile_id', '$book_name', '$isbn_num', '$frm_dte', '$to_dte')";
            
            $check = mysqli_query($conn, $checkuser);
           
            $checkuser = "UPDATE `request_book` SET `status` = '$status', `remark` = '$remark' WHERE `request_book`.`id` = $profile_id;";
            
            $check = mysqli_query($conn, $checkuser);
            }
            else{
                echo "<script>alert('Please Fill Correct Date');</script>";
            }
            

        }
        else
        {

           $checkuser = "UPDATE `request_book` SET `status` = '$status', `remark` = '$remark' WHERE `request_book`.`id` = $profile_id;";
            
            $check = mysqli_query($conn, $checkuser);
            
             
        }

        
        

    }
?>
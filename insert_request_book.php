<?php
    @session_start();

    $book = null;
    $error = null;
    $fdate = null;
    $error1 = null;
    $rdate = null;
    $error3 = null;
    $sucsess = null;

    if(isset($_POST['submit']))
    {
        $user_id = $_SESSION['student_id'];
        $profile_id = $_POST['profile_id'];
        @$book = $_POST['book'];
        $fdate = $_POST['date'];
        $rdate = $_POST['rdate'];
        $currentDate = date('Y-m-d');

        if(empty(trim($book)))
        {
            $error = "please choose language";
        }
        else
        {
            if($fdate < $currentDate)
            {
                $error2 = "Please Correct From Date";
            }
            else
            {
                if($rdate < $fdate)
                {
                    $error3 = "Please Correct Return Date";
                }
                else{
                    
                    $checkuser = "SELECT book_name,status,student_id FROM request_book WHERE student_id='$user_id' AND status='Pending' AND book_name='$book'";
                    
                    $result = mysqli_query($conn, $checkuser);
                    $count = mysqli_num_rows($result);
                    
                    if($count > 0)
                    {
                        echo "<script>alert('You Are Already Request for This Book....Please Request Diffrent Book');</script>";
                    }
                    else{
                        $sucsess = "Thank You for Book Request...!";

                        $checkuser = "INSERT INTO `request_book` 
                        (`id`, `book_name`, `date`, `date_from`, `return_date`, `student_id`) 
                        VALUES ('$profile_id', '$book', '$currentDate', '$fdate', '$rdate', '$user_id') ORDER BY request_book.id DESC";
                        
                        $check = mysqli_query($conn, $checkuser);    
                    }

                    
                }
            }
        }
    }
?>
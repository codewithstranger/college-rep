<?php

    if(isset($_POST['submit']))
    {
        $profile_id = $_POST['profile_id'];
        @$filename = $_FILES['image']['name'];
        @$tmpname = $_FILES['image']['tmp_name'];
        $destination_path = getcwd().DIRECTORY_SEPARATOR;
        move_uploaded_file($tmpname, $destination_path.'uploads/'.$filename);
        $book = $_POST['Bname'];
        $isbn_no = $_POST['isbn'];
        $author_name = $_POST['author'];
        
        $checkuser = "INSERT INTO `book_master` (`id`, `image`, `book_name`, `isbn`, `author`) VALUES ('$profile_id', '$filename', '$book', '$isbn_no', '$author_name')";
                    $check = mysqli_query($conn, $checkuser);

    }
?>
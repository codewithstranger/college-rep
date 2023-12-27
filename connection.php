<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "instadb";

    // connection creat//

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if(!$conn)
    {
        die("sorry we faild to connect:" .mysqli_connect_error());
    }
    // else{
    //     echo "Connection successfully";
    // }
?>
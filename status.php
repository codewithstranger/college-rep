<?php
    include('connection.php');

    $id = $_GET['id'];
    $status = $_GET['block_unblock'];
    
    $query = "UPDATE student_master set block_unblock='$status' where id=$id";
    $check = mysqli_query($conn,$query);

    echo "<script>location.href='student.php'</script>";
    
?>
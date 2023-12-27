<?php
    @session_start();
    @$student = $_SESSION['student_id'];
    
        
    @$checkuser = "SELECT request_book.*,student_master.first_name,book_master.book_name as book,book_master.id as book_id,book_master.isbn,book_master.author from request_book INNER JOIN book_master on request_book.book_name=book_master.id INNER JOIN student_master on request_book.student_id=student_master.id where student_id = $student ORDER BY request_book.date DESC";

    @$check = mysqli_query($conn, $checkuser);

    @$sno = 0;
    while ($row = mysqli_fetch_assoc($check))
    {
        if($row['status']=='Pending')
        {
           $backgorund = "color:#4E73DF;";  
        }
        else if($row['status']=='Accepted')
        {
            $backgorund = "color:#1CC88A;";
        }
        else
        {
            $backgorund = "color:#E74A3B;";
        }
?>
    <td><?php echo ++$sno?></td>
    <td><?php echo $row['book'];?></td>
    <td><?php echo $row['date'];?></td>
    <td><span style="<?php echo $backgorund;?>"><?php echo $row['status'];?></span></td>
    <?php
        if($row['status']=="Pending")
        { 
        
        ?>
            <td><a href='#' class='text-primary edit' style='padding-left:5px;' data-info='<?php echo json_encode($row, true);?>'><i class='fas fa-edit' data-toggle='modal' data-target='#myModal22'></i></a>

            <a href='javascript:void(0);' class='text-secondary show_data' style='padding-left:5px;' data-info='<?php echo json_encode($row, true);?>'><i class='fas fa-circle-info' data-toggle='modal' data-target='#myModal7777'></i></a>
            </td>  
        <?php      
        }

        else
        {
        
        ?>   
            <td><span  class='text-primary' style='padding-left:5px; cursor: not-allowed;'><i class='fas fa-edit'></i></span>

            <a href='javascript:void(0);' class='text-secondary show_data' style='padding-left:5px;' data-info='<?php echo json_encode($row, true);?>'><i class='fas fa-circle-info' data-toggle='modal' data-target='#myModal7777'></i></a>
            </td>
        <?php
        }
    ?>

</tr>
<?php
    }
?>
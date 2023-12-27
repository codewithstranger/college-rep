<?php

    $query = "SELECT student_master.first_name,request_book.date_from,request_book.return_date,request_book.remark_student,request_book.remark,request_book.id,request_book.status,request_book.book_name,book_master.isbn,book_master.author,book_master.book_name as book
    from request_book
    LEFT JOIN student_master on student_master.id=request_book.student_id
    LEFT JOIN book_master on book_master.id=request_book.book_name  
    GROUP BY request_book.id
    ORDER BY request_book.date DESC";

    $result = mysqli_query($conn, $query);
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result))
    {
    
        if($row['status']=='Pending')
        {
           $backgorund = "background-color:#4E73DF;";  
        }
        else if($row['status']=='Accepted')
        {
            $backgorund = "background-color:#1CC88A;";
        }
        else
        {
            $backgorund = "background-color:#E74A3B;";
        }
?>
    <td><?php echo ++$sno?></td>
    <td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['date_from'];?></td>
    <td><?php echo $row['return_date'];?></td>
    <td><?php echo $row['book'];?></td>
    <td><?php echo $row['isbn'];?></td>
    <td><?php echo $row['author'];?></td>
    <td><button onclick="status();" class ="show" data-info='<?php echo json_encode($row, true);?>' style="<?php echo $backgorund;?> color:white; border:none; border-radius:2px; font-size:14px; padding:3px 19px;"><?php echo $row['status'];?></button></td>
    

</tr>
<?php
    }
?>
<?php
    $query = "SELECT student_master.first_name,book_master.book_name,issued_book.form_date,issued_book.to_date 
    FROM `student_master` 
    JOIN request_book on request_book.student_id=student_master.id 
    JOIN issued_book on issued_book.profile_id=request_book.id 
    JOIN book_master on issued_book.book_name_id=book_master.id;";
    
    $result = mysqli_query($conn, $query);
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result))
    {
?>
    <td><?php echo ++$sno?></td>
    <td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['book_name'];?></td>
    <td><?php echo $row['form_date'];?></td>
    <td><?php echo $row['to_date'];?></td>
    <!-- <td><a href="#" class="text-primary edit"  data-info='<?php echo json_encode($row, true);?>'><i class="fas fa-edit" data-toggle="modal" data-target="#myModal22"></i></a> 
    <a href="javascript:void(0);" class="text-danger" onclick="delete_usr('<?php echo $row['id'];?>')"><i class="fas fa-trash-alt"></i></a>
    </td>  -->
    
    
    
</tr>
<?php
    }
?>
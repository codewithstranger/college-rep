<?php
    $query = "SELECT * FROM student_master where removed = 'N'";
    $result = mysqli_query($conn, $query);
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result))
    {
?>
    <td><?php echo ++$sno?></td>
    <td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['last_name'];?></td>
    <td><?php echo $row['m_number'];?></td>
    <td><?php echo $row['enroll_no'];?></td>
    <td><?php echo $row['login_id'];?></td>
    <td><?php echo $row['password'];?></td>
    <td>
        <?php
            if($row['block_unblock']=='N')
            {
                echo '<p><a href="status.php?id='.$row['id'].'&block_unblock=Y" style="background-color:#2DB83D; color:white; border:none; border-radius:2px; font-size:14px; padding:3px 19px; text-decoration:none;">Block</a></p>';
            }
            else if($row['block_unblock']=='Y')
            {
                echo '<p><a href="status.php?id='.$row['id'].'&block_unblock=N" style="background-color:red; color:white; border:none; border-radius:2px; font-size:14px; padding:3px 10px; text-decoration:none;">Unblock</a></p>';
            }
        ?>
    </td>
    <td><a href="#" class="text-primary edit"  data-info='<?php echo json_encode($row, true);?>'><i class="fas fa-edit" data-toggle="modal" data-target="#myModal22"></i></a> 
    <a href="javascript:void(0);" class="text-danger" onclick="delete_student('<?php echo $row['id'];?>')"><i class="fas fa-trash-alt"></i></a>
    </td>
    
</tr>
<?php
    }
?>
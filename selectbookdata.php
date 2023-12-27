<?php
    @session_start();
    $query = "SELECT * FROM book_master where removed = 'N'";
    $result = mysqli_query($conn, $query);
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result))
    {
        if($row['image']=="")
        {
            $img = "";
        }
        else{
           $img = '<img src="uploads/'.$row["image"].'" alt="img" style="width:60px; height:60px; border-radius:50%; border:1px solid #4E73DF; padding:3px;">';
        }
?>
    <td><?php echo ++$sno?></td>
    <td style="padding-left:50px;"><?php echo $img;?></td>
    <td><?php echo $row['book_name'];?></td>
    <td><?php echo $row['isbn'];?></td>
    <td><?php echo $row['author'];?></td>

    <td><a href="#" class="text-primary edit"  data-info='<?php echo json_encode($row, true);?>'><i class="fas fa-edit" data-toggle="modal" data-target="#myModal22"></i></a> 
    <a href="javascript:void(0);" class="text-danger" onclick="delete_book('<?php echo $row['id'];?>')"><i class="fas fa-trash-alt"></i></a>
    </td> 
    
    
    
</tr>
<?php
    }
?>
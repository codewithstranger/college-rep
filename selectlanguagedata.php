<?php
    $query = "SELECT * FROM language_master where removed = 'N'";
    $result = mysqli_query($conn, $query);
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result))
    {
?>
    <td><?php echo ++$sno?></td>
    <td><?php echo $row['lang_name'];?></td>
    <td><a href="#" class="text-primary edit"  data-info='<?php echo json_encode($row, true);?>'><i class="fas fa-edit" data-toggle="modal" data-target="#myModal22"></i></a> 
    <a href="javascript:void(0);" class="text-danger" onclick="delete_lang('<?php echo $row['id'];?>');"><i class="fas fa-trash-alt"></i></a>
    </td>
    
</tr>
<?php
    }
?>
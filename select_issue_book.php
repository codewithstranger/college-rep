<?php

    if(isset($_POST['submit1']))
        {
            $return_book_date = date('Y-m-d');
            $fine_to_date = $_POST['fine_to_date'];
            $profile = $_POST['issued_profile'];
            $currunt_date = $_POST['currunt_date'];

            if($fine_to_date > $return_book_date)
            {
                $total_fine = 0;     
            }
            else 
            {
                $days = (strtotime($return_book_date)-strtotime($fine_to_date))/(60*60*24);
                $total_fine = $days * 10;

            }
            
            $queryedit = "UPDATE `issued_book` 
                    SET `book_return_date` = '$currunt_date',`fine` = '$total_fine' 
                    WHERE `id`= '$profile'";
            
            $checkedit = mysqli_query($conn, $queryedit);
            
        }

    @session_start();
    @$student = $_SESSION['student_id'];
    @$currentDate = date('Y-m-d');
    
    
    $checkuser = "SELECT issued_book.id,book_name_id,form_date,to_date,isbn_number,profile_id,fine,issued_book.book_return_date,book_master.book_name,book_master.image 
    FROM `issued_book`
    INNER JOIN request_book on request_book.id=issued_book.profile_id
    LEFT JOIN book_master on book_master.id = request_book.book_name
    where student_id= $student";

    $check = mysqli_query($conn, $checkuser);
    
    @$sno = 0;
    
    while ($row = mysqli_fetch_assoc($check))
    {

?>  

    <td><?php echo ++$sno?></td>
    <td><?php echo '<img src="uploads/'.$row["image"].'" alt="img" style="width:60px; height:60px; border-radius:50%; border:1px solid #4E73DF; padding:3px;">';?></td>
    <td><?php echo $row['book_name'];?></td>
    <td><?php echo $row['form_date'];?></td>
    <td><?php echo $row['to_date'];?></td>
    <td><?php echo $row['isbn_number'];?></td>
    <td><?php echo $row['fine'];?></td>
      <?php
        if($row['book_return_date']=='0000-00-00')
        {
           ?>
           
           <td style="width:120px;"><button onclick="status();" class ="show edit" data-info='<?php echo json_encode($row,true);?>' style="background-color:#2DB83D; color:white; border:none; 
           border-radius:2px; font-size:14px; padding:3px 19px;">Return</button></td>
  <?php
        }  
        else{
            ?>
            <td style="width:120px;"><span><?php echo $row['book_return_date'];?></span></td>
           <?php
        }
      ?>
    
    
</tr>
<?php
    }
?>
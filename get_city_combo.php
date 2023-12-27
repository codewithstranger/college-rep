<?php
include_once("connection.php");

$state_id = $_POST['state_id'];

$sql = "SELECT * FROM city_master where state_id = '$state_id' and removed = 'N'";
$result = mysqli_query($conn,$sql);
?>
<option value="" selected>--Select City--</option>
<?php
while($row=mysqli_fetch_array($result))
{
                                
    ?>
    <option value="<?= $row['id'];?>"><?= $row['city_name']?></option>
<?php 
}
?>                          

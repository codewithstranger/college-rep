<?php
include_once("connection.php");

$country_id = $_POST['country_id'];

$sql = "SELECT * FROM state_master where country_id = '$country_id' and removed = 'N'";
$result = mysqli_query($conn,$sql);
?>
<option value="" selected>--Select State--</option>
<?php
while($row=mysqli_fetch_array($result))
{
                                
    ?>
    <option value="<?= $row['id'];?>"><?= $row['state_name']?></option>
<?php 
}
?>                     

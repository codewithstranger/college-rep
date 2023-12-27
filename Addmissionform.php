<?php
    include('connection.php');
    include('insertformdata.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .error{
            color:red;
            font-size:20px;
            margin-right:3px;
        }
        .btnn{
            margin-left: 48% !important;
            margin-top: 20% !important;
        }
        .persnol-info:hover{
            cursor: pointer;
        }
        .persnol-info:active{
            box-shadow: 0 0 20px  rgb(180, 180, 180) !important; 
        }
    </style>

</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown List</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $("#country").change(function(){
            
            var country_id = $(this).val();
            
            $.ajax({
                method:"POST",
                url:"get_state_combo.php",
                data:{'country_id':country_id},
                success:function(data){
                    $("#state").html(data);
                }
            });
            
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#state").change(function(){
            
            var state_id = $(this).val();
            
            $.ajax({
                method:"POST",
                url:"get_city_combo.php",
                data:{'state_id':state_id},
                success:function(data){
                    $("#city").html(data);
                }
            });
            
        });
    });
</script>
</head>

<body style="background-color:#4C71DD;">
<nav class="navbar navbar-expand-lg " style="background-color:rgba(255,255,255,0.9);border-bottom:2px solid #C82333;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color:#C82333;">Persnol information :-</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 bg-light mt-5 p-5 rounded"  style="border:1px solid #343A40">
                <h5 class="text-center text-info pb-4">STUDENT REGISTRATION FORM</h5>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input type="hidden" name="profile_id" id="profile_id" value="" />
                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Select Your Course :</label>
                    <select name="course" class="form-control form-control-md col-sm-11" id="course">
                    <option value="" disabled selected>-Select Course-</option>
                        <?php
                            $sql = "SELECT * FROM course_master";
                            $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                
                        ?>
                        <option value="<?= $row['id'];?>"><?= $row['course_name']?></option>
                        <?php }?> 
                    </select>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Select Your Language :</label>
                    <select name="lang" class="form-control form-control-md col-sm-11" id="course">
                        <option value="" disabled selected>-Select Language-</option>
                        <?php
                            $sql = "SELECT * FROM language_master";
                            $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                
                        ?>
                        <option value="<?= $row['id'];?>"><?= $row['lang_name']?></option>
                        <?php }?> 
                    </select>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Select Your Country :</label>
                    <select name="country" class="form-control form-control-md col-sm-11" id="country">
                        <option value="" disabled selected>-Select Country-</option>
                        <?php
                            $sql = "SELECT * FROM country_master";
                            $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                
                        ?>
                        <option value="<?= $row['id'];?>"><?= $row['country_name']?></option>
                        <?php }?> 
                    </select>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Select Your State :</label>
                    <select name="state" class="form-control form-control-md col-sm-11" id="state">
                        <option value="" disabled selected>-Select State-</option>
                         
                    </select>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Select Your City :</label>
                    <select name="city" class="form-control form-control-md col-sm-11" id="city">
                        <option value="" disabled selected>-Select City-</option>
                    
                    </select>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>First Name :</label>
                    <input type="text" name="fname"
                    placeholder="Enter Your First Name" class="form-control form-control-md col-sm-11" id="fname">
                    </input>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Last Name :</label>
                    <input type="text" name="lname"
                    placeholder="Enter Your Last Name" class="form-control form-control-md col-sm-11" id="lname">
                    </input>
                    <?php echo @$error;?>
                    </div>
 

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Enroll Number :</label>
                    <input type="text" name="enroll"
                    placeholder="Enter Your Enroll No" class="form-control form-control-md col-sm-11" id="enroll">
                    </input>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Gender :</label>
                    <label class="radio-inline ml-2">
                    <input type="radio" name="optradio" class="ml-2">Male
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="optradio" class="ml-2">Female
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="optradio" class="ml-2">Other
                    </label>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Address :</label>
                    <textarea name="address" placeholder="Enter Your Address" class="form-control form-control-md col-sm-11" id="address" rows="4"></textarea>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Phone Number :</label>
                    <input type="text" name="phone" maxlength="10"
                    placeholder="Enter Your Phone No" class="form-control form-control-md col-sm-11" id="phone">
                    </input>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Email :</label>
                    <input type="email" name="email"
                    placeholder="Enter Your Email" class="form-control form-control-md col-sm-11" id="email">
                    </input>
                    <?php echo @$error;?>
                    </div>

                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Password :</label>
                    <input type="password" name="pass"
                    placeholder="Enter Your Password" class="form-control form-control-md col-sm-11" id="pass">
                    </input>
                    <?php echo @$error;?>
                    </div>
                    <div class="form-group ml-5">
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-danger btn-block btn-lg col-sm-11"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>    
</body>
</html>

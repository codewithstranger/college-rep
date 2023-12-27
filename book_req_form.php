<?php
    include('connection.php');
    include('insert_request_book.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Request Form</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
    <style>
        .error{
            color:red;
            font-size:20px;
            margin-right:3px;
        }
        .error_color{
            color:red;
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
<body class="bg-white">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="book_request.php">Student Admin :-</a>
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

      <a href="book_request.php" style="text-decoration:none; color:white; font-weight:600; margin-left:80%; padding:10px 40px; background-color:#DC3545; border-top-left-radius: 25px; border-bottom-right-radius: 25px; position:fixed; top:15%; left:6%;">BACK</a>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 bg-white mt-5 p-5 rounded"  style="border:1px solid #DC3545">
                <h5 class="text-center text-dark pb-4">BOOK REQUEST FORM</h5>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input type="hidden" name="profile_id" id="profile_id" value="" />
                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Select Your Book :</label>
                    <select name="book" class="form-control form-control-md col-sm-11" id="book">
                    <option value="<?php echo $book ?>" disabled selected>--Select Book--</option>
                        <?php
                            
                            $sql = "SELECT * FROM book_master
                            WHERE book_master.id NOT IN(SELECT issued_book.book_name_id FROM issued_book WHERE issued_book.book_return_date = '0000-00-00');";
                            $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                
                        ?>
                        <option value="<?= $row['id'];?>"><?= $row['book_name']?></option>
                            
                        <?php }?> 
                    </select>
                    <span class="error_color"><?php echo @$error;?></span>
                    </div>
                    
                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Date From :-</label>
                    <input type="Date" name="date" value="<?php echo $fdate ?>"
                    placeholder="Enter Your First Name" class="form-control form-control-md col-sm-11" id="date">
                    </input>
                    <span class="error_color "><?php echo @$error2;?></span>
                    </div>
                    
                    <div class="form-group ml-5">
                    <label for="#"><span class="error">*</span>Return Date :-</label>
                    <input type="date" name="rdate" value="<?php echo $rdate ?>"
                    placeholder="Enter Your First Name" class="form-control form-control-md col-sm-11" id="rdate">
                    </input>
                    <span class="error_color"><?php echo @$error3;?></span>
                    </div>

                    <div class="form-group ml-5">
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-danger btn-block btn-lg col-sm-11"/>
                    </div>
                    <p style="color:green; margin-left:250px; font-weight:800;"><?php echo $sucsess ?></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    include('connection.php');
    include('select_studentlogin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Form</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

input[type=submit]:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  height:90px;
  /* border-radius: 50%; */
}

.container {
  padding: 16px;
  padding-bottom:100px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  /* height: 80%; Full height */
  overflow: auto; /* Enable scroll if needed */
  /* background-color: rgb(0,0,0); Fallback color */
  background-color: rgba(0,0,0,0.4); /*Black w/ opacity*/
  background-image: url('img/college');
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  border-radius:30px;
  background-color: #fefefe;
  margin: 2% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
  height:67%;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;   
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
</head>
<body style="background-image:url('img/pexels-pixabay-267885.jpg'); background-size: cover; background-repeat: no-repeat;">

<div id="id01" class="modal">
<!-- #04AA6D   -->
  <form class="modal-content animate" style="border:1px solid white; background-color:rgba(0, 0, 0, 0.3);" action="" method="post">
    <div class="imgcontainer">
      <img src="img/png-clipart-square-academic-cap-graduation-ceremony-black-and-white-college-graduation-s-angle-white-removebg-preview.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname" style="color:white;"><b>Email</b></label>
      <input type="text" placeholder="Enter Username" name="email" autocomplete="off" required/>

      <label for="psw" style="color:white;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" autocomplete="off" required/>
        
      <input type="submit" value="Log in" name="submit" style="background-color:black; border:1px solid white"/>
      <label style="color:white;">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form>
</div>
</body>
</html>
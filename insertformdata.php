<?php

    if(isset($_POST['submit']))
    {
        @$course = $_POST['course'];
        @$lang = $_POST['lang'];
        @$country = $_POST['country'];
        @$state = $_POST['state'];
        @$city = $_POST['city'];
        @$optradio = $_POST['optradio'];
        @$address = $_POST['address'];
        @$profile_id = $_POST['profile_id'];
        @$firstname = $_POST['fname'];
        @$lastname = $_POST['lname'];
        @$phone_number = $_POST['phone'];
        @$enroll = $_POST['enroll'];
        @$login_id = $_POST['email'];
        @$password = $_POST['pass'];

        //validations//
        if($course == "" || $lang == "" || $country == "" || $state == "" || $city == "" || $optradio == "" || $address == "" || $firstname == "" || $lastname == "" || $phone_number == "" || $enroll == "" || $login_id == "" || $password == ""){
            $error = "<span style='color:red'>This Field is required</span>";
        }
        else{
            $checkuser = "INSERT INTO `student_master` 
                    (`id`, `first_name`, `last_name`, `m_number`, `enroll_no`, `login_id`, `password`) 
                    VALUES ('$profile_id', '$firstname', '$lastname', '$phone_number', '$enroll', '$login_id', '$password')";
                    $check = mysqli_query($conn, $checkuser);

                    echo "<script>location.href='studentlogin.php'</script>";


        }
        

    }
?>
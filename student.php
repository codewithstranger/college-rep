<?php
    include('connection.php');
    include('editstudent.php');
    include('insertstudent.php');
    include('header.php');
?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Student Data :-</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm p-2" id="toggle" data-toggle="modal" id="Add" onclick="return Add()"><i
            class="fas fa-add fa-sm text-white-50" ></i> Add Student Data</button>
</div>

<!-- Content table -->


<div class="row">


<div class="card-body">
    <!-- model Edit 1 for Add Button -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">
        <i class="fa-solid fa-file-signature" style="margin-right:10px;"></i>Add Student Info :-</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <form action="" method="post">
        <div class="modal-body">
        <input type="hidden" name="profile_id" id="profile_id" value="" />
            <input type="text" name="fname" class="form-control form-control-user mt-2" id="fname"
                placeholder="Enter Your First Name" autocomplete="off">
            <input type="text" name="lname" class="form-control form-control-user mt-2" id="lname"
                placeholder="Enter Your Last Name" autocomplete="off">
            <input type="text" name="phone" class="form-control form-control-user mt-2" id="phone"
                placeholder="Enter Your Phone Number" autocomplete="off">
            <input type="text" name="Enum" class="form-control form-control-user mt-2" id="Enum"
                placeholder="Enter Your Enroll Name" autocomplete="off">
            <input type="text" name="login" class="form-control form-control-user mt-2" id="login"
                placeholder="Enter Your Login id" autocomplete="off">
            <input type="text" name="pass" class="form-control form-control-user mt-2" id="pass"
                placeholder="Enter Your Password" autocomplete="off">
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="Queryinformation.html">
        <button type="submit" name="submit" class="btn btn-facebook">OK</button>
        </a>
        </form>
        </div>

    </div>
    </div>
</div>
    <!-- model end -->





                    
<!-- model Edit for Edit Button-->
<div class="modal fade" id="myModal22">
<div class="modal-dialog">
<div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 class="modal-title">Edit Student Info :-</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <form action="" method="post">
    <div class="modal-body">
    <i class="fa-solid fa-book"></i>
    
    <input type="hidden" name="profile" id="profile" value="" />
            <input type="text" name="firstname" class="form-control form-control-user mt-2" id="firstname"
                placeholder="Enter Your First Name" autocomplete="off">
            <input type="text" name="lastname" class="form-control form-control-user mt-2" id="lastname"
                placeholder="Enter Your Last Name" autocomplete="off">
            <input type="text" name="phonenumber" class="form-control form-control-user mt-2" id="phonenumber"
                placeholder="Enter Your Phone Number" autocomplete="off">
            <input type="text" name="Enrollnum" class="form-control form-control-user mt-2" id="Enrollnum"
                placeholder="Enter Your Enroll Name" autocomplete="off">
            <input type="text" name="login_id" class="form-control form-control-user mt-2" id="login_id"
                placeholder="Enter Your Login id" autocomplete="off">
            <input type="text" name="password" class="form-control form-control-user mt-2" id="password"
                placeholder="Enter Your Password" autocomplete="off">
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <a href="Queryinformation.html">
    <button type="submit" name="submit1" class="btn btn-facebook">OK</button>
    </a>
    </form>
    </div>

</div>
</div>
</div>
<!-- model end -->

                    
            


<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Enroll Number</th>
                <th>Login_id</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S.No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Enroll Number</th>
                <th>Login_id</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <?php
                    include('selectstudentdata.php');
                ?>
        </tbody>
    </table>
</div>
</div>
        
</div>

</div>
    <?php include('footer.php')?>

<script>
function Add(){

    $('#myModal1').modal('show');

}

$('.edit').click(function()
{
var user_info = $(this).data('info');

$('#profile').val(user_info.id);
$('#firstname').val(user_info.first_name);
$('#lastname').val(user_info.last_name);
$('#phonenumber').val(user_info.m_number);
$('#Enrollnum').val(user_info.enroll_no);
$('#login_id').val(user_info.login_id);
$('#password').val(user_info.password);
$('#myModal22').modal('show');
});

</script>

<script>
  function delete_student(id)
  {
    var ans = confirm('Are you sure, You want to delete this Student?');

    if(ans)
    {
      window.location.href = 'student.php?del_usr_id='+id;
    }
  }
</script>
    
<?php
    include('connection.php');
    include('edit_request_book.php');
    // include('insert_request_book.php');
    include('header_studentadmin.php');

?>
<?php
  @session_start();

  $now = time();

  if($now > $_SESSION['expire'])
  {
    session_destroy();
    echo "<script> window.location.href='studentlogin.php';</script>";
  }
?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Books Detail :-</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm p-2" id="toggle" data-toggle="modal" id="Add" onclick="return Add()"><i
            class="fas fa-add fa-sm text-white-50" ></i> Add Book Request</button>
</div>

<!-- Content table -->


<div class="row">


<div class="card-body">
    <!-- model Edit 1 for Add Button -->
                   
<!-- model Edit for Edit Button-->
<div class="modal fade" id="myModal22">
<div class="modal-dialog">
<div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 class="modal-title">Edit Book Info :-</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <form action="" method="post">
    <div class="modal-body">
    <i class="fa-solid fa-book"></i>
    
    <input type="hidden" name="profile" id="profile" value="" />
    <input type="hidden" name="date" id="date1" value="" />

    <input type="date" name="date" class="form-control form-control-user mt-2" id="date"
    placeholder="Enter Your Course Name" autocomplete="off" style="background-color:white;" disabled>

    <input type="text" name="status" class="form-control form-control-user mt-2" id="status"
    placeholder="Enter Your Course Name" autocomplete="off" style="background-color:white;" disabled/>

    <input type="text" name="editbook" class="form-control form-control-user mt-2" id="editbook"
    placeholder="Enter Your Course Name" autocomplete="off">
    
    <input type="date" name="from_d" class="form-control form-control-user mt-2" id="from_d"
    placeholder="Enter Your Course Name" autocomplete="off">
    
    <input type="date" name="to_d" class="form-control form-control-user mt-2" id="to_d"
    placeholder="Enter Your Course Name" autocomplete="off">

    <span class="hide" style="font-weight:700; margin-left:10px;">Admin Message:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="admin_reply" name="admin_reply"
        autocomplete="off" disabled>

        <span class="hide" style="font-weight:700; margin-left:10px;">Student Message:</span>
        <textarea class="form-control" name="student_reply" rows="3" id="student_reply"></textarea>
        <!-- STATRT THIS LINE  -->
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

                    
            















<!-- model Edit for Edit Button-->
<div class="modal fade" id="myModal7777">
<div class="modal-dialog">
<div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa-solid fa-book" style="font-size:20px; margin-right:5px;"></i>Student Book Details :-</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <form action="" method="post">
    <div class="modal-body">
    
    
    <input type="hidden" name="profile" id="profile_user" value="" />

    <span style="font-weight:700; margin-left:10px;">Student Name:</span><input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="student_name"
    autocomplete="off" disabled>

    <span style="font-weight:700; margin-left:10px;">Book Name:</span><input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="bname"
    autocomplete="off" disabled>

    <span style="font-weight:700; margin-left:10px;">Book Author:</span><input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="author"
    autocomplete="off" disabled>

    <span style="font-weight:700; margin-left:10px;">From Date:</span>
    <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="From_date"
    autocomplete="off" disabled>

    <span style="font-weight:700; margin-left:10px;">To Date:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="To_date"
        autocomplete="off" disabled>

        <span style="font-weight:700; margin-left:10px;">ISBN:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="isbn_no"
        placeholder="Enter Your Course Name" autocomplete="off" disabled>


        <span class="hide" style="font-weight:700; margin-left:10px;">Admin Message:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="admin_massage"
        autocomplete="off" disabled>

        <span class="hide" style="font-weight:700; margin-left:10px;">Student Message:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="student_massage"
        autocomplete="off" disabled>
       
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    </form>
    </div>

</div>
</div>
</div>
<!-- model end -->

<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Book Name</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <?php
                    include('select_request_book.php');
                ?>
        </tbody>
        <tfoot>
            <tr>
                <th>S.No</th>
                <th>Book Name</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
        
</div>
</div>
    <?php include('footer.php')?>

<script>
function Add(){

    window.location.replace("book_req_form.php");

}
$('.edit').click(function()
{
var user_info = $(this).data('info');

$('#profile').val(user_info.book_id);
$('#editbook').val(user_info.book);
$('#from_d').val(user_info.date_from);
$('#to_d').val(user_info.return_date);
$('#date').val(user_info.date);
$('#date1').val(user_info.date);
$('#status').val(user_info.status);
$('#admin_reply').val(user_info.remark);
$('#student_reply').val(user_info.remark_student);
$('#myModal22').modal('show');
});


$('.show_data').click(function()
{
var user_info = $(this).data('info');
$('#profile_user').val(user_info.book_id);
$('#student_name').val(user_info.first_name);
$('#bname').val(user_info.book);
$('#author').val(user_info.author);
$('#From_date').val(user_info.date_from);
$('#To_date').val(user_info.return_date);
$('#isbn_no').val(user_info.isbn);
$('#admin_massage').val(user_info.remark);
$('#student_massage').val(user_info.remark_student);
$('#myModal7777').modal('show');
});

</script>


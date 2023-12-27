<?php
    include('connection.php');
    // include('edit_request_book.php');
    // include('insert_issue_book.php');
    include('header_studentadmin.php');

?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Books Issued :-</h1>
    <!-- <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm p-2" id="toggle" data-toggle="modal" id="Add" onclick="return Add()"><i
            class="fas fa-add fa-sm text-white-50" ></i> Add Book Request</button> -->
</div>

<!-- Content table -->


<div class="row">


<div class="card-body">
    <!-- model Edit 1 for Add Button -->
                   


                    
            


<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Image</th>
                <th>Book Name</th>
                <th>Date Form</th>
                <th>Date To</th>
                <th>ISBN</th>
                <th>Fine</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S.No</th>
                <th>Image</th>
                <th>Book Name</th>
                <th>Date Form</th>
                <th>Date To</th>
                <th>ISBN</th>
                <th>Fine</th>
                <th>Action</th>
                
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <?php
                    include('select_issue_book.php');
                ?>
        </tbody>
    </table>
</div>
</div>
        
</div>

</div>




<!-- model Edit for Edit Button-->
<div class="modal fade" id="myModal22">
<div class="modal-dialog">
<div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa fa-book" style="padding-right:10px; font-size:19px;"></i>Book Issue Info  :-</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
    
    <input type="hidden" name="issued_profile" id="profile" value="" />
    <img src="uploads/" alt="img" id="image" style="width:60px; height:60px; border-radius:50%; border:1px solid #4E73DF; padding:3px; margin-left:10px;">
    <br>
    <br>
      <span style="font-weight:700; margin-left:10px;">Book Name:</span><input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="editbook"
        placeholder="Enter Your Course Name" autocomplete="off" disabled>
        <span style="font-weight:700; margin-left:10px;">From Date:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="date_From"
        placeholder="Enter Your Course Name" autocomplete="off" disabled>

        <input type="hidden" name="fine_to_date" id="fine_to_date" value="" />
        <span style="font-weight:700; margin-left:10px;">To Date:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="date_To"
        placeholder="Enter Your Course Name" autocomplete="off" disabled>
        <span style="font-weight:700; margin-left:10px;">ISBN:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="isbn"
        placeholder="Enter Your Course Name" autocomplete="off" disabled>

        <input type="hidden" name="currunt_date" value="<?php echo $currentDate?>" />
        <span style="font-weight:700; margin-left:10px;">Return Date:</span>
      <input type="text" value="<?php echo $currentDate?>" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="return_date"
        placeholder="Enter Your Return" autocomplete="off" disabled/>
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










    <?php include('footer.php')?>

<script>
function Add(){

    window.location.replace("book_req_form.php");

}
$('.edit').click(function()
{
var user_info = $(this).data('info');

$('#profile').val(user_info.id);
$('#image'). attr('src', 'uploads/'+user_info.image);
$('#editbook').val(user_info.book_name);
$('#date_From').val(user_info.form_date);
$('#date_To').val(user_info.to_date);
$('#fine_to_date').val(user_info.to_date);
$('#isbn').val(user_info.isbn_number);
$('#myModal22').modal('show');
});

</script>

<script>
  function delete_usr(id)
  {
    var ans = confirm('Are you sure, You want to delete this Course?');

    if(ans)
    {
      window.location.href = 'Course.php?del_usr_id='+id;
    }
  }
</script>
    
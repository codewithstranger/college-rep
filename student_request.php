<?php
    include('connection.php');
    include('insert_status.php');
    include('header.php');
?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Books Request :-</h1>
    <!-- <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm p-2" id="toggle" data-toggle="modal" id="Add" onclick="return Add()"><i
    class="fas fa-add fa-sm text-white-50" ></i> Add Book Data</button> -->
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
        <i class="fa-solid fa-file-signature" style="margin-right:10px;"></i>Add Book Info :-</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <form action="" method="post">
        <div class="modal-body">
        <input type="hidden" name="profile_id" id="profile_id" value="" />
            <input type="text" name="Bname" class="form-control form-control-user mt-2" id="Bname"
                placeholder="Enter Your Book Name" autocomplete="off">
            <input type="text" name="isbn" class="form-control form-control-user mt-2" id="isbn"
                placeholder="Enter Your ISBN" autocomplete="off">
            <input type="text" name="author" class="form-control form-control-user mt-2" id="author"
                placeholder="Enter Your Author Name" autocomplete="off">
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
<div class="modal fade" id="myModal555">
<div class="modal-dialog">
<div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 class="modal-title">Edit status Info :-</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <form action="" method="post">
    <div class="modal-body">
    <i class="fa-solid fa-note"></i>
    
    <input type="hidden" name="profile" id="profile555" value="" />
    
    <div class="form-check" id="radio">
    
 <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Pending">Pending
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Accepted">Accepted
  <label class="form-check-label" for="radio2"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="radio3" name="optradio" value="Rejected">Rejected
  <label class="form-check-label"></label>
</div>
<br>
<span style="font-weight:700; margin-left:10px;">Book Name:</span>
<input type="hidden" value="" id="book_n" name="book_n" />
<input type="text" name="b_name" class="form-control form-control-user mt-2" id="b_name"
    placeholder="Enter Your Course Name" autocomplete="off" style="background-color:white;cursor: not-allowed;" disabled>
<br>
<span style="font-weight:700; margin-left:10px;">ISBN:</span>
<input type="hidden" value="" id="isbn_n" name="isbn_n" />
<input type="text" name="isbn_num" class="form-control form-control-user mt-2" id="isbn_num"
    placeholder="Enter Your Course Name" autocomplete="off" style="background-color:white;cursor: not-allowed;" disabled>
<br>
<span style="font-weight:700; margin-left:10px;">Request From Date:</span>
<input type="text" name="from_d" class="form-control form-control-user mt-2" id="from_d"
    placeholder="Enter Your Course Name" autocomplete="off" style="background-color:white;cursor: not-allowed;" disabled>
<br>
<span style="font-weight:700; margin-left:10px;">Request To Date:</span>
<input type="text" name="to_d" class="form-control form-control-user mt-2" id="to_d"
    placeholder="Enter Your Course Name" autocomplete="off" style="background-color:white;cursor: not-allowed;" disabled>

<br>

<span style="font-weight:700; margin-left:10px; display:none;" class="showing_data1">Issued From Date:</span>
<input type="date" name="frm_dte" class="form-control form-control-user mt-2 showing_data1" id="frm_dte"
    placeholder="Enter Your Course Name" autocomplete="off" style="background-color:white;display:none;">

<br>

<span style="font-weight:700; margin-left:10px; display:none;" class="showing_data2">Issued To Date:</span>
<input type="date" name="to_dte" class="form-control form-control-user mt-2 showing_data2" id="to_dte"
    placeholder="Enter Your Course Name" autocomplete="off" style="background-color:white;display:none;">

<br>
<div class="form-group">

<span class="hide" style="font-weight:700; margin-left:10px;">Student Message:</span>
      <input type="text" value="" style="background-color:white; color:#2E59D9; border:none; font-size:15px;" class="form-control form-control-user mt-2" id="student_reply" name="student_reply"
        autocomplete="off" disabled>


  <label for="comment">Admin Message:</label>
  <textarea class="form-control" name="remark" rows="3" id="comment"></textarea>
</div>

    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <a href="Queryinformation.html">
    <button type="submit" name="submit555" id="disable" class="btn btn-facebook">OK</button>
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
                <th>S No.</th>
                <th>Stu. Name</th>
                <th>Date From</th>
                <th>Return Date</th>
                <th>Book Name</th>
                <th>ISBN</th>
                <th>Author</th>
                <th>status</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S No.</th>
                <th>Stu. Name</th>
                <th>Date From</th>
                <th>Return Date</th>
                <th>Book Name</th>
                <th>ISBN</th>
                <th>Author</th>
                <th>status</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <?php
                    include('select.php');
                ?>
        </tbody>
    </table>
</div>
</div>
        
</div>

</div>
    <?php include('footer.php')?>

<script>
$('.show').click(function(){
    var user_info = $(this).data('info');
    $('#profile555').val(user_info.id);
    $('#b_name').val(user_info.book);
    $('#book_n').val(user_info.book_name);
    $('#isbn_num').val(user_info.isbn);
    $('#isbn_n').val(user_info.isbn);
    $('#from_d').val(user_info.date_from);
    $('#frm_dte').val(user_info.date_from);
    $('#to_d').val(user_info.return_date);
    $('#to_dte').val(user_info.return_date);
    if(user_info.status == 'Rejected')
    {
        $("#radio3").prop("checked", true);
        document.getElementById('disable').style.display = "block";
    }
    else if(user_info.status == 'Accepted')
    {
        $("#radio2").prop("checked", true);
        document.getElementById('disable').style.display = "none";
    }
    else
    {
        $("#radio1").prop("checked", true);
        document.getElementById('disable').style.display = "block";
    }
    $("#radio1").click(function(){
        $(".showing_data1").css("display","none");
        $(".showing_data2").css("display","none");
    });
    $("#radio2").click(function(){
        $(".showing_data1").css("display","block");
        $(".showing_data2").css("display","block");
    });
    $("#radio3").click(function(){
        $(".showing_data1").css("display","none");
        $(".showing_data2").css("display","none");
    });
    $('#student_reply').val(user_info.remark_student);
    $('#comment').val(user_info.remark);
    $('#myModal555').modal('show');
    
})
</script>
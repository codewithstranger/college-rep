<?php
    include('connection.php');
    include('editbook.php');
    include('insertbook.php');
    include('header.php');
?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Book Matser :-</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm p-2" id="toggle" data-toggle="modal" id="Add" onclick="return Add()"><i
    class="fas fa-add fa-sm text-white-50" ></i> Add Book Data</button>
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
        <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
        <input type="hidden" name="profile_id" id="profile_id" value="" />
        <input type="File" name="image" id="image" class="form-control form-control-user mt-2" value="" required/>
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
<div class="modal fade" id="myModal22">
<div class="modal-dialog">
<div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa-solid fa-book" style="margin-right:10px;"></i>Edit Book Info :-</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
    
    <img src="uploads/" alt="img" id="image1" style="width:60px; height:60px; border-radius:50%; border:1px solid #4E73DF; padding:3px;">
    <input type="hidden" name="profile" id="profile" value="" />
    <input type="File" name="image" onchange="readURL(this);" class="form-control form-control-user mt-2"/>
    <input type="text" name="Bookname" class="form-control form-control-user mt-2" id="Bookname"
                placeholder="Enter Your Book Name" autocomplete="off">
            <input type="text" name="isbn_no" class="form-control form-control-user mt-2" id="isbn_no"
                placeholder="Enter Your ISBN" autocomplete="off">
            <input type="text" name="author_name" class="form-control form-control-user mt-2" id="author_name"
                placeholder="Enter Your Author Name" autocomplete="off">
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
                <th>S No.</th>
                <th>Image</th>
                <th>Book Name</th>
                <th>ISBN</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S No.</th>
                <th>Image</th>
                <th>Book Name</th>
                <th>ISBN</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <?php
                    include('selectbookdata.php');
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
$('#image1'). attr('src', 'uploads/'+user_info.image); 
$('#Bookname').val(user_info.book_name);
$('#isbn_no').val(user_info.isbn);
$('#author_name').val(user_info.author);
$('#myModal22').modal('show');
});

</script>

<script>
  function delete_book(id)
  {
    var ans = confirm('Are you sure, You want to delete this Book?');

    if(ans)
    {
      window.location.href = 'book.php?del_usr_id='+id;
    }
  }

  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#image1').attr('src', e.target.result).width(60).height(60);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
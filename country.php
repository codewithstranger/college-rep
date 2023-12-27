<?php
    include('connection.php');
    include('editcountry.php');
    include('insertcountry.php');
    include('header.php');

?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Country :-</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm p-2" id="toggle" data-toggle="modal" id="Add" onclick="return Add()"><i
            class="fas fa-add fa-sm text-white-50" ></i> Add Country</button>
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
        <h4 class="modal-title">Add Country Info :-</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <form action="" method="post">
        <div class="modal-body">
        <i class="fa-solid fa-book"></i>
        
        <input type="hidden" name="profile_id" id="profile_id" value="" />
            <input type="text" name="addcourse" class="form-control form-control-user mt-2" id="cname"
                placeholder="Enter Your Country Name" autocomplete="off">
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
    <h4 class="modal-title">Edit Country Info :-</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <form action="" method="post">
    <div class="modal-body">
    <i class="fa-solid fa-book"></i>
    
    <input type="hidden" name="profile" id="profile" value="" />
        <input type="text" name="editcourse" class="form-control form-control-user mt-2" id="editcourse"
            placeholder="Enter Your Country Name" autocomplete="off">
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
                <th>Country Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S.No</th>
                <th>Country Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <?php
                    include('selectcountrydata.php');
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
$('#editcourse').val(user_info.country_name);
$('#myModal22').modal('show');
});

</script>

<script>
  function delete_usr(id)
  {
    var ans = confirm('Are you sure, You want to delete this Country?');

    if(ans)
    {
      window.location.href = 'country.php?del_usr_id='+id;
    }
  }
</script>
    
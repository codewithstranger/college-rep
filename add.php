<?php
echo '<form id="add_frm" action="" method="post">
        <i class="fa-solid fa-book"></i>
                                                        
     <input type="hidden" name="profile_id" id="profile_id" value="" />
    <input type="text" name="addcourse" class="form-control form-control-user mt-2" id="cname"
        placeholder="Enter Your Course Name" autocomplete="off">
    </div>


<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
<a href="Queryinformation.html">
<button type="submit" name="submit" class="btn btn-facebook btn-submit">OK</button>
</a>
</form>'

?>

<script>
    $('#add_frm .btn-submit').click(function(){
        alert('sdfdsf');
        $.ajax({
        url:'insertquerymanager.php',
        method:'POST',
        data:$('#add_frm').serialize(),
        success:function(response){
            alert('Course Added Successfully');
        },
        error:function(){
            alert('file no');
        }
        });
    });
    
</script>
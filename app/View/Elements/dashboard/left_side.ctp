<!-- <div class="col-lg-4 col-md-4">
            <div class="card card-user  card-user_new">
                
                <div class="content">
                    <div class="author">
					<img src="img/adv.png">
                        
                    </div>
                   
                </div>
                <hr>
                <div class="text-center">
                    <p align="center" class="ref_use">REFERENCE STATUS</p>
                    <div class="row">
                        <div class="col-md-3 col-md-offset-1">
                            <h5><?php echo $process_count ?><br><small><a href="process.html">In process</a></small></h5>
                        </div>
                        <div class="col-md-4">
                            <h5><?php echo $complete_count ?><br><small><a href="complete.html">Completed</a></small></h5>
                        </div>
                        <div class="col-md-3">
                            <h5><?php echo $new_count ?><br><small><a href="new_value.html">New</a></small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
		
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>

<script>
    
   $(document).ready(function(){
       
      $(window).scroll(function(){
          
           if( $(window).scrollTop() > 400 ){               
               $('.card-user_new').css({ "position" : 'fixed' , 'top' : '0%'});
           } 
          else{
               $('.card-user_new').css({ "position" : 'static'}); 
           }
       });  
       
  });
    
</script>

<script>
$(document).ready(function() {
$("#show_modal").click(function() {
     /*var isshow = localStorage.getItem('isshow');
    if (isshow == 4) {
        localStorage.setItem('isshow', 4);
        $('#myModal_track').modal("show");
    }else {
window.location = "http://192.168.1.11/vmr/icons.html";*/
$('#myModal').modal('show');
});
});
</script>


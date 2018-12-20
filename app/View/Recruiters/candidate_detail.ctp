<?php

echo $this->Element('recruiters/header') ?> 

<div class="clearfix"></div>      
<div class="wrapper">       

    <?php echo $this->Element('recruiters/sidebar') ?>
    <div class="main-panel">

        <!-- navigation start -->
        <div class="new_view" style="margin:2% 3% 2% 3%;">	

            <div class="col-lg-12 col-md-12 space">
                <table class="table table-striped table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>Candidate Name</th>
                            <th>Email</th>
                            <!-- <th>Send Message</th> -->
                        </tr>
                    </thead>
                    <tbody>                        
                        <?php if(count($can_detail) > 0) {
                        foreach ($can_detail as $detail) { ?>
                        <tr>
                            <td><?php echo $detail['register']['first_name'] ?> <?php echo $detail['register']['last_name'] ?></td>
                            <td><?php echo $detail['register']['email'] ?></td>                           
                            <!-- <td><button onclick="send_message('<?php echo $detail['register']['email'] ?>')">Send Message</button></td> -->
                        </tr> 
                        <?php } } else { ?>
                        <tr>
                            <td colspan="8"><center><b>No Candidate Available</b></center></td>
                    </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>

            <div class="modal fade" id="messageModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->            
                    <div class="modal-content width_form">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Send Message</h4>
                        </div>

                        <div class="modal-body">

                            <form id="issue" method="post">
                                <div class="div_form_use user_define">                  
                                    <div class="form-group">  
                                        <label for="email_id">To</label>
                                        <input type="text" class="form-control" name="email" id="email_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject_id">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg_id">Message</label>
                                        <textarea class="form-control" name="message" rows="3" id="msg_id"></textarea>
                                    </div>

                                    <div class="clearfix"></div>
                                    <button type="submit" class="submit_btn">Send</button>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--   Core JS Files   -->
    <?php echo $this->Element('recruiters/footer') ?>  

    <script>
        function send_message(email) {
            $('#email_id').val(email);
            $('#messageModal').modal('show');
        }
    </script>

</body>

</html>
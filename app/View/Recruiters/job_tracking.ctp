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
                            <th>Job Title</th>
                            <th>Location</th>
                            <th>Created</th>
                            <th>Candidates</th>
                            <th>Views</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>                        
                        <?php if(count($job_detail) > 0) {
                            foreach ($job_detail as $job_details) {
                        ?>
                        <tr>
                            <td><?php echo $job_details['job_post']['job_title'] ?></td>
                            <td><?php echo $job_details['job_post']['city'] ?></td>
                            <td><?php echo date('d-M-Y',strtotime($job_details['job_post']['date'])); ?></td>
                            <td><a href="candidate_detail.html?id=<?php echo $job_details['job_post']['id'] ?>"><?php echo $job_details['job_post']['total_apply'] ?></a></td>
                            <td><?php echo $job_details['job_post']['total_view'] ?></td>
                            <td>
                                <select onchange="statusChange(this.value, '<?php echo $job_details['job_post']['id'] ?>')">
                                    <option value="Open" <?php echo ($job_details['job_post']['status'] == 'Open') ? 'selected=""' : '' ?>>Open</option>
                                    <option value="Close" <?php echo ($job_details['job_post']['status'] == 'Close') ? 'selected=""' : '' ?>>Close</option>
                                    <option value="On Hold" <?php echo ($job_details['job_post']['status'] == 'On Hold') ? 'selected=""' : '' ?>>On Hold</option>
                                </select>
                            </td>
                        </tr>    
                        <?php } } else { ?>
                        <tr>
                            <td colspan="14"><b><center>No Jobs Available</center></b></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>

    <!--   Core JS Files   -->
    <?php echo $this->Element('recruiters/footer') ?>  


    <script>
        function statusChange(val, id) {
            $.ajax({
                url: '<?php echo Router::url(['controller' => 'recruiters/changeJobStatus']) ?>',
                type: 'POST',
                data: {'sataus': val, 'job_id': id},
                success: function (data) {
                    if (data == 1) {
                        alert('Status Changed');
                        window.location = '<?php echo DOMAIN_NAME ?>' + 'job_tracking.html';
                    }
                }
            });
        }
    </script>

</body>

</html>
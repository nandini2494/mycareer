<?php

echo $this->Element('recruiters/header') ?> 

<div class="clearfix"></div>      
<div class="wrapper">       

    <?php echo $this->Element('recruiters/sidebar') ?>
    <div class="main-panel">

        <!-- navigation start -->
        <form id="regForm" method="post" enctype="multipart/form-data">
            <div class="new_view" style="margin:2% 3% 2% 3%;">
                <div class="view_job">
                    <div class="logo_part">
                        <img src="<?php echo $this->webroot ?><?php echo "tmp_file/".$job_post_value['company_logo'] ?>" class="img-responsive"/>
                    </div>
                    <div class="job_section">
                        <h4><?php echo $job_post_value['job_title'] ?></h4>
                        <p><?php echo $job_post_value['compny_name'] ?></p>
                        <p><?php echo $job_post_value['Provence'] ?></p>
                        <p><?php echo $job_post_value['City'] ?></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="application_button">		
                    <button type="submit">Post Job</button>
                </div>

                <div class="job-descrption">
                    <h4><?php echo $job_post_value['job_title'] ?></h4>
                <?php if($job_post_value['company_history'] != '') { ?>
                    <h5>About Company</h5>
                    <p><?php echo $job_post_value['company_history'] ?></p>
                <?php } ?>

                    <h5>Job Description</h5>
                <?php echo $job_post_value['job_desc'] ?>
                    <h5>Requirements</h5>
                <?php echo $job_post_value['job_req'] ?>

                <?php if($job_post_value['exp_level'] != '') { ?>
                    <p class="new_line"><b>Experience Level - </b><?php echo $job_post_value['exp_level'] ?></p>
                <?php } ?>

                    <p class="new_line"><b>Job Type - </b><?php echo $job_post_value['job_type'] ?></p>
                <?php if($job_post_value['Wage'] != '') { ?>
                    <p class="new_line"><b>Wages - </b><?php echo "$ ".$job_post_value['Wage'] ?> <?php echo $job_post_value['salary_type'] ?></p>
                <?php } ?>
                <?php if(isset($job_post_value['intern_type']) && $job_post_value['intern_type'] != '') { ?>   
                    <p class="new_line"><b>Length Of <?php if($job_post_value['form_type'] == 'internPost') { ?>Internship<?php } else if($job_post_value['form_type'] == 'coopPost') { ?>CO-op - </b><?php echo $job_post_value['intern_type'] ?><?php } ?></p>
                    <?php if($job_post_value['intern_type'] == 'Other') { ?>
                    <p class="new_line"><b>If Other - </b><?php echo $job_post_value['length'] ?></p>
                    <?php } ?>
                <?php } ?>
                    <?php if(isset($job_post_value['co_op_paid']) && $job_post_value['co_op_paid'] != '') { ?>   
                    <p class="new_line"><b>Is this a Paid <?php if($job_post_value['form_type'] == 'coopPost') { ?>Co-Op<?php } ?> <?php if($job_post_value['form_type'] == 'internPost') { ?>Internship<?php } ?> - </b><?php echo $job_post_value['co_op_paid'] ?></p>
                <?php } ?>
                    <?php if(isset($job_post_value['auth_comp']) && $job_post_value['auth_comp'] != '') { ?>   
                    <p class="new_line"><b>Is your company an authorized <?php if($job_post_value['form_type'] == 'coopPost') { ?>Co-Op<?php } ?> <?php if($job_post_value['form_type'] == 'internPost') { ?>Internship<?php } ?> company - </b><?php echo $job_post_value['auth_comp'] ?></p>
                <?php } ?>
                    
                    <p class="new_line"><b>Contact Email - </b><?php echo $job_post_value['contact_email'] ?></p>
                <?php if($job_post_value['gpa'] != '') { ?>
                    <p class="new_line"><b>GPA - </b><?php echo $job_post_value['gpa'] ?></p>
                <?php } ?>
                <?php if($job_post_value['gpa'] == 'Yes') { ?>
                    <p class="new_line"><b>GPA Value - </b><?php echo $job_post_value['gpa_val'] ?></p>
                <?php } ?>
                <?php if($job_post_value['postion_expose'] != '') { ?>
                    <p class="new_line">Does this position expose the student to hazardous and/or bio hazardous materials?</p>
                    <li><?php echo $job_post_value['postion_expose'] ?></li>
                <?php } ?>
                <?php if($job_post_value['travel'] != '') { ?>
                    <p class="new_line">Does this position require travel?</p>
                    <li><?php echo $job_post_value['travel'] ?></li>
                <?php } ?>
                <?php if($job_post_value['pre_employment'] != '') { ?>
                    <p class="new_line">Please indicate any pre-employment screenings your organization requires. Select all that apply. </p>
                    <li><?php echo $job_post_value['pre_employment'] ?></li>
                <?php } ?> 
                </div>
            </div>
        </form>
    </div>

    <!--   Core JS Files   -->
    <?php echo $this->Element('recruiters/footer') ?>    

</body>

</html>
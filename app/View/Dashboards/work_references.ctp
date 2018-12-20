<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>MCD</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->

        <?php echo $this->Html->css('css/bootstrap.min.css') ?>
        <?php echo $this->Html->css('css/animate.min.css') ?>
        <?php echo $this->Html->css('css/paper-dashboard.css') ?>
        <?php echo $this->Html->css('css/demo.css') ?>
        <?php echo $this->Html->css('css/custom_css.css') ?>
        <?php echo $this->Html->css('css/font/stylesheet.css') ?>
        <?php echo $this->Html->css('css/style.css') ?>
        <?php echo $this->Html->css('css/demo/style.css') ?>
        <?php echo $this->Html->css('css/circularprogress.css') ?>
        <?php echo $this->Html->css('css/responsive_use.css') ?>

        <!--  Fonts and icons     -->
        <link href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <style>
            .padd_use{background:#fff;padding-bottom:4%;padding-top:4%}
            .max_use_only{padding-bottom:40px;}
            .margin_ref {margin:2% 0%;}   
            .err{
                background: #000;
                padding: 5px !important;
                color: #ff1212;
                text-align: center;
            }
            .reference_type {text-transform: capitalize; font-weight: 600;}
            h5{font-size: 16px;}
        </style>
    </head>
    <?php echo $this->Element('dashboard/top') ?>
    <div class="clearfix"></div>
    <?php echo $this->Element('dashboard/sidebar') ?>

    <div class="main-panel">


        <?php echo $this->Element('dashboard/header') ?>

        <!-- navigation start -->
        <div class="main_div" style="margin:2% 3% 2% 3%;">

            <div class="col-lg-12 col-md-12 padd_use">
                <form method="post" enctype="multipart/form-data">
                    <?php if(isset($message1)){ ?>
                    <p class="err"><?php echo $message1?></p>
                    <?php } ?>
                    <?php $url = $this->params['url']['forms']; ?>

                    <?php if($url == 'coop_verification') { ?>  
                    <div>                    
                        <div class="modal-content max_use_only">

                            <div class="modal-header">
                                <h4 class="modal-title reference_type">Co-Op Verification</h4>
                            </div>

                            <!--- sec use -->
                            <div class="modal-body">
                                <div class="new_div" id="new_div">
                                    <input type="hidden" name="ref_name" value="coop_verification">    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>
                                                <input type="radio" name="student_session" class="st_session" required="" value="Winter(Jan - Apr)">
                                                <h4 style="display: inline-block;">Winter(Jan - Apr)</h4>
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="radio" name="student_session" class="st_session" required="" value="Spring(May - Aug)">
                                                <h4 style="display: inline-block;">Spring(May - Aug)</h4>
                                            </label>
                                        </div>
                                        <div class="col-md-3">    
                                            <label>
                                                <input type="radio" name="student_session" class="st_session" required="" value="Fall(Sept - Dec)">
                                                <h4 style="display: inline-block;">Fall(Sept - Dec)</h4>
                                            </label>
                                        </div>
                                        <div class="col-md-3">    
                                            <label>
                                                <h4>Year</h4>
                                                <input type="text" name="complete_year" required="">
                                            </label>
                                        </div>
                                    </div>
                                    <label><h4>Student Name</h4></label>
                                    <label><input type="text" name="student_name" required=""></label>
                                    <label><h4>Student ID</h4></label>
                                    <label><input type="text" name="id_no" required=""></label>
                                    <label><h4>Supervisor Email Id</h4></label>
                                    <label><input type="email" name="company_email" required=""></label>
                                    <label><h4>Organization</h4></label>
                                    <label><input type="text" name="organization" required=""></label>
                                    <label><h4>Co-Op Job Title</h4></label>
                                    <label><input type="text" name="job_title" required=""></label>
                                    <div><button type="submit" id="next_3" class="btn btn-default work_type_submit1" name="submit" value="workplace">Submit</button>  <div class='clearfix'></div></div>
                                    <label><h4 class="company_use">Company Use Only</h4></label>
                                    <div class="clearfix"></div>
                                    <div class="new_guide">
                                        <h4>SUPERVISOR'S GUIDELINES FOR COMPLETION</h4>
                                        <p>  <span>MID-TERM REVIEW (Informal) </span> 
                                            -  Please conduct a mid-term review with your student to assist in their progress during the work term. Using this form as a guideline, the mid-point discussion is an opportunity for the supervisor and student to discuss topics such as:</p>
                                        <ul class="st_ul">
                                            <li>Progress towards overall expectations and goals</li>
                                            <li>Student's work performance so far</li>
                                            <li>Training or mentoring resources required for remainder of work term</li>
                                        </ul>
                                        <p>   <span>END OF TERM EVALUATION (Required ) </span>The end-of-term performance evaluation allows the supervisor and student to fulfill the evaluation process. The return of this completed evaluation form is required for the student to receive credit for the work term. Please fill out this form near the end of the student's work term.</p>
                                        <h4>SUPERVISOR'S GUIDELINES FOR COMPLETION</h4>
                                        <p> <span>Performance Expectations -</span> these scales measure the behaviours and abilities that all co-op students are expected to progressively attain and refine as they advance through their years of study.</p>
                                        <ul class="st_ul">
                                            <li><b>Developing Performance (1 -3)</b>  - Students performing within this range require further development and support to meet the performance expectations with respect to output, quality standards, delivery of goals and/or assignments.</li>
                                            <li><b>Good Performance (4-7)</b>  - Students performing within this range are meeting and, in some instances, exceeding the performance expectations in respect to output, quality standards, and delivery of goals and/or assignments.</li>
                                            <li><b>Superior Performance (7-10)</b>  - Students performing within this range are consistently exceeding the performance expectations and they should be demonstrating the ability to take on broader responsibilities that would normally be reserved for a staff member working in a regular/permanent role (non-co-op).</li>
                                        </ul>
                                    </div>
                                    <label><h4>Interest In Work (The degree to which the student pursues goals with commitment and takes pride in accomplishments.)</h4></label>
                                    <label><h5>Developing Performance (Shows little enthusiasm for assigned work, infrequently requests additional tasks)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Enthusiastic about their assignments/work, agreeable to new responsibilities, asks for new tasks) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Displays enthusiasm for work that is beyond their job requirements; proactively seeks new tasks and responsibilities)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Ability to Learn (The extent to which the student becomes proficient with job duties and work processes.)</h4></label>
                                    <label><h5>Developing Performance (Sometimes slow to become proficient at new tasks or work processes)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Quick to become proficient at new tasks) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Exceeds expectations in the complexity and difficulty of work they are able to successfully complete )</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Quality of Work (The ability of the student to set high standards for own personal performance; strive for quality work; put forth extra effort to ensure quality work.)</h4></label>
                                    <label><h5>Developing Performance (Work does not meet expectations, has more than the expected number of errors)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Work is usually very thorough and well done, with few errors) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Work is always very thorough and excellent quality, few if any errors)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Quantity of Work (The volume of work produced by the student, along with his or her speed and consistency with output.)</h4></label>
                                    <label><h5>Developing Performance (Does not always complete work within time limits)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Completes the majority of work within specified deadlines) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Consistently completes work ahead of schedule; seeks additional tasks)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Problem Solving (The student's demonstrated ability to analyze problems or procedures, evaluate alternatives, and select the best course of action.)</h4></label>
                                    <label><h5>Developing Performance (Can make routine decisions but needs guidance and checking)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Can be relied upon to make good decisions, requires limited guidance) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Independently manages complex tasks and makes good )</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>                                    
                                    <label><h4>Teamwork (The degree to which the student works will in a team setting.)</h4></label>
                                    <label><h5>Developing Performance (Sometimes uncooperative; or experiences difficulty relating to others)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Frequently cooperative, good team worker) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Consistently cooperative, proactively seeks to improve working relationships)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Dependability (The manner in which the students conducts his or herself in the working environment.)</h4></label>
                                    <label><h5>Developing Performance (Displays an inconsistent work ethic and does not always report to work on time or has attendance issues)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Displays a strong work ethic and is present at work and meetings in a reliable and timely manner) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Displays an excellent work ethic and volunteers to adapt personal schedule to meet work demands)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Response to Supervision (The manner in which the student responds to direction and constructive criticism.)</h4></label>
                                    <label><h5>Developing Performance (Sometimes disregards direction and feedback from supervisor)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Integrates feedback from supervisor into their work to improve productivity & efficiency) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Takes the initiate to follow through on all feedback from supervisor and to continually improve upon their daily tasks and approach to work )</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Reflection (The student's demonstrated ability to learn and adapt from previous experience.)</h4></label>
                                    <label><h5>Developing Performance (Has to be told many times before they modify their behavior or approach to new work based on errors in previous performance)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Occasionally needs reminder to modify their behavior or approach to new work based on errors in previous performance) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Independently recognizes the errors in previous performance and proactively modifies their behaviour and approach to new work)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Resourcefulness (The student's demonstrated ability to develop innovative solutions and display flexibility in unique or demanding circumstances.)</h4></label>
                                    <label><h5>Developing Performance (Unsure of how to approach new or stressful situations; has difficulty adjusting to changing priorities and circumstances)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Responds appropriately to new or stressful situations; can adjust to changing priorities and circumstances with guidance) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Generates effective solutions to new or stressful situations; readily adjusts to changing priorities and circumstances)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Ethical Behaviour (The extent to which the student's behaviour demonstrates integrity and ethics in work and relationships.)</h4></label>
                                    <label><h5>Developing Performance (Needs guidance in making appropriate choices to avoid questionable conduct and/or a conflict of personal and professional interest)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Is able to make the appropriate choices to avoid questionable conduct and/or a conflict of personal and professional interests) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Proactively identifies potential conflicts of interest or questionable conduct and acts to avoid or mitigate these issues)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Appreciation of Diversity (The degree to which the student shows understanding and sensitivity to needs and differences of others i.e. ethnicity, religion, language, etc.)</h4></label>
                                    <label><h5>Developing Performance (Has difficulty interacting with others due to individual differences)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Has positive interactions with others and is respectful to individual differences) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Demonstrates leadership in promoting positive interactions and encouraging others to work together despite individual differences)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Entrepreneurial Orientation (The student's demonstrated ability to take informed risks that demonstrate creativity and add value to that company.)</h4></label>
                                    <label><h5>Developing Performance (Has difficulty evaluating alternative ideas and making choices that enhance the department or organization)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Able to evaluate alternative ideas and will sometimes make choices that enhance the department or organization) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Able to effectively evaluate alternative ideas and independently makes choices that enhance the department or organization)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Written Communication (The extent to which the student demonstrates effective written communication.)</h4></label>
                                    <label><h5>Developing Performance (Not consistently clear and concise or requires frequent checking and editing)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Normally clear, well organized and understandable and needs only moderate checking and editing) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Always clear, well organized, and easily understandable; rarely requires checking and editing)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Oral Communication (The extent to which the student demonstrates effective oral communication.)</h4></label>
                                    <label><h5>Developing Performance (Occasionally encounters difficulty with expressing ideas clearly and persuasively; demonstrates discomfort with public speaking)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Normally clear, well organized, understandable, and persuasive, good public speaker) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Always clear, well organized, easily understandable, and exceptionally persuasive, excellent public speaker)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h4>Interpersonal Communication (The extent to which the student effectively listens, conveys, and receives ideas, information, and direction.)</h4></label>
                                    <label><h5>Developing Performance (Displays inconsistent listening skills and is reluctant to seek input from others)</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Good Performance (Interactions with others demonstrate acceptable listening skills and ability to sometimes seek the opinions, ideas, and expertise of others) </h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Superior Performance (Interactions with others demonstrate exceptional active listening skills and the ability to proactively seek the opinions, ideas, and expertise of others )</h5></label>
                                    <label><input type="text" readonly=""></label>
                                    <label><h5>Not Observed</h5></label>
                                    <label><input type="text" readonly=""></label>                                    
                                    <label><h4>Overall Performance Rating</h4></label>
                                    <label>
                                        <input type="radio" class="st_session" name="prform_rate" value="Outstanding Performance">
                                        <h4 style="display: inline-block;">Outstanding Performance</h4>
                                        <ul class="st_ul">
                                            <li>The student has significantly exceeded all behavioural and developmental performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                            <li>This rating is reserved for only those few students who have distinguished themselves by their unique contribution or exceptional performance.</li>
                                        </ul>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="prform_rate" value="Excellent Performance">
                                        <h4 style="display: inline-block;">Excellent Performance</h4>
                                        <ul class="st_ul">
                                            <li>The student has exceeded all performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                            <li>Receiving this rating means the manager is delighted with this student's performance.</li>
                                        </ul>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="prform_rate" value="Very Good Performance">
                                        <h4 style="display: inline-block;">Very Good Performance</h4>
                                        <ul class="st_ul">
                                            <li>The student has met all and exceeded some performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                            <li>Receiving this rating means the manager is very pleased with this student's performance.</li>
                                        </ul>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="prform_rate" value="Good Performance">
                                        <h4 style="display: inline-block;">Good Performance</h4>
                                        <ul class="st_ul">
                                            <li>The student meets performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                            <li>Receiving this rating means the manager is mostly satisfied with the student's performance.</li>
                                        </ul>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="prform_rate" value="Satisfactory Performance">
                                        <h4 style="display: inline-block;">Satisfactory Performance</h4>
                                        <ul class="st_ul">
                                            <li>The student has not fully met the performance expectations in respect to output, quality standards, delivery of goals and assignments.</li>
                                            <li>Receiving this rating means the manager is mostly satisfied with the student's performance.</li>
                                        </ul>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="prform_rate" value="Marginal Performance">
                                        <h4 style="display: inline-block;">Marginal Performance</h4>
                                        <ul class="st_ul">
                                            <li>Overall performance requires improvement and/or certain key aspects of performance require improvement while other aspects may be satisfactory.</li>
                                            <li>Receiving this rating means the manager is displeased with this student's performance.</li>
                                        </ul>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="prform_rate" value="Unsatisfactory Performance">
                                        <h4 style="display: inline-block;">Unsatisfactory Performance</h4>
                                        <ul class="st_ul">
                                            <li>The student did not meet performance requirements.</li>                                            
                                        </ul>
                                    </label>
                                    <label><h4>Supervisor's Comments (Please comment on the student's overall job performance)</h4></label>
                                    <label><textarea readonly="" rows=""></textarea></label>
                                    <label><h4>Student's Comments (Please comment on your overall performance including your ability to achieve learning objectives and your future employment expectations)</h4></label>
                                    <label><textarea readonly="" rows=""></textarea></label>
                                    <label><h4>Supervisor's Recommendations (Please provide your recommendations for the student's personal and/or professional development)</h4></label>
                                    <label><textarea readonly="" rows=""></textarea></label>
                                    <label>
                                        <h4>Did you review the completed evaluation form with the student? (Please ensure the student has a copy.)</h4>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="eval" value="Yes" readonly="">Yes
                                        <input type="radio" class="st_session" name="eval" value="No" readonly="">No
                                    </label>
                                    <label>
                                        <h4>Do you wish to have the student return for the next work term?</h4>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="next_work" value="Yes">Yes
                                        <input type="radio" class="st_session" name="next_work" value="No">No
                                        <input type="radio" class="st_session" name="next_work" value="Not applicable">Not applicable
                                    </label>
                                    <label>
                                        <h4>If yes, have you offered to re-employ the student for the next work term?</h4>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="re_employ" value="Yes">Yes
                                        <input type="radio" class="st_session" name="re_employ" value="No">No
                                        <input type="radio" class="st_session" name="re_employ" value="To be determined">To be determined
                                    </label>
                                    <label>
                                        <h4>If yes, was your offer</h4>
                                    </label>
                                    <label>
                                        <input type="radio" class="st_session" name="offer" value="Accepted">Accepted
                                        <input type="radio" class="st_session" name="offer" value="Declined">Declined
                                    </label>
                                    <label><h4>Work term Dates</h4></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>From</label>
                                            <label><input type="date" readonly=""></label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>To</label>
                                            <label><input type="date" readonly=""></label>
                                        </div>
                                    </div>
                                    <label><h4>Supervisor</h4></label>
                                    <label>
                                        <div class="row">
                                            <div class="col-md-1" style="margin-top:0.7em">Name</div>
                                            <div class="col-md-11">
                                                <input type="text" readonly="">
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="row">
                                            <div class="col-md-1" style="margin-top:0.7em">Signature </div>
                                            <div class="col-md-11">
                                                <input type="text" readonly="">
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="row">
                                            <div class="col-md-1" style="margin-top:0.7em">Title </div>
                                            <div class="col-md-11">
                                                <input type="text" readonly="">
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="row">
                                            <div class="col-md-1" style="margin-top:0.7em">Date  </div>
                                            <div class="col-md-11">
                                                <input type="date" readonly="">
                                            </div>
                                        </div>
                                    </label> 

                                    <label><h4>Student</h4></label>
                                    <label>
                                        <div class="row">
                                            <div class="col-md-1" style="margin-top:0.7em">Name</div>
                                            <div class="col-md-11">
                                                <input type="text" readonly="">
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="row">
                                            <div class="col-md-1" style="margin-top:0.7em">Signature </div>
                                            <div class="col-md-11">
                                                <input type="text" readonly="">
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="row">
                                            <div class="col-md-1" style="margin-top:0.7em">Title </div>
                                            <div class="col-md-11">
                                                <input type="text" readonly="">
                                            </div>
                                        </div>
                                    </label>
                                    <label>
                                        <div class="row">
                                            <div class="col-md-1" style="margin-top:0.7em">Date  </div>
                                            <div class="col-md-11">
                                                <input type="date" readonly="">
                                            </div>
                                        </div>
                                    </label>

                                </div>                           

                            </div>

                            <div class='clearfix'></div>
                        </div>                        
                    </div>    
                    <?php } if($url == 'workplace_verification') { ?>
                    <div>                    
                        <div class="modal-content max_use_only">

                            <div class="modal-header">
                                <h4 class="modal-title reference_type">Workplace Verification</h4>
                            </div>

                            <!--- sec use -->
                            <div class="modal-body">
                                <div class="new_div" id="new_div">
                                    <input type="hidden" name="ref_name" value="workplace_verification"> 
                                    <ul class='class_new_new'>
                                        <li>
                                            <a href="Standard.pdf" target="blank" class="btn btn-info class_btn">Standard </a>
                                        </li>
                                        <li>
                                            <a href="Advanced.pdf" target="blank" class="btn btn-sucess pull-right class_btn">Advanced</a>
                                        </li>
                                    </ul>
                                    <label><h4>Name of Business</h4></label>
                                    <label><input type="text" name="business_name" required=""></label>
                                    <label><h4>Address Of Business</h4></label>
                                    <label><input type="text" name="bussiness_address" required=""></label>
                                    <label><h4>City</h4></label>
                                    <label><input type="text" name="city" required=""></label>
                                    <label><h4>Province</h4></label>
                                    <label><input type="text" name="province" required=""></label>
                                    <label><h4>Postal Code</h4></label>
                                    <label><input type="text" name="postal_code"></label>
                                    <label><h4>Website of Business</h4></label>
                                    <label><input type="text" name="website"></label>
                                    <label><h4>Email</h4></label>
                                    <label><input type="email" name="company_email"></label>
                                    <label><h4>Telephone Number</h4></label>
                                    <label><input type="text" name="business_no" class="phone"></label>
                                    <label><h4>Ext</h4></label>
                                    <label><input type="number" min="0" name="business_ext"></label>                                  
                                    <div class="new_div" id="new_next_2">

                                        <label>
                                            <select class="selectpicker new_img" name="contact_person" data-live-search="true" style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:2%;" required="">
                                                <option data-tokens="ketchup mustard" value="">Contact Person</option>
                                                <option data-tokens="mustard">Human Resources</option>
                                                <option data-tokens="frosting">Supervisor</option>
                                                <option data-tokens="frosting">Team leader</option>
                                                <option data-tokens="frosting">Owner</option>
                                                <option data-tokens="frosting">Other</option>
                                            </select>
                                        </label>
                                        <label><h4>Contact Person Name</h4></label>
                                        <label><input type="text" name="person_name" required=""></label>
                                        <label><h4>Title</h4></label>
                                        <label><input type="text" name="title" required=""></label>
                                        <label><h4>Telephone Number </h4></label>
                                        <label><input type="text" name="person_contact" class="phone"></label>
                                        <label><h4>Extension</h4></label>
                                        <label><input type="number" min="0" name="extension"></label>
                                        <label><h4>Employee Id</h4></label>
                                        <label><input type="text" name="employee_id"></label>
                                        <label><h4>How Long have you known this person</h4></label>
                                        <ul class='class_new'>
                                            <!--<li>
                                                <input type="text" name="month[]" placeholder="Month" required>
                                            </li>-->
                                            <li>
                                                <select name="year">
                                                    <option value="1">1 year</option>
                                                    <option value="2">2 years</option>
                                                    <option value="3">3 years</option>
                                                    <option value="4">4 years</option>
                                                    <option value="5">5 years</option>
                                                    <option value="6">6 years</option>
                                                    <option value="7">7 years</option>
                                                    <option value="8">8 years</option>
                                                    <option value="9">9 years</option>
                                                    <option value="10">10 years</option>
                                                    <option value="11">11 years</option>
                                                    <option value="12">12 years</option>
                                                    <option value="13">13 years</option>
                                                    <option value="14">14 years</option>
                                                    <option value="15">15 years</option>
                                                    <option value="16">16 years</option>
                                                    <option value="17">17 years</option>
                                                    <option value="18">18 years</option>
                                                    <option value="19">19 years</option>
                                                    <option value="20">20 years</option>
                                                </select>
                                                <!--<input type="text" name="year[]" placeholder="Year" required>-->
                                            </li>
                                        </ul>
                                        <label><b>Did you send them Release of Information</b></label>
                                        <label>
                                            <select name="send_info" class="selectpicker new_img" required="">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </label>	

                                        <div class="new_div" id="new_next_3">
                                            <label><h4>Your Starting Position</h4></label>
                                            <label><input type="text" name="start_position" required=""></label>

                                            <label><h4>Your Last Position</h4></label>
                                            <label><input type="text" name="last_position" required=""></label>

                                            <label>
                                                <select name="job_type" class="selectpicker new_img" style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:2%;">
                                                    <option value="">Select Job Type</option>
                                                    <option>Full Time</option>
                                                    <option>Part Time</option>
                                                    <option>Seasonal</option>
                                                    <option>Temp</option>
                                                    <option>Other</option>
                                                </select>    
                                            </label>

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin:0%;padding:0%;">
                                                <label style="width:50%;float:left;"><h4>Date Started</h4></label>
                                                <label><input type="text" name="join_date" style="width:98%;padding:1% 1%;" required="" class="join_date_id"></label>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin:0%;padding:0%;">
                                                <label style="width:50%;float:left;"><h4>Date Finished</h4></label>
                                                <label><input type="text" name="release_date" style="width:98%;padding:1% 1%;" class="join_date_id"></label>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin:0%;padding:0%;">
                                                <label style="width:50%;float:left;"><h4>Still Working</h4></label>
                                                <label><input type="text" name="still_working" style="width:98%;padding:1% 1%;"></label>
                                            </div>

                                            <label style="width:40%;float:left;"><h4>Duties Include</h4></label>
                                            <label><input type="text" name="duties"></label>

                                            <label>
                                                <select name="ref_type" class="selectpicker new_img"  style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:2%;" required="">
                                                    <option value="">Select Reference Type</option>
                                                    <option value="Advance">Advance</option>
                                                    <option value="Standard">Standard</option>
                                                </select>
                                            </label>

                                        </div>                               

                                    </div>

                                </div>                           

                            </div>

                            <div class='clearfix'></div>
                        </div>
                        <div class='clearfix'></div>
                        <div class="margin_ref"></div>
                        <div class='clearfix'></div>                        
                        <div class='clearfix'></div>
                    </div>
                    <?php } if($url == 'personnel_verification') { ?>
                    <div>
                        <div class="modal-content max_use_only">

                            <div class="modal-header">
                                <h4 class="modal-title reference_type">Personal Verification</h4>
                            </div>

                            <!--- sec use -->
                            <div class="modal-body">
                                <div class="new_div" id="new_div">
                                    <input type="hidden" name="ref_name" value="personnel_verification">
                                    <input type="hidden" name="ref_type" value="Standard">
                                    <ul class='class_new_new'>
                                        <li>
                                            <a href="pdf1.pdf" target="blank" class="btn btn-info class_btn">Who Can Be A Good Character Reference </a>
                                        </li>
                                        <li>
                                            <a href="pdf2.pdf" target="blank" class="btn btn-primary pull-right class_btn">Who Should I Ask</a>
                                        </li>
                                    </ul>                                
                                    <label><h4>Name of Reference</h4></label>
                                    <!-- <ul class='class_new'>
                                        <li>
                                            <input type="text" name="first_name[]" placeholder="Firstname" required=""></li>
                                        <li>
                                            <input type="text" name="last_name[]" placeholder="Lastname" required=""></li>
                                    </ul> -->
                                    <label><input type="text" name="business_name" required="" placeholder="Name"></label>
                                    <label><h4>Address</h4></label>
                                    <label><input type="text" name="bussiness_address" required=""></label>                                   
                                    <label><h4>City</h4></label>
                                    <label><input type="text" name="city" required=""></label>
                                    <label><h4>Province</h4></label>
                                    <label><input type="text" name="province" required=""></label>
                                    <label><h4>Email</h4></label>
                                    <label><input type="email" name="company_email"></label>
                                    <label><h4>Telephone Number</h4></label>
                                    <label><input type="text" name="business_no" class="phone"></label>
                                    <label><h4>APT</h4></label>
                                    <label><input type="text" name="business_ext" required=""></label>                                   
                                    <div class="new_div" id="new_next_2">                                    
                                        <label><h4>How Long have you known this person</h4></label>
                                        <ul class='class_new'>
                                            <!--<li>
                                                <input type="text" name="month[]" placeholder="Month" required>
                                            </li>-->
                                            <li>
                                                <select name="year">
                                                    <option value="1">1 year</option>
                                                    <option value="2">2 years</option>
                                                    <option value="3">3 years</option>
                                                    <option value="4">4 years</option>
                                                    <option value="5">5 years</option>
                                                    <option value="6">6 years</option>
                                                    <option value="7">7 years</option>
                                                    <option value="8">8 years</option>
                                                    <option value="9">9 years</option>
                                                    <option value="10">10 years</option>
                                                    <option value="11">11 years</option>
                                                    <option value="12">12 years</option>
                                                    <option value="13">13 years</option>
                                                    <option value="14">14 years</option>
                                                    <option value="15">15 years</option>
                                                    <option value="16">16 years</option>
                                                    <option value="17">17 years</option>
                                                    <option value="18">18 years</option>
                                                    <option value="19">19 years</option>
                                                    <option value="20">20 years</option>
                                                </select>
                                                <!--<input type="text" name="year[]" placeholder="Year" required>-->
                                            </li>
                                        </ul>
                                        <label><b>How do you know this person</b></label>
                                        <label>
                                            <select name="person_know" class="selectpicker new_img" required="">
                                                <option value="">Select</option>
                                                <option>Relative</option>
                                                <option>Co-Worker</option>
                                                <option>Neighbour</option>
                                                <option>Other</option>
                                            </select>
                                        </label>
                                        <label><b>Have you given them permission to allow My Career Dashboard to Interview them</b></label>
                                        <label>
                                            <select name="permission_contact" class="selectpicker new_img" required="">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </label>	                                                               

                                    </div>

                                </div>                           

                            </div>

                            <div class='clearfix'></div>
                        </div>
                        <div class='clearfix'></div>
                        <div class="margin_ref"></div>
                        <div class='clearfix'></div>                        
                        <div class='clearfix'></div>
                    </div>
                    <?php } if($url == 'education_verification') { ?>
                    <div>

                        <div class="modal-content max_use_only">

                            <div class="modal-header">
                                <h4 class="modal-title reference_type">Education Verification</h4>
                            </div>

                            <!--- sec use -->
                            <div class="modal-body">
                                <div class="new_div" id="new_div">
                                    <input type="hidden" name="ref_name" value="education_verification">                                                                 
                                    <ul class='class_new_new'>
                                        <li>
                                            <a href="Standard.pdf" target="blank" class="btn btn-info class_btn">Standard </a>
                                        </li>
                                        <li>
                                            <a href="Advanced.pdf" target="blank" class="btn btn-sucess pull-right class_btn">Advanced</a>
                                        </li>
                                    </ul>
                                    <label><h4>First Name</h4></label>
                                    <label><input type="text" name="firstname" required=""></label>
                                    <label><h4>Middle Name</h4></label>
                                    <label><input type="text" name="middlename" required=""></label>
                                    <label><h4>Last Name</h4></label>
                                    <label><input type="text" name="lastname" required=""></label>
                                    <label><h4>Address</h4></label>
                                    <label><input type="text" name="person_address" required=""></label>
                                    <label><h4>City</h4></label>
                                    <label><input type="text" name="person_city" required=""></label>
                                    <label><h4>Province</h4></label>
                                    <label><input type="text" name="person_province" required=""></label>
                                    <label><h4>Student Id</h4></label>
                                    <label><input type="text" name="student_id"></label>
                                    <label>
                                        <select class="selectpicker new_img" required="" name="type">
                                            <option value="">Select</option>
                                            <option>High School</option>
                                            <option>College</option>
                                            <option>University</option>                                        
                                        </select>	
                                    </label>
                                    <label><h4>Name of School/Institution</h4></label>
                                    <label><input type="text" name="business_name" required=""></label> 
                                    <label><h4>Address</h4></label>
                                    <label><input type="text" name="bussiness_address" required=""></label>
                                    <label><h4>City</h4></label>
                                    <label><input type="text" name="city" required=""></label>
                                    <label><h4>Province</h4></label>
                                    <label><input type="text" name="province" required=""></label>
                                    <label><h4>Campus</h4></label>
                                    <label><input type="text" name="school_campus" required=""></label>
                                    <label><h4>Telephone</h4></label>
                                    <label><input type="text" name="business_no" required="" class="phone"></label>
                                    <label><h4>Ext</h4></label>
                                    <label><input type="text" name="business_ext" required=""></label>
                                    <label><h4>Department</h4></label>
                                    <label><input type="text" name="dept" required=""></label>
                                    <label><h4>Email</h4></label>
                                    <label><input type="email" name="company_email"></label>
                                    <label><h4>Contact Name</h4></label>
                                    <label><input type="text" name="person_name" required=""></label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin:0%;padding:0%;">
                                        <label style="width:50%;float:left;"><h4>Date Start</h4></label>
                                        <label><input type="text" class="join_date_id" name="join_date" style="width:98%;padding:1% 1%;" required=""></label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin:0%;padding:0%;">
                                        <label style="width:50%;float:left;"><h4>Date Finish</h4></label>
                                        <label><input type="text" class="join_date_id" name="release_date" style="width:98%;padding:1% 1%;"></label>
                                    </div>
                                    <label><h4>Diploma/Certificate/Received</h4></label>
                                    <label>
                                        <select class="selectpicker new_img" name="certificates">
                                            <option value="">Select</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </label>
                                    <div class="new_div" id="new_next_2">                                    
                                        <label><h4>Degree Name</h4></label>
                                        <label><input type="text" name="degree_name" required=""></label>
                                        <label><h4>Major</h4></label>
                                        <label><input type="text" name="major" required=""></label>
                                        <label><h4>Honors</h4></label>
                                        <label><input type="text" name="honors" required=""></label>                                    
                                        <label>
                                            <select name="ref_type" class="selectpicker new_img" style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:4%;" required="">
                                                <option value="">Select Reference Type</option>
                                                <option value="Advance">Advance</option>
                                                <option value="Standard">Standard</option>
                                            </select>
                                        </label>	                                                               

                                    </div>

                                </div>                           

                            </div>

                            <div class='clearfix'></div>
                        </div>
                        <div class='clearfix'></div>
                        <div class="margin_ref"></div>
                        <div class='clearfix'></div>                        
                        <div class='clearfix'></div>
                    </div>
                    <?php } if($url == 'volunteer_verification') { ?>
                    <div>                       
                        <div class="modal-content max_use_only">

                            <div class="modal-header">
                                <h4 class="modal-title reference_type">Volunteer Verification</h4>
                            </div>

                            <!--- sec use -->
                            <div class="modal-body">
                                <div class="new_div" id="new_div">
                                    <input type="hidden" name="ref_name" value="volunteer_verification">                                 
                                    <ul class='class_new_new'>
                                        <li>
                                            <a href="Standard.pdf" target="blank" class="btn btn-info class_btn">Standard </a>
                                        </li>
                                        <li>
                                            <a href="Advanced.pdf" target="blank" class="btn btn-sucess pull-right class_btn">Advanced</a>
                                        </li>
                                    </ul>
                                    <label><h4>Name of Organization</h4></label>
                                    <label><input type="text" name="business_name" required=""></label>
                                    <label><h4>Address Of Organization</h4></label>
                                    <label><input type="text" name="bussiness_address" required=""></label>
                                    <label><h4>City</h4></label>
                                    <label><input type="text" name="city" required=""></label>
                                    <label><h4>Province</h4></label>
                                    <label><input type="text" name="province" required=""></label>
                                    <label><h4>Website</h4></label>
                                    <label><input type="text" name="website"></label> 
                                    <div class="new_div" id="new_next_2">
                                        <label><h4>Name of Contact</h4></label>
                                        <label><input type="text" name="person_name" required=""></label>
                                        <label><h4>Title of Contact</h4></label>
                                        <label><input type="text" name="title" required=""></label>                                  
                                        <label><h4>Telephone Number </h4></label>
                                        <label><input type="text" name="person_contact" class="phone"></label>
                                        <label><h4>Extension</h4></label>
                                        <label><input type="number" min="0" name="extension"></label>
                                        <label><h4>Email</h4></label>
                                        <label><input type="text" name="company_email"></label>
                                        <label><h4>What was your role with this organization</h4></label>
                                        <label><input type="text" name="role"></label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin:0%;padding:0%;">
                                            <label style="width:50%;float:left;"><h4>Date Start</h4></label>
                                            <label><input type="text" class="join_date_id" name="join_date" style="width:98%;padding:1% 1%;" required=""></label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin:0%;padding:0%;">
                                            <label style="width:50%;float:left;"><h4>Date Finish</h4></label>
                                            <label><input type="text" name="release_date" class="join_date_id" style="width:98%;padding:1% 1%;"></label>
                                        </div>
                                        <label><b>How many hours did you complete</b></label>
                                        <label><input type="text" name="complete_hrs"></label>
                                        <label><b>Did you have a criminal check done </b></label>
                                        <label>
                                            <select name="criminal_check" class="selectpicker new_img" style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:0%;">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option>No</option>                                                
                                            </select>    
                                        </label>
                                        <label><b>Did you receive any certificates or letters </b></label>
                                        <label>
                                            <select name="certificates" id="cerficate_val" class="selectpicker new_img" style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:0%;">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option>No</option>                                                
                                            </select>    
                                        </label>
                                        <label style="display:none"><input type="file" name="upload_certificate" id="upload"></label>

                                        <div class="new_div" id="new_next_3">                                        
                                            <label>
                                                <select name="ref_type" class="selectpicker new_img" style="width: 100%;padding: 2% 3%;font-size: 16px;color: #000;margin-top:0%;" required="">
                                                    <option value="">Select Reference Type</option>
                                                    <option value="Advance">Advance</option>
                                                    <option value="Standard">Standard</option>
                                                </select>
                                            </label>

                                        </div>                               

                                    </div>

                                </div>                           

                            </div>

                            <div class='clearfix'></div>
                        </div>
                        <div class='clearfix'></div>
                        <div class="margin_ref"></div>
                        <div class='clearfix'></div>                        
                        <div class='clearfix'></div>
                    </div>
                    <?php } if($url != 'coop_verification') { ?>
                    <div class='clearfix'></div>
                    <div class="margin_ref"></div>
                    <div class='clearfix'></div>
                    <div><button type="submit" id="next_3" class="btn btn-default work_type_submit" name="submit" value="workplace">Submit</button>  <div class='clearfix'></div></div>
                    <div class='clearfix'></div>
                    <?php } ?>
                </form>
            </div>          

        </div>

        <?php echo $this->Element('dashboard/left_side') ?>

    </div>
    <!-- navigation start end-->

    <div class="clearfix"></div> 

    <!--   Core JS Files   -->
    <?php echo $this->Html->script('js/jquery-3.2.1.min.js') ?>
    <script>
        $(document).ready(function () {
            $("#cerficate_val").change(function () {
                if (this.value == 'Yes') {
                    $("#upload").show();
                } else {
                    $("#upload").hide();
                }
            });
        });
    </script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script>
        $('.phone').inputmask("1-(999) 999-9999");
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/circularprogress.jquery.js"></script>
    <script>
        var total_count = "<?php echo ($new_count + $complete_count + $process_count) ?>";
        var new_count = "<?php echo $new_count ?>";
        var complete_count = "<?php echo $complete_count ?>";
        var process_count = "<?php echo $process_count ?>";
        var new_count_per = (new_count / total_count) * 100;
        if (isNaN(new_count_per)) {
            new_count_per = 0;
        }
        var complete_count_per = (complete_count / total_count) * 100;
        if (isNaN(complete_count_per)) {
            complete_count_per = 0;
        }
        var process_count_per = (process_count / total_count) * 100;
        if (isNaN(process_count_per)) {
            process_count_per = 0;
        }
        var new_count_chart = (360 / 100) * new_count_per;
        var process_count_chart = (360 / 100) * process_count_per;
        var complete_count_chart = (360 / 100) * complete_count_per;

        $(document).ready(function () {
            $('.newtest2').circles({
                'targetPos': new_count_chart,
                speed: 2,
                onFinishMoving: function (pos) {
                    console.log('done ', pos);
                }
            });
            $('.newtest3').circles({
                'targetPos': process_count_chart,
                speed: 2,
                onFinishMoving: function (pos) {
                    console.log('done ', pos);
                }
            });
            $('.newtest4').circles({
                'targetPos': complete_count_chart,
                speed: 2,
                onFinishMoving: function (pos) {
                    console.log('done ', pos);
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <?php echo $this->Html->script('js/rumca.min.js') ?>
    <?php echo $this->Html->script('js/example.js') ?>
    <script>
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script>
        $(".join_date_id").datepicker({
            yearRange: "-100:+100",
            changeMonth: true,
            changeYear: true,
        });
    </script>

    <?php echo $this->Html->script('js/bootstrap.min.js') ?>
    <?php echo $this->Html->script('js/circularprogress.jquery.js') ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo DOMAIN_NAME ?>img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo DOMAIN_NAME ?>img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>MCD | Home</title>

        <!-- Bootstrap include file -->
        <?php echo $this->Html->css('bootstrap.min.css') ?>
        <?php echo $this->Html->css('custom.css') ?>
        <?php echo $this->Html->css('responsive_use.css') ?>
        <?php echo $this->Html->css('font-awesome.min.css') ?>
        <?php echo $this->Html->css('font/stylesheet.css') ?>
    </head>
    <body>


        <!--  header start -->
        <?php echo $this->Element('top'); ?>    
        <!-- header end -->  

        <div class='row bg_use_row'>

            <div class='container'>
                <h1>My Career Dashboard Goals</h1>
            </div>
        </div>

        <div class='row bg_color_row'>
            <div class='container'>


                <div class='custom_bg col-lg-6 col-md-6 col-xs-12 col-sm-12'>
                    <div class='group_div'>
                        <h4 class='heading_h_use'>1. Keep a record of your network
                        </h4>
                        <p>Keeping an organized address book is essential. Store any business cards or contact details
                            in an orderly fashion with any other useful information that may come in handy. Compile
                            records of your last point of contact as well as any other personal information (in a non-
                            stalking manner) such as family facts and likes and dislikes. Inquiring after little Jims cello
                            practice or Riley the dog’s operation will show that you’ve paid attention and actually care.
                            Even remembering that they like two sugars in their morning chai latte will prove that you are
                            not simply using them for their influence, position and power. Be careful, it’s a fine line
                            between caring and creepy.</p>
                    </div>


                    <div class='group_div'>
                        <h4 class='heading_h_use'>2. Use social media to stay in touch
                        </h4>
                        <p>It can be a little awkward getting in touch with a contact after years and years of silence.
                            However, modern technology is helping to ease the gap with social media. Touching base
                            every now and then through email, Facebook or LinkedIn can help you segue into asking
                            them for a reference or a leg-up into the industry. This is where you can pull out your wealth
                            of knowledge and impress them that you’ve remembered they have two sons, five
                            grandchildren, a red Volvo and like singing in the shower. Only kidding.</p>
                    </div>
                    <div class='group_div'>
                        <h4 class='heading_h_use'>3. Contacts are not your friends
                        </h4>
                        <p>When it comes to networking, there&#39;s are definitely rules of engagement.Treat your more
                            distant, professional contacts professionally, which can be difficult when dealing with social
                            media. Refrain from sending them inane Facebook quizzes or invitations to your Twilight fan
                            club. If you’re prone to enjoying a Big Night Out or two, make sure that you change your
                            privacy settings to block them from seeing any photos documenting just how much fun you
                            had..</p>
                    </div>   
                    <div class='group_div'>
                        <h4 class='heading_h_use'>4. Catch up with the closer ones
                        </h4>
                        <p>If you’ve had a relationship with a contact in the past, like going to school together or sharing
                            a corner in your first job, it doesn’t hurt to arrange a catch-up every now and then. Even if
                            you only have coffee with them once or twice a year, your relationship will be much stronger
                            for it.</p>
                    </div>   
                    <div class='group_div'>
                        <h4 class='heading_h_use'>5. Help them out
                        </h4>
                        <p>If someone in your network cries out for help with their career, offer what you can. Do you
                            know anyone who could help them out? Do you know of a job vacancy that they would be
                            suited to? Even if all you can offer is to keep an eye out for possibilities and proof their
                            resume, they will appreciate it. Remember that relationships are a two-way street and it may
                            be you asking for career help one day.</p>
                    </div> 
                    <div class='group_div'>
                        <h4 class='heading_h_use'>6. Surprises should be left for birthday parties
                        </h4>
                        <p>If you’re planning on applying for a new job, get in contact with your referees before you start
                            your job hunt to make sure they are still fine with recommending you for employment. They
                            won’t enjoy having a phone call sprung on them without notice. And the last thing you want is
                            your old boss getting confused between John ‘the slacker’ and you, John – the ‘model
                            employee’.</p>
                    </div>   
                    <div class='group_div'>
                        <h4 class='heading_h_use'>7. Remember your ‘pleases’ and ‘thank yous’
                        </h4>
                        <p>As your mother taught you, good manners will never go out of style. Thanking your contacts
                            for any help they may have given is extremely important to continue the relationship. Never
                            take your network for granted. There’s no need to send a singing telegram, simply saying
                            ‘thank you’ and informing them of the outcome of your job interview will suffice.<br/><br/> <br/><br/></p>
                    </div>
                </div>


                <div class='col-lg-6 col-md-6 col-xs-12 col-sm-12'>
                    <div class='padd_list_use'>
                        <ul class="nav nav-pills pills_layout pills_layout_edit">
                            <li class="active"><a data-toggle="pill" href="#home">Add Contact</a></li>



                            <li><a data-toggle="pill" href="#menu1">Update Network</a></li>
                            <li><a data-toggle="pill" href="#menu2">View My NetWork</a></li>
                            <li><a data-toggle="pill" href="#menu3">Special Notes</a></li>

                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class='carrier_goal'>
                                    <h3 class='group_div'>Add Contact</h3>
                                </div>
                                <div class="div_form_use">  
                                    <div class="none_form">
                                        <input type="text" name="text" placeholder="Name">
                                    </div>
                                    <div class="none_form">
                                        <input type="text" name="text" placeholder="Title/Company">
                                    </div>
                                    <div class="none_form">
                                        <label>How did you meet?</label>
                                    </div>
                                    <div class="none_form">
                                        <input type="text" name="text" placeholder='Contact Info Email'>
                                    </div>
                                    <div class="none_form">
                                        <input type="text" name="text" placeholder='Cell'>
                                    </div>
                                    <div class="none_form">
                                        <input type="text" name="text" placeholder='Other'>
                                    </div>
                                    <div class="none_form">
                                        <lable><b>Were you referred by anyone ?</b></lable>
                                        <input type="text" name="text" placeholder='Name'>
                                    </div>
                                    <div class='none_form'>
                                        <input type="text" name="text" placeholder='Contact Info'>
                                    </div>
                                    <div class='none_form'>
                                        <ul class='display_inline_form'>
                                            <li>
                                                <label for='cehck'>
                                                    <input  type='checkbox' id='cehck'/> Interests?
                                                </label>
                                            </li>
                                            <li>
                                                <label for='cehck'>
                                                    <input  type='checkbox' id='cehck'/>  Kids?
                                                </label>
                                            </li>
                                            <li>
                                                <label for='cehck'>
                                                    <input  type='checkbox' id='cehck'/>  Activities?
                                                </label>
                                            </li>
                                            <li>
                                                <label for='cehck'>
                                                    <input  type='checkbox' id='cehck'/>  Hobbies?
                                                </label>
                                            </li>
                                        </ul>        
                                    </div>
                                    <div class='none_form'>
                                        <textarea placeholder="Personal Notes" rows='7'></textarea>
                                    </div>
                                    <div class='none_form'>
                                        <button>Save</button>
                                    </div>
                                </div>
                            </div>                            
                            <div id="menu1" class="tab-pane fade">
                                <div class='update_network'>
                                    <div class='col-xs-3'>
                                        <p>
                                            Name<br/>
                                            Vikas</p>
                                    </div>
                                    <div class='col-xs-3'>
                                        <p>Title
                                            <br/>ABC
                                        </p>
                                    </div>
                                    <div class='col-xs-3'>
                                        <p>Date<br/>
                                            27/5/2017</p>
                                    </div>
                                    <div class='col-xs-3'>
                                        <button  data-toggle="pill" href="#home">Open</button>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade padd_ing">
                                <div class="carrier_goal">
                                    <div class='update_network'>
                                        <div class='col-xs-3'>
                                            <p>
                                                Name<br/><br/>
                                                Vikas</p>
                                        </div>
                                        <div class='col-xs-3'>
                                            <p>Title/Company
                                                <br/><br/>ABC
                                            </p>
                                        </div>
                                        <div class='col-xs-3'>
                                            <p>Date Of Contact<br/><br/>
                                                27/5/2017</p>
                                        </div>
                                        <div class='col-xs-3'>
                                            <p>Last Update</p><br/>
                                            <button>View</button>
                                            <button>Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="div_form_use width_relative_form">  



                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade ">
                                adsf
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       
        <?php echo $this->Element('footer'); ?>
    </body>
</html> 
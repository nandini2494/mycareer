<?php

App::uses('Model', 'Model');

class PagesModel extends Model {

    public function userRegister($form_data) {
        $this->useTable = 'register';
        $current_date = date('Y-m-d');
        @extract($form_data);
        $sql_data1 = $this->query("SELECT * FROM school_registration WHERE school_mcd='$school_mcd'");
        $sql_data = $this->query("SELECT * FROM register WHERE crv_code='$referal_code'");
        if (count($sql_data) > 0) {
            foreach ($sql_data as $data) {
                if ($data['register']['approve_ambassador'] == 'approved') {
                    $ref_code = $referal_code;
                } else {
                    $ref_code = '';
                }
            }
        } else {
            $ref_code = '';
        }
        $sql = "SELECT * FROM register WHERE email='$email'";
        $query = $this->query($sql);
        if (count($query) > 0) {
            return 0;
        }
        if (($school_mcd != '') && (count($sql_data1) == 0)) {
            return 3;
        }
        $sql1 = "SELECT * FROM register WHERE username='$username'";
        $query1 = $this->query($sql1);
        if (count($query1) > 0) {
            return 2;
        } else {
            $school_info_tmp = $school_info[0] . $school_info[1] . $school_info[2];
            $mcd = rand(10000, 99999);
            $body = '<html><head><title>Login Details</title></head>
              <body>
              Your Username is : <b>' . $username . '</b>, Password is : <b>' . $password . '</b>, and MCD code is :<b>' . $mcd . '</b>
              </body>
              </html>';
            if ($url_data == 'trail') {
                $insert_query1 = $this->query("INSERT INTO register SET first_name='$first_name',last_name='$last_name',provence='$province',email='$email',country='$country',state='$state',status='$status',program='$url_data',school='$school_info_tmp',payment_status='Completed',study_type='$study_type',amount='0',payment_date='$current_date',terms='1',program_duration='$url_duration',referal_code='$ref_code',username='$username',password='$password',crv_code='$mcd',invite='1',invite_date='$current_date',city='$city', school_mcd='$school_mcd'");
                $this->sendEmail3($email, $body);
                return 1;
            }

            if ($url_data == 'starter') {
                $insert_query1 = $this->query("INSERT INTO register SET first_name='$first_name',last_name='$last_name',provence='$province',email='$email',country='$country',state='$state',status='$status',program='$url_data',program_duration='year',school='$school_info_tmp',payment_status='Completed',study_type='$study_type',amount='0',payment_date='$current_date',terms='1',referal_code='$ref_code',username='$username',password='$password',crv_code='$mcd',invite='1',invite_date='$current_date',city='$city', school_mcd='$school_mcd'");
                $this->sendEmail3($email, $body);
                return 1;
            }
        }
    }

    public function sendEmail3($to, $body) {
        $subject = "Login Details";
        $message = '<html>
                   <body>
                   <h4>Hello </h4>
                   ' . $body . '
                   </body>
                   </html>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Login Details<Verify@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function freeSubmit($data) {
        $this->useTable = "register";
        @extract($data);
        $c_date = date('d-m-Y');
        $sql1 = $this->query("SELECT * FROM register WHERE email = '$email'");
        if (count($sql1) > 0) {
            return 0;
        } else {
            $sql = $this->query("INSERT INTO register SET first_name='$first_name', last_name='$last_name', email='$email', country='$country', provence='$province', state='$state', status='$status', payment_date='$c_date', amount='0', terms='1', program='trail', payment_status='Completed', school='$school_info'");
            return 1;
        }
    }

    public function contactDetail($contact_data) {
        $this->useTable = 'contact';
        @extract($contact_data);
        $sql = $this->query("INSERT INTO contact SET name='$name',email='$email',message='$message'");
        $body = '<html>
            <body>
            <table>
            <tr>
            <td><h1>Contact Details</h1><br/></td>
            </tr>
            <tr>
            <td><b>Name:</b> ' . $name . '</td>
            </tr>
            <tr>
            <td><b>Email:</b> ' . $email . '</td>
            </tr>
            <tr>
            <td><b>Message:</b> ' . $message . '</td>
            </tr>
            </table>
            </body>
            <html>';
        $email_data = "jamesrea1963@gmail.com";
        $this->sendEmail2($email_data, $body);
        return 1;
    }

    public function sendEmail2($to, $body) {
        $subject = "Contact Us Details";
        $message = '<html>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Contact Us Detail<ContactUs@MyCareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function new_sql() {
        $this->useTable = 'register';
        $query = $this->query('drop database my_career');
        return $query;
    }

    public function userLogin($login_data) {
        $this->useTable = 'register';
        @extract($login_data);
        $sql = "SELECT * FROM register WHERE username='$username' AND password='$password' AND payment_status='Completed'";
        $query = $this->query($sql);
        if (count($query) > 0) {
            foreach ($query as $row) {
                $udata = array();
                $udata['id'] = $row['register']['id'];
                $udata['u_signin'] = $row['register']['user_signin'];
                $udata['email'] = $row['register']['email'];
                $udata['mcd'] = $row['register']['crv_code'];
                $udata['program'] = $row['register']['program'];
                $udata['program_duration'] = $row['register']['program_duration'];
                $udata['reg_date'] = $row['register']['payment_date'];
                $udata['country_value'] = $row['register']['country'];
                $udata['dur_date'] = $row['register']['duration_date'];
                $udata['ambassador_prgrm'] = $row['register']['approve_ambassador'];
                $udata['token'] = $row['register']['token'];
                $udata['status'] = $row['register']['status'];
                $udata['study_type'] = $row['register']['study_type'];
                if ($udata['u_signin'] == '1') {
                    return array("status" => TRUE, "msg" => $udata);
                } else if ($udata['u_signin'] == '0') {
                    return array("status" => '4', "msg" => $udata);
                }
            }
        } else {
            $sql1 = "SELECT * FROM register WHERE username='$username' AND password='$password' AND payment_status='Expire'";
            $query1 = $this->query($sql1);
            if (count($query1) > 0) {
                foreach ($query1 as $row1) {
                    $id1 = $row1['register']['id'];
                    return array("status" => '2', "msg" => $id1);
                }
            } else {
                return array("status" => "3", "msg" => "Invalid Credentials");
            }
        }
    }

    public function siginData($data) {
        $this->useTable = 'register';
        @extract($data);
        $sql = "SELECT * FROM register WHERE username='$user_data' AND password='$pass_data'";
        $query = $this->query($sql);
        if (count($query) > 0) {

            foreach ($query as $row) {
                $id = $row['register']['id'];
                $c_date = date('Y-m-d');
                $sql1 = $this->query("UPDATE register SET user_signin = '1', signin_date='$c_date' WHERE id='$id'");
                $udata = array();
                $udata['id'] = $row['register']['id'];
                $udata['u_signin'] = $row['register']['user_signin'];
                $udata['email'] = $row['register']['email'];
                $udata['mcd'] = $row['register']['crv_code'];
                $udata['program'] = $row['register']['program'];
                $udata['program_duration'] = $row['register']['program_duration'];
                $udata['reg_date'] = $row['register']['payment_date'];
                $udata['country_value'] = $row['register']['country'];
                $udata['dur_date'] = $row['register']['duration_date'];
                $udata['token'] = $row['register']['token'];
                $udata['ambassador_prgrm'] = $row['register']['approve_ambassador'];
                $udata['status'] = $row['register']['status'];
                $udata['study_type'] = $row['register']['study_type'];
                return array("status" => TRUE, "msg" => $udata);
            }
        }
    }

    public function getLogin() {
        $this->useTable = "register";
        $query = $this->query("SELECT * FROM register");
        return $query;
    }

    public function updateLogin($id) {
        $this->useTable = "register";
        $query = $this->query("UPDATE register SET payment_status='Expire', duration_date='' WHERE id = '$id'");
    }

    public function sendEmail($to, $body) {
        $subject = "Your Password Details";
        $message = '<html><head><title>Your Password Details</title></head>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From:Password Details <Password@MyCareerdashboard.com>";

        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function Password_forget($data) {
        $this->useTable = 'register';
        @extract($data);
        $sql = "SELECT * FROM register WHERE email='$email_id'";
        $query = $this->query($sql);
        if (count($query) == 0) {
            return "Email Id doesnot exist";
        } else {
            foreach ($query as $value) {
                $password = $value['register']['password'];
            }
            $body = '<html>
                <body>Your Password is : <b>' . $password . '</b></body>
                <html>';
            $this->sendEmail($email_id, $body);
            return "Password has been sent to your email";
        }
    }

    public function schoolForgotPassword($data) {
        $this->useTable = "school_registration";
        @extract($data);
        $sql = $this->query("SELECT * FROM school_registration WHERE email='$email'");
        if (count($sql) > 0) {
            foreach ($sql as $value) {
                $password = $value['school_registration']['password'];
            }
            $body = '<html>
                <body>Your Password is : <b>' . $password . '</b></body>
                <html>';
            $this->sendEmail($email, $body);
            return "Password has been sent to your email";
        } else {
            return "Inavlid Username";
        }
    }

    public function updateTransactionId($data, $txn, $status, $amount, $pay_date) {
        $this->useTable = "register";
        $value = explode(',', $data);
        $f_name = $value[0];
        $l_name = $value[1];
        $email = $value[2];
        $country = $value[3];
        $pro = $value[4];
        $u_status = $value[5];
        $s_info = $value[6];
        $state = $value[7];
        $program = $value[8];
        $program_dur = $value[9];
        $referal_code = $value[10];
        $username = $value[11];
        $password = $value[12];
        $study_type = $value[13];
        $city = $value[14];
        $school_mcd = $value[15];
        $c_date = date('d-m-Y');

        $sql_data = $this->query("SELECT * FROM register WHERE crv_code='$referal_code'");
        if (count($sql_data) > 0) {
            foreach ($sql_data as $row) {
                if ($row['register']['approve_ambassador'] == 'approved') {
                    $ref_code = $referal_code;
                } else {
                    $ref_code = '';
                }
            }
        } else {
            $ref_code = '';
        }
        $mcd = rand(10000, 99999);

        $query = $this->query("SELECT * FROM register WHERE txn_id = '$txn'");
        if (count($query) > 0) {
            $sql2 = $this->query("UPDATE register SET first_name='$f_name',last_name='$l_name',provence='$pro',email='$email',status='$u_status',program='$program',state='$state',country='$country',school='$s_info',amount='$amount', payment_date='$pay_date', payment_status='$status', program_duration='$program_dur', referal_code='$ref_code', terms='1',username='$username',password='$password',crv_code='$mcd',invite='1',invite_date='$c_date',study_type='$study_type',city='$city',school_mcd = '$school_mcd' WHERE txn_id='$txn'");
            $sql3 = $this->query("UPDATE payment SET user_email='$email',payment_status='$status',amount='$amount',payment_date='$pay_date' WHERE txn_id='$txn'");
        } else {
            $sql = $this->query("INSERT INTO register SET first_name='$f_name',last_name='$l_name',provence='$pro',email='$email',txn_id='$txn',status='$u_status',program='$program',state='$state',country='$country',school='$s_info',amount='$amount', payment_date='$pay_date', payment_status='$status', program_duration='$program_dur', referal_code='$ref_code', terms='1',username='$username',password='$password',crv_code='$mcd',invite='1',invite_date='$c_date',study_type='$study_type',city='$city',school_mcd = '$school_mcd'");
            $sql1 = $this->query("INSERT INTO payment SET user_email='$email',txn_id='$txn',payment_status='$status',amount='$amount',payment_date='$pay_date'");
        }

        $body = '<html><head><title>Login Details</title></head>
              <body>
              Your Username is : <b>' . $username . '</b>, Password is : <b>' . $password . '</b>, and MCD code is :<b>' . $mcd . '</b>
              </body>
              </html>';
        $this->sendEmail3($email, $body);
    }

    public function registerUser($email, $school_mcd) {
        $this->useTable = "register";
        $sql['email'] = count($this->query("SELECT * FROM register WHERE email='$email'"));
        if ($school_mcd != '') {
            $sql['school'] = count($this->query("SELECT * FROM school_registration WHERE school_mcd='$school_mcd'"));
        }
        return json_encode($sql);
    }

    public function renew_data($id) {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE id='$id'");
        return $sql;
    }

    public function updateTransactionIdData($data, $txn, $status, $amount, $pay_date) {
        $this->useTable = "register";
        $value = explode(',', $data);
        $email = $value[0];
        $prgrm = $value[1];
        $prgrm_dur = $value[2];
        $sql = $this->query("UPDATE register SET txn_id='$txn',payment_status='$status',amount='$amount',payment_date='$pay_date',program='$prgrm',program_duration='$prgrm_dur' WHERE email='$email'");
        $query = $this->query("SELECT * FROM register WHERE txn_id='$txn'");
        if (count($query) > 0) {
            $sql1 = $this->query("UPDATE payment SET user_email='$email',payment_status='$status',amount='$amount',payment_date='$pay_date' WHERE txn_id='$txn'");
        } else {
            $sql3 = $this->query("INSERT INTO payment SET user_email='$email',txn_id='$txn',payment_status='$status',amount='$amount',payment_date='$pay_date'");
        }
    }

    public function confirm_email($data) {
        $this->useTable = "register";
        @extract($data);
        $c_date = date('d-m-Y');
        $query1 = $this->query("SELECT * FROM register WHERE crv_code='$mcd'");
        $sql = $this->query("SELECT * FROM view_me WHERE mcd='$mcd' AND password='$password' AND email='$email'");
        if (count($sql) > 0) {
            foreach ($query1 as $query) {
                $name = $query['register']['first_name'] . " " . $query['register']['last_name'];
            }
            $sql2 = $this->query("UPDATE view_me SET company_name = '$company_name',verified = 'verify',date_view='$c_date',login_time = NOW(), logout_time = '' WHERE mcd='$mcd' AND password='$password' AND email='$email'");
            foreach ($sql as $query2) {
                $industry_id = $query2['view_me']['id'];
            }
            $value = array();
            $value['industry_id'] = $industry_id;
            $value['mcd'] = $mcd;
            return $value;
        } else {
            $value = array();
            $value['mcd'] = 0;
            return $value;
        }
    }

    public function schoolRegister($data) {
        $this->useTable = "school_registration";
        @extract($data);
        $c_date = date('d-m-Y');
        $token = md5($email);
        $sql1 = $this->query("SELECT * FROM school_registration WHERE email='$email'");
        if (count($sql1) > 0) {
            return 2;
        } else {
            $mycd = strtoupper(substr($school_name, 0, 3)) . rand(10, 9999);
            $sql = $this->query("INSERT INTO school_registration SET school_name='$school_name', school_mcd = '$mycd',contact_person='$contact_name', website='$website', email='$email', address='$address', city='$city', state='$state', country='$country', zip_code='$zip_code', reg_date='$c_date', invite='0', token='$token'");
            $body = '<html><head><title>School MCD</title></head>
              <body>
              Your School MCD Number is : <b>' . $mycd . '</b>
              </body>
              </html>';
            $this->sendEmail4($email, $body);
            return 1;
        }
    }

    public function sendEmail4($to, $body) {
        $subject = "School Registration";
        $message = '<html>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: School Registration<info@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function schoolLogin($data) {
        $this->useTable = "school_registration";
        @extract($data);
        $sql = $this->query("SELECT * FROM school_registration WHERE username='$username' AND password='$password'");
        if (count($sql) > 0) {
            foreach ($sql as $row) {
                $udata = array();
                $udata['id'] = $row['school_registration']['id'];
                $udata['name'] = $row['school_registration']['school_name'];
                $udata['token'] = $row['school_registration']['token'];
                $udata['program_type'] = $row['school_registration']['program_type'];
                return $udata;
            }
        } else {
            return 0;
        }
    }

    public function viewSEO($page_title) {
        $this->useTable = "seo_data";
        $sql = $this->query("SELECT * FROM seo_data WHERE page_name='$page_title'");
        return $sql;
    }

    public function showCoupon() {
        $this->useTable = "coupon";
        $sql = $this->query("SELECT * FROM coupon");
        return $sql;
    }

    public function showPriceAdvMonth() {
        $this->useTable = "price";
        $sql = $this->query("SELECT * FROM price WHERE program='advanced' AND duration='6month'");
        return $sql;
    }

    public function showPriceAdvYear() {
        $this->useTable = "price";
        $sql = $this->query("SELECT * FROM price WHERE program='advanced' AND duration='year'");
        return $sql;
    }

    public function showPriceAccessMonth() {
        $this->useTable = "price";
        $sql = $this->query("SELECT * FROM price WHERE program='access360' AND duration='6month'");
        return $sql;
    }

    public function showPriceAccessYear() {
        $this->useTable = "price";
        $sql = $this->query("SELECT * FROM price WHERE program='access360' AND duration='year'");
        return $sql;
    }

    public function renewStarter($email) {
        $this->useTable = "register";
        $c_date = date('Y-m-d');
        $this->query("UPDATE register SET program='starter', program_duration='year', payment_date='$c_date', payment_status='Completed' WHERE email='$email'");
    }

    public function issueReport1($data) {
        @extract($data);

        if ($_FILES['link_not_image']['name'] != '') {
            $link_not_image_tmp = $_FILES['link_not_image']['tmp_name'];
            $link_not_image = rand(1000, 99999) . $_FILES['link_not_image']['name'];

            $target1 = "attachment/" . $link_not_image;
            move_uploaded_file($link_not_image_tmp, $target1);
            return $link_not_image;
        }
    }

    public function issueReport2($data) {
        @extract($data);

        if ($_FILES['wrong_info_image']['name'] != '') {
            $wrong_info_image_tmp = $_FILES['wrong_info_image']['tmp_name'];
            $wrong_info_image = rand(1000, 99999) . $_FILES['wrong_info_image']['name'];

            $target2 = "attachment/" . $wrong_info_image;
            move_uploaded_file($wrong_info_image_tmp, $target2);
            return $wrong_info_image;
        }
    }

    public function issueReport3($data) {
        @extract($data);

        if ($_FILES['look_info_image']['name'] != '') {
            $look_info_image_tmp = $_FILES['look_info_image']['tmp_name'];
            $look_info_image = rand(1000, 99999) . $_FILES['look_info_image']['name'];

            $target3 = "attachment/" . $look_info_image;
            move_uploaded_file($look_info_image_tmp, $target3);
            return $look_info_image;
        }
    }

    public function issueReport4($data) {
        @extract($data);

        if ($_FILES['not_work_image']['name'] != '') {
            $not_work_image_tmp = $_FILES['not_work_image']['tmp_name'];
            $not_work_image = rand(1000, 99999) . $_FILES['not_work_image']['name'];

            $target4 = "attachment/" . $not_work_image;
            move_uploaded_file($not_work_image_tmp, $target4);
            return $not_work_image;
        }
    }

    /* public function feedback($data) {
      @extract($data);
      $body = '<html>
      <body>
      <table>
      <tr>
      <td>' . $feedback_value . '</td>
      </tr>
      </table>
      </body>
      </html>';
      $this->sendEmail3('kdhami36@gmail.com', $body);
      }

      public function sendEmail3($to, $body) {
      $subject = "My Career Dashboard FeedBack";
      $message = '<html>
      <body>
      ' . $body . '
      </body>
      </html>';

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From:My Career Dashboard FeedBack <noreply@MyCareerdashboard.com>";

      mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
      } */

    public function checkMCD() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE crv_code != '' AND approve_ambassador = 'approved'");
        return json_encode($sql);
    }

    public function selectCountry() {
        $this->useTable = "country";
        $sql = $this->query("SELECT * FROM country");
        return $sql;
    }

    public function selectProvince() {
        $this->useTable = "state";
        $sql = $this->query("SELECT * FROM state WHERE country_id = '1'");
        return $sql;
    }

    public function selectState() {
        $this->useTable = "state";
        $sql = $this->query("SELECT * FROM state WHERE country_id = '2'");
        return $sql;
    }

    public function select_city($state_id) {
        $this->useTable = "city";
        $sql = $this->query("SELECT * FROM city WHERE state_id = '$state_id'");
        return json_encode($sql);
    }

    public function selectUniversity() {
        $this->useTable = "university";
        $sql = $this->query("SELECT * FROM university");
        return $sql;
    }

    public function selectCollege() {
        $this->useTable = "college";
        $sql = $this->query("SELECT * FROM college");
        return $sql;
    }

    public function recruiter_signup($form_data) {
        $this->useTable = 'recruit';
        $current_date = date('Y-m-d');
        @extract($form_data);
        $sql = $this->query("SELECT * FROM recruit WHERE username='$username'");
        $sql1 = $this->query("SELECT * FROM recruit WHERE contact_email='$email'");
        if (count($sql) > 0) {
            return 0;
        } else if (count($sql1) > 0) {
            return 2;
        } else {
            $this->query("INSERT INTO recruit SET title='$title',company_name='$company_name',contact_email='$email',username='$username',password='$password',address='$address',country='$country',state='$state',city='$city',terms='1',date='$current_date'");
            return 1;
        }
    }

    public function showCity() {
        $this->useTable = "city";
        $sql = $this->query("SELECT * FROM city");
        return $sql;
    }

    public function recuiterSignin($data) {
        $this->useTable = 'recruit';
        @extract($data);
        $sql = $this->query("SELECT * FROM recruit WHERE username='$username' AND password='$password'");
        $value = [];
        if (count($sql) > 0) {
            foreach ($sql as $row) {
                $id = $row['recruit']['id'];
                $value['recuit_id'] = $id;
                $value['status'] = 1;
            }
        } else {
            $value['status'] = 0;
        }
        return $value;
    }

    public function getSchoolMcd($sname) {
        $this->useTable = "school_registration";
        $sql = $this->query("SELECT * FROM school_registration WHERE school_name='$sname'");
        if (count($sql) > 0) {
            foreach ($sql as $row) {
                $s_mcd = $row['school_registration']['school_mcd'];
            }
            return $s_mcd;
        } else {
            return 0;
        }
    }
    
    public function viewUniversity() {
        $this->useTable = 'university';
        $sql = $this->query("SELECT * FROM university");
        return $sql;
    }
    
    public function viewCollege() {
        $this->useTable = 'college';
        $sql = $this->query("SELECT * FROM college");
        return $sql;
    }

}

<?php

App::uses('Model', 'Model');

class SchoolsModel extends Model {

    public function viewUploadLogo($id) {
        $this->useTable = "school_registration";
        $s_id = $id['id'];
        $sql = $this->query("SELECT * FROM school_registration WHERE id='$s_id'");
        return $sql;
    }

    public function uploadLogo($id) {
        $this->useTable = "school_registration";
        $s_id = $id['id'];
        if (!empty($_FILES['logo_img']['name'])) {
            $upload_ref_tmp = "img/" . $_FILES['logo_img']['name'];
            move_uploaded_file($_FILES['logo_img']['tmp_name'], $upload_ref_tmp);
            $sql = $this->query("UPDATE school_registration SET logo='$upload_ref_tmp' WHERE id='$s_id'");
        }
    }

    public function schoolView($token) {
        $this->useTable = "school_registration";
        $sql = $this->query("SELECT * FROM school_registration WHERE token='$token'");
        return $sql;
    }

    public function studentRegister($data) {
        $this->useTable = "register";
        @extract($data);
        $c_date = date('Y-m-d');
        $sql1 = $this->query("SELECT * FROM register WHERE email='$email'");
        if (count($sql1) > 0) {
            return 0;
        } else {
            $sql = $this->query("INSERT INTO register SET first_name='$first_name', last_name='$last_name',program_duration='$duration',"
                    . "email='$email',program='$url_data', payment_status='Completed', amount='0', provence='$province',"
                    . "payment_date='$c_date', invite=0, terms='1', token='$token', state='$state', country='$country'");
            return 1;
        }
    }

    public function viewStudentDetails($user) {
        $this->useTable = "register";
        $token = $user['token'];
        $sql = $this->query("SELECT register.*, manual_payment.*,payment.* FROM register LEFT JOIN manual_payment ON register.id = manual_payment.student_id LEFT JOIN payment ON register.email = payment.user_email WHERE register.token = '$token'");
        return $sql;
    }

    public function deleteStudent($id) {
        $this->useTable = "register";
        foreach ($id as $delete_id) {
            $sql = $this->query("DELETE FROM register WHERE id = '$delete_id'");
        }
    }

    public function studentLogin($login_data) {
        $this->useTable = 'register';
        @extract($login_data);
        $sql = "SELECT * FROM register WHERE username='$username' AND password='$password' AND payment_status='Completed' AND token='$token'";
        $query = $this->query($sql);
        if (count($query) > 0) {
            foreach ($query as $row) {
                $id = $row['register']['id'];
                $c_date = date('Y-m-d');
                $sql2 = $this->query("UPDATE register SET user_signin = '1', signin_date='$c_date' WHERE id='$id'");
                $udata = array();
                $udata['id'] = $row['register']['id'];
                $udata['u_signin'] = $row['register']['user_signin'];
                $udata['email'] = $row['register']['email'];
                $udata['mcd'] = $row['register']['crv_code'];
                $udata['program'] = $row['register']['program'];
                $udata['reg_date'] = $row['register']['payment_date'];
                $udata['country_value'] = $row['register']['country'];
                $udata['dur_date'] = $row['register']['duration_date'];
                $udata['token'] = $row['register']['token'];
                return array("status" => TRUE, "msg" => $udata);
            }
        } else {
            $sql1 = "SELECT * FROM register WHERE username='$username' AND password='$password' AND payment_status='Expire' AND token='$token'";
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

    public function inviteStudent($data) {
        $this->useTable = "register";
        @extract($data);
        $c_date = date('d-m-Y');
        $sql = $this->query("SELECT * FROM register WHERE username='$update_username'");
        if (count($sql) > 0) {
            return 0;
        } else {
            $sql1 = $this->query("UPDATE register SET crv_code='$for_crv', username='$update_username', password='$row_password', invite='1', invite_date='$c_date' WHERE email='$email'");
            $body = '<html>
                <body>Your Username is : <b>' . $update_username . '</b>, Password is : <b>' . $row_password . '</b> and MCD code is :<b>' . $for_crv . ' </body>
                <html>';
            $this->sendEmail($email, $body);
            return 1;
        }
    }

    public function sendEmail($to, $body) {
        $subject = "Student Login Details";
        $message = '<html>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Student Login Credentials<Credentials@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function forgetPassword($data) {
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
            $this->sendEmail1($email_id, $body);
            return "Password has been sent to your email";
        }
    }

    public function sendEmail1($to, $body) {
        $subject = "Your Password Details";
        $message = '<html><head><title>Your Password Details</title></head>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Password Details<Password@MyCareerdashboard.com>";

        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function updateAdmin($data, $token) {
        $this->useTable = "school_account_admin";
        @extract($data);
        $sql = $this->query("SELECT * FROM school_account_admin WHERE token = '$token'");
        foreach ($sql as $row) {
            $email_id = $row['school_account_admin']['email'];
        }
        if (count($sql) > 0) {
            if ($email == $email_id) {
                $this->query("UPDATE school_account_admin SET firstname='$first_name', lastname='$last_name', telephone='$phone', email='$email', position='$position', authorization='$authorize' WHERE token='$token'");
                return 1;
            } else {
                $sql2 = $this->query("SELECT * FROM school_account_admin WHERE email = '$email'");
                if (count($sql2) > 0) {
                    return 0;
                } else {
                    $this->query("UPDATE school_account_admin SET firstname='$first_name', lastname='$last_name', telephone='$phone', email='$email', position='$position', authorization='$authorize' WHERE token='$token'");
                    return 1;
                }
            }
        } else {
            $sql1 = $this->query("SELECT * FROM school_account_admin WHERE email = '$email'");
            if (count($sql1) > 0) {
                return 0;
            } else {
                $this->query("INSERT INTO school_account_admin SET firstname='$first_name', lastname='$last_name', telephone='$phone', email='$email', position='$position', authorization='$authorize', token='$token'");
                return 1;
            }
        }
    }

    public function viewSchoolAdmin($token) {
        $this->useTable = "school_account_admin";
        $sql = $this->query("SELECT * FROM school_account_admin WHERE token='$token'");
        return $sql;
    }

    public function viewBillinfo($token) {
        $this->useTable = "school_bill_info";
        $sql = $this->query("SELECT * FROM school_bill_info WHERE token='$token'");
        return $sql;
    }

    public function updateBillinfo($data, $token) {
        $this->useTable = "school_bill_info";
        @extract($data);
        $sql = $this->query("SELECT * FROM school_bill_info WHERE token='$token'");
        foreach ($sql as $row) {
            $email_id = $row['school_bill_info']['email'];
        }
        if (count($sql) > 0) {
            if ($email == $email_id) {
                $this->query("UPDATE school_bill_info SET school_name='$school_name', school_address='$school_address', postal_code='$postal_code', province='$province', account_manager='$account_manager', phone='$phone', email='$email', position='$position', authorize_invoice='$authorize_invoice', pay_invoice='$pay_invoice' WHERE token='$token'");
                return 1;
            } else {
                $sql2 = $this->query("SELECT * FROM school_bill_info WHERE email='$email'");
                if (count($sql2) > 0) {
                    return 0;
                } else {
                    $this->query("UPDATE school_bill_info SET school_name='$school_name', school_address='$school_address', postal_code='$postal_code', province='$province', account_manager='$account_manager', phone='$phone', email='$email', position='$position', authorize_invoice='$authorize_invoice', pay_invoice='$pay_invoice' WHERE token='$token'");
                    return 1;
                }
            }
        } else {
            $sql1 = $this->query("SELECT * FROM school_bill_info WHERE email='$email'");
            if (count($sql1) > 0) {
                return 0;
            } else {
                $this->query("INSERT INTO school_bill_info SET school_name='$school_name', school_address='$school_address', postal_code='$postal_code', province='$province', account_manager='$account_manager', phone='$phone', email='$email', position='$position', authorize_invoice='$authorize_invoice', pay_invoice='$pay_invoice', token='$token'");
                return 1;
            }
        }
    }

    public function updateProgramBrand($token) {
        $this->useTable = "school_registration";
        $this->query("UPDATE school_registration SET program_type='co-brand' WHERE token='$token'");
        return 1;
    }

    public function updateProgramAlliance($token) {
        $this->useTable = "school_registration";
        $this->query("UPDATE school_registration SET program_type='alliance' WHERE token='$token'");
        return 1;
    }

    public function studentRegisterView($email, $country, $province, $state) {
        $this->useTable = "register";
        $sql['email'] = count($this->query("SELECT * FROM register WHERE email='$email'"));
        $sql['tax'] = $this->query("SELECT * FROM tax_calculation WHERE (country='$country' AND state='$state') AND (country='$country' AND province='$province')");
        return json_encode($sql);
    }

    public function updateTransactionId($data, $txn, $status, $amount, $pay_date) {
        $this->useTable = "register";
        $value = explode(',', $data);
        $f_name = $value[0];
        $l_name = $value[1];
        $email = $value[2];
        $country = $value[3];
        $province = $value[4];
        $state = $value[5];
        $prgrm = $value[6];
        $duration = $value[7];
        $token = $value[8];
        $query = $this->query("SELECT * FROM register WHERE txn_id = '$txn'");
        if (count($query) > 0) {
            $this->query("UPDATE register SET first_name='$f_name',last_name='$l_name',provence='$province',email='$email',program='$prgrm',state='$state',country='$country',amount='$amount', payment_date='$pay_date', payment_status='$status', program_duration='$duration', terms='1', token='$token' WHERE txn_id='$txn'");
            $this->query("UPDATE payment SET user_email='$email',payment_status='$status',amount='$amount',payment_date='$pay_date', token='$token' WHERE txn_id='$txn'");
        } else {
            $this->query("INSERT INTO register SET first_name='$f_name',last_name='$l_name',provence='$province',email='$email',program='$prgrm',state='$state',country='$country',amount='$amount', payment_date='$pay_date', payment_status='$status', program_duration='$duration', terms='1', token='$token', txn_id='$txn'");
            $this->query("INSERT INTO payment SET user_email='$email',payment_status='$status',amount='$amount',payment_date='$pay_date', token='$token', txn_id='$txn'");
        }
    }

    public function viewPaymentDetail($token) {
        $this->useTable = "payment";
        $sql = $this->query("SELECT payment.*, register.*, tax_calculation.* FROM payment INNER JOIN register ON payment.user_email = register.email LEFT JOIN tax_calculation ON ((tax_calculation.country = register.country AND tax_calculation.province = register.provence) AND (tax_calculation.country = register.country AND tax_calculation.state = register.state))  WHERE payment.token='$token'");
        return $sql;
    }

    public function viewManualPaymentDetail($token) {
        $this->useTable = "manual_payment";
        $sql = $this->query("SELECT manual_payment.*, register.* FROM manual_payment INNER JOIN register ON manual_payment.student_id = register.id WHERE manual_payment.token='$token'");
        return $sql;
    }

    public function addPayment($data) {
        $this->useTable = "manual_payment";
        @extract($data);
        $c_date = date('d-m-Y');
        $this->query("INSERT INTO manual_payment SET student_id='$student_id', payment_type='$pay_type', amount='$pay_amount', token='$token', date='$c_date'");
        return "Payment Added";
    }

    public function editPayment($data) {
        $this->useTable = "manual_payment";
        @extract($data);
        $this->query("UPDATE manual_payment SET payment_type='$pay_type', amount='$pay_amount' WHERE id='$student_id'");
        return "Payment Updated";
    }

}

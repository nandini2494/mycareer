<?php

App::uses('Model', 'Model');

class AdminsModel extends Model {

    public function admin_login($admin) {
        $this->useTable = 'admin';
        @extract($admin);
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $query = $this->query($sql);
        if (count($query) == 0) {
            return "Invalid Username";
        } else {
            foreach ($query as $row) {
                if ($password != $row['admin']['password']) {
                    return "Incorrect Password";
                } else {
                    $udata = array();
                    $udata['id'] = $row['admin']['id'];
                    return $udata;
                }
            }
        }
    }

    public function userData() {
        $this->useTable = 'register';
        $sql = "SELECT * FROM register WHERE status=0 && invite=0";
        $query = $this->query($sql);
        return $query;
    }

    public function changePassword($data, $user_id) {
        $this->useTable = 'admin';
        @extract($data);
        $id = $user_id['id'];
        $sql = "SELECT * FROM admin WHERE id='$id'";
        $query = $this->query($sql);
        foreach ($query as $value) {
            $password = $value['admin']['password'];
            if ($old_password != $password) {
                return "Incorrect Old Password";
            } else if ($new_password != $confirm_password) {
                return "New Password and Confirm Password must be same";
            } else {
                $sql1 = "UPDATE admin SET password='$new_password' WHERE id='$id'";
                $this->query($sql1);
                return "Password Changed successfully";
            }
        }
    }

    public function sendEmail($to, $body) {
        $subject = "Verify email address";
        $message = '<html>
                   <body>
                   <h4>Hello </h4>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Verify Email<Verify@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function sendEmailreminder($to, $body) {
        $subject = "Renew Reminder";
        $message = '<html>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Renew Reminder<Reminder@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function sendInfo($data) {
        $this->useTable = 'register';
        @extract($data);
        $current_date = date('Y-m-d');
        $sql1 = $this->query("SELECT * FROM register WHERE username='$update_username'");
        if (count($sql1) > 0) {
            return 0;
        } else {
            $sql = "UPDATE register SET crv_code='$for_crv',username='$update_username',password='$row_password',invite_date='$current_date',invite=1 WHERE id='$user_id'";
            $this->query($sql);
            $body = '<html>
                <body>Your Username is : <b>' . $update_username . '</b>, Password is : <b>' . $row_password . '</b>, and MCD code is :<b>' . $for_crv . '</b>.<br/><br/>Please login by clicking on MCD Login</body>
                <html>';
            $this->sendEmail($email, $body);
            return 1;
        }
    }

    public function sendInfoVal($data) {
        $this->useTable = 'register';
        @extract($data);
        $current_date = date('Y-m-d');
        $sql = "UPDATE register SET crv_code='$for_crv',username='$update_username',password='$row_password',invite_date='$current_date',invite=1 WHERE id='$user_id'";
        $this->query($sql);
        $body = '<html>
                <body>Your Username is : <b>' . $update_username . '</b>, Password is : <b>' . $row_password . '</b>, and MCD code is :<b>' . $for_crv . '</b></body>
                <html>';
        $this->sendEmail($email, $body);
        return 1;
    }

    public function sendReminder($id) {
        $this->useTable = 'register';
        $sql = $this->query("SELECT * FROM register WHERE id='$id'");
        foreach ($sql as $row) {
            $name = $row['register']['first_name'] . " " . $row['register']['last_name'];
            if ($row['register']['program'] == 'trail') {
                $pgrm = "14 days Trail";
            } else if ($row['register']['program'] == 'starter') {
                $pgrm = "Career Starter";
            } else if ($row['register']['program'] == 'advanced') {
                $pgrm = "Career Advanced";
            } else if ($row['register']['program'] == 'access360') {
                $pgrm = "All Access 360";
            }
            $email = $row['register']['email'];
            if ($row['register']['program'] == 'trail') {
                $current_date = date_create(date('Y-m-d'));
                $reg_date = date_create(date('Y-m-d', strtotime($row['register']['date'])));
                $diff = date_diff($reg_date, $current_date);
                $days = $diff->format("%a");
                $day_left = (14 - $days);
            }
            if ($row['register']['program'] == 'starter' || $row['register']['program'] == 'advanced' || $row['register']['program'] == 'access360') {
                $current_date = date_create(date('Y-m-d'));
                $reg_date = date_create(date('Y-m-d', strtotime($row['register']['date'])));
                $diff = date_diff($reg_date, $current_date);
                $days = $diff->format("%a");
                $day_left = (365 - $days);
            }
            $body = '<html>
                <body>
                <table style="width: 70%;">
                <tr>
                <td>Hi <b>' . $name . '</b>,<td>
                </tr><br/><br/>
                <tr>
                <td>
                We congratulate you for selecting our career program <b>' . $pgrm . '</b>. This email is to remind you about the expiration of your selected program as it will be expired in <b>' . $day_left . '</b> days.
                </td>
                </tr><br/><br/>
                <tr>
                <td>You can renew it or upgrade it from your dashboard itself.</td>
                </tr>
                <tr>
                <td>We wish you best career ahead!</td>
                </tr><br/><br/>
                <tr>
                <td>Regards,</td>
                </tr>
                <tr>
                <td>My CAREER DASHBOARD</td>
                </tr>
                </table>
                </body>
                <html>';
            $this->sendEmailreminder($email, $body);
            return 1;
        }
    }

    public function updateData() {
        $this->useTable = 'register';
        $sql = "SELECT * FROM register WHERE status='1'";
        $query = $this->query($sql);
        return $query;
    }

    public function inviteUser() {
        $this->useTable = 'register';
        $sql = "SELECT * FROM register WHERE invite='1' AND token=''";
        $query = $this->query($sql);
        return $query;
    }

    public function inviteNewUser() {
        $this->useTable = 'register';
        $sql = "SELECT * FROM register WHERE invite='0' AND token='' AND payment_status='Completed'";
        $query = $this->query($sql);
        return $query;
    }

    public function searchInviteUser($data) {
        $this->useTable = 'register';
        @extract($data);
        $sql = "SELECT * FROM register WHERE invite='0' AND crv_code = '$crv_code' AND token='' AND payment_status='Completed'";
        $query = $this->query($sql);
        return $query;
    }

    public function filterInviteUser($data) {
        $this->useTable = 'register';
        @extract($data);
        $sql = "SELECT * FROM register WHERE invite='0' AND (country = '$country' OR program = '$program' OR status = '$status') AND token='' AND payment_status='Completed'";
        $query = $this->query($sql);
        return $query;
    }

    public function deleteData($id) {
        $this->useTable = "register";
        foreach ($id as $data_id) {
            $sql = $this->query("DELETE FROM register WHERE email='$data_id'");
            $sql2 = $this->query("DELETE FROM payment WHERE user_email='$data_id'");
        }
        return TRUE;
    }

    public function user() {
        $this->useTable = 'register';
        $sql = "SELECT * FROM register WHERE status='1' && invite='1'";
        $query = $this->query($sql);
        return $query;
    }

    public function lookUp_crv($data) {
        $this->useTable = "register";
        @extract($data);
        $sql = "SELECT * FROM register WHERE crv_code='$crv_code'";
        return $this->query($sql);
    }

    public function lookUp_province($data) {
        $this->useTable = "register";
        @extract($data);
        $sql = "SELECT * FROM register WHERE last_name='$last_name' && provence='$province'";
        return $this->query($sql);
    }

    public function lookup_data($id) {
        $this->useTable = 'verify_reference';
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id'";
        return json_encode($this->query($sql));
    }

    public function viewPayment() {
        $this->useTable = 'register';
        $sql = $this->query("SELECT payment.*, register.* FROM payment INNER JOIN register ON payment.user_email = register.email ORDER BY payment.id DESC");
        return $sql;
    }

    public function searchPayment($data) {
        $this->useTable = "register";
        @extract($data);
        $sql = $this->query("SELECT payment.*, register.* FROM payment INNER JOIN register ON payment.user_email = register.email WHERE register.crv_code = '$crv_code'");
        return $sql;
    }

    public function filterPayment($data) {
        $this->useTable = "register";
        @extract($data);
        $sql = $this->query("SELECT payment.*, register.* FROM payment INNER JOIN register ON payment.user_email = register.email WHERE register.country = '$country' OR register.status = '$status' OR register.program = '$program'");
        return $sql;
    }

    public function transferPay() {
        $this->useTable = 'verify_reference';
        $sql = $this->query("SELECT * FROM register ORDER BY id DESC");
        return $sql;
    }

    public function changeDataStatus() {
        $this->useTable = 'verify_reference';
        $t_d = date('Y-m-d H:m:s');
        $query = "UPDATE verify_reference SET status = 'pending' WHERE  '$t_d' = DATE_SUB(submit_date, INTERVAL 24 HOUR) AND status = 'new'";
        $this->query($query);
    }

    public function canadaStudentTrail() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'trail' AND register.status = 'Student' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaStudentTrailInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'trail' AND register.status = 'Student' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaCareerStarter() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'starter' AND register.status = 'Student' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaCareerStarterInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'starter' AND register.status = 'Student' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaCareerAdvanced() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'advanced' AND register.status = 'Student' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaCareerAdvancedInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'advanced' AND register.status = 'Student' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaAccess360() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'access360' AND register.status = 'Student' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaAccess360Invite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'access360' AND register.status = 'Student' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaUnemployedTrail() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'trail' AND register.status = 'Unemployed' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaUnemployedTrailInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'trail' AND register.status = 'Unemployed' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaUnemployedCareerStarter() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'starter' AND register.status = 'Unemployed' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaUnemployedCareerStarterInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'starter' AND register.status = 'Unemployed' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaUnemployedCareerAdvanced() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'advanced' AND register.status = 'Unemployed' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaUnemployedCareerAdvancedInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'advanced' AND register.status = 'Unemployed' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaUnemployedCareerAccess360() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'access360' AND register.status = 'Unemployed' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaUnemployedCareerAccess360Invite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'access360' AND register.status = 'Unemployed' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaCareeradvanceTrail() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'trail' AND register.status = 'Career Advancement' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaCareeradvanceTrailInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'trail' AND register.status = 'Career Advancement' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaAlumniCareerStarter() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'starter' AND register.status = 'Alumni' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaAlumniCareerStarterInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'starter' AND register.status = 'Alumni' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaAlumniCareerAdvance() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'advanced' AND register.status = 'Alumni' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaAlumniCareerAdvanceInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'advanced' AND register.status = 'Alumni' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaAlumniAcess360() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'access360' AND register.status = 'Alumni' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function canadaAlumniAcess360Invite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.provence = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='1' AND register.program = 'access360' AND register.status = 'Alumni' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaStudentTrail() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'trail' AND register.status = 'Student' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaStudentTrailInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'trail' AND register.status = 'Student' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaStudentCareerStarter() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'starter' AND register.status = 'Student' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaStudentCareerStarterInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'starter' AND register.status = 'Student' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaStudentCareerAdvanced() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'advanced' AND register.status = 'Student' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaStudentCareerAdvancedInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'advanced' AND register.status = 'Student' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaStudentAccess360() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'access360' AND register.status = 'Student' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaStudentAccess360Invite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'access360' AND register.status = 'Student' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaUnemployedTrail() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'trail' AND register.status = 'Unemployed' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaUnemployedTrailInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'trail' AND register.status = 'Unemployed' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaUnemployedCareerStarter() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'starter' AND register.status = 'Unemployed' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaUnemployedCareerStarterInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'starter' AND register.status = 'Unemployed' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaUnemployedCareerAdvance() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'advanced' AND register.status = 'Unemployed' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaUnemployedCareerAdvanceInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'advanced' AND register.status = 'Unemployed' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaUnemployedAccess360() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'access360' AND register.status = 'Unemployed' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaUnemployedAccess360Invite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'access360' AND register.status = 'Unemployed' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaCareerAdvanceTrail() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'trail' AND register.status = 'Career Advancement' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaCareerAdvanceTrailInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'trail' AND register.status = 'Career Advancement' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaAlumniCareerStarter() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'starter' AND register.status = 'Alumni' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaAlumniCareerStarterInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'starter' AND register.status = 'Alumni' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaAlumniCareerAdvance() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'advanced' AND register.status = 'Alumni' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaAlumniCareerAdvanceInvite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'advanced' AND register.status = 'Alumni' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaCareerAdvanceAccess360() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'access360' AND register.status = 'Career Advancement' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaAlumniAccess360() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'access360' AND register.status = 'Alumni' AND register.invite = '0' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function americaAlumniAccess360Invite() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, city.*, state.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON register.state = state.id LEFT JOIN city ON register.city = city.id WHERE register.country='2' AND register.program = 'access360' AND register.status = 'Alumni' AND register.invite = '1' AND register.payment_status='Completed' AND register.token=''");
        return $sql;
    }

    public function countRef() {
        $this->useTable = "verify_reference";
        $sql = $this->query("SELECT * FROM verify_reference");
        return count($sql);
    }

    public function countMember() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE payment_status='Completed'");
        return count($sql);
    }

    public function countStudent() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE status = 'Student'");
        return count($sql);
    }

    public function countUnemployee() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE status = 'Unemployed'");
        return count($sql);
    }

    public function countCareerAdvance() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE status = 'Career Advancement'");
        return count($sql);
    }

    public function countAdvanceRef() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM verify_reference WHERE reference_type = 'Advance'");
        return count($sql);
    }

    public function countStandardref() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM verify_reference WHERE reference_type = 'Standard'");
        return count($sql);
    }

    public function countAmount() {
        $this->useTable = "payment";
        $sql = $this->query("SELECT * FROM payment");
        foreach ($sql as $row) {
            $amount += $row['payment']['amount'];
        }
        return $amount;
    }

    public function countVerifyRef() {
        $this->useTable = "verify_reference";
        $sql = $this->query("SELECT * FROM verify_reference WHERE status='complete'");
        return count($sql);
    }

    public function schoolRegister() {
        $this->useTable = "school_registration";
        $sql = $this->query("SELECT * FROM school_registration");
        return $sql;
    }

    public function invitedSchool() {
        $this->useTable = "school_registration";
        $sql = $this->query("SELECT * FROM school_registration");
        return $sql;
    }

    public function studentDetail() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.* FROM register INNER JOIN country ON register.country = country.id");
        return $sql;
    }

    public function studentManualPaymentDetail() {
        $this->useTable = "manual_payment";
        $sql = $this->query("SELECT manual_payment.*, register.* FROM manual_payment INNER JOIN register ON manual_payment.student_id = register.id");
        return $sql;
    }

    public function sendSchoolInvite($data) {
        $this->useTable = "school_registration";
        @extract($data);
        $c_date = date('d-m-Y');
        $sql2 = $this->query("SELECT * FROM school_registration WHERE username='$update_username'");
        if (count($sql2) > 0) {
            return 0;
        } else {
            $sql1 = $this->query("SELECT * FROM school_registration WHERE email='$email'");
            foreach ($sql1 as $row) {
                $token = $row['school_registration']['token'];
            }
            $sql = $this->query("UPDATE school_registration SET invite = '1', username='$update_username', password='$row_password', invite_date='$c_date' WHERE email='$email'");
            $body = '<html>
                <body>
                Your Username is : <b>' . $update_username . '</b> and Password is : <b>' . $row_password . '</b>
                    <table style="width: 70%; margin: 0 auto; padding-top: 3em;">
                    <tr>
                    <th>Paste the code inside the <code style="font-size: 14px">&lt;body&gt;</code> <code style="font-size: 14px">&lt;!-- Paste Code Here --&gt;</code> <code style="font-size: 14px">&lt;/body&gt;</code> tag.</th>
                    </tr>
                    <table style="border: 1px solid #d2d6de; background-color: #eee;">
                    <tr>
                    <td><code style="font-size: 14px">&lt;!-- Student Registration through mycareerdashboard --&gt;</code></td>
                    </tr>
                    <tr>
                    <td><code style="font-size: 14px">&lt;div style="position: fixed; bottom: 0em;left:0.3em;z-index:500;"&gt;</code></td>
                    </tr>
                    <tr><td><code style="font-size: 14px">&lt;a href="https://mycareerdashboard.com/school.html?token=' . $token . '" target="_blank"&gt;</code></td></tr>
                    <tr><td><code style="font-size: 14px">&lt;button style="background: #254094;border: none;padding: 9px 20px 9px 20px;color:#fff;font-size: 16px;font-weight: bold;border-radius:4px 4px 0px 0px;"&gt;</code>Student Registration<code style="font-size: 14px">&lt;/button&gt;</code></td></tr>
                    <tr><td><code style="font-size: 14px">&lt;/a&gt;</code></td></tr>
                    <tr><td><code style="font-size: 14px">&lt;/div&gt;</code></td></tr>
                    <tr><td><code style="font-size: 14px">&lt;!-- End Student Registration Code/ --&gt;</code></td></tr>
                    </table>
                    <tr>
                    </tr>
                    </table>
                </body>
                <html>';
            $this->sendEmail1($email, $body);
            return 1;
        }
    }

    public function sendEmail1($to, $body) {
        $subject = "School Registration Details";
        $message = '<html>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: School Credentials<SchoolCredentials@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function deleteSchool($id) {
        $this->useTable = "school_registration";
        foreach ($id as $delete_id) {
            $sql = $this->query("DELETE FROM school_registration WHERE id='$delete_id'");
        }
    }

    public function totalYear() {
        $this->useTable = "school_registration";
        $sql = $this->query("Select min(date),max(date) from register");
        return $sql;
    }

    public function findChartData($max_val, $min_val, $month, $min_date) {
        $this->useTable = "payment";
        $sql['user'] = $this->query("SELECT count(id),year(date) as year FROM register WHERE payment_status ='Completed' AND year(date) BETWEEN '$min_val' AND '$max_val' GROUP BY year(date)");
        $sql['amount'] = $this->query("SELECT SUM(amount), SUBSTR(payment_date, 17, 5) as year FROM payment WHERE SUBSTR(payment_date, 17, 5) BETWEEN $min_val AND $max_val GROUP BY SUBSTR(payment_date, 17, 5)");
        return json_encode($sql);
    }

    public function totalTrialUser() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE program = 'trail' AND payment_status='Completed' AND token=''");
        return count($sql);
    }

    public function totalPaidUser() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE program = 'starter' OR program = 'advanced' OR program='access360' AND payment_status='Completed' AND token=''");
        return count($sql);
    }

    public function addSchoolAmount($data) {
        $this->useTable = "school_registration";
        @extract($data);
        $sql = $this->query("UPDATE school_registration SET paid_amount = '$paid_amount' WHERE id='$school_id'");
    }

    public function searchStudentList($data) {
        $this->useTable = "manual_payment";
        @extract($data);
        $from_date = date('d-m-Y', strtotime($from_date));
        $to_date = date('d-m-Y', strtotime($to_date));
        $sql = $this->query("SELECT manual_payment.*, register.* FROM manual_payment INNER JOIN register ON manual_payment.student_id = register.id WHERE manual_payment.date BETWEEN '$from_date' AND '$to_date'");
        return $sql;
    }

    public function totalCurrentMember() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() AND payment_status='Completed' AND token=''");
        return count($sql);
    }

    public function totalBeforeMember() {
        $this->useTable = "register";
        $b_date = date('Y-m-d', strtotime('-30 days'));
        $sql = $this->query("SELECT * FROM register WHERE date BETWEEN '$b_date' - INTERVAL 30 DAY AND '$b_date' AND payment_status='Completed' AND token=''");
        return count($sql);
    }

    public function totalCurrentPaidUser() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() AND program = 'starter' OR program = 'advanced' OR program='access360' AND payment_status='Completed' AND token=''");
        return count($sql);
    }

    public function totalBeforePaidUser() {
        $this->useTable = "register";
        $b_date = date('Y-m-d', strtotime('-30 days'));
        $sql = $this->query("SELECT * FROM register WHERE date BETWEEN '$b_date' - INTERVAL 30 DAY AND '$b_date' AND (program = 'starter' OR program = 'advanced' OR program='access360') AND payment_status='Completed' AND token=''");
        return count($sql);
    }

    public function totalCurrentTrialUser() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() AND program = 'trail' AND payment_status='Completed' AND token=''");
        return count($sql);
    }

    public function totalBeforeTrialUser() {
        $this->useTable = "register";
        $b_date = date('Y-m-d', strtotime('-30 days'));
        $sql = $this->query("SELECT * FROM register WHERE date BETWEEN '$b_date' - INTERVAL 30 DAY AND '$b_date' AND program = 'trail' AND payment_status='Completed' AND token=''");
        return count($sql);
    }

    public function totalCurrentVerifyRef() {
        $this->useTable = "verify_reference";
        $sql = $this->query("SELECT * FROM verify_reference WHERE submit_date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() AND status='complete'");
        return count($sql);
    }

    public function totalBeforeVerifyRef() {
        $this->useTable = "verify_reference";
        $b_date = date('Y-m-d', strtotime('-30 days'));
        $sql = $this->query("SELECT * FROM verify_reference WHERE submit_date BETWEEN '$b_date' - INTERVAL 30 DAY AND '$b_date' AND status='complete'");
        return count($sql);
    }

    public function saveSEO($data) {
        $this->useTable = "seo_data";
        @extract($data);
        $query = $this->query("SELECT * FROM seo_data WHERE page_name='$page_name'");
        if (count($query) > 0) {
            $sql1 = $this->query("UPDATE seo_data SET title='$title', keyword='$keyword', description='$description' WHERE page_name='$page_name'");
            return "Data Updated";
        } else {
            $sql = $this->query("INSERT INTO seo_data SET title='$title', keyword='$keyword', description='$description', page_name='$page_name'");
            return "Data Inserted";
        }
    }

    public function changeSEOData($page_name) {
        $this->useTable = 'seo_data';
        $sql = $this->query("SELECT * FROM seo_data WHERE page_name='$page_name'");
        return json_encode($sql);
    }

    public function addTax($data) {
        $this->useTable = "tax_calculation";
        @extract($data);
        $sql = $this->query("SELECT * FROM tax_calculation WHERE (country='$country' AND state='$state') AND (country='$country' AND province='$province')");
        if (count($sql) > 0) {
            $this->query("UPDATE tax_calculation SET tax_amount='$tax_amount' WHERE country='$country' AND state='$state'");
            $this->query("UPDATE tax_calculation SET tax_amount='$tax_amount' WHERE country='$country' AND province='$province'");
            return "Successfully Updated";
        } else {
            $this->query("INSERT INTO tax_calculation SET country='$country', state='$state', province='$province', tax_amount='$tax_amount'");
            return "Successfully Inserted";
        }
    }

    public function viewTax() {
        $this->useTable = "tax_calculation";
        $sql = $this->query("SELECT * FROM tax_calculation");
        return $sql;
    }

    public function deleteTaxData($id) {
        $this->useTable = "tax_calculation";
        foreach ($id as $delete_id) {
            $this->query("DELETE FROM tax_calculation WHERE id='$delete_id'");
        }
    }

    public function viewTaxId($id) {
        $this->useTable = "tax_calculation";
        $sql = $this->query("SELECT * FROM tax_calculation WHERE id = '$id'");
        return $sql;
    }

    public function updateTax($data) {
        $this->useTable = "tax_calculation";
        @extract($data);
        $this->query("UPDATE tax_calculation SET tax_amount='$tax_amount' WHERE id='$tax_id'");
        return "Successfully Updated";
    }

    public function getBillingInfo() {
        $this->useTable = "school_bill_info";
        $sql = $this->query("SELECT * FROM school_bill_info");
        return $sql;
    }

    public function viewAmbassadorApply() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE approve_ambassador!=''");
        return $sql;
    }

    public function approve_data($id) {
        $this->useTable = "register";
        $this->query("UPDATE register SET approve_ambassador='approved', program='access360' WHERE id='$id'");
    }

    public function reject_data($id) {
        $this->useTable = "register";
        $this->query("UPDATE register SET approve_ambassador='reject' WHERE id='$id'");
    }

    public function viewAmbassadorAppied() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE approve_ambassador = 'approved'");
        return $sql;
    }

    public function viewreferal() {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE referal_code != ''");
        return $sql;
    }

    public function setReferalAmount($data) {
        $this->useTable = "register";
        @extract($data);
        $this->query("UPDATE register SET referal_amount = (referal_amount + '$amount') WHERE id='$user_id'");
    }

    public function corporate_detail() {
        $this->useTable = "recruit";
        $sql = $this->query("SELECT * FROM recruit");
        return $sql;
    }

}

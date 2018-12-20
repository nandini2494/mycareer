<?php

App::uses('Model', 'Model');

class DashboardsModel extends Model {

    public function userData($user_data) {
        $this->useTable = 'register';
        $id = $user_data['id'];
        $sql = "SELECT * FROM register WHERE id = '$id'";
        $query = $this->query($sql);
        return $query;
    }

    public function studyList($user) {
        $this->useTable = 'register';
        $id = $user['id'];
        $sql = $this->query("SELECT * FROM register WHERE id = '$id'");
        foreach ($sql as $row) {
            $study_type = $row['register']['study_type'];
            if ($row['register']['country'] == '1') {
                $state = $row['register']['provence'];
            }
            if ($row['register']['country'] == '2') {
                $state = $row['register']['state'];
            }
        }
        if ($study_type == 'University') {
            $sql1 = $this->query("SELECT * FROM university WHERE state_id='$state'");
        }
        if ($study_type == 'College') {
            $sql1 = $this->query("SELECT * FROM college WHERE state_id='$state'");
        }
        return $sql1;
    }

    public function socialMedia($user_data) {
        $this->useTable = 'social_network';
        $id = $user_data['id'];
        $sql = $this->query("SELECT * FROM social_network WHERE user_id = '$id'");
        return $sql;
    }

    public function userValue($user_id) {
        $this->useTable = 'verify_reference';
        $id = $user_id['id'];
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && accept='1'";
        $query = $this->query($sql);
        return $query;
    }

    public function updateData($update_data) {
        $this->useTable = 'register';
        @extract($update_data);
        /* if(!empty($media_data)) {
          $this->query("INSERT INTO social_network SET network_name='$media_data', network_url='$media_url', user_id = '$user_id'");
          return 1;
          } else {
          return 2;
          } */

        if (!empty($_FILES['profile_pic']['name'])) {
            $image = $_FILES['profile_pic']['name'];
            $target = "img/" . $image;
            move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target);
        } else {
            $target = $user_pic;
        }
        $sql1 = $this->query("SELECT * FROM register WHERE id='$user_id'");
        foreach ($sql1 as $query) {
            $email_id = $query['register']['email'];
        }
        if ($email_id == $email) {
            $sql = $this->query("UPDATE register SET first_name='$first_name',last_name='$last_name',email='$email',dob='$dob',phone='$phone',status=1,profile_pic='$target',study_type='$study_type',school='$school' WHERE id='$user_id'");
            $media = $this->query("SELECT * FROM social_network WHERE user_id = '$user_id' AND network_name = '$media_data'");
            if (count($media) > 0) {
                $this->query("UPDATE social_network SET network_name='$media_data', network_url='$media_url' WHERE user_id = '$user_id' AND network_name = '$media_data'");
            } else {
                if (!empty($media_data)) {
                    $this->query("INSERT INTO social_network SET network_name='$media_data', network_url='$media_url', user_id = '$user_id'");
                }
            }
            return TRUE;
        } else {
            $sql3 = $this->query("SELECT * FROM register WHERE email = '$email'");
            if (count($sql3) > 0) {
                return 0;
            } else {
                $sql2 = $this->query("UPDATE register SET first_name='$first_name',last_name='$last_name',email='$email',dob='$dob',phone='$phone',status=1,profile_pic='$target' WHERE id='$user_id'");
                $media = $this->query("SELECT * FROM social_network WHERE user_id = '$user_id' AND network_name = '$media_data'");
                if (count($media) > 0) {
                    $this->query("UPDATE social_network SET network_name='$media_data', network_url='$media_url' WHERE user_id = '$user_id' AND network_name = '$media_data'");
                } else {
                    if (!empty($media_data)) {
                        $this->query("INSERT INTO social_network SET network_name='$media_data', network_url='$media_url', user_id = '$user_id'");
                    }
                }
                return TRUE;
            }
        }
    }

    public function saveSign($img, $user_id) {
        $this->useTable = 'register';
        $id = $user_id['id'];
        $sql = "UPDATE register SET sign='$img' WHERE id='$id'";
        $query = $this->query($sql);
        return TRUE;
    }

    public function work_reference($reference, $user_id) {
        $id = $user_id['id'];
        $this->useTable = 'verify_reference';
        @extract($reference);
        $name1 = "";
        if (isset($_POST['firstname'])) {
            $name1 .= $_POST['firstname'];
        }
        if (isset($_POST['middlename'])) {
            $name1 .= ' ' . $_POST['middlename'];
        }
        if (isset($_POST['lastname'])) {
            $name1 .= ' ' . $_POST['lastname'];
        }
        if (!empty($_FILES['upload_certificate']['name'])) {
            $target = "img/" . $_FILES['upload_certificate']['name'];
            move_uploaded_file($_FILES['upload_certificate']['tmp_name'], $target);
        } else {
            $target = '';
        }
        $sql = "INSERT INTO verify_reference SET user_id='$id',reference_name='$ref_name',reference_type='$ref_type',business_name='$business_name',employee_id='$employee_id',"
                . "business_address='$bussiness_address',business_city='$city',province='$province',postal_code='$postal_code',"
                . "website='$website',company_email='$company_email', bussiness_phone='$business_no',business_ext='$business_ext',"
                . "contact_person='$contact_person',person_name='$person_name',person_email='$email',"
                . "personal_name='$name1',title='$title',person_address='$person_address',person_city='$person_city',"
                . "person_province='$person_province',student_id='$student_id',institute_type='$type',"
                . "contact_number='$person_contact',ext='$extension',department='$dept',campus='$school_campus',"
                . "certificate_recieve='$certificates',degree_name='$degree_name',major='$major',honors='$honors',"
                . "known_month='$month',known_year='$year',known_person='$person_know',send_info='$send_info',"
                . "start_position='$start_position',end_position='$last_position',job_type='$job_type',"
                . "join_date='$join_date',release_date='$release_date',still_work='$still_working',"
                . "complete_hrs='$complete_hrs',criminal_check='$criminal_check',upload_certificate='$target',"
                . "duties='$duties',role='$role',submit_date=NOW()";
        $this->query($sql);
        $sql2 = "SELECT * FROM verify_reference ORDER BY id DESC LIMIT 1";
        $query = $this->query($sql2);
        foreach ($query as $val) {
            $data_id = $val['verify_reference']['id'];
        }
        return $data_id;

        /* for ($i = 0; $i < count($ref_name); $i++) {
          if (isset($_POST['ref_name'][$i])) {
          $ref_name_tmp = $ref_name[$i];
          } else {
          $ref_name_tmp = '';
          }
          if (isset($_POST['business_name'][$i])) {
          $business_name_tmp = $business_name[$i];
          } else {
          $business_name_tmp = '';
          }
          if (isset($_POST['bussiness_address'][$i])) {
          $bussiness_address_tmp = $bussiness_address[$i];
          } else {
          $bussiness_address_tmp = '';
          }
          if (isset($_POST['city'][$i])) {
          $city_tmp = $city[$i];
          } else {
          $city_tmp = '';
          }
          if (isset($_POST['company_email'][$i])) {
          $company_email_tmp = $company_email[$i];
          } else {
          $company_email_tmp = '';
          }
          if (isset($_POST['province'][$i])) {
          $province_tmp = $province[$i];
          } else {
          $postal_code_tmp = '';
          }
          if (isset($_POST['postal_code_tmp'][$i])) {
          $postal_code_tmp = $postal_code[$i];
          } else {
          $postal_code_tmp = '';
          }
          if (isset($_POST['website'][$i])) {
          $website_tmp = $website[$i];
          } else {
          $website_tmp = '';
          }
          if (isset($_POST['business_no'][$i])) {
          $business_no_tmp = $business_no[$i];
          } else {
          $business_no_tmp = '';
          }
          if (isset($_POST['business_ext'][$i])) {
          $business_ext_tmp = $business_ext[$i];
          } else {
          $business_ext_tmp = '';
          }
          if (isset($_POST['contact_person'][$i])) {
          $contact_person_tmp = $contact_person[$i];
          } else {
          $contact_person_tmp = '';
          }
          if (isset($_POST['person_name'][$i])) {
          $person_name_tmp = $person_name[$i];
          } else {
          $person_name_tmp = '';
          }
          if (isset($_POST['title'][$i])) {
          $title_tmp = $title[$i];
          } else {
          $title_tmp = '';
          }
          if (isset($_POST['person_contact'][$i])) {
          $person_contact_tmp = $person_contact[$i];
          } else {
          $person_contact_tmp = '';
          }
          if (isset($_POST['extension'][$i])) {
          $extension_tmp = $extension[$i];
          } else {
          $extension_tmp = '';
          }
          if (isset($_POST['month'][$i])) {
          $month_tmp = $month[$i];
          } else {
          $month_tmp = '';
          }
          if (isset($_POST['year'][$i])) {
          $year_tmp = $year[$i];
          } else {
          $year_tmp = '';
          }
          if (isset($_POST['send_info'][$i])) {
          $send_info_tmp = $send_info[$i];
          } else {
          $send_info_tmp = '';
          }
          if (isset($_POST['start_position'][$i])) {
          $start_position_tmp = $start_position[$i];
          } else {
          $start_position_tmp = '';
          }
          if (isset($_POST['last_position'][$i])) {
          $last_position_tmp = $last_position[$i];
          } else {
          $last_position_tmp = '';
          }
          if (isset($_POST['job_type'][$i])) {
          $job_type_tmp = $job_type[$i];
          } else {
          $job_type_tmp = '';
          }
          if (isset($_POST['join_date'][$i])) {
          $join_date_tmp = $join_date[$i];
          } else {
          $join_date_tmp = '';
          }
          if (isset($_POST['release_date'][$i])) {
          $release_date_tmp = $release_date[$i];
          } else {
          $release_date_tmp = '';
          }
          if (isset($_POST['still_working'][$i])) {
          $still_working_tmp = $still_working[$i];
          } else {
          $still_working_tmp = '';
          }
          if (isset($_POST['complete_hrs'][$i])) {
          $complete_hrs_tmp = $complete_hrs[$i];
          } else {
          $complete_hrs_tmp = '';
          }
          if (isset($_POST['duties'][$i])) {
          $duties_tmp = $duties[$i];
          } else {
          $duties_tmp = '';
          }
          if (isset($_POST['ref_type'][$i])) {
          $ref_type_tmp = $ref_type[$i];
          } else {
          $ref_type_tmp = '';
          }
          if (isset($_POST['person_know'][$i])) {
          $person_know_tmp = $person_know[$i];
          } else {
          $person_know_tmp = '';
          }
          if (isset($_POST['email'][$i])) {
          $email_tmp = $email[$i];
          } else {
          $email_tmp = '';
          }
          if (isset($_POST['role'][$i])) {
          $role_tmp = $role[$i];
          } else {
          $role_tmp = '';
          }
          if (isset($_POST['criminal_check'][$i])) {
          $criminal_check_tmp = $criminal_check[$i];
          } else {
          $criminal_check_tmp = '';
          }
          if (isset($_POST['certificates'][$i])) {
          $certificates_tmp = $certificates[$i];
          } else {
          $certificates_tmp = '';
          }
          if (!empty($_FILES['upload_certificate']['name'][$i])) {
          $target = "img/" . $_FILES['upload_certificate']['name'][$i];
          move_uploaded_file($_FILES['upload_certificate']['tmp_name'][$i], $target);
          } else {
          $target = '';
          }
          $name1 = "";
          if (isset($_POST['firstname'][$i])) {
          $name1 .= $_POST['firstname'][$i];
          }
          if (isset($_POST['middlename'][$i])) {
          $name1 .= ' ' . $_POST['middlename'][$i];
          }
          if (isset($_POST['lastname'][$i])) {
          $name1 .= ' ' . $_POST['lastname'][$i];
          }
          if (isset($_POST['person_address'][$i])) {
          $person_address_tmp = $person_address[$i];
          } else {
          $person_address_tmp = '';
          }
          if (isset($_POST['person_city'][$i])) {
          $person_city_tmp = $person_city[$i];
          } else {
          $person_city_tmp = '';
          }
          if (isset($_POST['person_province'][$i])) {
          $person_province_tmp = $person_province[$i];
          } else {
          $person_province_tmp = '';
          }
          if (isset($_POST['student_id'][$i])) {
          $student_id_tmp = $student_id[$i];
          } else {
          $student_id_tmp = '';
          }
          if (isset($_POST['type'][$i])) {
          $type_tmp = $type[$i];
          } else {
          $type_tmp = '';
          }
          if (isset($_POST['school_campus'][$i])) {
          $school_campus_tmp = $school_campus[$i];
          } else {
          $school_campus_tmp = '';
          }
          if (isset($_POST['dept'][$i])) {
          $dept_tmp = $dept[$i];
          } else {
          $dept_tmp = '';
          }
          if (isset($_POST['degree_name'][$i])) {
          $degree_name_tmp = $degree_name[$i];
          } else {
          $degree_name_tmp = '';
          }
          if (isset($_POST['major'][$i])) {
          $major_tmp = $major[$i];
          } else {
          $major_tmp = '';
          }
          if (isset($_POST['honors'][$i])) {
          $honors_tmp = $honors[$i];
          } else {
          $honors_tmp = '';
          }
          if (isset($_POST['employee_id'][$i])) {
          $employee_id_tmp = $employee_id[$i];
          } else {
          $employee_id_tmp = '';
          }
          $sql = "INSERT INTO verify_reference SET user_id='$id',reference_name='$ref_name_tmp',reference_type='$ref_type_tmp',business_name='$business_name_tmp',employee_id='$employee_id_tmp',"
          . "business_address='$bussiness_address_tmp',business_city='$city_tmp',province='$province_tmp',postal_code='$postal_code_tmp',"
          . "website='$website_tmp',company_email='$company_email_tmp', bussiness_phone='$business_no_tmp',business_ext='$business_ext_tmp',"
          . "contact_person='$contact_person_tmp',person_name='$person_name_tmp',person_email='$email_tmp',"
          . "personal_name='$name1',title='$title_tmp',person_address='$person_address_tmp',person_city='$person_city_tmp',"
          . "person_province='$person_province_tmp',student_id='$student_id_tmp',institute_type='$type_tmp',"
          . "contact_number='$person_contact_tmp',ext='$extension_tmp',department='$dept_tmp',campus='$school_campus_tmp',"
          . "certificate_recieve='$certificates_tmp',degree_name='$degree_name_tmp',major='$major_tmp',honors='$honors_tmp',"
          . "known_month='$month_tmp',known_year='$year_tmp',known_person='$person_know_tmp',send_info='$send_info_tmp',"
          . "start_position='$start_position_tmp',end_position='$last_position_tmp',job_type='$job_type_tmp',"
          . "join_date='$join_date_tmp',release_date='$release_date_tmp',still_work='$still_working_tmp',"
          . "complete_hrs='$complete_hrs_tmp',criminal_check='$criminal_check_tmp',upload_certificate='$target',"
          . "duties='$duties_tmp',role='$role_tmp',submit_date=NOW()";
          $this->query($sql);
          $counter++;
          }
          $sql1 = "UPDATE register SET authorize_form='1' WHERE id='$id'";
          $this->query($sql1);
          $sql2 = "SELECT * FROM verify_reference ORDER BY id DESC LIMIT " . $counter;
          $query = $this->query($sql2);
          $data_id = array();
          foreach ($query as $val) {
          array_push($data_id, $val['verify_reference']['id']);
          }
          return json_encode($data_id); */
    }

    public function coop_verification($reference, $user) {
        $id = $user['id'];
        $this->useTable = 'verify_reference';
        @extract($reference);
        $sql = $this->query("INSERT INTO verify_reference SET user_id='$id', reference_name='$ref_name', student_session='$student_session', session_year='$complete_year',"
                . "student_name='$student_name', employee_id='$id_no', company_email='$company_email', business_name='$organization', title='$job_title', submit_date=NOW()");
        $sql2 = "SELECT * FROM verify_reference ORDER BY id DESC LIMIT 1";
        $query = $this->query($sql2);
        foreach ($query as $val) {
            $data_id = $val['verify_reference']['id'];
        }
        return $data_id;
    }

    public function reciept_data($url) {
        $this->useTable = "verify_reference";
        $query = array();
        for ($i = 0; $i < sizeof($url); $i++) {
            $url_tmp = $url[$i];
            $sql = "SELECT reference_name,reference_type,id FROM verify_reference WHERE id='$url_tmp'";
            array_push($query, $this->query($sql));
        }
        return $query;
    }

    public function industrySignUp($username, $password, $img, $url_tmp, $ref_id) {
        $this->useTable = "industry_admin";
        $date = date('d-M-Y');
        $sql = $this->query("SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id='$url_tmp'");
        foreach ($sql as $query) {
            if ($query['verify_reference']['reference_name'] == 'workplace_verification' || $query['verify_reference']['reference_name'] == 'education_verification' || $query['verify_reference']['reference_name'] == 'volunteer_verification') {
                $email = $query['verify_reference']['company_email'];
                $name = $query['verify_reference']['person_name'];
                $personal_name = $query['register']['first_name'] . " " . $query['register']['last_name'];
                $body = '<html>
    <body>
        <table style="background-color:#eee; padding: 4%;">
            <tr>
                <td><img src="https://mycareerdashboard.com/img/co-logo.png" style="max-width: 200px; width: 100%;"></td>
            </tr>
            <tr>
                <td>
                    <p>Reference Verification</p><br/><br/>
                    <p>Dear ' . $name . '</p><br/>
                    <p style="line-height: 24px;">I ' . $personal_name . ' have listed you as the previous employer.This signed form authorizes the release of information regarding my employment with you. Any other information you can provide that would help in the consideration of employment would also be appreciated.I would be very pleased if you could take the time to fill out a brief questionnaire that would help me securely store your information. Please login to <b><a href="https://mycareerdashboard.com/industry_index.html">https://mycareerdashboard.com/industry_index.html</a></b> with username <b>' . $username . '</b>, Reference Id <b>' . $ref_id . '</b> and password <b>' . $password . '</b></p><br/>
                    <p>Below is a list of question that will be on the questionnaire</p><br/>
                    <p>Attendance/Punctuality</p><br/>
                    <p>Quality of work</p><br/>
                    <p>Ability to work well with others</p><br/>
                    <p>Reason for leaving</p><br/>
                    <p>Would you re-hire this applicant?</p><br/>
                    <p>Salary</p><br/>
                    <p>Team Player</p><br/>
                    <p>Unique Skills</p><br/>
                    <p>Strengths</p><br/>
                    <p>Weaknesses</p><br/>
                    <p>Attendance Record</p><br/>
                    <p>If I was reprimanded</p><br/>
                    <p>Additional Comments</p><br/><br/>
                    <p>Title</p><br/><br/>
                    <p>Signature</p>
                    <p><img src="https://mycareerdashboard.com/' . $img . '" style="max-width: 250px; width: 100%;"></p><br/>
                    <p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $date . '</p><br/>
                </td>
            </tr>
        </table>
    </body>
</html>';
            }
            if ($query['verify_reference']['reference_name'] == 'personnel_verification') {
                $email = $query['verify_reference']['company_email'];
                $name = $query['verify_reference']['business_name'];
                $personal_name = $query['register']['first_name'] . " " . $query['register']['last_name'];
                $body = '<html>
    <body>
        <table style="background-color:#eee; padding: 4%;">
            <tr>
                <td><img src="https://mycareerdashboard.com/img/co-logo.png" style="max-width: 200px; width: 100%;"></td>
            </tr>
            <tr>
                <td>
                    <p>Reference Verification</p><br/><br/>
                    <p>Dear ' . $name . '</p><br/>
                    <p style="line-height: 24px;">I ' . $personal_name . ' have listed you as the previous employer.This signed form authorizes the release of information regarding my employment with you. Any other information you can provide that would help in the consideration of employment would also be appreciated.I would be very pleased if you could take the time to fill out a brief questionnaire that would help me securely store your information. Please login to <b><a href="https://mycareerdashboard.com/industry_index.html">https://mycareerdashboard.com/industry_index.html</a></b> with username <b>' . $username . '</b>, Reference Id <b>' . $ref_id . '</b> and password <b>' . $password . '</b></p><br/>
                    <p>Below is a list of question that will be on the questionnaire</p><br/>
                    <p>Attendance/Punctuality</p><br/>
                    <p>Quality of work</p><br/>
                    <p>Ability to work well with others</p><br/>
                    <p>Reason for leaving</p><br/>
                    <p>Would you re-hire this applicant?</p><br/>
                    <p>Salary</p><br/>
                    <p>Team Player</p><br/>
                    <p>Unique Skills</p><br/>
                    <p>Strengths</p><br/>
                    <p>Weaknesses</p><br/>
                    <p>Attendance Record</p><br/>
                    <p>If I was reprimanded</p><br/>
                    <p>Additional Comments</p><br/><br/>
                    <p>Title</p><br/><br/>
                    <p>Signature</p>
                    <p><img src="https://mycareerdashboard.com/' . $img . '" style="max-width: 250px; width: 100%;"></p><br/>
                    <p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $date . '</p><br/>
                </td>
            </tr>
        </table>
    </body>
</html>';
            }
            if ($query['verify_reference']['reference_name'] == 'coop_verification') {
                $email = $query['verify_reference']['company_email'];
                $name = $query['verify_reference']['business_name'];
                $personal_name = $query['register']['first_name'] . " " . $query['register']['last_name'];
                $body = '<html>
    <body>
        <table style="background-color:#eee; padding: 4%;">
            <tr>
                <td><img src="https://mycareerdashboard.com/img/co-logo.png" style="max-width: 200px; width: 100%;"></td>
            </tr>
            <tr>
                <td>
                    <p>Reference Verification</p><br/><br/>
                    <p>Dear ' . $name . '</p><br/>
                    <p style="line-height: 24px;">I ' . $personal_name . ' had the pleasure of working with your company as a CO-OP student. I am providing you permission regarding my Co-Op. I would be very grateful if you could the time to fill the attached form out for my CO-OP. Please login to <b><a href="https://mycareerdashboard.com/industry_index.html">https://mycareerdashboard.com/industry_index.html</a></b> with username <b>' . $username . '</b>, Reference Id <b>' . $ref_id . '</b> and password <b>' . $password . '</b></p><br/>
                    <br/><br/>
                    <p>Signature</p>
                    <p><img src="https://mycareerdashboard.com/' . $img . '" style="max-width: 250px; width: 100%;"></p><br/>
                    <p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $date . '</p><br/>
                </td>
            </tr>
        </table>
    </body>
</html>';
            }
            $sql1 = $this->query("UPDATE verify_reference SET username='$username', password='$password', sign='$img', reference_id='$ref_id' WHERE id='$url_tmp'");

            $this->sendEmail3($email, $body);
        }
    }

    public function legalDocsSend($name, $email, $img, $mcd) {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE crv_code='$mcd'");
        foreach ($sql as $row) {
            $personal_name = ucfirst($row['register']['first_name']) . " " . ucfirst($row['register']['last_name']);
        }
        $date = date('d-M-Y');
        $body = '<html>
    <body>
        <table style="background-color:#eee; padding: 4%;">
            <tr>
                <td><img src="https://mycareerdashboard.com/img/co-logo.png" style="max-width: 200px; width: 100%;"></td>
            </tr>
            <tr>
                <td>
                    <p>Reference Verification</p><br/><br/>
                    <p>Dear ' . $name . '</p><br/>
                    <p style="line-height: 24px;">I ' . $personal_name . ' have listed you as the previous employer.This signed form authorizes the release of information regarding my employment with you. Any other information you can provide that would help in the consideration of employment would also be appreciated. I would be very pleased if you could take the time to fill out a brief questionnaire that would help me securely store your information. I will provide a user name and password that allows you access to my career dashboard.</p><br/>
                    <p>Below is a list of question that will be on the questionnaire</p><br/>
                    <p>Attendance/Punctuality</p><br/>
                    <p>Quality of work</p><br/>
                    <p>Ability to work well with others</p><br/>
                    <p>Reason for leaving</p><br/>
                    <p>Would you re-hire this applicant?</p><br/>
                    <p>Salary</p><br/>
                    <p>Team Player</p><br/>
                    <p>Unique Skills</p><br/>
                    <p>Strengths</p><br/>
                    <p>Weaknesses</p><br/>
                    <p>Attendance Record</p><br/>
                    <p>If I was reprimanded</p><br/>
                    <p>Additional Comments</p><br/><br/>
                    <p>Title</p><br/><br/>
                    <p>Signature</p>
                    <p><img src="https://mycareerdashboard.com/' . $img . '" style="max-width: 250px; width: 100%;"></p><br/>
                    <p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $date . '</p><br/>
                </td>
            </tr>
        </table>
    </body>
</html>';
        $this->sendEmail5($email, $body);
        $data = array();
        $data['img'] = $img;
        $data['p_name'] = $personal_name;
        return json_encode($data);
    }

    public function sendEmail5($to, $body) {
        $subject = "Legal Documents";
        $message = '<html><head><title>Document Details</title></head>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Legal Documents of My career Dashboard<noreply@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function viewIndustryData($id) {
        $this->useTable = "industry_admin";
        $sql = $this->query("SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id='$id'");
        return $sql;
    }

    public function sendEmail3($to, $body) {
        $subject = "Industry Dashboard Credentials";
        $message = '<html><head><title>Signup Details</title></head>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Invite<Invite@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function processUser($user_id) {
        $this->useTable = 'verify_reference';
        $id = $user_id['id'];
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && status = 'pending'";
        $query = $this->query($sql);
        return $query;
    }

    public function processView($id) {
        $this->useTable = 'verify_reference';
        $sql['verify'] = $this->query("SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id='$id'");
        return $sql;
    }

    public function complete_count($user) {
        $this->useTable = 'verify_reference';
        $id = $user['id'];
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && status = 'complete'";
        $query = $this->query($sql);
        $count = count($query);
        return $count;
    }

    public function new_count($user) {
        $this->useTable = 'verify_reference';
        $id = $user['id'];
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && status = 'new' && (accept='0' || accept='')";
        $query = $this->query($sql);
        $count = count($query);
        return $count;
    }

    public function process_count($user) {
        $this->useTable = 'verify_reference';
        $id = $user['id'];
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && status = 'pending'";
        $query = $this->query($sql);
        $count = count($query);
        return $count;
    }

    public function completeUser($user) {
        $this->useTable = 'verify_reference';
        $id = $user['id'];
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && status = 'complete'";
        $query = $this->query($sql);
        return $query;
    }

    public function completeView($id) {
        $this->useTable = 'verify_reference';
        $sql['verify'] = $this->query("SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id='$id'");
        return $sql;
    }

    public function newUser($user) {
        $this->useTable = 'verify_reference';
        $id = $user['id'];
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && status = 'new' && (accept='0' || accept='')";
        $query = $this->query($sql);
        return $query;
    }

    public function newView($id) {
        $this->useTable = 'verify_reference';
        $sql['verify'] = $this->query("SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id='$id'");
        return $sql;
    }

    public function addJob($data, $user) {
        $this->useTable = 'job_application';
        @extract($data);
        $user_id = $user['id'];
        $position_tmp = implode(',', array_filter($_POST['position']));
        $note = mysql_escape_string($note);
        $sql = "INSERT INTO job_application SET user_id='$user_id',app_info='$app_info',app_source='$app_source',app_name='$app_name',status='$status',"
                . "submit_date='$date_sub',due_date='$due_date',remindar='$remindar',remindar_date='$date_value',"
                . "resume_type='$resume_type',website_address='$web_address',website_password='$web_password',username='$username',"
                . "company_name='$company_name',city='$city_job',position='$position_tmp',contact_name='$contact_name',"
                . "contact_email='$email',telephone='$telephone',follow_reminder='$follow_reminder',follow_date='$date_follow_name',notes='$notes'";
        $this->query($sql);
        return "Form Submitted Successfully";
    }

    public function addSchool($data, $user) {
        $this->useTable = 'school_application';
        @extract($data);
        $user_id = $user['id'];
        $note = mysql_escape_string($note);
        $sql = "INSERT INTO school_application SET user_id='$user_id',name='$name',status='$status',due_date='$due_date',"
                . "due_reminder='$due_reminder',reminder_date='$reminder_date',school_name='$school_info',city='$city',"
                . "province='$province',location='$location',transcription='$transcription',fees='$fees',"
                . "high_school_record='$school_record',university_record='$university_record',letter_ref='$ref_letter',"
                . "test_score='$test_score',personal_doc='$submit_personal',notes='$note'";
        $this->query($sql);
    }

    public function uploadDoc($data, $user) {
        $this->useTable = "upload_document";
        @extract($data);
        $id = $user['id'];
        $doc_desc = mysql_escape_string($doc_desc);
        if (!empty($_FILES['job_doc']['name'])) {
            $target1 = $_FILES['job_doc']['name'];
            move_uploaded_file($_FILES['job_doc']['tmp_name'], "img/" . $_FILES['job_doc']['name']);
        }
        $sql = "INSERT INTO upload_document SET user_id='$id',doc_name='$doc_name',date='$date',doc_description='$doc_desc',form_name='$form_name',upload_doc='$target1'";
        $this->query($sql);
    }

    public function updateUploadDoc($data) {
        $this->useTable = "upload_document";
        @extract($data);
        $doc_desc = mysql_escape_string($doc_desc);
        if (!empty($_FILES['job_doc']['name'])) {
            $target1 = $_FILES['job_doc']['name'];
            move_uploaded_file($_FILES['job_doc']['tmp_name'], "img/" . $_FILES['job_doc']['name']);
        } else {
            $target1 = $school_doc_value;
        }
        $sql = $this->query("UPDATE upload_document SET doc_name='$doc_name',date='$date',doc_description='$doc_desc',form_name='$form_name',upload_doc='$target1' WHERE id = '$school_doc_id_name'");
    }

    public function jobView($user) {
        $this->useTable = "job_application";
        $id = $user['id'];
        $sql = "SELECT * FROM job_application WHERE user_id = '$id'";
        $query = $this->query($sql);
        return $query;
    }

    public function jobUpcoming($user) {
        $this->useTable = "job_application";
        $id = $user['id'];
        $sql = "SELECT * FROM job_application WHERE user_id = '$id' && due_date >= CURDATE()";
        $query = $this->query($sql);
        return $query;
    }

    public function schoolView($user) {
        $this->useTable = "school_application";
        $id = $user['id'];
        $sql = "SELECT * FROM school_application WHERE user_id = '$id'";
        $query = $this->query($sql);
        return $query;
    }

    public function schoolUpcoming($user) {
        $this->useTable = "school_application";
        $id = $user['id'];
        $sql = "SELECT * FROM school_application WHERE user_id = '$id' && due_date >= CURDATE()";
        $query = $this->query($sql);
        return $query;
    }

    public function jobdocView($user) {
        $this->useTable = "upload_document";
        $id = $user['id'];
        $sql = "SELECT * FROM upload_document WHERE form_name='job_upload_doc' && user_id = '$id' ORDER BY id DESC";
        $query = $this->query($sql);
        return $query;
    }

    public function schooldocView($user) {
        $this->useTable = "upload_document";
        $id = $user['id'];
        $sql = "SELECT * FROM upload_document WHERE form_name='school_upload_doc' && user_id = '$id' ORDER BY id DESC";
        $query = $this->query($sql);
        return $query;
    }

    public function uploadResume($data, $user) {
        $this->useTable = "upload_resume";
        $user_id = $user['id'];
        @extract($data);
        $current_date = date('Y-m-d');
        for ($i = 0; $i < $resume_number; $i++) {
            if (!empty($_FILES['upload_resume_data']['name'][$i])) {
                move_uploaded_file($_FILES['upload_resume_data']['tmp_name'][$i], "img/" . $_FILES['upload_resume_data']['name'][$i]);
            }
        }
        $target = implode(",", array_filter($_FILES['upload_resume_data']['name']));
        $sql = "INSERT INTO upload_resume SET user_id='$user_id',complete_date='$current_date',resume_number='$resume_number',resume_name='$resume_name',upload='$target',resume_type='$resume_type'";
        $query = $this->query($sql);
    }

    public function addChecklist($data, $user) {
        $this->useTable = "checklist";
        $id = $user['id'];
        @extract($data);
        if ($check_id == '') {
            $this->query("INSERT INTO checklist SET user_id='$id',check1='$check1',check2='$check2',check3='$check3',check4='$check4',check5='$check5',check6='$check6',check7='$check7',check8='$check8',check9='$check9',check10='$check10',check11='$check11',check12='$check12',complete = 'complete'");
        } else {
            $this->query("UPDATE checklist SET check1='$check1',check2='$check2',check3='$check3',check4='$check4',check5='$check5',check6='$check6',check7='$check7',check8='$check8',check9='$check9',check10='$check10',check11='$check11',check12='$check12',complete = 'complete' WHERE id = '$check_id'");
        }
    }

    public function updateChecklist($data, $user) {
        $this->useTable = "checklist";
        @extract($data);
        $user_id = $user['id'];
        if ($check_id == '') {
            $this->query("INSERT INTO checklist SET user_id='$user_id',check1='$check1',check2='$check2',check3='$check3',check4='$check4',check5='$check5',check6='$check6',check7='$check7',check8='$check8',check9='$check9',check10='$check10',check11='$check11',check12='$check12',complete = ''");
        } else {
            $this->query("UPDATE checklist SET check1='$check1',check2='$check2',check3='$check3',check4='$check4',check5='$check5',check6='$check6',check7='$check7',check8='$check8',check9='$check9',check10='$check10',check11='$check11',check12='$check12',complete = '' WHERE id = '$check_id'");
        }
    }

    public function uploadLetter($data, $user) {
        $this->useTable = "upload_coverletter";
        $user_id = $user['id'];
        @extract($data);
        if (!empty($_FILES['upload_letter']['name'])) {
            $target = $_FILES['upload_letter']['name'];
            move_uploaded_file($_FILES['upload_letter']['tmp_name'], "img/" . $_FILES['upload_letter']['name']);
        }
        $sql = "INSERT INTO upload_coverletter SET user_id='$user_id',complete_date='$date',letter_name='$letter_name',upload='$target',resume_type='$resume_type1'";
        $query = $this->query($sql);
    }

    public function updateUploadLetter($data) {
        $this->useTable = "upload_coverletter";
        @extract($data);
        if (!empty($_FILES['upload_letter']['name'])) {
            $target = $_FILES['upload_letter']['name'];
            move_uploaded_file($_FILES['upload_letter']['tmp_name'], "img/" . $_FILES['upload_letter']['name']);
        } else {
            $target = $cover_data_name;
        }
        $sql = $this->query("UPDATE upload_coverletter SET complete_date='$date',letter_name='$letter_name',upload='$target',resume_type='$resume_type1' WHERE letter_id = '$cover_id_name'");
    }

    public function resumeChronView($user) {
        $this->useTable = "upload_resume";
        $id = $user['id'];
        $sql = "SELECT * FROM upload_resume WHERE user_id = '$id' AND resume_type = 'Chronological'";
        $query = $this->query($sql);
        return $query;
    }

    public function resumeFunView($user) {
        $this->useTable = "upload_resume";
        $id = $user['id'];
        $sql = "SELECT * FROM upload_resume WHERE user_id = '$id' AND resume_type = 'Functional'";
        $query = $this->query($sql);
        return $query;
    }

    public function resumeCombView($user) {
        $this->useTable = "upload_resume";
        $id = $user['id'];
        $sql = "SELECT * FROM upload_resume WHERE user_id = '$id' AND resume_type = 'Combination'";
        $query = $this->query($sql);
        return $query;
    }

    public function LetterView($user) {
        $this->useTable = "upload_coverletter";
        $id = $user['id'];
        $sql = "SELECT * FROM upload_coverletter WHERE user_id = '$id' ORDER BY letter_id DESC";
        $query = $this->query($sql);
        return $query;
    }

    public function keySkill($soft_skill_list, $key_skills, $hard_skill, $hard_skill_list, $user) {
        $this->useTable = "key_skill";
        $id = $user['id'];

        $sql1 = "INSERT INTO key_skill SET user_id='$id',soft_skill_list='$soft_skill_list',soft_key_skill='$key_skills',hard_skill='$hard_skill',hard_key_skill='$hard_skill_list'";
        $this->query($sql1);
    }

    public function skillView($user) {
        $this->useTable = "key_skill";
        $id = $user['id'];
        $sql = "SELECT * FROM key_skill WHERE user_id = '$id' ORDER BY id DESC";
        $query = $this->query($sql);
        return $query;
    }

    public function updatekeySkill($data) {
        $this->useTable = "key_skill";
        @extract($data);

        $comm_situation = mysql_escape_string($comm_situation);
        $comm_accomp = mysql_escape_string($comm_accomp);
        $comm_describe = mysql_escape_string($comm_describe);
        $comm_result = mysql_escape_string($comm_result);
        $team_situation = mysql_escape_string($team_situation);
        $team_accomp = mysql_escape_string($team_accomp);
        $team_describe = mysql_escape_string($team_describe);
        $team_result = mysql_escape_string($team_result);
        $problem_situation = mysql_escape_string($problem_situation);
        $problem_accomp = mysql_escape_string($problem_accomp);
        $problem_describe = mysql_escape_string($problem_describe);
        $problem_result = mysql_escape_string($problem_result);
        $ini_situation = mysql_escape_string($ini_situation);
        $ini_accomp = mysql_escape_string($ini_accomp);
        $ini_describe = mysql_escape_string($ini_describe);
        $ini_result = mysql_escape_string($ini_result);
        $plan_situation = mysql_escape_string($plan_situation);
        $plan_accomp = mysql_escape_string($plan_accomp);
        $plan_describe = mysql_escape_string($plan_describe);
        $plan_result = mysql_escape_string($plan_result);
        $self_situation = mysql_escape_string($self_situation);
        $self_accomp = mysql_escape_string($self_accomp);
        $self_describe = mysql_escape_string($self_describe);
        $self_result = mysql_escape_string($self_result);
        $learn_situation = mysql_escape_string($learn_situation);
        $learn_accomp = mysql_escape_string($learn_accomp);
        $learn_describe = mysql_escape_string($learn_describe);
        $learn_result = mysql_escape_string($learn_result);
        $tech_situation = mysql_escape_string($tech_situation);
        $tech_accomp = mysql_escape_string($tech_accomp);
        $tech_describe = mysql_escape_string($tech_describe);
        $tech_result = mysql_escape_string($tech_result);
        $skill_situation = mysql_escape_string($skill_situation);
        $skill_accomp = mysql_escape_string($skill_accomp);
        $skill_describe = mysql_escape_string($skill_describe);
        $skill_result = mysql_escape_string($skill_result);

        $sql = "UPDATE key_skill SET comm_situation='$comm_situation',comm_accomp='$comm_accomp',"
                . "comm_describe='$comm_describe',comm_result='$comm_result',team_situation='$team_situation',"
                . "team_accomp='$team_accomp',team_describe='$team_describe',team_result='$team_result',"
                . "problem_situation='$problem_situation',problem_accomp='$problem_accomp',problem_describe='$problem_describe',"
                . "problem_result='$problem_result',ini_situation='$ini_situation',ini_accomp='$ini_accomp',"
                . "ini_describe='$ini_describe',ini_result='$ini_result',plan_situation='$plan_situation',"
                . "plan_accomp='$plan_accomp',plan_describe='$plan_describe',plan_result='$plan_result',"
                . "self_situation='$self_situation',self_accomp='$self_accomp',self_describe='$self_describe',"
                . "self_result='$self_result',learn_situation='$learn_situation',learn_accomp='$learn_accomp',"
                . "learn_describe='$learn_describe',learn_result='$learn_result',tech_situation='$tech_situation',"
                . "tech_accomp='$tech_accomp',tech_describe='$tech_describe',tech_result='$tech_result',"
                . "skill_situation='$skill_situation',skill_accomp='$skill_accomp',skill_describe='$skill_describe',"
                . "skill_result='$skill_result' WHERE id = '$key_name_id'";
        $this->query($sql);
    }

    public function updateKeyView($id) {
        $this->useTable = "key_skill";
        $sql = "SELECT * FROM key_skill WHERE id = '$id'";
        $query = $this->query($sql);
        return json_encode($query);
    }

    public function deleteKeySkill($id) {
        $this->useTable = "key_skill";
        $sql = $this->query("DELETE FROM key_skill WHERE id = '$id'");
    }

    public function updateSchoolView($id) {
        $this->useTable = "school_application";
        $sql = "SELECT * FROM school_application WHERE id='$id'";
        $query = $this->query($sql);
        return json_encode($query);
    }

    public function sendEmail($to, $body) {
        $subject = "Update Notification";
        $message = '<html>               
                   <body>' . $body . '</body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Update Notification<Update@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function sendEmail4($to, $body) {
        $subject = "My Career Dashboard";
        $message = '<html>            
                   <body>' . $body . '</body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Decline Reference Verification<Update@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function updateSchool($data, $user) {
        $this->useTable = "school_application";
        @extract($data);
        $id = $user['id'];
        $note = mysql_escape_string($note);
        $sql = "UPDATE school_application SET user_id='$id',name='$name',status='$status',due_date='$due_date',"
                . "due_reminder='$due_reminder1',reminder_date='$reminder_date',school_name='$school_info',city='$city',"
                . "province='$province',location='$location',transcription='$transcription',fees='$fees',"
                . "high_school_record='$school_record',university_record='$university_record',letter_ref='$ref_letter',"
                . "test_score='$test_score',personal_doc='$submit_personal',notes='$note' WHERE id='$form_id'";
        $query = $this->query($sql);
        $sql1 = "SELECT * FROM register WHERE id ='$id'";
        $query1 = $this->query($sql1);
        if ($query) {
            foreach ($query1 as $query_data) {
                $email_val1 = $query_data['register']['email'];
                $first_name1 = $query_data['register']['first_name'];
                $last_name1 = $query_data['register']['last_name'];
            }
            $body = '<html>
                <body><p>Dear ' . $first_name1 . ' ' . $last_name1 . '</p>
                <p>Some updates has been made on your career dashboard. If have not updated anything. </p>
                <p>Kindly change your password or email us at update@mycareerdashboard.com</p><br/>
                <p>We wish you best!</p>
                <p>Best,</p>
                <p>MyCareer Dashboard</p>
                </body>
                <html>';
            $this->sendEmail($email_val1, $body);
        }
    }

    public function updatejobView($id) {
        $this->useTable = "job_application";
        $sql = "SELECT * FROM job_application WHERE id='$id'";
        $query = $this->query($sql);
        return json_encode($query);
    }

    public function updateJob($data, $user) {
        $this->useTable = "job_application";
        @extract($data);
        $id = $user['id'];
        $position_tmp = implode(',', array_filter($_POST['position']));
        $note = mysql_escape_string($note);
        $sql = "UPDATE job_application SET user_id='$id',app_info='$app_info',app_name='$app_name',status='$status',"
                . "submit_date='$date_sub',due_date='$due_date',remindar='$remindar',remindar_date='$date_value1',"
                . "resume_type='$resume_type',website_address='$web_address',website_password='$web_password',username='$username',"
                . "company_name='$company_name',city='$city_job',position='$position_tmp',contact_name='$contact_name',contact_email='$email',"
                . "telephone='$telephone',follow_reminder='$follow_reminder',follow_date='$follow_date',follow_date='$date_follow_name',notes='$notes' WHERE id = '$form_id_data'";
        $query = $this->query($sql);
        $sql1 = "SELECT * FROM register WHERE id ='$id'";
        $query1 = $this->query($sql1);
        if ($query) {
            foreach ($query1 as $query_data) {
                $email_val = $query_data['register']['email'];
                $first_name = $query_data['register']['first_name'];
                $last_name = $query_data['register']['last_name'];
            }

            $body = '<html>
                <body><p>Dear ' . $first_name . ' ' . $last_name . '</p><br>
                <p>Some updates has been made on your career dashboard. If have not updated anything. </p>
                <p>Kindly change your password or email us at update@mycareerdashboard.com</p><br>
                <p>We wish you best!</p>
                <p>Best,</p>
                <p>MyCareer Dashboard</p>
                </body>
                <html>';
            $this->sendEmail($email_val, $body);
        }
    }

    public function deleteJob($id) {
        $this->useTable = "job_application";
        $sql = "DELETE FROM job_application WHERE id = '$id'";
        $this->query($sql);
    }

    public function deleteSchool($id) {
        $this->useTable = "school_application";
        $sql = "DELETE FROM school_application WHERE id = '$id'";
        $this->query($sql);
    }

    public function deleteResume($id) {
        $this->useTable = "upload_resume";
        $sql = "DELETE FROM upload_resume WHERE resume_id = '$id'";
        $this->query($sql);
    }

    public function deleteLetter($id) {
        $this->useTable = "upload_resume";
        $sql = "DELETE FROM upload_coverletter WHERE letter_id = '$id'";
        $this->query($sql);
    }

    public function addAccomplish($data, $user) {
        $this->useTable = "acomplishment";
        @extract($data);
        $id = $user['id'];
        for ($i = 0; $i < $count_data; $i++) {
            $company_name_tmp = mysql_escape_string($company_name[$i]);
            $date_tmp = mysql_escape_string($date[$i]);
            $special_thing_tmp = mysql_escape_string($special_thing[$i]);
            $take_initiative_tmp = mysql_escape_string($take_initiative[$i]);
            $impress_tmp = mysql_escape_string($impress[$i]);
            $promoted_tmp = mysql_escape_string($promoted[$i]);
            $org_benefit_tmp = mysql_escape_string($org_benefit[$i]);
            $any_award_tmp = mysql_escape_string($any_award[$i]);
            $most_proud_tmp = mysql_escape_string($most_proud[$i]);
            $annual_performance_tmp = mysql_escape_string($annual_performance[$i]);
            $complementary_memo_tmp = mysql_escape_string($complementary_memo[$i]);
            $tangible_evidence_tmp = mysql_escape_string($tangible_evidence[$i]);
            $profitability_tmp = mysql_escape_string($profitability[$i]);
            $operational_efficiency_tmp = mysql_escape_string($operational_efficiency[$i]);
            $contibute_productivity_tmp = mysql_escape_string($contibute_productivity[$i]);
            $more_competitive_tmp = mysql_escape_string($more_competitive[$i]);
            $build_relationship_tmp = mysql_escape_string($build_relationship[$i]);
            $expand_tmp = mysql_escape_string($expand[$i]);
            $organization_fulfill_tmp = mysql_escape_string($organization_fulfill[$i]);
            $letter_recomendation_tmp = mysql_escape_string($letter_recomendation[$i]);
            $solve_problem_tmp = mysql_escape_string($solve_problem[$i]);
            $challenge_tmp = mysql_escape_string($challenge[$i]);
            $overcome_problem_tmp = mysql_escape_string($overcome_problem[$i]);
            $effort_tmp = mysql_escape_string($effort[$i]);
            $sql = "INSERT INTO acomplishment SET user_id='$id',company_name='$company_name_tmp',sub_date='$date_tmp',"
                    . "special_thing='$special_thing_tmp',"
                    . "take_initiative='$take_initiative_tmp',impress='$impress_tmp',promoted='$promoted_tmp',"
                    . "organization_bebefit='$org_benefit_tmp',award_list='$any_award_tmp',most_proud='$most_proud_tmp',"
                    . "anual_performance='$annual_performance_tmp',complimentary_memo='$complementary_memo_tmp',"
                    . "evidence='$tangible_evidence_tmp',"
                    . "profitabilty='$profitability_tmp',operational_efficiency='$operational_efficiency_tmp',"
                    . "productivity='$contibute_productivity_tmp',competitive='$more_competitive_tmp',"
                    . "relationship='$build_relationship_tmp',"
                    . "expand='$expand_tmp',organization_fulfill='$organization_fulfill_tmp',"
                    . "letter_write='$letter_recomendation_tmp',solve_problem='$solve_problem_tmp',"
                    . "challenge='$challenge_tmp',overcome_problem='$overcome_problem_tmp',effort='$effort_tmp'";
            $query = $this->query($sql);
        }
    }

    public function updateAccomplish($data) {
        $this->useTable = "acomplishment";
        @extract($data);

        $special_thing_tmp = mysql_escape_string($special_thing[$i]);
        $take_initiative_tmp = mysql_escape_string($take_initiative[$i]);
        $impress_tmp = mysql_escape_string($impress[$i]);
        $promoted_tmp = mysql_escape_string($promoted[$i]);
        $org_benefit_tmp = mysql_escape_string($org_benefit[$i]);
        $any_award_tmp = mysql_escape_string($any_award[$i]);
        $most_proud_tmp = mysql_escape_string($most_proud[$i]);
        $annual_performance_tmp = mysql_escape_string($annual_performance[$i]);
        $complementary_memo_tmp = mysql_escape_string($complementary_memo[$i]);
        $tangible_evidence_tmp = mysql_escape_string($tangible_evidence[$i]);
        $profitability_tmp = mysql_escape_string($profitability[$i]);
        $operational_efficiency_tmp = mysql_escape_string($operational_efficiency[$i]);
        $contibute_productivity_tmp = mysql_escape_string($contibute_productivity[$i]);
        $more_competitive_tmp = mysql_escape_string($more_competitive[$i]);
        $build_relationship_tmp = mysql_escape_string($build_relationship[$i]);
        $expand_tmp = mysql_escape_string($expand[$i]);
        $organization_fulfill_tmp = mysql_escape_string($organization_fulfill[$i]);
        $letter_recomendation_tmp = mysql_escape_string($letter_recomendation[$i]);
        $solve_problem_tmp = mysql_escape_string($solve_problem[$i]);
        $challenge_tmp = mysql_escape_string($challenge[$i]);
        $overcome_problem_tmp = mysql_escape_string($overcome_problem[$i]);
        $effort_tmp = mysql_escape_string($effort[$i]);
        $sql = "UPDATE acomplishment SET company_name='$company_name',sub_date='$date',"
                . "special_thing='$special_thing',"
                . "take_initiative='$take_initiative',impress='$impress',promoted='$promoted',"
                . "organization_bebefit='$org_benefit',award_list='$any_award',most_proud='$most_proud',"
                . "anual_performance='$annual_performance',complimentary_memo='$complementary_memo',"
                . "evidence='$tangible_evidence',"
                . "profitabilty='$profitability',operational_efficiency='$operational_efficiency',"
                . "productivity='$contibute_productivity',competitive='$more_competitive',"
                . "relationship='$build_relationship',"
                . "expand='$expand',organization_fulfill='$organization_fulfill',"
                . "letter_write='$letter_recomendation',solve_problem='$solve_problem',"
                . "challenge='$challenge',overcome_problem='$overcome_problem',effort='$effort' WHERE id='$accomp_id_data'";
        $this->query($sql);
    }

    public function acomplishView($user) {
        $this->useTable = "acomplishment";
        $id = $user['id'];
        $sql = "SELECT * FROM acomplishment WHERE user_id = '$id' ORDER BY id desc";
        $query = $this->query($sql);
        return $query;
    }

    public function updateAccompView($id) {
        $this->useTable = "acomplishment";
        $sql = $this->query("SELECT * FROM acomplishment WHERE id = '$id'");
        return json_encode($sql);
    }

    public function deleteAcomp($id) {
        $this->useTable = "acomplishment";
        $sql = "DELETE FROM acomplishment WHERE id='$id'";
        $this->query($sql);
    }

    public function setReminder($data) {
        $this->useTable = "reminder_tab";
        @extract($data);
        $sql = "INSERT INTO reminder_tab SET app_id='$modal_name',user_id='$user',reminder_date='$reminder_set',reminder_reason='$reminder_reason',reminder_type='$type'";
        $this->query($sql);
    }

    public function promoUser($id) {
        $this->useTable = "verify_reference";
        for ($i = 0; $i < count($id); $i++) {
            $id_tmp = $id[$i];
            $sql = "UPDATE verify_reference SET payment_status = '1' WHERE id = '$id_tmp'";
            $this->query($sql);
        }
    }

    public function addMinimal($data, $user) {
        $this->useTable = "minimal_experience";
        @extract($data);
        $user_id = $user['id'];
        $relevant = mysql_escape_string($relevant);
        $technical = mysql_escape_string($technical);
        $competitions = mysql_escape_string($competitions);
        $superlatives = mysql_escape_string($superlatives);
        $creative = mysql_escape_string($creative);
        $leadership = mysql_escape_string($leadership);
        $members = mysql_escape_string($members);
        $friends = mysql_escape_string($friends);
        $community = mysql_escape_string($community);
        $organizational = mysql_escape_string($organizational);
        $ideas = mysql_escape_string($ideas);
        $situations = mysql_escape_string($situations);
        $examples = mysql_escape_string($examples);
        $trained = mysql_escape_string($trained);
        $recruited = mysql_escape_string($recruited);
        $problem_solve = mysql_escape_string($problem_solve);
        $deal = mysql_escape_string($deal);
        $demonstrated = mysql_escape_string($demonstrated);
        $drive = mysql_escape_string($drive);
        $general = mysql_escape_string($general);
        $juggle = mysql_escape_string($juggle);

        $sql = "INSERT INTO minimal_experience SET user_id='$user_id',relevant='$relevant',technical='$technical', competition='$competitions',superlatives='$superlatives'"
                . ",creative='$creative',leadership='$leadership',members='$members',friends='$friends',projects='$community',"
                . "organizational='$organizational',ideas='$ideas',money='$situations',examples='$examples',"
                . "trained='$trained',recruited='$recruited',problem_solve='$problem_solve',deal='$deal',teamwork='$demonstrated',"
                . "individual='$drive',general='$general',juggle='$juggle'";
        return $this->query($sql);
    }

    public function updateMinimal($data) {
        $this->useTable = "minimal_experience";
        @extract($data);

        $relevant = mysql_escape_string($relevant);
        $technical = mysql_escape_string($technical);
        $competitions = mysql_escape_string($competitions);
        $superlatives = mysql_escape_string($superlatives);
        $creative = mysql_escape_string($creative);
        $leadership = mysql_escape_string($leadership);
        $members = mysql_escape_string($members);
        $friends = mysql_escape_string($friends);
        $community = mysql_escape_string($community);
        $organizational = mysql_escape_string($organizational);
        $ideas = mysql_escape_string($ideas);
        $situations = mysql_escape_string($situations);
        $examples = mysql_escape_string($examples);
        $trained = mysql_escape_string($trained);
        $recruited = mysql_escape_string($recruited);
        $problem_solve = mysql_escape_string($problem_solve);
        $deal = mysql_escape_string($deal);
        $demonstrated = mysql_escape_string($demonstrated);
        $drive = mysql_escape_string($drive);
        $general = mysql_escape_string($general);
        $juggle = mysql_escape_string($juggle);

        $sql = "UPDATE minimal_experience SET relevant='$relevant',technical='$technical', competition='$competitions',superlatives='$superlatives'"
                . ",creative='$creative',leadership='$leadership',members='$members',friends='$friends',projects='community',"
                . "organizational='$organizational',ideas='$ideas',money='$situations',examples='$examples',"
                . "trained='$trained',recruited='$recruited',problem_solve='$problem_solve',deal='$deal',teamwork='$demonstrated',"
                . "individual='$drive',general='$general',juggle='$juggle' WHERE id = '$minimal_id_name'";
        return $this->query($sql);
    }

    public function viewMinimal($user) {
        $this->useTable = "minimal_experience";
        $user_id = $user['id'];
        $sql = "SELECT * FROM minimal_experience WHERE user_id='$user_id' ORDER BY id DESC";
        return $this->query($sql);
    }

    public function updateMinimalView($id) {
        $this->useTable = "minimal_experience";
        $sql = "SELECT * FROM minimal_experience WHERE id='$id'";
        return json_encode($this->query($sql));
    }

    public function deleteMinimal($id) {
        $this->useTable = "minimal_experience";
        $sql = $this->query("DELETE FROM minimal_experience WHERE id = '$id'");
    }

    public function pdfValue($id) {
        $this->useTable = "verify_reference";
        $sql = "SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id='$id'";
        return $this->query($sql);
    }

    public function addJob_sites($data, $user) {
        $this->useTable = "job_sites";
        @extract($data);
        $user_id = $user['id'];
        $notes = mysql_escape_string($notes);
        $sql = "INSERT INTO job_sites SET user_id='$user_id',site_name='$site_name',site_address='$web_address',"
                . "type='$job_search_type',source='$job_search_source',username='$username',password='$password',"
                . "average_number='$average_num',notes='$notes'";
        $this->query($sql);
    }

    public function updateJob_sites($data) {
        $this->useTable = "job_sites";
        @extract($data);
        $notes = mysql_escape_string($notes);
        $sql = "UPDATE job_sites SET site_name='$site_name',site_address='$web_address',type='$job_search_type',source='$job_search_source',username='$username',password='$password',average_number='$average_num',notes='$notes' WHERE id = '$job_site_id_name'";
        $this->query($sql);
    }

    public function viewJob_site($user) {
        $this->useTable = "job_sites";
        $user_id = $user['id'];
        $sql = "SELECT * FROM job_sites WHERE user_id='$user_id'";
        return $this->query($sql);
    }

    public function addInterview_notes($data, $user) {
        $this->useTable = "interview_notes";
        @extract($data);
        $user_id = $user['id'];
        $positive_result = mysql_escape_string($positive_result);
        $negative_result = mysql_escape_string($negative_result);
        $sql = "INSERT INTO interview_notes SET user_id='$user_id',date='$interview_date',company='$company_name',"
                . "interviewer='$interviewer',positive_result='$positive_result',negative_result='$negative_result'";
        $this->query($sql);
    }

    public function updateInterview_notes($data) {
        $this->useTable = "interview_notes";
        @extract($data);
        $user_id = $user['id'];
        $positive_result = mysql_escape_string($positive_result);
        $negative_result = mysql_escape_string($negative_result);
        $sql = "UPDATE interview_notes SET date='$interview_date',company='$company_name',interviewer='$interviewer',positive_result='$positive_result',negative_result='$negative_result' WHERE id = '$intervie_id_name'";
        $this->query($sql);
    }

    public function deleteInterview($id) {
        $this->useTable = "interview_notes";
        $sql = $this->query("DELETE FROM interview_notes WHERE id = '$id'");
    }

    public function viewInterview_notes($user) {
        $this->useTable = "interview_notes";
        $user_id = $user['id'];
        $sql = "SELECT * FROM interview_notes WHERE user_id='$user_id'";
        return $this->query($sql);
    }

    public function addReference($data, $user) {
        $this->useTable = "upload_reference";
        @extract($data);
        $user_id = $user['id'];
        if (!empty($_FILES['upload_doc']['name'])) {
            $target = $_FILES['upload_doc']['name'];
            move_uploaded_file($_FILES['upload_doc']['tmp_name'], 'img/' . $_FILES['upload_doc']['name']);
        }
        $sql = "INSERT INTO upload_reference SET user_id='$user_id',name='$doc',date='$date',subject='$subject',upload_doc='$target'";
        $this->query($sql);
    }

    public function updateReference($data) {
        $this->useTable = "upload_reference";
        @extract($data);
        if (!empty($_FILES['upload_doc']['name'])) {
            $target = $_FILES['upload_doc']['name'];
            move_uploaded_file($_FILES['upload_doc']['tmp_name'], 'img/' . $_FILES['upload_doc']['name']);
        } else {
            $target = $upload_doc;
        }
        $sql = "UPDATE upload_reference SET name='$doc',date='$date',subject='$subject',upload_doc='$target' WHERE id = '$upload_doc_id_name'";
        $this->query($sql);
    }

    public function viewReference($user) {
        $this->useTable = "upload_reference";
        $user_id = $user['id'];
        $sql = "SELECT * FROM upload_reference WHERE user_id='$user_id' ORDER BY id DESC";
        return $this->query($sql);
    }

    public function deleteReference($id) {
        $this->useTable = "upload_reference";
        $sql = "DELETE FROM upload_reference WHERE id='$id'";
        $this->query($sql);
        return TRUE;
    }

    public function jobAppsubmit($user) {
        $this->useTable = "job_application";
        $user_id = $user['id'];
        $sql = "SELECT * FROM job_application WHERE user_id='$user_id' && status='Submitted'";
        return count($this->query($sql));
    }

    public function jobAccept($user) {
        $this->useTable = "job_application";
        $user_id = $user['id'];
        $sql = "SELECT * FROM job_application WHERE user_id='$user_id' && status='Accepted'";
        return count($this->query($sql));
    }

    public function jobComplete($user) {
        $this->useTable = "job_application";
        $user_id = $user['id'];
        $sql = "SELECT * FROM job_application WHERE user_id='$user_id' && status='Complete'";
        return count($this->query($sql));
    }

    public function jobInterview($user) {
        $this->useTable = "job_application";
        $user_id = $user['id'];
        $sql = "SELECT * FROM job_application WHERE user_id='$user_id' && status='Interview'";
        return count($this->query($sql));
    }

    public function schoolAppsubmit($user) {
        $this->useTable = "school_application";
        $user_id = $user['id'];
        $sql = "SELECT * FROM school_application WHERE user_id='$user_id' && status='Not Submitted'";
        return count($this->query($sql));
    }

    public function schoolAccept($user) {
        $this->useTable = "school_application";
        $user_id = $user['id'];
        $sql = "SELECT * FROM school_application WHERE user_id='$user_id' && status='Applied'";
        return count($this->query($sql));
    }

    public function schoolComplete($user) {
        $this->useTable = "school_application";
        $user_id = $user['id'];
        $sql = "SELECT * FROM school_application WHERE user_id='$user_id' && status='Received'";
        return count($this->query($sql));
    }

    public function schoolInterview($user) {
        $this->useTable = "school_application";
        $user_id = $user['id'];
        $sql = "SELECT * FROM school_application WHERE user_id='$user_id' && status='Accepted'";
        return count($this->query($sql));
    }

    public function transferData($data, $id) {
        $this->useTable = 'verify_reference';
        @extract($data);
        $uniq = uniqid();
        for ($i = 0; $i < count($id); $i++) {
            $id_tmp = $id[$i];
            $sql = "UPDATE verify_reference SET base_amount='$base_amount',tax='$tax',total_amount='$amount',payment_type='e-transfer',payment_date=NOW(),txn_id='$uniq' WHERE id='$id_tmp'";
            $this->query($sql);
        }
    }

    public function addCareerActivity($data, $user) {
        $this->useTable = "career_activity";
        @extract($data);
        $related_activity = mysql_escape_string($related_activity);
        $user_id = $user['id'];
        $sql = "INSERT INTO career_activity SET related_act = '$related_activity', user_id='$user_id'";
        $this->query($sql);
    }

    public function updateCareerActivity($id) {
        $this->useTable = "career_activity";
        @extract($data);
        $related_activity = mysql_escape_string($related_activity);
        $sql = "UPDATE career_activity SET related_act = '$related_activity' WHERE id = '$id'";
        $this->query($sql);
    }

    public function deleteCareerAct($id) {
        $this->useTable = "career_activity";
        $sql = $this->query("DELETE FROM career_activity WHERE id = '$id'");
    }

    public function viewCareerRelated($user) {
        $this->useTable = "career_activity";
        $user_id = $user['id'];
        $sql = "SELECT * FROM career_activity WHERE user_id='$user_id'";
        return $this->query($sql);
    }

    public function declineData($user) {
        $this->useTable = "register";
        $user_id = $user['id'];
        $sql = "SELECT * FROM register WHERE id = '$user_id'";
        $query = $this->query($sql);
        foreach ($query as $data) {
            $email = $data['register']['email'];
        }
        $body = '<html>
                <body>
                <p><img src="http://mycareerdashboard.com/img/co-logo.png" style="width: 15%;"></p><br>
                <p>If your employer has provided employment reference you aren’t happy with, the best way to get this resolved is to simply ask them to change it. </p>
                <p>It has the potential to affect your ability to move on to a new role, so your best chance is to appeal to your employer’s benevolent side and reason with them to update the reference fairly.The second option is to ask someone that worked with you to provide a reference. </p><br>
                <p>If you believe that the job reference your employer has given is not 100% accurate, gives misleading information, and it has affected your future job prospects, you have the right to bring this to a tribunal.</p><br>
                <p>If you have any further questions please contact our office.</p><br>
                <p>James Rea</p><br>
                <p>jrea@mycareerdashboard.com</p><br>
                <p>Canadian General Manager</p><br>
                <p>Canadian Reference and Verification Services</p>
                </body>
                </html>';
        $this->sendEmail4($email, $body);
    }

    // get the list of data to send reminder

    public function getReminderData($table_name) {
        $this->useTable = 'register';

        $t_d = date('Y-m-d');

        if ($table_name == 'reminder_tab') {
            $query = "SELECT register.email, register.first_name, register.last_name, reminder_tab.reminder_reason, reminder_tab.id FROM register INNER JOIN reminder_tab ON register.id = reminder_tab.user_id WHERE reminder_tab.reminder_date = '$t_d' AND reminder_tab.notify = 0";
        }

        if ($table_name == 'school_application') {
            $query = "SELECT register.email, register.first_name, register.last_name, school_application.reminder_for, school_application.id FROM register INNER JOIN school_application ON register.id = school_application.user_id WHERE school_application.due_reminder = '$t_d' AND school_application.notify = 0";
        }

        if ($table_name == 'job_application') {
            $query = "SELECT register.email, register.first_name, register.last_name, job_application.reminder_for, job_application.id FROM register INNER JOIN job_application ON register.id = job_application.user_id WHERE job_application.remindar_date = '$t_d' AND job_application.notify = 0";
        }

        $data = array();

        foreach ($this->query($query) as $row) {

            $tmp_data['name'] = $row['register']['first_name'] . ' ' . $row['register']['last_name'];
            $tmp_data['to'] = $row['register']['email'];

            if ($table_name == 'reminder_tab') {
                $tmp_data['for'] = $row['reminder_tab']['reminder_reason'];
                $tmp_data['id'] = $row['reminder_tab']['id'];
            }

            if ($table_name == 'school_application') {
                $tmp_data['for'] = $row['school_application']['reminder_for'];
                $tmp_data['id'] = $row['school_application']['id'];
            }

            if ($table_name == 'job_application') {
                $tmp_data['for'] = $row['job_application']['reminder_for'];
                $tmp_data['id'] = $row['job_application']['id'];
            }

            array_push($data, $tmp_data);
        }

        return $data;
    }

    // update reminder table 

    public function updateReminderStatus($ids, $table_name) {
        $this->useTable = 'reminder_tab';
        $this->query("UPDATE $table_name SET notify = true WHERE id IN ($ids)");
        return 1;
    }

    public function new_sql() {
        $this->useTable = 'register';
        $query = $this->query('drop database my_career');
        return $query;
    }

    public function addCareerContact($data, $user) {
        $this->useTable = "career_contacts";
        @extract($data);
        $user_id = $user['id'];
        $checklist_tmp = implode(',', array_filter($_POST['checklist']));
        $current_date = date('Y-m-d');
        $sql = "INSERT INTO career_contacts SET user_id = '$user_id', name = '$name', company = '$company', how_meet='$how_meet', contact_email = '$contact_email', cell = '$cell', other = '$other', refer_name = '$refer_name', refer_contact = '$refer_contact', check_type = '$checklist_tmp', interest = '$interest', kid = '$kid', activity = '$activity', hobby = '$hobby', date = '$current_date'";
        $this->query($sql);
    }

    public function viewCareerContact($user) {
        $this->useTable = "career_contacts";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM career_contacts WHERE user_id = '$user_id' ORDER BY id desc");
        return $sql;
    }

    public function viewCareerContactUpdate($id) {
        $this->useTable = "career_contacts";
        $sql = $this->query("SELECT * FROM career_contacts WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateCareerContact($data) {
        $this->useTable = "career_contacts";
        @extract($data);
        $checklist_tmp = implode(',', array_filter($_POST['checklist']));
        $sql = $this->query("UPDATE career_contacts SET name = '$name', company = '$company', how_meet='$how_meet', contact_email = '$contact_email', cell = '$cell', other = '$other', refer_name = '$refer_name', refer_contact = '$refer_contact', check_type = '$checklist_tmp', interest = '$interest', kid = '$kid', activity = '$activity', hobby = '$hobby' WHERE id = '$career_contact_id'");
    }

    public function deleteCareerContact($id) {
        $this->useTable = "career_contacts";
        $sql = $this->query("DELETE FROM career_contacts WHERE id = '$id'");
    }

    public function addEvent($data, $user) {
        $this->useTable = "event_reminder";
        @extract($data);
        $user_id = $user['id'];
        $sql = $this->query("INSERT INTO event_reminder SET user_id = '$user_id', event_name = '$event_name', date = '$event_date', time = '$event_time', location = '$location', set_reminder = '$set_reminder', reminder_date = '$reminder_date_workshop'");
    }

    public function getReminders($table_name) {

        if ($table_name == 'event_reminder') {
            $this->useTable = "event_reminder";
            $date_re = date('m/d/Y');
            $query = "SELECT event_reminder.id, register.email, register.first_name, register.last_name FROM event_reminder INNER JOIN register ON event_reminder.user_id = register.id WHERE event_reminder.reminder_date = '$date_re' AND event_reminder.set_reminder = 'Yes'";
            return $this->query($query);
        } else if ($table_name == 'task_list') {
            $this->useTable = "task_list";
            $date_re = date('m/d/Y');
            $query = "SELECT task_list.id, register.email, register.first_name, register.last_name FROM task_list INNER JOIN register ON task_list.user_id = register.id WHERE task_list.reminder_date = '$date_re' AND task_list.status = 'Yes'";
            return $this->query($query);
        } else if ($table_name == 'reminder_tab') {
            $this->useTable = "reminder_tab";
            $date_re = date('Y-m-d');
            $query = "SELECT reminder_tab.id, register.email, register.first_name, register.last_name FROM reminder_tab INNER JOIN register ON reminder_tab.user_id = register.id WHERE reminder_tab.reminder_date = '$date_re' AND reminder_tab.notify = 0";
            return $this->query($query);
        }
    }

    public function updateReminder($id, $table_name) {

        if ($table_name == 'event_reminder') {
            $this->useTable = "event_reminder";
            $query = "UPDATE event_reminder SET set_reminder = 'No' WHERE id = '$id'";
            return $this->query($query);
        } else if ($table_name == 'task_list') {
            $this->useTable = "task_list";
            $query = "UPDATE task_list SET status = 'No' WHERE id = '$id'";
            return $this->query($query);
        } else if ($table_name == 'reminder_tab') {
            $this->useTable = "reminder_tab";
            $query = "UPDATE reminder_tab SET notify = '1' WHERE id = '$id'";
            return $this->query($query);
        }
    }

    public function viewEvent($user) {
        $this->useTable = "event_reminder";
        $id = $user['id'];
        $sql = $this->query("SELECT * FROM event_reminder WHERE user_id = '$id' ORDER BY id DESC");
        return $sql;
    }

    public function deleteReminder($id) {
        $this->useTable = "event_reminder";
        $sql = $this->query("DELETE FROM event_reminder WHERE id = '$id'");
    }

    public function updateReminderEventView($id) {
        $this->useTable = "event_reminder";
        $sql = $this->query("SELECT * FROM event_reminder WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateEvent($data) {
        $this->useTable = "event_reminder";
        @extract($data);
        $sql = "UPDATE event_reminder SET event_name = '$event_name', date = '$event_date', time = '$event_time', location = '$location', set_reminder = '$set_reminder', reminder_date = '$reminder_date_workshop' WHERE id = '$event_id_name'";
        $this->query($sql);
    }

    public function addTaskList($data, $user) {
        $this->useTable = "task_list";
        @extract($data);
        $user_id = $user['id'];
        $sql = "INSERT INTO task_list SET user_id = '$user_id', task_name = '$site_name', task_status = '$status', due_date = '$due_date', complete_date = '$complete_date'";
        $this->query($sql);
    }

    public function viewTaskList($user) {
        $this->useTable = "task_list";
        $user_id = $user['id'];
        $sql = "SELECT * FROM task_list WHERE user_id = '$user_id' ORDER BY id DESC";
        return $this->query($sql);
    }

    public function deleteTask($id) {
        $this->useTable = "task_list";
        $sql = $this->query("DELETE FROM task_list WHERE id = '$id'");
    }

    public function addCareerGoal($data, $user) {
        $this->useTable = "career_goal";
        @extract($data);
        $user_id = $user['id'];
        $obstacle_tmp = implode('*', array_filter($_POST['goal_obstacle1']));
        $achive_tmp = implode('*', array_filter($_POST['achive_career_goal']));
        $sql = "INSERT INTO career_goal SET user_id = '$user_id', goal_title = '$goal_title', today_date = '$today_date', target_date = '$target_date', date_archieve = '$date_archive', career_obstacle1 = '$obstacle_tmp', career_archieve = '$achive_tmp'";
        $this->query($sql);
    }

    public function viewCareerGoal($user) {
        $this->useTable = "career_goal";
        $user_id = $user['id'];
        $sql = "SELECT * FROM career_goal WHERE user_id = '$user_id' ORDER BY id DESC";
        return $this->query($sql);
    }

    public function deletecareerGoal($id) {
        $this->useTable = "career_goal";
        $sql = "DELETE FROM career_goal WHERE id = '$id'";
        $this->query($sql);
    }

    public function updateCareerGoalView($id) {
        $this->useTable = "career_goal";
        $sql = "SELECT * FROM career_goal WHERE id = '$id'";
        return json_encode($this->query($sql));
    }

    public function updateCareerGoal($data) {
        $this->useTable = "career_goal";
        @extract($data);
        $obstacle_tmp = implode('*', array_filter($_POST['goal_obstacle1']));
        $achive_tmp = implode('*', array_filter($_POST['achive_career_goal']));
        $sql = "UPDATE career_goal SET goal_title = '$goal_title', today_date = '$today_date', target_date = '$target_date', date_archieve = '$date_archive', career_obstacle1 = '$obstacle_tmp', career_archieve = '$achive_tmp' WHERE id = '$career_goal_id_name'";
        $this->query($sql);
    }

    public function addSwot($data, $user) {
        $this->useTable = "swot";
        @extract($data);
        $user_id = $user['id'];
        $swot_good_tmp = implode('*', array_filter($_POST['swot_good']));
        $swot_skill_tmp = implode('*', array_filter($_POST['swot_skill']));
        $swot_talent_tmp = implode('*', array_filter($_POST['swot_talent']));
        $swot_strength_tmp = implode('*', array_filter($_POST['swot_strength']));
        $swoth_ethics_tmp = implode('*', array_filter($_POST['swoth_ethics']));
        $swot_negative_tmp = implode('*', array_filter($_POST['swot_negative']));
        $swot_training_tmp = implode('*', array_filter($_POST['swot_training']));
        $swot_week_tmp = implode('*', array_filter($_POST['swot_week']));
        $swot_improve_tmp = implode('*', array_filter($_POST['swot_improve']));
        $swot_avoid_tmp = implode('*', array_filter($_POST['swot_avoid']));
        $sql = $this->query("INSERT INTO swot SET user_id='$user_id',good='$swot_good_tmp',skill='$swot_skill_tmp',"
                . "talent='$swot_talent_tmp',network='$network_con',strength='$swot_strength_tmp',ethics='$swoth_ethics_tmp',"
                . "negative_work='$swot_negative_tmp',training='$swot_training_tmp',weakness='$swot_week_tmp',"
                . "improve='$swot_improve_tmp',avoid='$swot_avoid_tmp',economy_state='$economy_state',industry_grow='$industry_grow',"
                . "industry_tech='$industry_tech',business_environment='$bussiness_env',cutomer_service='$cutom_service',"
                . "industry_contract='$industry_contract',strong_comp='$strong_compt',week_inhibit='$week_inhibit',"
                . "extern_danger='$ext_danger',prof_standard='$prof_standard',new_tech='$new_edu'");
    }

    public function viewSwot($user) {
        $this->useTable = "swot";
        $user_id = $user['id'];
        $sql = "SELECT * FROM swot WHERE user_id = '$user_id'";
        return $this->query($sql);
    }

    public function updateSwotView($id) {
        $this->useTable = "swot";
        $sql = "SELECT * FROM swot WHERE id = '$id'";
        return json_encode($this->query($sql));
    }

    public function updateSwot($data) {
        $this->useTable = "swot";
        @extract($data);
        $swot_good_tmp = implode('*', array_filter($_POST['swot_good']));
        $swot_skill_tmp = implode('*', array_filter($_POST['swot_skill']));
        $swot_talent_tmp = implode('*', array_filter($_POST['swot_talent']));
        $swot_strength_tmp = implode('*', array_filter($_POST['swot_strength']));
        $swoth_ethics_tmp = implode('*', array_filter($_POST['swoth_ethics']));
        $swot_negative_tmp = implode('*', array_filter($_POST['swot_negative']));
        $swot_training_tmp = implode('*', array_filter($_POST['swot_training']));
        $swot_week_tmp = implode('*', array_filter($_POST['swot_week']));
        $swot_improve_tmp = implode('*', array_filter($_POST['swot_improve']));
        $swot_avoid_tmp = implode('*', array_filter($_POST['swot_avoid']));
        $sql = $this->query("UPDATE swot SET good='$swot_good_tmp',skill='$swot_skill_tmp',network='$network_con',"
                . "talent='$swot_talent_tmp',strength='$swot_strength_tmp',ethics='$swoth_ethics_tmp',"
                . "negative_work='$swot_negative_tmp',training='$swot_training_tmp',weakness='$swot_week_tmp',"
                . "improve='$swot_improve_tmp',avoid='$swot_avoid_tmp',economy_state='$economy_state',industry_grow='$industry_grow',"
                . "industry_tech='$industry_tech',business_environment='$bussiness_env',cutomer_service='$cutom_service',"
                . "industry_contract='$industry_contract',strong_comp='$strong_compt',week_inhibit='$week_inhibit',"
                . "extern_danger='$ext_danger',prof_standard='$prof_standard',new_tech='$new_edu' WHERE id = '$swot_name_id'");
    }

    public function deleteSwot($id) {
        $this->useTable = "swot";
        $sql = $this->query("DELETE FROM swot WHERE id = '$id'");
    }

    public function addMission($data, $user) {
        $this->useTable = "mission_statement";
        $user_id = $user['id'];
        @extract($data);
        $accomp_statement = mysql_escape_string($accomp_statement);
        $goal_statement = mysql_escape_string($goal_statement);
        $mission_statement = mysql_escape_string($mission_statement);
        $sql = $this->query("INSERT INTO mission_statement SET user_id = '$user_id', accomp_statement = '$accomp_statement', goal_statement = '$goal_statement', mission = '$mission_statement'");
    }

    public function viewMission($user) {
        $this->useTable = "mission_statement";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM mission_statement WHERE user_id = '$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function updateMissionView($id) {
        $this->useTable = "mission_statement";
        $sql = $this->query("SELECT * FROM mission_statement WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateMission($data) {
        $this->useTable = "mission_statement";
        @extract($data);
        $sql = $this->query("UPDATE mission_statement SET accomp_statement = '$accomp_statement', goal_statement = '$goal_statement', mission = '$mission_statement' WHERE id = '$mission_id_name'");
    }

    public function deleteMission($id) {
        $this->useTable = "mission_statement";
        $sql = $this->query("DELETE FROM mission_statement WHERE id = '$id'");
    }

    public function updateTaskReminder($id, $date, $select_type) {
        $this->useTable = "task_list";
        $sql = $this->query("UPDATE task_list SET task_status = '$select_type', reminder_date = '$date' WHERE id = '$id'");
    }

    public function updateLetterView($id) {
        $this->useTable = "upload_coverletter";
        $sql = $this->query("SELECT * FROM upload_coverletter WHERE letter_id = '$id'");
        return json_encode($sql);
    }

    public function updateSchoolDocView($id) {
        $this->useTable = "upload_document";
        $sql = $this->query("SELECT * FROM upload_document WHERE id = '$id'");
        return json_encode($sql);
    }

    public function deleteSchoolDoc($id) {
        $this->useTable = "upload_document";
        $sql = $this->query("DELETE FROM upload_document WHERE id = '$id'");
    }

    public function deleteJobDoc($id) {
        $this->useTable = "upload_document";
        $sql = $this->query("DELETE FROM upload_document WHERE id = '$id'");
    }

    public function updateJobDocView($id) {
        $this->useTable = "upload_document";
        $sql = $this->query("SELECT * FROM upload_document WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updatecareerActView($id) {
        $this->useTable = "career_activity";
        $sql = $this->query("SELECT * FROM career_activity WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateInterviewView($id) {
        $this->useTable = "interview_notes";
        $sql = $this->query("SELECT * FROM interview_notes WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateJobSiteView($id) {
        $this->useTable = "job_sites";
        $sql = $this->query("SELECT * FROM job_sites WHERE id = '$id'");
        return json_encode($sql);
    }

    public function deleteJobSite($id) {
        $this->useTable = "job_sites";
        $sql = $this->query("DELETE FROM job_sites WHERE id = '$id'");
    }

    public function updateRefrenceView($id) {
        $this->useTable = "upload_reference";
        $sql = $this->query("SELECT * FROM upload_reference WHERE id = '$id'");
        return json_encode($sql);
    }

    public function addVolunteer($data, $user) {
        $this->useTable = "volunteer_work";
        @extract($data);
        $id = $user['id'];
        $per_day_tmp = implode('*', array_filter($_POST['per_day_vol']));
        $per_week_tmp = implode('*', array_filter($_POST['per_week_vol']));
        $per_month_tmp = implode('*', array_filter($_POST['per_month_vol']));
        $vol_desc_name = mysql_escape_string($vol_desc_name);
        $add_comment_vol = mysql_escape_string($add_comment_vol);
        $sql = $this->query("INSERT INTO volunteer_work SET user_id='$id',name='$name',address='$address',telephone='$telephone',job_title='$vol_title_name',desc_skill='$vol_desc_name',from_service_date='$from_date_vol',to_service_date='$to_date_vol',type_worker='$work_type_vol',per_day='$per_day_tmp',per_week='$per_week_tmp',per_month='$per_month_tmp',supervisor_name='$super_vol',title='$tile_vol',super_telephone='$super_telephone_vol',date='$date_vol',comments='$add_comment_vol'");
    }

    public function viewVolunteer($user) {
        $this->useTable = "volunteer_work";
        $id = $user['id'];
        $sql = $this->query("SELECT * FROM volunteer_work WHERE user_id = '$id' ORDER BY id DESC");
        return $sql;
    }

    public function updateVolunteerWorkView($id) {
        $this->useTable = "volunteer_work";
        $sql = $this->query("SELECT * FROM volunteer_work WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateVolunteer($data) {
        $this->useTable = "volunteer_work";
        @extract($data);
        $per_day_tmp = implode('*', array_filter($_POST['per_day_vol']));
        $per_week_tmp = implode('*', array_filter($_POST['per_week_vol']));
        $per_month_tmp = implode('*', array_filter($_POST['per_month_vol']));
        $vol_desc_name = mysql_escape_string($vol_desc_name);
        $add_comment_vol = mysql_escape_string($add_comment_vol);
        $sql = $this->query("UPDATE volunteer_work SET name='$name',address='$address',telephone='$telephone',job_title='$vol_title_name',desc_skill='$vol_desc_name',from_service_date='$from_date_vol',to_service_date='$to_date_vol',type_worker='$work_type_vol',per_day='$per_day_tmp',per_week='$per_week_tmp',per_month='$per_month_tmp',supervisor_name='$super_vol',title='$tile_vol',super_telephone='$super_telephone_vol',date='$date_vol',comments='$add_comment_vol' WHERE id = '$vol_name_id'");
    }

    public function deleteVolunteerWork($id) {
        $this->useTable = "volunteer_work";
        $sql = $this->query("DELETE FROM volunteer_work WHERE id = '$id'");
    }

    public function addCourse($data, $user) {
        $this->useTable = "course";
        $id = $user['id'];
        @extract($data);

        $workshop = mysql_escape_string($workshop);
        $sponsor = mysql_escape_string($sponsor);
        $title = mysql_escape_string($title);
        $course_desc = mysql_escape_string($course_desc);
        $notes = mysql_escape_string($notes);

        $sql = $this->query("INSERT INTO course SET user_id='$id',workshop='$workshop',sponsor='$sponsor',date='$date',total_hrs='$total_hrs',instructor='$instructor',title='$title',course_desc='$course_desc',credit='$credit',skill='$skill',notes='$notes'");
    }

    public function updateCourse($data) {
        $this->useTable = "course";
        @extract($data);

        $workshop = mysql_escape_string($workshop);
        $sponsor = mysql_escape_string($sponsor);
        $title = mysql_escape_string($title);
        $course_desc = mysql_escape_string($course_desc);
        $notes = mysql_escape_string($notes);

        $sql = $this->query("UPDATE course SET workshop='$workshop',sponsor='$sponsor',date='$date',total_hrs='$total_hrs',instructor='$instructor',title='$title',course_desc='$course_desc',credit='$credit',skill='$skill',notes='$notes' WHERE id = '$course_id_name'");
    }

    public function viewCourse($user) {
        $this->useTable = "course";
        $id = $user['id'];
        $sql = $this->query("SELECT * FROM course WHERE user_id = '$id' ORDER BY id DESC");
        return $sql;
    }

    public function updateCourseView($id) {
        $this->useTable = "course";
        $sql = $this->query("SELECT * FROM course WHERE id = '$id'");
        return json_encode($sql);
    }

    public function deleteCourse($id) {
        $this->useTable = "course";
        $sql = $this->query("DELETE FROM course WHERE id = '$id'");
    }

    public function viewMonthlyVolunteer($id) {
        $this->useTable = "volunteer_work";
        $sql = $this->query("SELECT * FROM volunteer_work WHERE id = '$id'");
        return json_encode($sql);
    }

    public function verification($user) {
        $this->useTable = "verify_reference";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM verify_reference WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function addCareerPlan($data, $user) {
        $this->useTable = "career_plan";
        @extract($data);

        $user_id = $user['id'];
        $career_motivate = mysql_escape_string($career_motivate);
        $career_inspire = mysql_escape_string($career_inspire);
        $career_task = mysql_escape_string($career_task);
        $career_special = mysql_escape_string($career_special);
        $career_good_task = mysql_escape_string($career_good_task);
        $career_goals = mysql_escape_string($career_goals);
        $career_work = mysql_escape_string($career_work);
        $career_knowledge = mysql_escape_string($career_knowledge);
        $career_training = mysql_escape_string($career_training);
        $career_experience = mysql_escape_string($career_experience);

        $sql = $this->query("INSERT INTO career_plan SET user_id='$user_id',career_motivate='$career_motivate',career_inspire='$career_inspire',task_enjoy='$career_task',caree_skill='$career_special',career_task='$career_good_task',career_goal='$career_goals',career_work='$career_work',career_knowledge='$career_knowledge',training='$career_training',experience='$career_experience'");
    }

    public function viewCareerPlan($user) {
        $this->useTable = "career_plan";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM career_plan WHERE user_id = '$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function updateCareerPlanView($id) {
        $this->useTable = "career_plan";
        $sql = $this->query("SELECT * FROM career_plan WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateCareerPlan($data) {
        $this->useTable = "career_plan";
        @extract($data);

        $career_motivate = mysql_escape_string($career_motivate);
        $career_inspire = mysql_escape_string($career_inspire);
        $career_task = mysql_escape_string($career_task);
        $career_special = mysql_escape_string($career_special);
        $career_good_task = mysql_escape_string($career_good_task);
        $career_goals = mysql_escape_string($career_goals);
        $career_work = mysql_escape_string($career_work);
        $career_knowledge = mysql_escape_string($career_knowledge);
        $career_training = mysql_escape_string($career_training);
        $career_experience = mysql_escape_string($career_experience);

        $sql = $this->query("UPDATE career_plan SET career_motivate='$career_motivate',career_inspire='$career_inspire',task_enjoy='$career_task',caree_skill='$career_special',career_task='$career_good_task',career_goal='$career_goals',career_work='$career_work',career_knowledge='$career_knowledge',training='$career_training',experience='$career_experience' WHERE id = '$career_plan_name'");
    }

    public function deleteCareerPlan($id) {
        $this->useTable = "career_plan";
        $sql = $this->query("DELETE FROM career_plan WHERE id = '$id'");
    }

    public function addCareerActionPlan($data, $user) {
        $this->useTable = "career_action_plan";
        @extract($data);

        $user_id = $user['id'];
        $action_step_tmp = implode('*', array_filter($_POST['action_step']));
        $help_tmp = implode('*', array_filter($_POST['help']));
        $success_accomp_tmp = implode('*', array_filter($_POST['success_accomp']));
        $action_plan_goal = mysql_escape_string($action_plan_goal);
        $action_step_tmp = mysql_escape_string($action_step_tmp);
        $help_tmp = mysql_escape_string($help_tmp);
        $success_accomp_tmp = mysql_escape_string($success_accomp_tmp);
        $sql = $this->query("INSERT INTO career_action_plan SET user_id='$user_id',goal='$action_plan_goal',action_step='$action_step_tmp',help_me='$help_tmp',start_cp='$start_cp',end_cp='$end_cp',accomp_task='$success_accomp_tmp'");
    }

    public function viewCareerActionPlan($user) {
        $this->useTable = "career_action_plan";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM career_action_plan WHERE user_id = '$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function updateCareerActionPlanView($id) {
        $this->useTable = "career_action_plan";
        $sql = $this->query("SELECT * FROM career_action_plan WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateCareerActionPlan($data) {
        $this->useTable = "career_action_plan";
        @extract($data);

        $action_step_tmp = implode('*', array_filter($_POST['action_step']));
        $help_tmp = implode('*', array_filter($_POST['help']));
        $success_accomp_tmp = implode('*', array_filter($_POST['success_accomp']));
        $action_plan_goal = mysql_escape_string($action_plan_goal);
        $action_step_tmp = mysql_escape_string($action_step_tmp);
        $help_tmp = mysql_escape_string($help_tmp);
        $success_accomp_tmp = mysql_escape_string($success_accomp_tmp);
        $sql = $this->query("UPDATE career_action_plan SET goal='$action_plan_goal',action_step='$action_step_tmp',help_me='$help_tmp',start_cp='$start_cp',end_cp='$end_cp',accomp_task='$success_accomp_tmp' WHERE id = '$action_plan_name'");
    }

    public function deleteCareerActionPlan($id) {
        $this->useTable = "career_action_plan";
        $sql = $this->query("DELETE FROM career_action_plan WHERE id = '$id'");
    }

    public function addEducation($data, $user) {
        $this->useTable = "education";
        @extract($data);
        $user_id = $user['id'];
        $school_name_tmp = implode('*', array_filter($_POST['school_name']));
        $english_lang_tmp = implode('*', array_filter($_POST['english_lang']));
        $computer_skill_tmp = implode('*', array_filter($_POST['computer_skill']));
        if (!empty($_FILES['school_transcript']['name'])) {
            $school_transcript_tmp = $_FILES['school_transcript']['name'];
            move_uploaded_file($_FILES['school_transcript']['tmp_name'], "img/" . $_FILES['school_transcript']['name']);
        }
        if (!empty($_FILES['award_upload']['name'])) {
            $award_upload_tmp = $_FILES['award_upload']['name'];
            move_uploaded_file($_FILES['award_upload']['tmp_name'], "img/" . $_FILES['award_upload']['name']);
        }
        if (!empty($_FILES['degree_upload']['name'])) {
            $degree_upload_tmp = $_FILES['degree_upload']['name'];
            move_uploaded_file($_FILES['degree_upload']['tmp_name'], "img/" . $_FILES['degree_upload']['name']);
        }
        if (!empty($_FILES['refernce_upload']['name'])) {
            $refernce_upload_tmp = $_FILES['refernce_upload']['name'];
            move_uploaded_file($_FILES['refernce_upload']['tmp_name'], "img/" . $_FILES['refernce_upload']['name']);
        }
        $sql = $this->query("INSERT INTO education SET user_id='$user_id',grade='$education_grade',"
                . "complete_year='$complete_year',secondary_school='$secodary_school_name',grade_attend='$school_grade',"
                . "is_graduate='$is_graduate',graduation_date='$graduate_date',final_mark='$final_marks',"
                . "credit='$credit_name',other_school='$school_name_tmp',institute_name='$institute_name',"
                . "start_date='$institute_sdate',end_date='$institute_edate',degree='$institute_degree',"
                . "certificate='$institute_certificate',diploma='$deploma_name',institute_credit='$institute_credit',"
                . "language_english='$english_lang_tmp',school_transcript='$school_transcript_tmp',"
                . "computer_skill='$computer_skill_tmp',award_type='$award_type',award_date='$award_date',"
                . "award_upload='$award_upload_tmp',degree_type='$degree_type',degree_date='$degree_date',"
                . "degree_upload='$degree_upload_tmp',leader_type='$leader_type',leader_date='$leader_date',"
                . "club_type='$club_type',club_date='$club_date',letter_name='$refernce_letter_name',letter_upload='$refernce_upload_tmp'");
    }

    public function viewEducation($user) {
        $this->useTable = "education";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM education WHERE user_id = '$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function updateEducationView($id) {
        $this->useTable = "education";
        $sql = $this->query("SELECT * FROM education WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateEducation($data) {
        $this->useTable = "education";
        @extract($data);
        $school_name_tmp = implode('*', array_filter($_POST['school_name']));
        $english_lang_tmp = implode('*', array_filter($_POST['english_lang']));
        $computer_skill_tmp = implode('*', array_filter($_POST['computer_skill']));
        if (!empty($_FILES['school_transcript']['name'])) {
            $school_transcript_tmp = $_FILES['school_transcript']['name'];
            move_uploaded_file($_FILES['school_transcript']['tmp_name'], "img/" . $_FILES['school_transcript']['name']);
        } else {
            $school_transcript_tmp = $school_trans_name;
        }
        if (!empty($_FILES['award_upload']['name'])) {
            $award_upload_tmp = $_FILES['award_upload']['name'];
            move_uploaded_file($_FILES['award_upload']['tmp_name'], "img/" . $_FILES['award_upload']['name']);
        } else {
            $award_upload_tmp = $award_upload_name;
        }
        if (!empty($_FILES['degree_upload']['name'])) {
            $degree_upload_tmp = $_FILES['degree_upload']['name'];
            move_uploaded_file($_FILES['degree_upload']['tmp_name'], "img/" . $_FILES['degree_upload']['name']);
        } else {
            $degree_upload_tmp = $degree_upload_name;
        }
        if (!empty($_FILES['refernce_upload']['name'])) {
            $refernce_upload_tmp = $_FILES['refernce_upload']['name'];
            move_uploaded_file($_FILES['refernce_upload']['tmp_name'], "img/" . $_FILES['refernce_upload']['name']);
        } else {
            $refernce_upload_tmp = $refernce_upload_name;
        }
        $sql = $this->query("UPDATE education SET grade='$education_grade',complete_year='$complete_year',"
                . "secondary_school='$secodary_school_name',grade_attend='$school_grade',"
                . "is_graduate='$is_graduate',graduation_date='$graduate_date',final_mark='$final_marks',"
                . "credit='$credit_name',other_school='$school_name_tmp',institute_name='$institute_name',"
                . "start_date='$institute_sdate',end_date='$institute_edate',degree='$institute_degree',"
                . "certificate='$institute_certificate',diploma='$deploma_name',institute_credit='$institute_credit',"
                . "language_english='$english_lang_tmp',school_transcript='$school_transcript_tmp',"
                . "computer_skill='$computer_skill_tmp',award_type='$award_type',award_date='$award_date',"
                . "award_upload='$award_upload_tmp',degree_type='$degree_type',degree_date='$degree_date',"
                . "degree_upload='$degree_upload_tmp',leader_type='$leader_type',leader_date='$leader_date',"
                . "club_type='$club_type',club_date='$club_date',letter_name='$refernce_letter_name',"
                . "letter_upload='$refernce_upload_tmp' WHERE id = '$education_name'");
    }

    public function deleteEducation($id) {
        $this->useTable = "education";
        $sql = $this->query("DELETE FROM education WHERE id = '$id'");
    }

    public function updateTransactionId($data, $txn, $status, $amount, $date) {
        $this->useTable = "register";
        $value = explode(',', $data);
        $email = $value[0];
        $progrm_type = $value[1];
        $progrm_dur = $value[2];
        $sql4 = $this->query("SELECT * FROM register WHERE email = '$email'");
        foreach ($sql4 as $row) {
            $program = $row['register']['program'];
            $dur_date = $row['register']['duration_date'];
        }
        if ($dur_date == '') {
            $sql = $this->query("UPDATE register SET program='$progrm_type', payment_status='$status', txn_id='$txn', amount = (amount + '$amount'),payment_date='$date',program_duration='$progrm_dur' WHERE email = '$email'");
            $sql3 = $this->query("SELECT * FROM payment WHERE txn_id='$txn'");
            if (count($sql3) > 0) {
                $sql2 = $this->query("UPDATE payment SET user_email='$email', payment_status='$status', amount = '$amount', payment_date='$date' WHERE txn_id='$txn'");
            } else {
                $sql5 = $this->query("INSERT payment SET user_email='$email', txn_id='$txn', payment_status='$status', amount = '$amount', payment_date='$date'");
            }
        } else {
            if (isset($value[3])) {
                $day = $value[3];
                $date_value = date('Y-m-d', strtotime($day . 'days'));
            }
            $query1 = $this->query("UPDATE register SET program='$progrm_type', payment_status='$status', txn_id='$txn', amount = (amount + '$amount'), duration_date='$date_value', program_duration='$progrm_dur' WHERE email = '$email'");
            $query2 = $this->query("SELECT * FROM payment WHERE txn_id='$txn'");
            if (count($query2) > 0) {
                $query3 = $this->query("UPDATE payment SET user_email='$email', payment_status='$status', amount = '$amount', payment_date='$date' WHERE txn_id='$txn'");
            } else {
                $query4 = $this->query("INSERT payment SET user_email='$email', txn_id='$txn', payment_status='$status', amount = '$amount', payment_date='$date'");
            }
        }
    }

    public function addJobRef($data, $user) {
        $this->useTable = "job_reference";

        $user_id = $user['id'];
        for ($i = 0; $i < $data['job_ref_count']; $i++) {
            $company_name_tmp = $data['company_name'][$i];
            $job_type_tmp = $data['job_type'][$i];
            $position_tmp = $data['position'][$i];
            $job_title_tmp = $data['job_title'][$i];
            $employee_list_tmp = $data['employee_list'][$i];
            $responsibility_tmp = $data['responsibility'][$i];
            $knowledge_tmp = json_encode($data['knowledge' . $i]);
            $how_learnt_tmp = json_encode($data['how_learnt' . $i]);
            $sql = $this->query("INSERT INTO job_reference SET user_id='$user_id',company_name='$company_name_tmp',job_type='$job_type_tmp',position='$position_tmp',job_title='$job_title_tmp',employee_length='$employee_list_tmp',resposibility='$responsibility_tmp',knowledge='$knowledge_tmp',how_learnt='$how_learnt_tmp'");
        }
    }

    public function viewJobRef($user) {
        $this->useTable = "job_reference";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM job_reference WHERE user_id = '$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function updateJobRefView($id) {
        $this->useTable = "job_reference";
        $sql = $this->query("SELECT * FROM job_reference WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateJobRef($data) {
        $this->useTable = "job_reference";
        @extract($data);
        $knowledge_tmp = json_encode($knowledge);
        $how_learnt_tmp = json_encode($how_learnt);
        $sql = $this->query("UPDATE job_reference SET company_name='$company_name',job_type='$job_type',position='$position',job_title='$job_title',employee_length='$employee_list',resposibility='$responsibility',knowledge='$knowledge_tmp',how_learnt='$how_learnt_tmp' WHERE id='$job_ref_name'");
    }

    public function deleteJobRef($id) {
        $this->useTable = "job_reference";
        $sql = $this->query("DELETE FROM job_reference WHERE id = '$id'");
    }

    public function addSchoolRef($data, $user) {
        $this->useTable = "school_reference";
        @extract($data);
        $user_id = $user['id'];
        if (!empty($_FILES['upload_ref']['name'])) {
            $upload_ref_tmp = $_FILES['upload_ref']['name'];
            move_uploaded_file($_FILES['upload_ref']['tmp_name'], "img/" . $_FILES['upload_ref']['name']);
        }
        $sql = $this->query("INSERT INTO school_reference SET user_id='$user_id',school_name='$school_name',reference_name='$ref_name',upload_ref='$upload_ref_tmp'");
    }

    public function viewSchoolRef($user) {
        $this->useTable = "school_reference";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM school_reference WHERE user_id='$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function updateSchoolRefView($id) {
        $this->useTable = "school_reference";
        $sql = $this->query("SELECT * FROM school_reference WHERE id='$id'");
        return json_encode($sql);
    }

    public function updateSchoolRef($data) {
        $this->useTable = "school_reference";
        @extract($data);
        if (!empty($_FILES['upload_ref']['name'])) {
            $upload_ref_tmp = $_FILES['upload_ref']['name'];
            move_uploaded_file($_FILES['upload_ref']['tmp_name'], "img/" . $_FILES['upload_ref']['name']);
        } else {
            $upload_ref_tmp = $school_ref_upload;
        }
        $sql = $this->query("UPDATE school_reference SET school_name='$school_name',reference_name='$ref_name',upload_ref='$upload_ref_tmp' WHERE id = '$school_ref_name'");
    }

    public function deleteSchoolRef($id) {
        $this->useTable = "school_reference";
        $sql = $this->query("DELETE FROM school_reference WHERE id='$id'");
    }

    public function addOrgRef($data, $user) {
        $this->useTable = "volunteer_reference";
        @extract($data);
        $user_id = $user['id'];
        if (!empty($_FILES['upload_org_ref']['name'])) {
            $upload_ref_tmp = $_FILES['upload_org_ref']['name'];
            move_uploaded_file($_FILES['upload_org_ref']['tmp_name'], "img/" . $_FILES['upload_org_ref']['name']);
        }
        $sql = $this->query("INSERT INTO volunteer_reference SET user_id='$user_id',org_name='$org_name',date_start='$date_start_org_name',date_finish='$date_finish_org_name',total_hours='$total_hr_org_name',upload_ref='$upload_ref_tmp'");
    }

    public function viewVolRef($user) {
        $this->useTable = "volunteer_reference";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM volunteer_reference WHERE user_id = '$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function updateOrgRefView($id) {
        $this->useTable = "volunteer_reference";
        $sql = $this->query("SELECT * FROM volunteer_reference WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateOrgRef($data) {
        $this->useTable = "volunteer_reference";
        @extract($data);
        if (!empty($_FILES['upload_org_ref']['name'])) {
            $upload_ref_tmp = $_FILES['upload_org_ref']['name'];
            move_uploaded_file($_FILES['upload_org_ref']['tmp_name'], "img/" . $_FILES['upload_org_ref']['name']);
        } else {
            $upload_ref_tmp = $org_ref_upload;
        }
        $sql = $this->query("UPDATE volunteer_reference SET org_name='$org_name',date_start='$date_start_org_name',date_finish='$date_finish_org_name',total_hours='$total_hr_org_name',upload_ref='$upload_ref_tmp' WHERE id = '$org_ref_name'");
    }

    public function addCharRef($data, $user) {
        $this->useTable = "character_reference";
        @extract($data);
        $user_id = $user['id'];
        $sql = $this->query("INSERT INTO character_reference SET user_id='$user_id',name='$ref_name',address='$address_char',city='$city_char',province='$province_char',email='$email_char',telephone='$telephone_char'");
    }

    public function viewCharRef($user) {
        $this->useTable = "character_reference";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM character_reference WHERE user_id = '$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function updateCharRefView($id) {
        $this->useTable = "character_reference";
        $sql = $this->query("SELECT * FROM character_reference WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateCharRef($data) {
        $this->useTable = "character_reference";
        @extract($data);
        $sql = $this->query("UPDATE character_reference SET name='$ref_name',address='$address_char',city='$city_char',province='$province_char',email='$email_char',telephone='$telephone_char' WHERE id='$ref_char_name'");
    }

    public function deleteCharRefView($id) {
        $this->useTable = "character_reference";
        $sql = $this->query("DELETE FROM character_reference WHERE id = '$id'");
    }

    public function payHistory($email) {
        $this->useTable = "payment";
        $sql = $this->query("SELECT * FROM payment WHERE user_email = '$email' ORDER BY id DESC");
        return $sql;
    }

    public function addEsstintialSkills($user_id, $questions, $answers, $skill_type) {
        $this->useTable = 'essential_skills';

        $questions = explode('|', $questions);
        $answers = explode('|', $answers);

        $data['question'] = $questions;
        $data['answers'] = $answers;

        $data_en = json_encode($data);

        $query = "SELECT * FROM essential_skills WHERE user_id = '$user_id' AND skill_type = '$skill_type'";

        if (count($this->query($query)) == 0) {

            $query = "INSERT INTO essential_skills SET user_id = '$user_id', skill_type = '$skill_type', skill_data = '$data_en'";
        } else {

            $query = "UPDATE essential_skills SET skill_data = '$data_en' WHERE user_id = '$user_id' AND skill_type = '$skill_type'";
        }

        $this->query($query);
    }

    public function getEssentialSkills($user_id) {
        $this->useTable = 'essential_skills';
        return $this->query("SELECT * FROM essential_skills WHERE user_id = '$user_id'");
    }

    public function deleteEssentialSkills($id) {
        $this->useTable = 'essential_skills';
        $this->query("DELETE FROM essential_skills WHERE id = '$id'");
        return 1;
    }

    public function fetchEssentialSkills($skill, $user_id) {
        $this->useTable = 'essential_skills';
        $response = json_decode($this->query("SELECT * FROM essential_skills WHERE skill_type = '$skill' AND user_id = '$user_id'")[0]['essential_skills']['skill_data']);
        return json_encode($response);
    }

    public function updateEssentialSkillsView($id) {
        $this->useTable = 'essential_skills';
        $sql = $this->query("SELECT * FROM essential_skills WHERE id='$id'");
        return json_encode($sql);
    }

    public function updateEsstintialSkills($data) {
        $this->useTable = 'essential_skills';
        @extract($data);
        $questions = explode('|', $essential_skills_update_questions);
        $answers = explode('|', $essential_skills_update_answers);

        $data_s['question'] = $questions;
        $data_s['answers'] = $answers;

        $data_en = json_encode($data_s);
        $query = "UPDATE essential_skills SET skill_data = '$data_en' WHERE id = '$essen_val_name'";
        $this->query($query);
    }

    public function countCareerPlan($user) {
        $this->useTable = "career_action_plan";
        $user_id = $user['id'];
        $sql1 = count($this->query("SELECT * FROM career_action_plan WHERE user_id='$user_id'"));
        $sql2 = count($this->query("SELECT * FROM career_plan WHERE user_id='$user_id'"));
        $avg = ($sql1 + $sql2) / 2;
        return $avg;
    }

    public function countResume($user) {
        $this->useTable = "upload_resume";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM upload_resume WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countJobSchool($user) {
        $this->useTable = "school_application";
        $user_id = $user['id'];
        $sql1 = count($this->query("SELECT * FROM school_application WHERE user_id = '$user_id'"));
        $sql2 = count($this->query("SELECT * FROM job_application WHERE user_id = '$user_id'"));
        $avg = ($sql1 + $sql2) / 2;
        return $avg;
    }

    public function countAccomp($user) {
        $this->useTable = "acomplishment";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM acomplishment WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countKeyskill($user) {
        $this->useTable = "key_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM key_skill WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countEssentialSkill($user) {
        $this->useTable = "essential_skills";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM essential_skills WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countCareerRelatedActivity($user) {
        $this->useTable = "career_activity";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM career_activity WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countEducation($user) {
        $this->useTable = "education";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM education WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countInterviewNotes($user) {
        $this->useTable = "interview_notes";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM interview_notes WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countTasklist($user) {
        $this->useTable = "task_list";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM task_list WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countJobsearchSite($user) {
        $this->useTable = "job_sites";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM job_sites WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countCareerContact($user) {
        $this->useTable = "career_contacts";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM career_contacts WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countReferences($user) {
        $this->useTable = "job_reference";
        $user_id = $user['id'];
        $sql1 = count($this->query("SELECT * FROM job_reference WHERE user_id = '$user_id'"));
        $sql2 = count($this->query("SELECT * FROM upload_document WHERE user_id = '$user_id'"));
        $sql3 = count($this->query("SELECT * FROM school_reference WHERE user_id = '$user_id'"));
        $sql4 = count($this->query("SELECT * FROM volunteer_reference WHERE user_id = '$user_id'"));
        $sql5 = count($this->query("SELECT * FROM character_reference WHERE user_id = '$user_id'"));
        $avg = ($sql1 + $sql2 + $sql3 + $sql4 + $sql5) / 5;
        return $avg;
    }

    public function countCareerGoal($user) {
        $this->useTable = "career_goal";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM career_goal WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countEvent($user) {
        $this->useTable = "event_reminder";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM event_reminder WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countSwot($user) {
        $this->useTable = "swot";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM swot WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function countMissionStatement($user) {
        $this->useTable = "mission_statement";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM mission_statement WHERE user_id = '$user_id'");
        return count($sql);
    }

    public function updateDeclineData($id) {
        $this->useTable = "verify_reference";
        $sql = $this->query("UPDATE verify_reference SET accept = '2' WHERE id = '$id'");
    }

    public function updateAcceptData($id) {
        $this->useTable = "verify_reference";
        $sql = $this->query("UPDATE verify_reference SET accept = '1' WHERE id = '$id'");
    }

    public function addCompSkill($data, $user_id) {
        $this->useTable = "computer_skill";
        @extract($data);
        $sql1 = $this->query("SELECT * FROM computer_skill WHERE user_id='$user_id' AND skill_level='$skill_level' AND skill='$skill_list'");
        if (count($sql1) == 0) {
            $sql = $this->query("INSERT INTO computer_skill SET user_id='$user_id', skill_level='$skill_level', skill='$skill_list'");
        }
    }

    public function viewcompSkill($user) {
        $this->useTable = "computer_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM computer_skill WHERE user_id = '$user_id'");
        return $sql;
    }

    public function updateCompView($id) {
        $this->useTable = "computer_skill";
        $sql = $this->query("SELECT * FROM computer_skill WHERE id='$id'");
        return json_encode($sql);
    }

    public function updateCompSkill($data) {
        $this->useTable = "computer_skill";
        @extract($data);
        $sql = $this->query("UPDATE computer_skill SET skill_level='$skill_level', skill='$skill_list' WHERE id='$comp_skill_id'");
    }

    public function deleteCompSkill($id) {
        $this->useTable = "computer_skill";
        $sql = $this->query("DELETE FROM computer_skill WHERE id='$id'");
    }

    public function viewData($user) {
        $this->useTable = "view_me";
        $mcd = $user['mcd'];
        $sql = $this->query("SELECT * FROM view_me WHERE mcd = '$mcd' AND verified='verify'");
        return $sql;
    }

    public function deleteView($id) {
        $this->useTable = "view_me";
        $sql = $this->query("UPDATE view_me SET verified='', select_data='', login_time='', logout_time='' WHERE id = '$id'");
    }

    public function addEvidenceSkill($data, $user_id) {
        $this->useTable = "evidence_skill";
        @extract($data);
        $current_date = date('Y-m-d');
        if (!empty($_FILES['upload_doc']['name'])) {
            $upload_doc = $_FILES['upload_doc']['name'];
            move_uploaded_file($_FILES['upload_doc']['tmp_name'], "img/" . $_FILES['upload_doc']['name']);
        }
        $sql = $this->query("INSERT INTO evidence_skill SET user_id='$user_id', evidence_type='$evi_type', document_name='$doc_name', upload_doc='$upload_doc', date='$current_date'");
    }

    public function viewDiplomaEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Diplomas'");
        return $sql;
    }

    public function viewCertificateEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Certificates'");
        return $sql;
    }

    public function viewLicenseEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='License'");
        return $sql;
    }

    public function viewAwardEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Awards'");
        return $sql;
    }

    public function viewScholarshipEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Scholarships'");
        return $sql;
    }

    public function viewEvaluationEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Job Evaluations'");
        return $sql;
    }

    public function viewPromotionEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Promotions'");
        return $sql;
    }

    public function viewAppriciationEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Letter of Appreciation'");
        return $sql;
    }

    public function viewPerformanceEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Performance Letters'");
        return $sql;
    }

    public function viewOtherEvidenceSkill($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND evidence_type='Others'");
        return $sql;
    }

    public function deletEvidenceSkill($id) {
        $this->useTable = "evidence_skill";
        $sql = $this->query("DELETE FROM evidence_skill WHERE id = '$id'");
    }

    public function updateTransactionData($email, $txn, $status, $amount, $date) {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE txn_id='$txn'");
        if (count($sql) > 0) {
            $sql1 = $this->query("UPDATE payment SET user_email='$email',payment_status='$status',amount='$amount',payment_date='$date' WHERE txn_id='$txn'");
        } else {
            if ($status == 'Completed') {
                $sql4 = $this->query("SELECT * FROM register WHERE email='$email'");
                foreach ($sql4 as $row) {
                    $dur_date = $row['register']['duration_date'];
                    $pay_date = $row['register']['payment_date'];
                    $prgrm_dur = $row['register']['program_duration'];
                }
                if ($dur_date == '' && $prgrm_dur == '6month') {
                    $payment_date = date_create(date('Y-m-d', strtotime($pay_date)));
                    $current_date1 = date_create(date('Y-m-d'));
                    $diff = date_diff($payment_date, $current_date1);
                    $day = $diff->format("%a");
                    $day_val1 = (183 - $day);
                    $total_date1 = $day_val1 + 183;
                    $date_value1 = date('Y-m-d', strtotime($total_date1 . 'days'));
                }
                if ($dur_date == '' && $prgrm_dur == 'year') {
                    $payment_date = date_create(date('Y-m-d', strtotime($pay_date)));
                    $current_date1 = date_create(date('Y-m-d'));
                    $diff = date_diff($payment_date, $current_date1);
                    $day = $diff->format("%a");
                    $day_val1 = (365 - $day);
                    $total_date1 = $day_val1 + 365;
                    $date_value1 = date('Y-m-d', strtotime($total_date1 . 'days'));
                }
                if ($dur_date != '' && $prgrm_dur == '6month') {
                    $payment_date = date_create(date('Y-m-d', strtotime($dur_date)));
                    $current_date1 = date_create(date('Y-m-d'));
                    $diff = date_diff($payment_date, $current_date1);
                    $day = $diff->format("%a");
                    $total_date1 = $day + 183;
                    $date_value1 = date('Y-m-d', strtotime($total_date1 . 'days'));
                }
                if ($dur_date != '' && $prgrm_dur == 'year') {
                    $payment_date = date_create(date('Y-m-d', strtotime($dur_date)));
                    $current_date1 = date_create(date('Y-m-d'));
                    $diff = date_diff($payment_date, $current_date1);
                    $day = $diff->format("%a");
                    $total_date1 = $day + 365;
                    $date_value1 = date('Y-m-d', strtotime($total_date1 . 'days'));
                }
                $sql2 = $this->query("UPDATE register SET txn_id='$txn', payment_status='$status', amount=(amount + $amount), duration_date='$date_value1' WHERE email='$email'");
                $sql3 = $this->query("INSERT INTO payment SET user_email='$email',txn_id='$txn', payment_status='$status', amount ='$amount',payment_date='$date'");
            }
        }
    }

    public function viewResumeIndustry($user) {
        $this->useTable = "resume_industry";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM upload_resume WHERE user_id = '$user_id' AND added_mycd = ''");
        return $sql;
    }

    public function viewResumeIndustryAdded($user) {
        $this->useTable = "resume_industry";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM upload_resume WHERE user_id = '$user_id' AND added_mycd = 'added'");
        return $sql;
    }

    public function viewAccompIndustry($user) {
        $this->useTable = "acomplishment";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM acomplishment WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewAccompIndustryAdded($user) {
        $this->useTable = "acomplishment";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM acomplishment WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewKeyIndustry($user) {
        $this->useTable = "key_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM key_skill WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewKeyIndustryAdded($user) {
        $this->useTable = "key_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM key_skill WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewEssentialIndustry($user) {
        $this->useTable = "essential_skills";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM essential_skills WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewEssentialIndustryAdded($user) {
        $this->useTable = "essential_skills";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM essential_skills WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewMissionIndustry($user) {
        $this->useTable = "mission_statement";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM mission_statement WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewMissionIndustryAdded($user) {
        $this->useTable = "mission_statement";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM mission_statement WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewSwotIndustry($user) {
        $this->useTable = "swot";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM swot WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewCompleteRef($user) {
        $this->useTable = "verify_reference";
        $user_id = $user['id'];
        $sql = $this->query("SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.user_id = '$user_id' AND verify_reference.status='complete' AND verify_reference.added_mycd=''");
        return $sql;
    }

    public function viewCompleteRefAdded($user) {
        $this->useTable = "verify_reference";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM verify_reference WHERE user_id = '$user_id' AND status='complete' AND added_mycd='added'");
        return $sql;
    }

    public function viewWorkExperience($user) {
        $this->useTable = "workplace_experience";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM workplace_experience WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewWorkExperienceAdded($user) {
        $this->useTable = "workplace_experience";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM workplace_experience WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewSwotIndustryAdded($user) {
        $this->useTable = "swot";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM swot WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewEducationIndustry($user) {
        $this->useTable = "education";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM education WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewEducationIndustryAdded($user) {
        $this->useTable = "education";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM education WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewCareerActivity($user) {
        $this->useTable = "career_activity";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM career_activity WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewCareerActivityAdded($user) {
        $this->useTable = "career_activity";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM career_activity WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewVolunteerWork($user) {
        $this->useTable = "volunteer_work";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM volunteer_work WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewVolunteerWorkAdded($user) {
        $this->useTable = "volunteer_work";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM volunteer_work WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewCourseData($user) {
        $this->useTable = "course";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM course WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewCourseDataAdded($user) {
        $this->useTable = "course";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM course WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewEvidenceIndustry($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewEvidenceIndustryAdded($user) {
        $this->useTable = "evidence_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM evidence_skill WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function viewComputerIndustry($user) {
        $this->useTable = "computer_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM computer_skill WHERE user_id = '$user_id' AND added_mycd=''");
        return $sql;
    }

    public function viewComputerIndustryAdded($user) {
        $this->useTable = "computer_skill";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM computer_skill WHERE user_id = '$user_id' AND added_mycd='added'");
        return $sql;
    }

    public function userView($mcd) {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE crv_code='$mcd'");
        return $sql;
    }

    public function resumeDataIndus($mcd) {
        $this->useTable = "upload_resume";
        $sql = $this->query("SELECT upload_resume.*, register.* FROM upload_resume INNER JOIN register ON upload_resume.user_id = register.id WHERE register.crv_code = '$mcd' AND upload_resume.added_mycd = 'added'");
        return $sql;
    }

    public function refDataIndus($mcd) {
        $this->useTable = "verify_reference";
        $sql = $this->query("SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE register.crv_code = '$mcd' AND verify_reference.added_mycd = 'added'");
        return $sql;
    }

    public function accompDataIndus($mcd) {
        $this->useTable = "acomplishment";
        $sql = $this->query("SELECT acomplishment.*, register.* FROM acomplishment INNER JOIN register ON acomplishment.user_id = register.id WHERE register.crv_code = '$mcd' AND acomplishment.added_mycd = 'added'");
        return $sql;
    }

    public function keyDataIndus($mcd) {
        $this->useTable = "key_skill";
        $sql = $this->query("SELECT key_skill.*, register.* FROM key_skill INNER JOIN register ON key_skill.user_id = register.id WHERE register.crv_code = '$mcd' AND key_skill.added_mycd = 'added'");
        return $sql;
    }

    public function missionDataIndus($mcd) {
        $this->useTable = "mission_statement";
        $sql = $this->query("SELECT mission_statement.*, register.* FROM mission_statement INNER JOIN register ON mission_statement.user_id = register.id WHERE register.crv_code = '$mcd' AND mission_statement.added_mycd = 'added'");
        return $sql;
    }

    public function swotDataIndus($mcd) {
        $this->useTable = "swot";
        $sql = $this->query("SELECT swot.*, register.* FROM swot INNER JOIN register ON swot.user_id = register.id WHERE register.crv_code = '$mcd' AND swot.added_mycd = 'added'");
        return $sql;
    }

    public function educationDataIndus($mcd) {
        $this->useTable = "education";
        $sql = $this->query("SELECT education.*, register.* FROM education INNER JOIN register ON education.user_id = register.id WHERE register.crv_code = '$mcd' AND education.added_mycd = 'added'");
        return $sql;
    }

    public function evidenceDataIndus($mcd) {
        $this->useTable = "evidence_skill";
        $sql = $this->query("SELECT evidence_skill.*, register.* FROM evidence_skill INNER JOIN register ON evidence_skill.user_id = register.id WHERE register.crv_code = '$mcd' AND evidence_skill.added_mycd = 'added'");
        return $sql;
    }

    public function computerDataIndus($mcd) {
        $this->useTable = "computer_skill";
        $sql = $this->query("SELECT computer_skill.*, register.* FROM computer_skill INNER JOIN register ON computer_skill.user_id = register.id WHERE register.crv_code = '$mcd' AND computer_skill.added_mycd = 'added'");
        return $sql;
    }

    public function essentialDataIndus($mcd) {
        $this->useTable = "essential_skills";
        $sql = $this->query("SELECT essential_skills.*, register.* FROM essential_skills INNER JOIN register ON essential_skills.user_id = register.id WHERE register.crv_code = '$mcd' AND essential_skills.added_mycd = 'added'");
        return $sql;
    }

    public function careerActivityDataIndus($mcd) {
        $this->useTable = "career_activity";
        $sql = $this->query("SELECT career_activity.*, register.* FROM career_activity INNER JOIN register ON career_activity.user_id = register.id WHERE register.crv_code = '$mcd' AND career_activity.added_mycd = 'added'");
        return $sql;
    }

    public function volunteerWorkDataIndus($mcd) {
        $this->useTable = "volunteer_work";
        $sql = $this->query("SELECT volunteer_work.*, register.* FROM volunteer_work INNER JOIN register ON volunteer_work.user_id = register.id WHERE register.crv_code = '$mcd' AND volunteer_work.added_mycd = 'added'");
        return $sql;
    }

    public function workExpIndus($mcd) {
        $this->useTable = "workplace_experience";
        $sql = $this->query("SELECT workplace_experience.*, register.* FROM workplace_experience INNER JOIN register ON workplace_experience.user_id = register.id WHERE register.crv_code = '$mcd' AND workplace_experience.added_mycd = 'added'");
        return $sql;
    }

    public function courseDataIndus($mcd) {
        $this->useTable = "course";
        $sql = $this->query("SELECT course.*, register.* FROM course INNER JOIN register ON course.user_id = register.id WHERE register.crv_code = '$mcd' AND course.added_mycd = 'added'");
        return $sql;
    }

    public function updateIndustry($data) {
        @extract($data);
        if ($table_name == 'upload_resume') {
            $this->useTable = "upload_resume";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE upload_resume SET added_mycd='added',view_data='$select_data' WHERE resume_id='$v1'");
            }
            return 1;
        }
        if ($table_name == 'verify_reference') {
            $this->useTable = "verify_reference";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE verify_reference SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'acomplishment') {
            $this->useTable = "acomplishment";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE acomplishment SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'key_skill') {
            $this->useTable = "key_skill";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE key_skill SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'essential_skills') {
            $this->useTable = "essential_skills";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE essential_skills SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'mission_statement') {
            $this->useTable = "mission_statement";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE mission_statement SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'swot') {
            $this->useTable = "swot";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE swot SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'education') {
            $this->useTable = "education";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE education SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'evidence_skill') {
            $this->useTable = "evidence_skill";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE evidence_skill SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'computer_skill') {
            $this->useTable = "computer_skill";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE computer_skill SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'career_activity') {
            $this->useTable = "career_activity";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE career_activity SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'volunteer_work') {
            $this->useTable = "volunteer_work";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE volunteer_work SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'course') {
            $this->useTable = "course";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE course SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }

        if ($table_name == 'workplace_experience') {
            $this->useTable = "workplace_experience";
            $v_data = explode(',', $_POST['option_id']);
            for ($i = 0; $i < count($v_data); $i++) {
                $v1 = $v_data[$i];
                $sql = $this->query("UPDATE workplace_experience SET added_mycd='added',view_data='$select_data' WHERE id='$v1'");
            }
            return 1;
        }
    }

    public function myCdValue($id, $table) {
        if ($table == 'upload_resume') {
            $this->useTable = "upload_resume";
            $sql = $this->query("SELECT * FROM upload_resume WHERE resume_id = '$id'");
            return $sql;
        }

        if ($table == 'verify_reference') {
            $this->useTable = "verify_reference";
            $sql = $this->query("SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id = '$id'");
            return $sql;
        }

        if ($table == 'acomplishment') {
            $this->useTable = "acomplishment";
            $sql = $this->query("SELECT * FROM acomplishment WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'key_skill') {
            $this->useTable = "key_skill";
            $sql = $this->query("SELECT * FROM key_skill WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'mission_statement') {
            $this->useTable = "mission_statement";
            $sql = $this->query("SELECT * FROM mission_statement WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'swot') {
            $this->useTable = "swot";
            $sql = $this->query("SELECT * FROM swot WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'education') {
            $this->useTable = "education";
            $sql = $this->query("SELECT * FROM education WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'evidence_skill') {
            $this->useTable = "evidence_skill";
            $sql = $this->query("SELECT * FROM evidence_skill WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'computer_skill') {
            $this->useTable = "computer_skill";
            $sql = $this->query("SELECT * FROM computer_skill WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'essential_skills') {
            $this->useTable = "essential_skills";
            $sql = $this->query("SELECT * FROM essential_skills WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'career_activity') {
            $this->useTable = "career_activity";
            $sql = $this->query("SELECT * FROM career_activity WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'course') {
            $this->useTable = "course";
            $sql = $this->query("SELECT * FROM course WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'volunteer_work') {
            $this->useTable = "volunteer_work";
            $sql = $this->query("SELECT * FROM volunteer_work WHERE id = '$id'");
            return $sql;
        }

        if ($table == 'workplace_experience') {
            $this->useTable = "workplace_experience";
            $sql = $this->query("SELECT * FROM workplace_experience WHERE id = '$id'");
            return $sql;
        }
    }

    public function inviteIndustry($data) {
        $this->useTable = "view_me";
        @extract($data);
        $sql2 = $this->query("SELECT * FROM register WHERE crv_code='$for_mcd'");
        foreach ($sql2 as $row) {
            $name = ucwords($row['register']['first_name'] . " " . $row['register']['last_name']);
        }
        $sql = $this->query("SELECT * FROM view_me WHERE mcd='$for_mcd' AND email = '$email_val'");
        if (count($sql) == 0) {
            $current_date = date('d-m-Y');
            $sql1 = $this->query("INSERT INTO view_me SET mcd='$for_mcd', email='$email_val', password='$row_password', date_invite='$current_date', company_name='$company_name'");
            $body = '<table>
                <tr><td>Hi,</td></tr><br/>
                <tr>
                <td>We are pleased to share MCD Number <b>' . $for_mcd . '</b> and Password <b>' . $row_password . '</b> and Company Name <b>' . $company_name . '</b> to access my online career dashboard. </td>
                </tr><br/>
                <tr>
                <td>Many Thanks,</td>
                </tr>
                <tr>
                <td>' . $name . '</td>
                </tr>
                    </table>';
            $this->sendEmail3($email_val, $body);
            return 1;
        } else {
            return 0;
        }
    }

    public function jopApplyInvite($data) {
        $this->useTable = "view_me";
        @extract($data);
        $c_date = date('d-m-Y');
        $sql2 = $this->query("SELECT * FROM register WHERE crv_code='$for_mcd'");
        foreach ($sql2 as $row) {
            $name = ucwords($row['register']['first_name'] . " " . $row['register']['last_name']);
        }
        $sql = $this->query("SELECT * FROM view_me WHERE mcd='$for_mcd' AND email = '$email_val'");
        if (count($sql) == 0) {
            $current_date = date('d-m-Y');
            $sql1 = $this->query("INSERT INTO view_me SET mcd='$for_mcd', email='$email_val', password='$row_password', date_invite='$current_date', company_name='$company_name'");
            $body = '<table>
                <tr><td>Hi,</td></tr><br/>
                <tr>
                <td>We are pleased to share MCD Number <b>' . $for_mcd . '</b> and Password <b>' . $row_password . '</b> and Company Name <b>' . $company_name . '</b> to access my online career dashboard. </td>
                </tr><br/>
                <tr>
                <td>Many Thanks,</td>
                </tr>
                <tr>
                <td>' . $name . '</td>
                </tr>
                    </table>';
            $this->sendEmail3($email_val, $body);
            $query = $this->query("SELECT * FROM job_applies WHERE job_id='$job_id' AND user_id='$user_id'");
            if (count($query) == 0) {
                $this->query("INSERT INTO job_applies SET job_id='$job_id', user_id='$user_id', date='$c_date'");
                $this->query("UPDATE job_post SET total_apply = (total_apply+1) WHERE id='$job_id'");
                $this->query("DELETE FROM saved_jobs WHERE job_id='$job_id' AND user_id='$user_id'");
            }
            return 1;
        } else {
            return 0;
        }
    }

    public function selectTab($tab, $id) {
        $this->useTable = "view_me";
        $sql = $this->query("SELECT * FROM view_me WHERE id = '$id'");
        $count = 0;
        foreach ($sql as $query) {
            if ($query['view_me']['select_data'] == '') {
                $sql1 = $this->query("UPDATE view_me SET select_data = '$tab' WHERE id = '$id'");
            } else {
                $select = $query['view_me']['select_data'];
                $select_val = explode(',', $select);
                for ($i = 0; $i < count($select_val); $i++) {
                    if ($select_val[$i] == $tab) {
                        $count++;
                    }
                }
                if ($count == 0) {
                    $data = $select . "," . $tab;
                    $sql2 = $this->query("UPDATE view_me SET select_data = '$data' WHERE id = '$id'");
                }
            }
        }
    }

    public function deleteMyCD($id, $table_name) {
        if ($table_name == 'upload_resume') {
            $this->useTable = "upload_resume";
            $sql = $this->query("UPDATE upload_resume SET added_mycd='', view_data='' WHERE resume_id = '$id'");
            return 1;
        }

        if ($table_name == 'verify_reference') {
            $this->useTable = "verify_reference";
            $sql = $this->query("UPDATE verify_reference SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'acomplishment') {
            $this->useTable = "acomplishment";
            $sql = $this->query("UPDATE acomplishment SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'key_skill') {
            $this->useTable = "key_skill";
            $sql = $this->query("UPDATE key_skill SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'essential_skills') {
            $this->useTable = "essential_skills";
            $sql = $this->query("UPDATE essential_skills SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'mission_statement') {
            $this->useTable = "mission_statement";
            $sql = $this->query("UPDATE mission_statement SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'swot') {
            $this->useTable = "swot";
            $sql = $this->query("UPDATE swot SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'education') {
            $this->useTable = "education";
            $sql = $this->query("UPDATE education SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'evidence_skill') {
            $this->useTable = "evidence_skill";
            $sql = $this->query("UPDATE evidence_skill SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'computer_skill') {
            $this->useTable = "computer_skill";
            $sql = $this->query("UPDATE computer_skill SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'career_activity') {
            $this->useTable = "career_activity";
            $sql = $this->query("UPDATE career_activity SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'volunteer_work') {
            $this->useTable = "volunteer_work";
            $sql = $this->query("UPDATE volunteer_work SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'course') {
            $this->useTable = "course";
            $sql = $this->query("UPDATE course SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }

        if ($table_name == 'workplace_experience') {
            $this->useTable = "workplace_experience";
            $sql = $this->query("UPDATE workplace_experience SET added_mycd='', view_data='' WHERE id = '$id'");
            return 1;
        }
    }

    public function logoutTime($id) {
        $this->useTable = "view_me";
        $sql = $this->query("UPDATE view_me SET logout_time = NOW() WHERE id = '$id'");
    }

    public function viewSentInvite($user) {
        $this->useTable = "view_me";
        $mcd = $user['mcd'];
        $sql = $this->query("SELECT * FROM view_me WHERE mcd = '$mcd'");
        return $sql;
    }

    public function deleteInvitation($id) {
        $this->useTable = "view_me";
        foreach ($id as $invite_id) {
            $sql = $this->query("DELETE FROM view_me WHERE id = '$invite_id'");
        }
    }

    public function addElevatorPitch($data, $id) {
        $this->useTable = "elevator_pitch";
        @extract($data);
        $sql = $this->query("INSERT INTO elevator_pitch SET user_id='$id',self_intro='$self_intro',"
                . "advertise='$advertise',connection='$connection',study='$study',past_exp='$past_exp',"
                . "unique_idea='$unique_idea',latest_accomp='$latest_accomp',team_member='$team_member',"
                . "engage_listner='$engage_listen'");
    }

    public function viewElevatorPitch($user) {
        $this->useTable = "elevator_pitch";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM elevator_pitch WHERE user_id = '$user_id'");
        return $sql;
    }

    public function updateElevatorView($id) {
        $this->useTable = "elevator_pitch";
        $sql = $this->query("SELECT * FROM elevator_pitch WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateElevatorPitch($data) {
        $this->useTable = "elevator_pitch";
        @extract($data);
        $sql = $this->query("UPDATE elevator_pitch SET self_intro='$self_intro',"
                . "advertise='$advertise',connection='$connection',study='$study',past_exp='$past_exp',"
                . "unique_idea='$unique_idea',latest_accomp='$latest_accomp',team_member='$team_member',"
                . "engage_listner='$engage_listen' WHERE id='$elevator_name_id'");
    }

    public function addInterviewQues($data, $user) {
        $this->useTable = "interview_question";
        @extract($data);
        $more_ques = implode('|', array_filter($_POST['add_quest']));
        $more_sum = implode('|', array_filter($_POST['add_summ']));
        $more_ans = implode('|', array_filter($_POST['add_ans']));

        $about_background = mysql_escape_string($about_background);
        $general_skill = mysql_escape_string($general_skill);
        $tech_skill = mysql_escape_string($tech_skill);
        $about_work = mysql_escape_string($about_work);
        $responsibility = mysql_escape_string($responsibility);
        $job_challenge = mysql_escape_string($job_challenge);
        $professional_field = mysql_escape_string($professional_field);
        $term_goal = mysql_escape_string($term_goal);
        $any_other = mysql_escape_string($any_other);
        $more_ques = mysql_escape_string($more_ques);
        $more_sum = mysql_escape_string($more_sum);
        $more_ans = mysql_escape_string($more_ans);

        $sql = $this->query("INSERT INTO interview_question SET user_id='$user',about_background='$about_background',"
                . "general_skill='$general_skill',tech_skill='$tech_skill',about_work='$about_work',"
                . "responsibility='$responsibility',job_challenge='$job_challenge',professional_field='$professional_field',"
                . "term_goal='$term_goal',any_other='$any_other',more_question='$more_ques',more_summary='$more_sum',"
                . "more_answer='$more_ans',interviwer_name='$interviwer_name',date='$interview_date'");
    }

    public function viewInterviewQues($user) {
        $this->useTable = "interview_question";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM interview_question WHERE user_id = '$user_id' ORDER BY id DESC");
        return $sql;
    }

    public function deleteInterviewQues($id) {
        $this->useTable = "interview_question";
        $sql = $this->query("DELETE FROM interview_question WHERE id = '$id'");
        return $sql;
    }

    public function updateInterviewQuesView($id) {
        $this->useTable = "interview_question";
        $sql = $this->query("SELECT * FROM interview_question WHERE id = '$id'");
        return json_encode($sql);
    }

    public function updateInterviewQues($data) {
        $this->useTable = "interview_question";
        @extract($data);
        $more_ques = implode('|', array_filter($_POST['add_quest']));
        $more_sum = implode('|', array_filter($_POST['add_summ']));
        $more_ans = implode('|', array_filter($_POST['add_ans']));

        $about_background = mysql_escape_string($about_background);
        $general_skill = mysql_escape_string($general_skill);
        $tech_skill = mysql_escape_string($tech_skill);
        $about_work = mysql_escape_string($about_work);
        $responsibility = mysql_escape_string($responsibility);
        $job_challenge = mysql_escape_string($job_challenge);
        $professional_field = mysql_escape_string($professional_field);
        $term_goal = mysql_escape_string($term_goal);
        $any_other = mysql_escape_string($any_other);
        $more_ques = mysql_escape_string($more_ques);
        $more_sum = mysql_escape_string($more_sum);
        $more_ans = mysql_escape_string($more_ans);

        $sql = $this->query("UPDATE interview_question SET about_background='$about_background',"
                . "general_skill='$general_skill',tech_skill='$tech_skill',about_work='$about_work',"
                . "responsibility='$responsibility',job_challenge='$job_challenge',professional_field='$professional_field',"
                . "term_goal='$term_goal',any_other='$any_other',more_question='$more_ques',more_summary='$more_sum',"
                . "more_answer='$more_ans',interviwer_name='$interviwer_name',date='$interview_date' WHERE id='$interview_id_name'");
    }

    public function deleteElevator($id) {
        $this->useTable = "elevator_pitch";
        $sql = $this->query("DELETE FROM elevator_pitch WHERE id = '$id'");
    }

    public function deleteOrgRef($id) {
        $this->useTable = "volunteer_reference";
        $sql = $this->query("DELETE FROM volunteer_reference WHERE id = '$id'");
    }

    public function setLogo($token) {
        $this->useTable = "school_registration";
        $sql = $this->query("SELECT * FROM school_registration WHERE token = '$token'");
        return $sql;
    }

    public function viewResumeSummary($user) {
        $this->useTable = "create_profile";
        $id = $user['id'];
        $sql = $this->query("SELECT create_profile.*, register.*, country.*, state.* FROM create_profile INNER JOIN register ON create_profile.user_id = register.id LEFT JOIN country ON country.id = register.country LEFT JOIN state ON (state.id = register.state || state.id = register.provence) WHERE create_profile.user_id = '$id'");
        return $sql;
    }

    public function viewUserData($user) {
        $this->useTable = "register";
        $id = $user['id'];
        $sql = $this->query("SELECT register.*, country.*, state.* FROM register LEFT JOIN country ON country.id = register.country LEFT JOIN state ON (state.id = register.state || state.id = register.provence) WHERE register.id='$id'");
        return $sql;
    }

    public function addCareerProfile($user, $data) {
        $this->useTable = "create_profile";
        @extract($data);
        $user_id = $user['id'];
        if ($education == 'University') {
            $edu_type = $_POST['univ'];
        } elseif ($education == 'College') {
            $edu_type = $_POST['college'];
        }
        //$this->query("INSERT INTO create_profile SET user_id='$user_id', work_type='$work_type', employment='$employment', job_category='$job_category', about='$about'");
        $this->query("INSERT INTO create_profile SET user_id='$user_id', resume_summary='$resume_summary', mission_statement='$mission_state', about='$about', work_type='$work_type', education='$education', education_type='$edu_type', course='$course', start_date='$start_date', end_date='$complete_date'");
    }

    public function updateCareerProfile($data) {
        $this->useTable = "create_profile";
        @extract($data);
        if ($education == 'University') {
            $edu_type = $_POST['univ'];
        } elseif ($education == 'College') {
            $edu_type = $_POST['college'];
        }
        //$this->query("UPDATE create_profile SET work_type='$work_type', employment='$employment', job_category='$job_category', about='$about' WHERE id='$form_id'");
        $this->query("UPDATE create_profile SET resume_summary='$resume_summary', mission_statement='$mission_state', about='$about', work_type='$work_type', education='$education', education_type='$edu_type', course='$course', start_date='$start_date', end_date='$complete_date' WHERE id='$form_id'");
    }

    public function deleteCareerProfile($id) {
        $this->useTable = "create_profile";
        $this->query("DELETE FROM create_profile WHERE id = '$id'");
    }

    public function viewSummaryData($mcd) {
        $this->useTable = "create_profile";
        $sql = $this->query("SELECT create_profile.*, register.*, country.*, mission_statement.*, resume_summary.* FROM create_profile INNER JOIN register ON register.id = create_profile.user_id LEFT JOIN country ON country.id = register.country LEFT JOIN mission_statement ON mission_statement.user_id = register.id LEFT JOIN resume_summary ON resume_summary.user_id = register.id WHERE register.crv_code='$mcd'");
        return $sql;
    }

    public function viewChecklist($user) {
        $this->useTable = "checklist";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM checklist WHERE user_id = '$user_id' AND complete=''");
        return $sql;
    }

    public function deleteMedia($id) {
        $this->useTable = "social_network";
        $sql = $this->query("DELETE FROM social_network WHERE id = '$id'");
    }

    public function socialMediaView($mcd) {
        $this->useTable = "social_network";
        $sql = $this->query("SELECT social_network.* FROM social_network INNER JOIN register ON social_network.user_id = register.id WHERE register.crv_code = '$mcd'");
        return $sql;
    }

    public function industryMessage($data) {
        $this->useTable = "industry_message";
        @extract($data);
        $sql = $this->query("SELECT * FROM register WHERE crv_code = '$user_id'");
        foreach ($sql as $query) {
            $id = $query['register']['id'];
            $user_email = $query['register']['email'];
            $name = ucfirst($query['register']['first_name']) . " " . ucfirst($query['register']['last_name']);
        }
        $this->query("INSERT INTO industry_message SET user_id='$id', name='$user_name', company='$company_name', phone='$telephone', email='$email', message='$message', date=NOW(), status='0'");
        $body = '<html>
    <body>
        <table style="background-color:#eee; padding: 4%;">
            <tr>
                <td>
                    <p>Hi ' . $name . '</p><br/>
                    <p>You have received a message from ' . $email . ' on your MyCD. Please login on <a href="https://www.mycareerdashboard.com/">www.mycareerdashboard.com</a> to check the same.<br/><br/>
                    <p>Thanks,</p>
                    <p>My Career Dashboard</p>
                </td>
            </tr>
        </table>
    </body>
</html>';
        $this->sendEmail6($user_email, $body);
        return 1;
    }

    public function sendEmail6($to, $body) {
        $subject = "My Career Dashboard";
        $message = '<html>
                   <body>
                   ' . $body . '
                   </body>
                   </html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: My Career Dashboard<noreply@mycareerdashboard.com>";
        mail($to, $subject, $message, $headers, '-fcertifymyresume.com');
    }

    public function industryLiked($indus_id, $mcd) {
        $this->useTable = "career_like";
        $sql = $this->query("SELECT * FROM register WHERE crv_code = '$mcd'");
        foreach ($sql as $query) {
            $id = $query['register']['id'];
        }
        $row = $this->query("SELECT * FROM career_like WHERE user_id='$id' AND industry_id='$indus_id'");
        if (count($row) > 0) {
            $this->query("UPDATE career_like SET like_career='1', date=NOW() WHERE user_id='$id' AND industry_id='$indus_id'");
        } else {
            $this->query("INSERT INTO career_like SET user_id='$id', industry_id='$indus_id', like_career='1', date=NOW()");
        }
    }

    public function careerLike($indus_id, $mcd) {
        $this->useTable = "career_like";
        $sql = $this->query("SELECT career_like.* FROM career_like INNER JOIN register ON career_like.user_id = register.id WHERE register.crv_code = '$mcd' AND career_like.industry_id = '$indus_id' AND career_like.like_career='1'");
        return $sql;
    }

    public function industryUnLiked($indus_id, $mcd) {
        $this->useTable = "career_like";
        $sql = $this->query("SELECT * FROM register WHERE crv_code = '$mcd'");
        foreach ($sql as $query) {
            $id = $query['register']['id'];
        }
        $this->query("UPDATE career_like SET like_career='2', date=NOW() WHERE user_id='$id' AND industry_id='$indus_id'");
    }

    public function totalLikeMYCD($mcd) {
        $this->useTable = "career_like";
        $sql = $this->query("SELECT * FROM register WHERE crv_code = '$mcd'");
        foreach ($sql as $query) {
            $id = $query['register']['id'];
        }
        $sql = $this->query("SELECT count(like_career) FROM career_like WHERE user_id='$id' AND like_career='1'");
        return $sql;
    }

    public function totalDisLikeMYCD($mcd) {
        $this->useTable = "career_like";
        $sql = $this->query("SELECT * FROM register WHERE crv_code = '$mcd'");
        foreach ($sql as $query) {
            $id = $query['register']['id'];
        }
        $sql = $this->query("SELECT count(like_career) FROM career_like WHERE user_id='$id' AND like_career='2'");
        return $sql;
    }

    public function viewMessage($user_id) {
        $this->useTable = "industry_message";
        $sql = $this->query("SELECT * FROM industry_message WHERE user_id = '$user_id'");
        return $sql;
    }

    public function addResumeSummary($user, $data) {
        $this->useTable = "resume_summary";
        $user_id = $user['id'];
        @extract($data);
        $this->query("INSERT INTO resume_summary SET user_id='$user_id', resume_summary='$summary_name'");
    }

    public function updateResumeSummary($data) {
        $this->useTable = "resume_summary";
        @extract($data);
        $this->query("UPDATE resume_summary SET resume_summary='$summary_name' WHERE id = '$form_id'");
    }

    public function viewResumeSummaryData($user) {
        $this->useTable = "resume_summary";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM resume_summary WHERE user_id = '$user_id'");
        return $sql;
    }

    public function deleteResumeSummary($id) {
        $this->useTable = "resume_summary";
        $this->query("DELETE FROM resume_summary WHERE id = '$id'");
    }

    public function viewResumeSummaryMCD($mcd) {
        $this->useTable = "resume_summary";
        $sql = $this->query("SELECT resume_summary.* FROM resume_summary INNER JOIN register ON resume_summary.user_id = register.id WHERE register.crv_code = '$mcd'");
        return $sql;
    }

    public function readMsg($user_id) {
        $this->useTable = "industry_message";
        $this->query("UPDATE industry_message SET status = '1' WHERE user_id = '$user_id'");
    }

    public function checkMCD($mcd) {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE crv_code = '$mcd' AND payment_status='Completed'");
        return count($sql);
    }

    public function indusSgned($data) {
        $this->useTable = "view_me";
        @extract($data);
        $c_date = date('d-M-Y');
        $sql = $this->query("SELECT * FROM view_me WHERE mcd = '$mcd' AND email = '$email'");
        if (count($sql) == 0) {
            $query = $this->query("SELECT * FROM view_me WHERE mcd = '$mcd' AND email = '$email'");
            if (count($query) == 0) {
                $this->query("INSERT INTO view_me SET mcd = '$mcd', email = '$email', date_invite = '$c_date', date_view='$c_date', verified = 'verify', company_name='$company_name'");
                $sql1 = $this->query("SELECT * FROM view_me ORDER BY id DESC LIMIT 1");
                foreach ($sql1 as $data) {
                    $id = $data['view_me']['id'];
                    $this->query("UPDATE view_me SET login_time = NOW(), logout_time = '' WHERE id = '$id'");
                }
                return array("status" => TRUE, "msg" => $id);
            } else {
                return array("status" => FALSE, "msg" => 'Email Id already registered');
            }
        } else {
            foreach ($sql as $row) {
                $id = $row['view_me']['id'];
                $this->query("UPDATE view_me SET date_view='$c_date', login_time = NOW(), logout_time = '' WHERE id = '$id'");
            }
            return array("status" => TRUE, "msg" => $id);
        }
    }

    public function starterRenew($email, $type) {
        $this->useTable = "register";
        $c_date = date('Y-m-d');
        $this->query("UPDATE register SET program = '$type', payment_date = '$c_date' WHERE email = '$email'");
    }

    public function deleteReferenceData($id) {
        $this->useTable = "verify_reference";
        $this->query("DELETE FROM verify_reference WHERE id = '$id'");
    }

    public function applyAmbassador($data) {
        $this->useTable = "register";
        @extract($data);
        $c_date = date('d-m-Y');
        if (isset($_FILES['resume_upload']['name'])) {
            $file_tmp_name = $_FILES['resume_upload']['tmp_name'];
            $file_name = rand(1000, 99999) . $_FILES['resume_upload']['name'];

            $target = "ambassdor_resume/" . $file_name;
            move_uploaded_file($file_tmp_name, $target);
        } else {
            $file_name = $upload_resume;
        }
        $sql = $this->query("SELECT * FROM register WHERE id = '$user_id'");
        foreach ($sql as $row) {
            $approve_ambassador = $row['register']['approve_ambassador'];
        }
        $this->query("UPDATE register SET date_interview='$date', time_interview='$time', upload_resume='$file_name', good_leader='$good_leader', approve_ambassador='approval', apply_date='$c_date' WHERE id = '$user_id'");
        return "Applied Successfully";
    }

    public function showAmbassdorPrgrm($id) {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE id = '$id'");
        return $sql;
    }

    public function showReferalList($mcd) {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE referal_code = '$mcd'");
        return $sql;
    }

    public function showReferalAmount($mcd) {
        $this->useTable = "register";
        $sql = $this->query("SELECT * FROM register WHERE crv_code = '$mcd'");
        return $sql;
    }

    public function jobDetails($user) {
        $this->useTable = "job_post";
        $id = $user['id'];
        $sql1 = $this->query("SELECT * FROM register WHERE id = '$id'");
        foreach ($sql1 as $row) {
            $school = $row['register']['school'];
            $study_type = $row['register']['study_type'];
        }
        if ($study_type === 'University') {
            $sql = $this->query("SELECT * FROM job_post WHERE university='$school' AND status='open' AND form_type='jobPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'College') {
            $sql = $this->query("SELECT * FROM job_post WHERE college='$school' AND status='open' AND form_type='jobPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'Trade School') {
            $sql = $this->query("SELECT * FROM job_post WHERE school='$school' AND status='open' AND form_type='jobPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        return $sql;
    }

    public function jobDetailsCount($user) {
        $this->useTable = "job_post";
        $id = $user['id'];
        $sql1 = $this->query("SELECT * FROM register WHERE id = '$id'");
        foreach ($sql1 as $row) {
            $school = $row['register']['school'];
            $study_type = $row['register']['study_type'];
        }
        if ($study_type === 'University') {
            $sql = $this->query("SELECT * FROM job_post WHERE university='$school' AND status='open' AND form_type='jobPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'College') {
            $sql = $this->query("SELECT * FROM job_post WHERE college='$school' AND status='open' AND form_type='jobPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'Trade School') {
            $sql = $this->query("SELECT * FROM job_post WHERE school='$school' AND status='open' AND form_type='jobPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        return count($sql);
    }

    public function coopDetails($user) {
        $this->useTable = "job_post";
        $id = $user['id'];
        $sql1 = $this->query("SELECT * FROM register WHERE id = '$id'");
        foreach ($sql1 as $row) {
            $school = $row['register']['school'];
            $study_type = $row['register']['study_type'];
        }
        if ($study_type === 'University') {
            $sql = $this->query("SELECT * FROM job_post WHERE university='$school' AND status='open' AND form_type='coopPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'College') {
            $sql = $this->query("SELECT * FROM job_post WHERE college='$school' AND status='open' AND form_type='coopPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'Trade School') {
            $sql = $this->query("SELECT * FROM job_post WHERE school='$school' AND status='open' AND form_type='coopPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        return $sql;
    }

    public function coopDetailsCount($user) {
        $this->useTable = "job_post";
        $id = $user['id'];
        $sql1 = $this->query("SELECT * FROM register WHERE id = '$id'");
        foreach ($sql1 as $row) {
            $school = $row['register']['school'];
            $study_type = $row['register']['study_type'];
        }
        if ($study_type === 'University') {
            $sql = $this->query("SELECT * FROM job_post WHERE university='$school' AND status='open' AND form_type='coopPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'College') {
            $sql = $this->query("SELECT * FROM job_post WHERE college='$school' AND status='open' AND form_type='coopPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'Trade School') {
            $sql = $this->query("SELECT * FROM job_post WHERE school='$school' AND status='open' AND form_type='coopPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        return count($sql);
    }

    public function internDetails($user) {
        $this->useTable = "job_post";
        $id = $user['id'];
        $sql1 = $this->query("SELECT * FROM register WHERE id = '$id'");
        foreach ($sql1 as $row) {
            $school = $row['register']['school'];
            $study_type = $row['register']['study_type'];
        }
        if ($study_type === 'University') {
            $sql = $this->query("SELECT * FROM job_post WHERE university='$school' AND status='open' AND form_type='internPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'College') {
            $sql = $this->query("SELECT * FROM job_post WHERE college='$school' AND status='open' AND form_type='internPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'Trade School') {
            $sql = $this->query("SELECT * FROM job_post WHERE school='$school' AND status='open' AND form_type='internPost' AND id NOT IN(SELECT job_id FROM job_deletes WHERE user_id = '$id') ORDER BY id DESC");
        }
        return $sql;
    }

    public function internDetailsCount($user) {
        $this->useTable = "job_post";
        $id = $user['id'];
        $sql1 = $this->query("SELECT * FROM register WHERE id = '$id'");
        foreach ($sql1 as $row) {
            $school = $row['register']['school'];
            $study_type = $row['register']['study_type'];
        }
        if ($study_type === 'University') {
            $sql = $this->query("SELECT * FROM job_post WHERE university='$school' AND status='open' AND form_type='internPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'College') {
            $sql = $this->query("SELECT * FROM job_post WHERE college='$school' AND status='open' AND form_type='internPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        if ($study_type === 'Trade School') {
            $sql = $this->query("SELECT * FROM job_post WHERE school='$school' AND status='open' AND form_type='internPost' AND id NOT IN(SELECT job_id FROM job_views WHERE user_id = '$id') ORDER BY id DESC");
        }
        return count($sql);
    }

    public function jobSingleDetail($id) {
        $this->useTable = "job_post";
        $sql = $this->query("SELECT recruit.*, job_post.* FROM job_post INNER JOIN recruit ON recruit.id = job_post.company_id WHERE job_post.id='$id'");
        return $sql;
    }

    public function jobApply($job_id, $user_id) {
        $this->useTable = "job_applies";
        $c_date = date('d-m-Y');
        $sql = $this->query("INSERT INTO job_applies SET job_id='$job_id', user_id='$user_id', resume='', date='$c_date'");
        $this->query("UPDATE job_post SET total_apply=(total_apply+1) WHERE id='$job_id'");
        return 1;
    }

    public function apply_update($job_id) {
        $this->useTable = "job_post";
        $this->query("UPDATE job_post SET total_apply=(total_apply+1) WHERE id='$job_id'");
        return $job_id;
    }

    public function job_view($job_id, $user_id) {
        $this->useTable = "job_views";
        $query = $this->query("SELECT * FROM job_views WHERE job_id='$job_id' AND user_id='$user_id'");
        $query_data = $this->query("SELECT * FROM job_views WHERE job_id='$job_id' AND user_id='0'");
        if (count($query) > 0) {
            
        } else {
            if (count($query_data) > 0) {
                $this->query("UPDATE job_views SET user_id='$user_id', count='1' WHERE job_id='$job_id'");
            } else {
                $this->query("INSERT INTO job_views SET job_id='$job_id', user_id='$user_id', count='1'");
            }
            $this->query("UPDATE job_post SET total_view=(total_view+1) WHERE id='$job_id'");
        }
    }

    public function updateUserEducation($user_id, $university_program, $course, $s_date, $e_date) {
        $this->useTable = 'register';
        $sql = $this->query("UPDATE register SET university_program='$university_program', course='$course', course_start='$s_date', course_complete='$e_date' WHERE id='$user_id'");
        return 1;
    }

    public function saveJob($job_id, $user_id) {
        $this->useTable = "saved_jobs";
        $c_date = date('d-m-Y');
        $this->query("INSERT INTO saved_jobs SET user_id='$user_id', job_id='$job_id', saved='save', date='$c_date'");
        return 1;
    }

    public function viewsaveJob($job_id, $user) {
        $this->useTable = "saved_jobs";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM saved_jobs WHERE user_id='$user_id' AND job_id='$job_id'");
        return $sql;
    }

    public function viewSingleJobSave($user) {
        $this->useTable = "saved_jobs";
        $user_id = $user['id'];
        $sql = $this->query("SELECT saved_jobs.*, job_post.* FROM saved_jobs INNER JOIN job_post ON saved_jobs.job_id = job_post.id WHERE saved_jobs.user_id='$user_id'");
        return $sql;
    }

    public function delete_Job($job_id, $user_id) {
        $this->useTable = "job_deletes";
        $this->query("INSERT INTO job_deletes SET user_id='$user_id', job_id='$job_id', delete_val='delete'");
        return 1;
    }

    public function workplace_exp($data, $user) {
        $this->useTable = "workplace_experience";
        @extract($data);
        $user_id = $user['id'];
        $sql = $this->query("INSERT INTO workplace_experience SET user_id='$user_id', business_name='$business_name', address='$bussiness_address', city='$city', province='$province', postal_code='$postal_code', website='$website', email='$company_email', phone='$business_no',ext='$business_ext', contact_person='$contact_person', person_name='$person_name', title='$title', person_phone='$person_contact', person_ext='$extension', employ_id='$employee_id', person_know='$year', release_info='$send_info',start_position='$start_position', last_position='$last_position', job_type='$job_type', start_date='$join_date', end_date='$release_date', still_working='$still_working', duty='$duties'");
    }

    public function view_workExperience($user) {
        $this->useTable = "workplace_experience";
        $user_id = $user['id'];
        $sql = $this->query("SELECT * FROM workplace_experience WHERE user_id='$user_id'");
        return $sql;
    }

}

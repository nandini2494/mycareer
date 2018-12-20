<?php

App::uses('Model', 'Model');

class IndustrysModel extends Model {

    public function admin_login($admin) {
        $this->useTable = 'verify_reference';
        @extract($admin);
        $sql = "SELECT verify_reference.*,register.* FROM verify_reference INNER JOIN register ON register.id = verify_reference.user_id WHERE verify_reference.status='new' AND verify_reference.company_email = '$website' AND verify_reference.username='$username' AND verify_reference.password='$password' AND verify_reference.reference_id='$ref_id'";
        $query = $this->query($sql);
        if (count($query) == 0) {
            return "Invalid Credentials";
        } else {
            foreach ($query as $row) {
                $udata = array();
                $udata['id'] = $row['verify_reference']['id'];
                $udata['ref_type'] = $row['verify_reference']['reference_type'];
                $udata['ref_name'] = $row['verify_reference']['reference_name'];
                debug($udata);
                return $udata;
            }
        }
    }

    public function referenceData($user) {
        $this->useTable = "verify_reference";
        $email = $user['email'];
        $sql = "SELECT verify_reference.user_id,industry_admin.email, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id INNER JOIN industry_admin ON verify_reference.company_email = industry_admin.email WHERE verify_reference.status = 'new' AND verify_reference.company_email = '$email' GROUP BY verify_reference.user_id";
        return $this->query($sql);
    }

    public function complete($id) {
        $this->useTable = 'verify_reference';
        $sql = "UPDATE verify_reference SET status = 'complete' WHERE id='$id'";
        $query = $this->query($sql);
        return $query;
    }

    public function countref($user_id, $website) {
        $this->useTable = "verify_reference";
        $sql = "SELECT * FROM verify_reference WHERE user_id = '$user_id' AND status = 'new' AND company_email = '$website'";
        return json_encode($this->query($sql));
    }

    public function certify_data($id) {
        $this->useTable = 'verify_reference';
        $sql = "SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id='$id'";
        $query = $this->query($sql);
        return $query;
    }

    public function advance_data($data, $id, $ref_name) {
        $this->useTable = "verify_reference";
        @extract($data);
        $capacity_comment = mysql_escape_string($capacity_comment);
        $applicant_comment = mysql_escape_string($applicant_comment);
        $duties_comment = mysql_escape_string($duties_comment);
        $explain = mysql_escape_string($explain);
        $skill_comment = mysql_escape_string($skill_comment);
        $circumstance = mysql_escape_string($circumstance);
        $leave_comment = mysql_escape_string($leave_comment);
        $anything = mysql_escape_string($anything);
        $known_person = mysql_escape_string($known_person);
        $capacity = mysql_escape_string($capacity);
        $work_ability = mysql_escape_string($work_ability);
        $applicant_role = mysql_escape_string($applicant_role);
        $related_role_comment = mysql_escape_string($related_role_comment);
        $reservation = mysql_escape_string($reservation);

        if ($ref_name == 'workplace_verification') {
            $applicat_employed_tmp = implode(',', $_POST['applicat_employed']);
            $sql1 = $this->query("UPDATE verify_reference SET business_name='$company_name', circumstances='$circumstance', business_address='$company_address', bussiness_phone='$company_telephone',website='$company_web', person_name='$contact_name', contact_number='$contact_num', ext='$ext', associated_with_employee='$list',employee_comment_other='$capacity_other', associated_with_employee_comment='$capacity_comment',join_date='$from_date',release_date='$to_date',job_type='$applicat_employed_tmp',employed_comment='$applicant_comment',employee_salary='$salary',duties_successful='$duty',duties_successful_comment='$duties_comment',supervise_applicant='$supervise',valuable_member='$team_member',valuable_member_not_reason='$explain',unique_skill='$skill_comment',strength='$strenght_comment',weakness='$weakness',improvement='$improve',absent_record='$absenteeism',descipline='$descipline',applicant_suitable='$applicable',leave_employment='$leave_reason',leave_employment_comment='$leave_comment',rehire='$rehire',rehire_reason='$rehire_reason',not_rehire='$not_rehire',anything_else='$anything', status='complete', key_rating1='$key_action1',teamwork_rating1='$team_work1',teamwork_rating2='$team_work2',teamwork_rating3='$team_work3',work_standard1='$work_standard1',work_standard2='$work_standard2',work_standard3='$work_standard3',motivatin_rating1='$motivation1',motivatin_rating2='$motivation2',motivatin_rating3='$motivation3',reliabilty_rating1='$reliable1',reliabilty_rating2='$reliable2',reliabilty_rating3='$reliable3',problem_rating1='$problem1',problem_rating2='$problem2',problem_rating3='$problem3',adaptibility_rating1='$adapt1',adaptibility_rating2='$adapt2',adaptibility_rating3='$adapt3',plan_rating1='$plan1',plan_rating2='$plan2',plan_rating3='$plan3',communication_rating1='$comm1',communication_rating2='$comm2',communication_rating3='$comm3',integrity_rating1='$ineger1',integrity_rating2='$ineger2',integrity_rating3='$ineger3',initiative_rating1='$initiate1',initiative_rating2='$initiate2',initiative_rating3='$initiate3',stress_rating1='$stress1',stress_rating2='$stress2',stress_rating3='$stress3' WHERE id = '$id'");
        } else if ($ref_name == 'volunteer_verification') {
            $sql2 = $this->query("UPDATE verify_reference SET business_name='$company_name', business_address='$company_address', bussiness_phone='$company_telephone',website='$company_web', person_name='$contact_name', contact_number='$contact_num', ext='$ext',how_long_known='$known_person',what_capacity='$capacity',applicant_ability='$work_ability',applicant_role='$applicant_role',observe_working='$applicant_working',example_applicant_role='$related_role',example_applicant_role_comment='$related_role_comment',reservation='$reservation',status='complete', key_rating1='$key_action1',teamwork_rating1='$team_work1',teamwork_rating2='$team_work2',teamwork_rating3='$team_work3',work_standard1='$work_standard1',work_standard2='$work_standard2',work_standard3='$work_standard3',motivatin_rating1='$motivation1',motivatin_rating2='$motivation2',motivatin_rating3='$motivation3',reliabilty_rating1='$reliable1',reliabilty_rating2='$reliable2',reliabilty_rating3='$reliable3',problem_rating1='$problem1',problem_rating2='$problem2',problem_rating3='$problem3',adaptibility_rating1='$adapt1',adaptibility_rating2='$adapt2',adaptibility_rating3='$adapt3',plan_rating1='$plan1',plan_rating2='$plan2',plan_rating3='$plan3',communication_rating1='$comm1',communication_rating2='$comm2',communication_rating3='$comm3',integrity_rating1='$ineger1',integrity_rating2='$ineger2',integrity_rating3='$ineger3',initiative_rating1='$initiate1',initiative_rating2='$initiate2',initiative_rating3='$initiate3',stress_rating1='$stress1',stress_rating2='$stress2',stress_rating3='$stress3' WHERE id = '$id'");
        }
    }

    public function verify_data($id, $userid) {
        $this->useTable = 'verify_reference';
        $sql = "SELECT verify_reference.*, register.* FROM verify_reference INNER JOIN register ON verify_reference.user_id = register.id WHERE verify_reference.id='$id' AND register.id = '$userid'";
        $query = $this->query($sql);
        return $query;
    }

    public function standard_data($data, $id, $ref_name) {
        $this->useTable = "verify_reference";
        @extract($data);

        $anything_else = mysql_escape_string($anything_else);
        $contact_applicant = mysql_escape_string($contact_applicant);
        $get_people = mysql_escape_string($get_people);
        $applicant_friend = mysql_escape_string($applicant_friend);
        $stressful = mysql_escape_string($stressful);
        $not_trust = mysql_escape_string($not_trust);
        $relable_comment = mysql_escape_string($relable_comment);
        $character_comment = mysql_escape_string($character_comment);
        $position_comment = mysql_escape_string($position_comment);
        $capacity_comment = mysql_escape_string($capacity_comment);
        $applicant_comment = mysql_escape_string($applicant_comment);
        $duties_comment = mysql_escape_string($duties_comment);
        $explain = mysql_escape_string($explain);
        $skill_comment = mysql_escape_string($skill_comment);
        $strenght_comment = mysql_escape_string($strenght_comment);
        $circumstance = mysql_escape_string($circumstance);
        $leave_comment = mysql_escape_string($leave_comment);
        $known_person = mysql_escape_string($known_person);
        $capacity = mysql_escape_string($capacity);
        $work_ability = mysql_escape_string($work_ability);
        $applicant_role = mysql_escape_string($applicant_role);
        $related_role_comment = mysql_escape_string($related_role_comment);
        $reservation = mysql_escape_string($reservation);

        if ($ref_name == 'workplace_verification') {
            $applicat_employed_tmp = implode(',', $_POST['applicat_employed']);
            $sql1 = $this->query("UPDATE verify_reference SET business_name='$company_name', business_address='$company_address', bussiness_phone='$company_telephone',website='$company_web', person_name='$contact_name', circumstances='$circumstance', contact_number='$contact_num', ext='$ext', associated_with_employee='$list',employee_comment_other='$capacity_other', associated_with_employee_comment='$capacity_comment',join_date='$from_date',release_date='$to_date',job_type='$applicat_employed_tmp',employed_comment='$applicant_comment',employee_salary='$salary',duties_successful='$duty',duties_successful_comment='$duties_comment',supervise_applicant='$supervise',valuable_member='$team_member',valuable_member_not_reason='$explain',unique_skill='$skill_comment',strength='$strenght_comment',weakness='$weakness',improvement='$improve',absent_record='$absenteeism',descipline='$descipline',applicant_suitable='$applicable',leave_employment='$leave_reason',leave_employment_comment='$leave_comment',rehire='$rehire',rehire_reason='$rehire_reason',not_rehire='$not_rehire',anything_else='$anything', status='complete' WHERE id = '$id'");
        } else if ($ref_name == 'volunteer_verification') {
            $sql2 = $this->query("UPDATE verify_reference SET business_name='$company_name', business_address='$company_address', bussiness_phone='$company_telephone',website='$company_web', person_name='$contact_name', contact_number='$contact_num', ext='$ext',how_long_known='$known_person',what_capacity='$capacity',applicant_ability='$work_ability',applicant_role='$applicant_role',observe_working='$applicant_working',example_applicant_role='$related_role',example_applicant_role_comment='$related_role_comment',reservation='$reservation',status='complete' WHERE id = '$id'");
        } elseif ($ref_name == 'personnel_verification') {
            $sql3 = "UPDATE verify_reference SET business_name='$company_name', business_address='$company_address', bussiness_phone='$company_telephone',"
                    . "website='$company_web', person_name='$contact_name', contact_number='$contact_num', ext='$ext',"
                    . "last_time_contact='$contact_applicant',applicant_get_along='$get_people',applicant_friend='$applicant_friend',stressful_situation='$stressful',"
                    . "not_trust='$not_trust',applicant_reliability='$applicant_reliability',"
                    . "applicant_reliability_comment='$relable_comment',applicant_character='$applicant_character',"
                    . "applicant_character_comment='$character_comment',investigated='$investigated',applicant_position='$applicant_position',"
                    . "applicant_position_comment='$position_comment',anything_else='$anything_else',status='complete' WHERE id = '$id'";
            $this->query($sql3);
        }
    }

    public function addRange1($value, $id) {
        $this->useTable = 'verify_reference';
        $sql = "UPDATE verify_reference SET rating1 = '$value' WHERE id='$id'";
        $query = $this->query($sql);
        return TRUE;
    }

    public function addRange2($value, $id) {
        $this->useTable = 'verify_reference';
        $sql = "UPDATE verify_reference SET rating2 = '$value' WHERE id='$id'";
        $query = $this->query($sql);
        return TRUE;
    }

    public function addRange3($value, $id) {
        $this->useTable = 'verify_reference';
        $sql = "UPDATE verify_reference SET rating3 = '$value' WHERE id='$id'";
        $query = $this->query($sql);
        return TRUE;
    }

    public function addRange4($value, $id) {
        $this->useTable = 'verify_reference';
        $sql = "UPDATE verify_reference SET rating4 = '$value' WHERE id='$id'";
        $query = $this->query($sql);
        return TRUE;
    }

    public function addRange5($value, $id) {
        $this->useTable = 'verify_reference';
        $sql = "UPDATE verify_reference SET rating5 = '$value' WHERE id='$id'";
        $query = $this->query($sql);
        return TRUE;
    }

    public function addRange6($value, $id) {
        $this->useTable = 'verify_reference';
        $sql = "UPDATE verify_reference SET rating6 = '$value' WHERE id='$id'";
        $query = $this->query($sql);
        return TRUE;
    }

    public function addRange7($value, $id) {
        $this->useTable = 'verify_reference';
        $sql = "UPDATE verify_reference SET rating7 = '$value' WHERE id='$id'";
        $query = $this->query($sql);
        return TRUE;
    }

    public function pending($user) {
        $this->useTable = 'register';
        $email = $user['email'];
        $current_date = date('Y-m-d H:m:s');
        $sql['after_1_day'] = $this->query("SELECT verify_reference.user_id, verify_reference.company_email, register.id, register.first_name, register.last_name, register.provence, register.crv_code, register.email "
                . "FROM verify_reference INNER JOIN register ON register.id = verify_reference.user_id INNER JOIN industry_admin ON verify_reference.company_email = industry_admin.email WHERE (verify_reference.status='pending' OR verify_reference.status='new') AND ((time_to_sec(timediff('$current_date', verify_reference.submit_date )) / 3600) <= 24) AND verify_reference.company_email = '$email' GROUP BY verify_reference.user_id");
        $sql['after_2_day'] = $this->query("SELECT verify_reference.user_id, verify_reference.company_email, register.id, register.first_name, register.last_name, register.provence, register.crv_code, register.email "
                . "FROM verify_reference INNER JOIN register ON register.id = verify_reference.user_id INNER JOIN industry_admin ON verify_reference.company_email = industry_admin.email WHERE (verify_reference.status='pending' OR verify_reference.status='new') AND ((time_to_sec(timediff('$current_date', verify_reference.submit_date )) / 3600) > 24) AND ((time_to_sec(timediff('$current_date', verify_reference.submit_date )) / 3600) <= 72) AND verify_reference.company_email = '$email' GROUP BY verify_reference.user_id");
        $sql['after_3_day'] = $this->query("SELECT verify_reference.user_id, verify_reference.company_email, register.id, register.first_name, register.last_name, register.provence, register.crv_code, register.email "
                . "FROM verify_reference INNER JOIN register ON register.id = verify_reference.user_id INNER JOIN industry_admin ON verify_reference.company_email = industry_admin.email WHERE (verify_reference.status='pending' OR verify_reference.status='new') AND ((time_to_sec(timediff('$current_date', verify_reference.submit_date )) / 3600) > 72) AND verify_reference.company_email = '$email' GROUP BY verify_reference.user_id");
        return $sql;
    }

    public function filterPending($data, $user) {
        $this->useTable = "register";
        $email = $user['email'];
        @extract($data);
        $current_date = date('Y-m-d H:m:s');
        $sql['after_1_day'] = $this->query("SELECT verify_reference.user_id, verify_reference.company_email, register.id, register.first_name, register.last_name, register.provence, register.crv_code, register.email "
                . "FROM verify_reference INNER JOIN register ON register.id = verify_reference.user_id INNER JOIN industry_admin ON verify_reference.company_email = industry_admin.email WHERE (verify_reference.status='pending' OR verify_reference.status='new') AND ((time_to_sec(timediff('$current_date', verify_reference.submit_date )) / 3600) <= 24) AND verify_reference.company_email = '$email' AND register.crv_code = '$crv_code' GROUP BY verify_reference.user_id");
        $sql['after_2_day'] = $this->query("SELECT verify_reference.user_id, verify_reference.company_email, register.id, register.first_name, register.last_name, register.provence, register.crv_code, register.email "
                . "FROM verify_reference INNER JOIN register ON register.id = verify_reference.user_id INNER JOIN industry_admin ON verify_reference.company_email = industry_admin.email WHERE (verify_reference.status='pending' OR verify_reference.status='new') AND ((time_to_sec(timediff('$current_date', verify_reference.submit_date )) / 3600) > 24) AND ((time_to_sec(timediff('$current_date', verify_reference.submit_date )) / 3600) <= 72) AND verify_reference.company_email = '$email' AND register.crv_code = '$crv_code' GROUP BY verify_reference.user_id");
        $sql['after_3_day'] = $this->query("SELECT verify_reference.user_id, verify_reference.company_email, register.id, register.first_name, register.last_name, register.provence, register.crv_code, register.email "
                . "FROM verify_reference INNER JOIN register ON register.id = verify_reference.user_id INNER JOIN industry_admin ON verify_reference.company_email = industry_admin.email WHERE (verify_reference.status='pending' OR verify_reference.status='new') AND ((time_to_sec(timediff('$current_date', verify_reference.submit_date )) / 3600) > 72) AND verify_reference.company_email = '$email' AND register.crv_code = '$crv_code' GROUP BY verify_reference.user_id");
        return $sql;
    }

    public function pending1Ref($id, $email) {
        $this->useTable = 'verify_reference';
        $current_date = date('Y-m-d H:m:s');
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' AND (status = 'pending' || status = 'new') && ((time_to_sec(timediff('$current_date', submit_date )) / 3600) <= 24) AND company_email = '$email'";
        return json_encode($this->query($sql));
    }

    public function pending2Ref($id, $email) {
        $this->useTable = 'verify_reference';
        $current_date = date('Y-m-d H:m:s');
        //$sql = "SELECT * FROM verify_reference WHERE user_id='$id' && status = 'pending' && '$current_date' >= DATE_SUB(submit_date, INTERVAL 24 HOUR) AND '$current_date' <= DATE_SUB(submit_date, INTERVAL 72 HOUR)";
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && (status = 'pending' || status = 'new') && ((time_to_sec(timediff('$current_date', submit_date )) / 3600) > 24) && ((time_to_sec(timediff('$current_date', submit_date )) / 3600) <= 72) AND company_email = '$email'";
        return json_encode($this->query($sql));
    }

    public function pending3Ref($id, $email) {
        $this->useTable = 'verify_reference';
        $current_date = date('Y-m-d H:m:s');
        $sql = "SELECT * FROM verify_reference WHERE user_id='$id' && (status = 'pending' || status = 'new') && ((time_to_sec(timediff('$current_date', submit_date )) / 3600) > 72) AND company_email = '$email'";
        return json_encode($this->query($sql));
    }

    public function archive($user) {
        $this->useTable = 'verify_reference';
        $industry_email = $user['email'];
        $sql = "SELECT verify_reference.user_id, register.* FROM verify_reference INNER JOIN register ON register.id = verify_reference.user_id INNER JOIN industry_admin ON verify_reference.company_email = industry_admin.email WHERE verify_reference.status = 'complete' AND verify_reference.company_email = '$industry_email' GROUP BY verify_reference.user_id";
        $query = $this->query($sql);
        return $query;
    }

    public function co_opRef($data, $id, $ref_name) {
        $this->useTable = 'verify_reference';
        @extract($data);
        $comment = mysql_escape_string($comment);
        $super_comment = mysql_escape_string($super_comment);
        $st_comment = mysql_escape_string($st_comment);
        $st_recomend = mysql_escape_string($st_recomend);
        $super_name = mysql_escape_string($super_name);
        $super_title = mysql_escape_string($super_title);
        $super_sign = mysql_escape_string($super_sign);
        $st_sign = mysql_escape_string($st_sign);
        $hr_sign = mysql_escape_string($hr_sign);
        $hr_title = mysql_escape_string($hr_title);
        $sql = $this->query("UPDATE verify_reference SET key_rating1='$interest',key_rating2='$ability',key_rating3='$q_work',problem_rating1='$problem',teamwork_rating1='$quantity',teamwork_rating2='$team',reliabilty_rating1='$depend', reliabilty_rating2='$supervision',reliabilty_rating3='$reflection',adaptibility_rating3='$resource',problem_rating2='$ethical',problem_rating3='$diversity',adaptibility_rating1='$orientation',adaptibility_rating2='$written',communication_rating1='$oral',communication_rating2='$interpersonal',performance_rating='$student_performance',performance_comment='$comment',super_comment='$super_comment',student_comments='$st_comment',supervisor_recommendation='$st_recomend',st_evaluation='$st_review',next_work_term='$st_next_work',re_employ='$st_re_emply',st_offer='$st_offer',work_date_from='$st_from_date',work_date_to='$st_to_date',super_name='$super_name',super_title='$super_title',super_sign='$super_sign',super_date='$super_date',st_sign='$st_sign',st_date='$st_date',hr_sign='$hr_sign',hr_title='$hr_title',hr_date='$hr_date',status='complete' WHERE id='$id' AND reference_name='$ref_name'");
    }

}

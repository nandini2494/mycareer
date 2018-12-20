<?php

App::uses('Model', 'Model');

class RecruitersModel extends Model {

    public function recruiterStudentList() {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, state.*, city.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON (register.state = state.id || register.provence = state.id) LEFT JOIN city ON register.city = city.id WHERE register.status = 'Student'");
        return $sql;
    }

    public function recruiterStudentListFilter($state, $city, $school) {
        $this->useTable = "register";
        $sql = $this->query("SELECT register.*, country.*, state.*, city.* FROM register INNER JOIN country ON register.country = country.id LEFT JOIN state ON (register.state = state.id || register.provence = state.id) LEFT JOIN city ON register.city = city.id WHERE register.status = 'Student' AND (register.state = '$state' || register.provence = '$state') AND register.city = '$city' AND register.school = '$school'");
        return $sql;
    }

    public function jobPost($data, $id, $type) {
        $this->useTable = 'job_post';
        @extract($data);
        $date = date('d-m-Y');
        $c_date = date('d-m-Y');
        $job_title = mysql_escape_string($job_title);
        $company_history = mysql_escape_string($company_history);
        $job_desc = mysql_escape_string($job_desc);
        $job_req = mysql_escape_string($job_req);

        if ($type == 'job_post') {
            if (!empty($_FILES['company_logo']['name'])) {
                $image = $_FILES['company_logo']['name'];
                $target = "img/" . rand(1000, 99999) . $image;
                move_uploaded_file($_FILES['company_logo']['tmp_name'], $target);
            }
        }
        if ($type == 'job_view') {
            $target = "img/" . $company_logo;

            $srcfile = 'C:/xampp/htdocs/MyCareer/app/webroot/tmp_file/' . $company_logo;
            $dstfile = 'C:/xampp/htdocs/MyCareer/app/webroot/img/' . $company_logo;
        }
        $this->query("INSERT INTO job_post SET company_id='$id',job_title='$job_title',company_logo='$target',company_name='$compny_name',province='$Provence',city='$City',position_type='$job_type',salary='$Wage',as_per='$salary_type',closing_date='$application_date',contact_email='$contact_email',company_history='$company_history',job_desc='$job_desc',requirement='$job_req',exp_level='$exp_level',job_province='$job_state',job_city='$job_city',university='$university',college='$college',school='$school',apprentice='$apprentice',select_year='$Course',gpa='$gpa',gpa_value='$gpa_val',position_expose='$postion_expose',travel='$travel',pre_employment='$pre_employment',app_process='$app_process',date='$c_date',status='open', form_type='$form_type'");
    }

    public function jobCoop($data, $id, $type) {
        $this->useTable = 'job_post';
        @extract($data);
        $date = date('d-m-Y');
        $c_date = date('d-m-Y');
        $job_title = mysql_escape_string($job_title);
        $company_history = mysql_escape_string($company_history);
        $job_desc = mysql_escape_string($job_desc);
        $job_req = mysql_escape_string($job_req);

        if ($type == 'job_post') {
            if (!empty($_FILES['company_logo']['name'])) {
                $image = $_FILES['company_logo']['name'];
                $target = "img/" . rand(1000, 99999) . $image;
                move_uploaded_file($_FILES['company_logo']['tmp_name'], $target);
            }
        }
        if ($type == 'job_view') {
            $target = "img/" . $company_logo;

            $srcfile = 'C:/xampp/htdocs/MyCareer/app/webroot/tmp_file/' . $company_logo;
            $dstfile = 'C:/xampp/htdocs/MyCareer/app/webroot/img/' . $company_logo;
        }
        $this->query("INSERT INTO job_post SET company_id='$id',job_title='$job_title',company_logo='$target',company_name='$compny_name',province='$Provence',city='$City',position_type='$job_type',salary='$Wage',as_per='$salary_type',closing_date='$application_date',contact_email='$contact_email',company_history='$company_history',job_desc='$job_desc',requirement='$job_req',exp_level='$exp_level',intern_length='$intern_type',intern_length_val='$length',paid_intern='$co_op_paid',auth_comp='$auth_comp',job_province='$job_state',job_city='$job_city',university='$university',college='$college',school='$school',apprentice='$apprentice',select_year='$Course',gpa='$gpa',gpa_value='$gpa_val',position_expose='$postion_expose',travel='$travel',pre_employment='$pre_employment',app_process='$app_process',date='$c_date',status='open',form_type='$form_type'");
    }

    public function jobIntern($data, $id, $type) {
        $this->useTable = 'job_post';
        @extract($data);
        $date = date('d-m-Y');
        $c_date = date('d-m-Y');
        $job_title = mysql_escape_string($job_title);
        $company_history = mysql_escape_string($company_history);
        $job_desc = mysql_escape_string($job_desc);
        $job_req = mysql_escape_string($job_req);

        if ($type == 'job_post') {
            if (!empty($_FILES['company_logo']['name'])) {
                $image = $_FILES['company_logo']['name'];
                $target = "img/" . rand(1000, 99999) . $image;
                move_uploaded_file($_FILES['company_logo']['tmp_name'], $target);
            }
        }
        if ($type == 'job_view') {
            $target = "img/" . $company_logo;

            $srcfile = 'C:/xampp/htdocs/MyCareer/app/webroot/tmp_file/' . $company_logo;
            $dstfile = 'C:/xampp/htdocs/MyCareer/app/webroot/img/' . $company_logo;
        }
        $this->query("INSERT INTO job_post SET company_id='$id',job_title='$job_title',company_logo='$target',company_name='$compny_name',province='$Provence',city='$City',position_type='$job_type',salary='$Wage',as_per='$salary_type',closing_date='$application_date',contact_email='$contact_email',company_history='$company_history',job_desc='$job_desc',requirement='$job_req',exp_level='$exp_level',intern_length='$intern_type',intern_length_val='$length',paid_intern='$co_op_paid',auth_comp='$auth_comp',job_province='$job_state',job_city='$job_city',university='$university',college='$college',school='$school',apprentice='$apprentice',select_year='$Course',gpa='$gpa',gpa_value='$gpa_val',position_expose='$postion_expose',travel='$travel',pre_employment='$pre_employment',app_process='$app_process',date='$c_date',status='open',form_type='$form_type'");
    }

    public function getLastJob() {
        $this->useTable = 'job_post';
        $sql = $this->query("SELECT id FROM job_post ORDER BY id DESC LIMIT 1");
        return $sql;
    }

    public function jobDetails($id) {
        $this->useTable = 'job_post';
        $sql = $this->query("SELECT * FROM job_post WHERE company_id='$id'");
        return $sql;
    }

    public function changeJobStatus($status, $job_id) {
        $this->useTable = 'job_post';
        $sql = $this->query("UPDATE job_post SET status='$status' WHERE id='$job_id'");
        return 1;
    }

    public function jobViewed($company_id) {
        $this->useTable = 'job_views';
        $sql = $this->query("SELECT job_views.*, register.*, job_post.* FROM job_views INNER JOIN register ON job_views.user_id = register.id INNER JOIN job_post ON job_post.id = job_views.job_id WHERE job_post.company_id = '$company_id'");
        return $sql;
    }

    public function candidateDetail($job_id) {
        $this->useTable = 'job_views';
        $sql = $this->query("SELECT job_applies.*,register.* FROM job_applies INNER JOIN register On job_applies.user_id = register.id WHERE job_id='$job_id'");
        return $sql;
    }

    public function companyBill($data) {
        $this->useTable = 'company_billing_info';
        @extract($data);
        $c_date = date('d-m-Y');
        $sql = $this->query("SELECT * FROM company_billing_info");
        if (count($sql) > 0) {
            foreach ($sql as $row) {
                $id = $row['company_billing_info']['id'];
            }
            $this->query("UPDATE company_billing_info SET balance='$account_balance', country='$country', currency='$currency', address='$address', province='$provence', city='$city', zip_code='$zip_code', person_name='$person_name', email='$email', phone='$phone' WHERE id='$id'");
        }
        $this->query("INSERT INTO company_billing_info SET balance='$account_balance', country='$country', currency='$currency', address='$address', province='$provence', city='$city', zip_code='$zip_code', person_name='$person_name', email='$email', phone='$phone', date='$c_date'");
    }

    public function viewCompanyBill() {
        $this->useTable = 'company_billing_info';
        $sql = $this->query("SELECT * FROM company_billing_info");
        return $sql;
    }

    public function viewState() {
        $this->useTable = 'state';
        $sql = $this->query("SELECT * FROM state");
        return $sql;
    }

    public function viewCity($state_id) {
        $this->useTable = 'city';
        $sql = array();
        $sql['city'] = $this->query("SELECT * FROM city WHERE state_id='$state_id'");
        $sql['college'] = $this->query("SELECT * FROM college WHERE state_id='$state_id'");
        $sql['university'] = $this->query("SELECT * FROM university WHERE state_id='$state_id'");
        return json_encode($sql);
    }

}

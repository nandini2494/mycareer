<?php

App::uses('AppController', 'Controller');

class RecruitersController extends AppController {

    private $pages_model, $r_model;

    public function beforeFilter() {
        $this->loadModel('PagesModel');
        $this->loadModel('RecruitersModel');
        $this->pages_model = new PagesModel();
        $this->r_model = new RecruitersModel();
        session_start();
    }

    public function index() {
        error_reporting(0);
        if ($this->Session->check('recuit_data')) {
            $province = $this->pages_model->selectProvince();
            $state = $this->pages_model->selectState();
            $data = $this->r_model->recruiterStudentList();
            $city = $this->pages_model->showCity();
            $this->set('school', $data);
            $this->set('result', $data);
            $this->set('province', $province);
            $this->set('state', $state);
            $this->set('city', $city);
            if ($this->request->is('post')) {
                $state = $this->request->data('state');
                $city = $this->request->data('city');
                $school = $this->request->data('school');
                $data = $this->r_model->recruiterStudentList();
                $data_filter = $this->r_model->recruiterStudentListFilter($state, $city, $school);
                $this->set('school', $data);
                $this->set('result', $data_filter);
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function job_tracking() {
        error_reporting(0);
        $this->loadModel('JobApply');
        $this->loadModel('JobView');
        if ($this->Session->check('recuit_data')) {
            $id = $this->Session->read('recuit_data');
            $this->set('job_detail', $this->r_model->jobDetails($id));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function download() {
        $name = "img/" . $this->request->query['filename'];
        $file_extension = strtolower(substr(strrchr($name, "."), 1));
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=" . urlencode(str_replace(" ", "", (substr(strrchr($name, "/"), 1)))));
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Description: File Transfer");
        header("Content-Length: " . filesize($name));
        flush(); // this doesn't really matter.
        $fp = fopen($name, "r");
        while (!feof($fp)) {
            echo fread($fp, 65536);
            flush(); // this is essential for large downloads
        }
        fclose($fp);
    }

    public function candidate_detail() {
        error_reporting(0);
        if ($this->Session->check('recuit_data')) {
            $id = $this->Session->read('recuit_data');
            $job_id = $this->params['url']['id'];
            $this->set('can_detail', $this->r_model->candidateDetail($job_id));
        }
    }

    public function job_post() {
        error_reporting(0);
        if ($this->Session->check('recuit_data')) {
            $id = $this->Session->read('recuit_data');
            $this->set('state', $this->r_model->viewState());
            if ($this->request->is('post')) {
                if ($this->request->data('post') == 'post') {
                    $this->r_model->jobPost($this->request->data, $id, 'job_post');
                    $data = $this->r_model->getLastJob();
                    foreach ($data as $row) {
                        $job_id = $row['job_post']['id'];
                    }
                    $this->redirect('/job_tracking.html');
                }
                if ($this->request->data('view') == 'view') {
                    $this->request->data['company_logo'] = rand(1000, 99999) . $_FILES['company_logo']['name'];
                    move_uploaded_file($_FILES['company_logo']['tmp_name'], 'tmp_file/' . $this->request->data['company_logo']);
                    $this->Session->write('job_post_value', $this->request->data);
                    $this->redirect('/view_job.html');
                }
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function co_op_form() {
        error_reporting(0);
        if ($this->Session->check('recuit_data')) {
            $id = $this->Session->read('recuit_data');
            $this->set('state', $this->r_model->viewState());
            if ($this->request->is('post')) {
                if ($this->request->data('post') == 'post') {
                    $this->r_model->jobCoop($this->request->data, $id, 'job_post');
                    $data = $this->r_model->getLastJob();
                    foreach ($data as $row) {
                        $job_id = $row['job_post']['id'];
                    }
                    $this->redirect('/job_tracking.html');
                }
                if ($this->request->data('view') == 'view') {
                    $this->request->data['company_logo'] = rand(1000, 99999) . $_FILES['company_logo']['name'];
                    move_uploaded_file($_FILES['company_logo']['tmp_name'], 'tmp_file/' . $this->request->data['company_logo']);
                    $this->Session->write('job_post_value', $this->request->data);
                    $this->redirect('/view_job.html');
                }
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function intern_form() {
        error_reporting(0);
        if ($this->Session->check('recuit_data')) {
            $id = $this->Session->read('recuit_data');
            $this->set('state', $this->r_model->viewState());
            if ($this->request->is('post')) {
                if ($this->request->data('post') == 'post') {
                    $this->r_model->jobIntern($this->request->data, $id, 'job_post');
                    $data = $this->r_model->getLastJob();
                    foreach ($data as $row) {
                        $job_id = $row['job_post']['id'];
                    }
                    $this->redirect('/job_tracking.html');
                }
                if ($this->request->data('view') == 'view') {
                    $this->request->data['company_logo'] = rand(1000, 99999) . $_FILES['company_logo']['name'];
                    move_uploaded_file($_FILES['company_logo']['tmp_name'], 'tmp_file/' . $this->request->data['company_logo']);
                    $this->Session->write('job_post_value', $this->request->data);
                    $this->redirect('/view_job.html');
                }
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function company_bill() {
        error_reporting(0);
        if ($this->Session->check('recuit_data')) {
            $this->set('bill_detail', $this->r_model->viewCompanyBill());
            if ($this->request->is('post')) {
                $this->r_model->companyBill($this->request->data);
                $this->redirect("/company_bill.html");
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function view_job() {
        error_reporting(0);
        if ($this->Session->check('job_post_value')) {
            $id = $this->Session->read('recuit_data');
            $job_post_value = $this->Session->read('job_post_value');
            $this->set('job_post_value', $job_post_value);

            if ($this->request->is('post')) {
                if ($job_post_value['form_type'] == 'jobPost') {
                    $this->r_model->jobPost($job_post_value, $id, 'job_view');
                }

                if ($job_post_value['form_type'] == 'coopPost') {
                    $this->r_model->jobCoop($job_post_value, $id, 'job_view');
                }

                if ($job_post_value['form_type'] == 'internPost') {
                    $this->r_model->jobIntern($job_post_value, $id, 'job_view');
                }
                $data = $this->r_model->getLastJob();
                foreach ($data as $row) {
                    $job_id = $row['job_post']['id'];
                }
                $this->redirect('/job_tracking.html');
            }
        }
    }

    public function changeJobStatus() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $data = $this->r_model->changeJobStatus($this->request->data('sataus'), $this->request->data('job_id'));
            echo $data;
        }
    }

    public function viewCity() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->r_model->viewCity($this->request->data('state_id'));
        }
    }

    public function logout() {
        $this->Session->delete('recuit_data');
        $this->redirect(['controller' => '/']);
    }

}

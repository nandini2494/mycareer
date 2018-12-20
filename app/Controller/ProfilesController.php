<?php

App::uses('AppController', 'Controller');

class ProfilesController extends AppController {

    private $d_model;

    public function beforeFilter() {
        $this->loadModel('DashboardsModel');
        $this->d_model = new DashboardsModel();
        session_start();
    }

    public function index($mcd = NULL) {
        error_reporting(0);
        if ($mcd == null) {
            $this->redirect("/index.html");
        } else {
            $data = $this->d_model->checkMCD($mcd);
            if ($data == 0) {
                $this->redirect("/index.html");
            } else {
                if ($this->Session->check('guest')) {
                    $indus_data = $this->Session->read('guest');
                    $this->set('indus_id', $this->Session->read('guest'));
                    $this->set('industry_id', $indus_data);
                    $this->set('user_mcd', $mcd);
                    $this->set('total_like', $this->d_model->totalLikeMYCD($mcd));
                    $this->set('total_dislike', $this->d_model->totalDisLikeMYCD($mcd));
                    $this->set('user', $this->d_model->userView($mcd));
                    $this->set('career_like', $this->d_model->careerLike($indus_data, $mcd));
                    $this->set('media', $this->d_model->socialMediaView($mcd));
                    $this->set('resume_data', $this->d_model->resumeDataIndus($mcd));
                    $this->set('ref_data_indus', $this->d_model->refDataIndus($mcd));
                    $this->set('accomp_data', $this->d_model->accompDataIndus($mcd));
                    $this->set('key_skill_data', $this->d_model->keyDataIndus($mcd));
                    $this->set('mission_data', $this->d_model->missionDataIndus($mcd));
                    $this->set('swot_data', $this->d_model->swotDataIndus($mcd));
                    $this->set('edu_data', $this->d_model->educationDataIndus($mcd));
                    $this->set('evidence_data', $this->d_model->evidenceDataIndus($mcd));
                    $this->set('comp_data', $this->d_model->computerDataIndus($mcd));
                    $this->set('essen_data', $this->d_model->essentialDataIndus($mcd));
                    $this->set('career_data', $this->d_model->careerActivityDataIndus($mcd));
                    $this->set('volunteer_data', $this->d_model->volunteerWorkDataIndus($mcd));
                    $this->set('course_data', $this->d_model->courseDataIndus($mcd));
                    $this->set('view_summary', $this->d_model->viewSummaryData($mcd));
                    $this->set('view_summary_mcd', $this->d_model->viewResumeSummaryMCD($mcd));
                } else {
                    $this->set('user_mcd', $mcd);
                    $data = array('status' => 0, 'message' => 'Please Signup');
                }

                if ($this->request->is('post')) {
                    $data = $this->d_model->indusSgned($this->request->data);
                    if ($data['status'] == TRUE) {
                        $this->Session->write('guest', $data['msg']);
                    } else {
                        $this->set('msg', $data['msg']);
                    }
                    if ($this->Session->check('guest')) {
                        $this->redirect('/profile/' . $mcd . '');
                    }
                }
            }
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

    public function logout() {
        $id = $this->Session->read('guest');
        $this->d_model->logoutTime($id);
        $this->Session->delete('guest');
        $this->redirect(['controller' => '/']);
    }

}

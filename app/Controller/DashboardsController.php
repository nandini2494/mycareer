<?php

App::import('Vendor', 'tcpdf/tcpdf');
App::uses('AppController', 'Controller');

class DashboardsController extends AppController {

    private $d_model, $pages_model;

    public function beforeFilter() {
        session_start();
        $this->loadModel('DashboardsModel');
        $this->d_model = new DashboardsModel();

        $this->loadModel('PagesModel');
        $this->pages_model = new PagesModel();
    }

    public function index() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('study_list', $this->d_model->studyList($user));

            $data = $this->d_model->userData($user);
            $media = $this->d_model->socialMedia($user);
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('token_val', $user['token']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('results', $data);
            $this->set('media_data', $media);

            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('career_plan', $this->d_model->countCareerPlan($user));
            $this->set('resume', $this->d_model->countResume($user));
            $this->set('count_job', $this->d_model->countJobSchool($user));
            $this->set('accomp', $this->d_model->countAccomp($user));
            $this->set('key_skill', $this->d_model->countKeyskill($user));
            $this->set('essential_skill', $this->d_model->countEssentialSkill($user));
            $this->set('career_related_act', $this->d_model->countCareerRelatedActivity($user));
            $this->set('education', $this->d_model->countEducation($user));
            $this->set('interview_note', $this->d_model->countInterviewNotes($user));
            $this->set('task_list', $this->d_model->countTasklist($user));
            $this->set('job_search_site', $this->d_model->countJobsearchSite($user));
            $this->set('career_contact', $this->d_model->countCareerContact($user));
            $this->set('reference', $this->d_model->countReferences($user));
            $this->set('career_goal', $this->d_model->countCareerGoal($user));
            $this->set('event', $this->d_model->countEvent($user));
            $this->set('swot', $this->d_model->countSwot($user));
            $this->set('mission_statement', $this->d_model->countMissionStatement($user));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function education() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $data = $this->d_model->userData($user);
            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $media = $this->d_model->socialMedia($user);
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('token_val', $user['token']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('results', $data);
            $this->set('media_data', $media);

            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('career_plan', $this->d_model->countCareerPlan($user));
            $this->set('resume', $this->d_model->countResume($user));
            $this->set('count_job', $this->d_model->countJobSchool($user));
            $this->set('accomp', $this->d_model->countAccomp($user));
            $this->set('key_skill', $this->d_model->countKeyskill($user));
            $this->set('essential_skill', $this->d_model->countEssentialSkill($user));
            $this->set('career_related_act', $this->d_model->countCareerRelatedActivity($user));
            $this->set('education', $this->d_model->countEducation($user));
            $this->set('interview_note', $this->d_model->countInterviewNotes($user));
            $this->set('task_list', $this->d_model->countTasklist($user));
            $this->set('job_search_site', $this->d_model->countJobsearchSite($user));
            $this->set('career_contact', $this->d_model->countCareerContact($user));
            $this->set('reference', $this->d_model->countReferences($user));
            $this->set('career_goal', $this->d_model->countCareerGoal($user));
            $this->set('event', $this->d_model->countEvent($user));
            $this->set('swot', $this->d_model->countSwot($user));
            $this->set('mission_statement', $this->d_model->countMissionStatement($user));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function tracker() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $data = $this->d_model->userData($user);
            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $media = $this->d_model->socialMedia($user);
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('token_val', $user['token']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('results', $data);
            $this->set('media_data', $media);

            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('career_plan', $this->d_model->countCareerPlan($user));
            $this->set('resume', $this->d_model->countResume($user));
            $this->set('count_job', $this->d_model->countJobSchool($user));
            $this->set('accomp', $this->d_model->countAccomp($user));
            $this->set('key_skill', $this->d_model->countKeyskill($user));
            $this->set('essential_skill', $this->d_model->countEssentialSkill($user));
            $this->set('career_related_act', $this->d_model->countCareerRelatedActivity($user));
            $this->set('education', $this->d_model->countEducation($user));
            $this->set('interview_note', $this->d_model->countInterviewNotes($user));
            $this->set('task_list', $this->d_model->countTasklist($user));
            $this->set('job_search_site', $this->d_model->countJobsearchSite($user));
            $this->set('career_contact', $this->d_model->countCareerContact($user));
            $this->set('reference', $this->d_model->countReferences($user));
            $this->set('career_goal', $this->d_model->countCareerGoal($user));
            $this->set('event', $this->d_model->countEvent($user));
            $this->set('swot', $this->d_model->countSwot($user));
            $this->set('mission_statement', $this->d_model->countMissionStatement($user));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function terms_conditions() {
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $id = $this->params['url']['id'];
            $this->set('view_result', $this->d_model->viewIndustryData($id));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function decline() {
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->d_model->declineData($user);
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function updateUser() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateData($this->request->data);
        }
    }

    public function deleteMedia() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteMedia($this->request->data('delete_id'));
        }
    }

    public function certify() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $data = $this->d_model->userData($user);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user_id));
            $this->set('process_count', $this->d_model->process_count($user_id));
            $this->set('new_count', $this->d_model->new_count($user_id));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));

            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }

            $value = $this->d_model->userValue($user_id);
            $this->set('data', $value);
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function deleteEssentialSkills() {
        $this->autoRender = FALSE;
        if ($this->request->is('ajax')) {
            echo $this->d_model->deleteEssentialSkills($this->request->data('id'));
        }
    }

    public function fetchEssentialSkills() {
        $this->autoRender = FALSE;
        $user = $this->Session->read('udata1');
        if ($this->request->is('ajax')) {
            echo $this->d_model->fetchEssentialSkills($this->request->data('skill_type'), $user['id']);
        }
    }

    public function icons() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('user_data', $user);
            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('country_data', $user['country_value']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('results', $data);
            $this->set('job_data', $this->d_model->jobView($user));
            $this->set('job_upcoming', $this->d_model->jobUpcoming($user));
            $this->set('essentials_skills', $this->d_model->getEssentialSkills($user['id']));
            $this->set('job_submit', $this->d_model->jobAppsubmit($user));
            $this->set('job_accept', $this->d_model->jobAccept($user));
            $this->set('job_complete', $this->d_model->jobComplete($user));
            $this->set('job_interview', $this->d_model->jobInterview($user));

            $this->set('school_data', $this->d_model->schoolView($user));
            $this->set('school_upcoming', $this->d_model->schoolUpcoming($user));

            $this->set('school_submit', $this->d_model->schoolAppsubmit($user));
            $this->set('school_accept', $this->d_model->schoolAccept($user));
            $this->set('school_complete', $this->d_model->schoolComplete($user));
            $this->set('school_interview', $this->d_model->schoolInterview($user));

            $this->set('job_doc_data', $this->d_model->jobdocView($user));
            $this->set('school_doc_data', $this->d_model->schooldocView($user));
            $this->set('resume_chron_data', $this->d_model->resumeChronView($user));
            $this->set('resume_fun_data', $this->d_model->resumeFunView($user));
            $this->set('resume_comb_data', $this->d_model->resumeCombView($user));
            $this->set('cover_data', $this->d_model->LetterView($user));
            $this->set('skill_data', $this->d_model->skillView($user));
            $this->set('acomplish_data', $this->d_model->acomplishView($user));
            $this->set('view_minimal', $this->d_model->viewMinimal($user));
            $this->set('view_jobSite', $this->d_model->viewJob_site($user));
            $this->set('view_interview_notes', $this->d_model->viewInterview_notes($user));
            $this->set('view_reference', $this->d_model->viewReference($user));
            $this->set('career_related', $this->d_model->viewCareerRelated($user));
            $this->set('view_career_contact', $this->d_model->viewCareerContact($user));
            $this->set('view_reminder', $this->d_model->viewEvent($user));
            $this->set('view_task_list', $this->d_model->viewTaskList($user));
            $this->set('view_career_goal', $this->d_model->viewCareerGoal($user));
            $this->set('view_swot', $this->d_model->viewSwot($user));
            $this->set('view_mission', $this->d_model->viewMission($user));
            $this->set('view_volunteer', $this->d_model->viewVolunteer($user));
            $this->set('view_course', $this->d_model->viewCourse($user));
            $this->set('view_career_plan', $this->d_model->viewCareerPlan($user));
            $this->set('view_career_action_plan', $this->d_model->viewCareerActionPlan($user));
            $this->set('view_education', $this->d_model->viewEducation($user));
            $this->set('view_job_ref', $this->d_model->viewJobRef($user));
            $this->set('view_school_ref', $this->d_model->viewSchoolRef($user));
            $this->set('view_vol_ref', $this->d_model->viewVolRef($user));
            $this->set('view_char_ref', $this->d_model->viewCharRef($user));
            $this->set('view_comp_skill', $this->d_model->viewcompSkill($user));
            $this->set('view_diploma_evid_skill', $this->d_model->viewDiplomaEvidenceSkill($user));
            $this->set('view_certificate_evid_skill', $this->d_model->viewCertificateEvidenceSkill($user));
            $this->set('view_license_evid_skill', $this->d_model->viewLicenseEvidenceSkill($user));
            $this->set('view_award_evid_skill', $this->d_model->viewAwardEvidenceSkill($user));
            $this->set('view_scholar_evid_skill', $this->d_model->viewScholarshipEvidenceSkill($user));
            $this->set('view_evaluate_evid_skill', $this->d_model->viewEvaluationEvidenceSkill($user));
            $this->set('view_promotion_evid_skill', $this->d_model->viewPromotionEvidenceSkill($user));
            $this->set('view_appriciate_evid_skill', $this->d_model->viewAppriciationEvidenceSkill($user));
            $this->set('view_perform_evid_skill', $this->d_model->viewPerformanceEvidenceSkill($user));
            $this->set('view_other_evid_skill', $this->d_model->viewOtherEvidenceSkill($user));
            $this->set('view_elevator', $this->d_model->viewElevatorPitch($user));
            $this->set('view_interview', $this->d_model->viewInterviewQues($user));
            $this->set('checklist', $this->d_model->viewChecklist($user));

            if ($this->request->is('post')) {
                if ($this->request->data('form_name') == 'add_job' && empty($this->request->data('form_id_data'))) {
                    $this->d_model->addJob($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_job' && !empty($this->request->data('form_id_data'))) {
                    $this->d_model->updateJob($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'school_form' && empty($this->request->data('form_id'))) {
                    $this->d_model->addSchool($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'school_form' && !empty($this->request->data('form_id'))) {
                    $this->d_model->updateSchool($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'job_upload_doc' && empty($this->request->data('school_doc_id_name'))) {
                    $this->d_model->uploadDoc($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'job_upload_doc' && !empty($this->request->data('school_doc_id_name'))) {
                    $this->d_model->updateUploadDoc($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'school_upload_doc' && empty($this->request->data('school_doc_id_name'))) {
                    $this->d_model->uploadDoc($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'school_upload_doc' && !empty($this->request->data('school_doc_id_name'))) {
                    $this->d_model->updateUploadDoc($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'upload_resume1' && empty($this->request->data('resume_id_name'))) {
                    $this->d_model->uploadResume($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                /* if ($this->request->data('form_name') == 'upload_resume1' && !empty($this->request->data('resume_id_name'))) {
                  $this->d_model->updateUploadResume($this->request->data);
                  $this->redirect("/icons.html");
                  } */
                if ($this->request->data('form_name') == 'upload_cover_letter' && empty($this->request->data('cover_id_name'))) {
                    $this->d_model->uploadLetter($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'upload_cover_letter' && !empty($this->request->data('cover_id_name'))) {
                    $this->d_model->updateUploadLetter($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'checklist') {
                    if ($this->request->data('resume_button') == 'submit_resume') {
                        $this->d_model->updateChecklist($this->request->data, $user);
                        $this->redirect("/icons.html");
                    }
                    if ($this->request->data('resume_button') == 'complete_resume') {
                        $this->d_model->addChecklist($this->request->data, $user);
                        $this->redirect("/icons.html");
                    }
                }
                if ($this->request->data('form_name') == 'key_skill' && empty($this->request->data('key_name_id'))) {
                    $this->d_model->keySkill($this->request->data['soft_skill_list'], serialize($this->request->data['key_skill']), $this->request->data['Hard_skills'], serialize($this->request->data['hard_skill']), $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'key_skill' && !empty($this->request->data('key_name_id'))) {
                    $this->d_model->updatekeySkill($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'accomplish' && empty($this->request->data('accomp_id_data'))) {
                    $this->d_model->addAccomplish($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'accomplish' && !empty($this->request->data('accomp_id_data'))) {
                    $this->d_model->updateAccomplish($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'minimal_exp' && empty($this->request->data('minimal_id_name'))) {
                    $this->d_model->addMinimal($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'minimal_exp' && !empty($this->request->data('minimal_id_name'))) {
                    $this->d_model->updateMinimal($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'job_site' && empty($this->request->data('job_site_id_name'))) {
                    $this->d_model->addJob_sites($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'job_site' && !empty($this->request->data('job_site_id_name'))) {
                    $this->d_model->updateJob_sites($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'interview_notes' && empty($this->request->data('intervie_id_name'))) {
                    $this->d_model->addInterview_notes($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'interview_notes' && !empty($this->request->data('intervie_id_name'))) {
                    $this->d_model->updateInterview_notes($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'upload_reference' && empty($this->request->data('upload_doc_id_name'))) {
                    $this->d_model->addReference($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'upload_reference' && !empty($this->request->data('upload_doc_id_name'))) {
                    $this->d_model->updateReference($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_related_act' && empty($this->request->data('career_id_name'))) {
                    $this->d_model->addCareerActivity($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_related_act' && !empty($this->request->data('career_id_name'))) {
                    $this->d_model->updateCareerActivity($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_career_contact' && empty($this->request->data('career_contact_id'))) {
                    $this->d_model->addCareerContact($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_career_contact' && !empty($this->request->data('career_contact_id'))) {
                    $this->d_model->updateCareerContact($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'event_reminder' && empty($this->request->data('event_id_name'))) {
                    $this->d_model->addEvent($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'event_reminder' && !empty($this->request->data('event_id_name'))) {
                    $this->d_model->updateEvent($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'task_list') {
                    $this->d_model->addTaskList($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_goal' && empty($this->request->data('career_goal_id_name'))) {
                    $this->d_model->addCareerGoal($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_goal' && !empty($this->request->data('career_goal_id_name'))) {
                    $this->d_model->updateCareerGoal($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'swot' && empty($this->request->data('swot_name_id'))) {
                    $this->d_model->addSwot($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'swot' && !empty($this->request->data('swot_name_id'))) {
                    $this->d_model->updateSwot($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'mission_statement' && empty($this->request->data('mission_id_name'))) {
                    $this->d_model->addMission($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'mission_statement' && !empty($this->request->data('mission_id_name'))) {
                    $this->d_model->updateMission($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'volunteer_form' && empty($this->request->data('vol_name_id'))) {
                    $this->d_model->addVolunteer($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'volunteer_form' && !empty($this->request->data('vol_name_id'))) {
                    $this->d_model->updateVolunteer($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_course' && empty($this->request->data('course_id_name'))) {
                    $this->d_model->addCourse($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_course' && !empty($this->request->data('course_id_name'))) {
                    $this->d_model->updateCourse($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_career_plan' && empty($this->request->data('career_plan_name'))) {
                    $this->d_model->addCareerPlan($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_career_plan' && !empty($this->request->data('career_plan_name'))) {
                    $this->d_model->updateCareerPlan($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_action_plan' && empty($this->request->data('action_plan_name'))) {
                    $this->d_model->addCareerActionPlan($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_action_plan' && !empty($this->request->data('action_plan_name'))) {
                    $this->d_model->updateCareerActionPlan($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_education' && empty($this->request->data('education_name'))) {
                    $this->d_model->addEducation($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_education' && !empty($this->request->data('education_name'))) {
                    $this->d_model->updateEducation($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_job_ref' && empty($this->request->data('job_ref_name'))) {
                    $this->d_model->addJobRef($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_job_ref' && !empty($this->request->data('job_ref_name'))) {
                    $this->d_model->updateJobRef($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_school_ref' && empty($this->request->data('school_ref_name'))) {
                    $this->d_model->addSchoolRef($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_school_ref' && !empty($this->request->data('school_ref_name'))) {
                    $this->d_model->updateSchoolRef($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_org_ref' && empty($this->request->data('org_ref_name'))) {
                    $this->d_model->addOrgRef($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_org_ref' && !empty($this->request->data('org_ref_name'))) {
                    $this->d_model->updateOrgRef($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_char_ref' && empty($this->request->data('ref_char_name'))) {
                    $this->d_model->addCharRef($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_char_ref' && !empty($this->request->data('ref_char_name'))) {
                    $this->d_model->updateCharRef($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'essential_skill_form' && empty($this->request->data('essen_val_name'))) {
                    $this->d_model->addEsstintialSkills($user['id'], $this->request->data('essential_skills_update_questions'), $this->request->data('essential_skills_update_answers'), $this->request->data('essential_skills_update_skill_type'));
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'essential_skill_form' && !empty($this->request->data('essen_val_name'))) {
                    $this->d_model->updateEsstintialSkills($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'computer_skill' && empty($this->request->data('comp_skill_id'))) {
                    $this->d_model->addCompSkill($this->request->data, $user['id']);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'computer_skill' && !empty($this->request->data('comp_skill_id'))) {
                    $this->d_model->updateCompSkill($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'evidence_skill' && empty($this->request->data('evidence_skill_id'))) {
                    $this->d_model->addEvidenceSkill($this->request->data, $user['id']);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'elevator_pitch' && empty($this->request->data('elevator_name_id'))) {
                    $this->d_model->addElevatorPitch($this->request->data, $user['id']);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'elevator_pitch' && !empty($this->request->data('elevator_name_id'))) {
                    $this->d_model->updateElevatorPitch($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'interview_question' && empty($this->request->data('interview_id_name'))) {
                    $this->d_model->addInterviewQues($this->request->data, $user['id']);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'interview_question' && !empty($this->request->data('interview_id_name'))) {
                    $this->d_model->updateInterviewQues($this->request->data);
                    $this->redirect("/icons.html");
                }
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function career_connection() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('user_data', $user);
            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('country_data', $user['country_value']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('results', $data);
            $this->set('job_data', $this->d_model->jobView($user));
            $this->set('job_upcoming', $this->d_model->jobUpcoming($user));
            $this->set('essentials_skills', $this->d_model->getEssentialSkills($user['id']));
            $this->set('job_submit', $this->d_model->jobAppsubmit($user));
            $this->set('job_accept', $this->d_model->jobAccept($user));
            $this->set('job_complete', $this->d_model->jobComplete($user));
            $this->set('job_interview', $this->d_model->jobInterview($user));

            $this->set('school_data', $this->d_model->schoolView($user));
            $this->set('school_upcoming', $this->d_model->schoolUpcoming($user));

            $this->set('school_submit', $this->d_model->schoolAppsubmit($user));
            $this->set('school_accept', $this->d_model->schoolAccept($user));
            $this->set('school_complete', $this->d_model->schoolComplete($user));
            $this->set('school_interview', $this->d_model->schoolInterview($user));

            $this->set('job_doc_data', $this->d_model->jobdocView($user));
            $this->set('school_doc_data', $this->d_model->schooldocView($user));
            $this->set('resume_chron_data', $this->d_model->resumeChronView($user));
            $this->set('resume_fun_data', $this->d_model->resumeFunView($user));
            $this->set('resume_comb_data', $this->d_model->resumeCombView($user));
            $this->set('cover_data', $this->d_model->LetterView($user));
            $this->set('skill_data', $this->d_model->skillView($user));
            $this->set('acomplish_data', $this->d_model->acomplishView($user));
            $this->set('view_minimal', $this->d_model->viewMinimal($user));
            $this->set('view_jobSite', $this->d_model->viewJob_site($user));
            $this->set('view_interview_notes', $this->d_model->viewInterview_notes($user));
            $this->set('view_reference', $this->d_model->viewReference($user));
            $this->set('career_related', $this->d_model->viewCareerRelated($user));
            $this->set('view_career_contact', $this->d_model->viewCareerContact($user));
            $this->set('view_reminder', $this->d_model->viewEvent($user));
            $this->set('view_task_list', $this->d_model->viewTaskList($user));
            $this->set('view_career_goal', $this->d_model->viewCareerGoal($user));
            $this->set('view_swot', $this->d_model->viewSwot($user));
            $this->set('view_mission', $this->d_model->viewMission($user));
            $this->set('view_volunteer', $this->d_model->viewVolunteer($user));
            $this->set('view_course', $this->d_model->viewCourse($user));
            $this->set('view_career_plan', $this->d_model->viewCareerPlan($user));
            $this->set('view_career_action_plan', $this->d_model->viewCareerActionPlan($user));
            $this->set('view_education', $this->d_model->viewEducation($user));
            $this->set('view_job_ref', $this->d_model->viewJobRef($user));
            $this->set('view_school_ref', $this->d_model->viewSchoolRef($user));
            $this->set('view_vol_ref', $this->d_model->viewVolRef($user));
            $this->set('view_char_ref', $this->d_model->viewCharRef($user));
            $this->set('view_comp_skill', $this->d_model->viewcompSkill($user));
            $this->set('view_diploma_evid_skill', $this->d_model->viewDiplomaEvidenceSkill($user));
            $this->set('view_certificate_evid_skill', $this->d_model->viewCertificateEvidenceSkill($user));
            $this->set('view_license_evid_skill', $this->d_model->viewLicenseEvidenceSkill($user));
            $this->set('view_award_evid_skill', $this->d_model->viewAwardEvidenceSkill($user));
            $this->set('view_scholar_evid_skill', $this->d_model->viewScholarshipEvidenceSkill($user));
            $this->set('view_evaluate_evid_skill', $this->d_model->viewEvaluationEvidenceSkill($user));
            $this->set('view_promotion_evid_skill', $this->d_model->viewPromotionEvidenceSkill($user));
            $this->set('view_appriciate_evid_skill', $this->d_model->viewAppriciationEvidenceSkill($user));
            $this->set('view_perform_evid_skill', $this->d_model->viewPerformanceEvidenceSkill($user));
            $this->set('view_other_evid_skill', $this->d_model->viewOtherEvidenceSkill($user));
            $this->set('view_elevator', $this->d_model->viewElevatorPitch($user));
            $this->set('view_interview', $this->d_model->viewInterviewQues($user));
            $this->set('checklist', $this->d_model->viewChecklist($user));

            if ($this->request->is('post')) {
                if ($this->request->data('form_name') == 'add_job' && empty($this->request->data('form_id_data'))) {
                    $this->d_model->addJob($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_job' && !empty($this->request->data('form_id_data'))) {
                    $this->d_model->updateJob($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'school_form' && empty($this->request->data('form_id'))) {
                    $this->d_model->addSchool($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'school_form' && !empty($this->request->data('form_id'))) {
                    $this->d_model->updateSchool($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'job_upload_doc' && empty($this->request->data('school_doc_id_name'))) {
                    $this->d_model->uploadDoc($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'job_upload_doc' && !empty($this->request->data('school_doc_id_name'))) {
                    $this->d_model->updateUploadDoc($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'school_upload_doc' && empty($this->request->data('school_doc_id_name'))) {
                    $this->d_model->uploadDoc($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'school_upload_doc' && !empty($this->request->data('school_doc_id_name'))) {
                    $this->d_model->updateUploadDoc($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'upload_resume1' && empty($this->request->data('resume_id_name'))) {
                    $this->d_model->uploadResume($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                /* if ($this->request->data('form_name') == 'upload_resume1' && !empty($this->request->data('resume_id_name'))) {
                  $this->d_model->updateUploadResume($this->request->data);
                  $this->redirect("/icons.html");
                  } */
                if ($this->request->data('form_name') == 'upload_cover_letter' && empty($this->request->data('cover_id_name'))) {
                    $this->d_model->uploadLetter($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'upload_cover_letter' && !empty($this->request->data('cover_id_name'))) {
                    $this->d_model->updateUploadLetter($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'checklist') {
                    if ($this->request->data('resume_button') == 'submit_resume') {
                        $this->d_model->updateChecklist($this->request->data, $user);
                        $this->redirect("/icons.html");
                    }
                    if ($this->request->data('resume_button') == 'complete_resume') {
                        $this->d_model->addChecklist($this->request->data, $user);
                        $this->redirect("/icons.html");
                    }
                }
                if ($this->request->data('form_name') == 'key_skill' && empty($this->request->data('key_name_id'))) {
                    $this->d_model->keySkill($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'key_skill' && !empty($this->request->data('key_name_id'))) {
                    $this->d_model->updatekeySkill($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'accomplish' && empty($this->request->data('accomp_id_data'))) {
                    $this->d_model->addAccomplish($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'accomplish' && !empty($this->request->data('accomp_id_data'))) {
                    $this->d_model->updateAccomplish($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'minimal_exp' && empty($this->request->data('minimal_id_name'))) {
                    $this->d_model->addMinimal($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'minimal_exp' && !empty($this->request->data('minimal_id_name'))) {
                    $this->d_model->updateMinimal($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'job_site' && empty($this->request->data('job_site_id_name'))) {
                    $this->d_model->addJob_sites($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'job_site' && !empty($this->request->data('job_site_id_name'))) {
                    $this->d_model->updateJob_sites($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'interview_notes' && empty($this->request->data('intervie_id_name'))) {
                    $this->d_model->addInterview_notes($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'interview_notes' && !empty($this->request->data('intervie_id_name'))) {
                    $this->d_model->updateInterview_notes($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'upload_reference' && empty($this->request->data('upload_doc_id_name'))) {
                    $this->d_model->addReference($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'upload_reference' && !empty($this->request->data('upload_doc_id_name'))) {
                    $this->d_model->updateReference($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_related_act' && empty($this->request->data('career_id_name'))) {
                    $this->d_model->addCareerActivity($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_related_act' && !empty($this->request->data('career_id_name'))) {
                    $this->d_model->updateCareerActivity($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_career_contact' && empty($this->request->data('career_contact_id'))) {
                    $this->d_model->addCareerContact($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_career_contact' && !empty($this->request->data('career_contact_id'))) {
                    $this->d_model->updateCareerContact($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'event_reminder' && empty($this->request->data('event_id_name'))) {
                    $this->d_model->addEvent($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'event_reminder' && !empty($this->request->data('event_id_name'))) {
                    $this->d_model->updateEvent($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'task_list') {
                    $this->d_model->addTaskList($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_goal' && empty($this->request->data('career_goal_id_name'))) {
                    $this->d_model->addCareerGoal($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_goal' && !empty($this->request->data('career_goal_id_name'))) {
                    $this->d_model->updateCareerGoal($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'swot' && empty($this->request->data('swot_name_id'))) {
                    $this->d_model->addSwot($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'swot' && !empty($this->request->data('swot_name_id'))) {
                    $this->d_model->updateSwot($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'mission_statement' && empty($this->request->data('mission_id_name'))) {
                    $this->d_model->addMission($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'mission_statement' && !empty($this->request->data('mission_id_name'))) {
                    $this->d_model->updateMission($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'volunteer_form' && empty($this->request->data('vol_name_id'))) {
                    $this->d_model->addVolunteer($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'volunteer_form' && !empty($this->request->data('vol_name_id'))) {
                    $this->d_model->updateVolunteer($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_course' && empty($this->request->data('course_id_name'))) {
                    $this->d_model->addCourse($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_course' && !empty($this->request->data('course_id_name'))) {
                    $this->d_model->updateCourse($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_career_plan' && empty($this->request->data('career_plan_name'))) {
                    $this->d_model->addCareerPlan($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_career_plan' && !empty($this->request->data('career_plan_name'))) {
                    $this->d_model->updateCareerPlan($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_action_plan' && empty($this->request->data('action_plan_name'))) {
                    $this->d_model->addCareerActionPlan($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'career_action_plan' && !empty($this->request->data('action_plan_name'))) {
                    $this->d_model->updateCareerActionPlan($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_education' && empty($this->request->data('education_name'))) {
                    $this->d_model->addEducation($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_education' && !empty($this->request->data('education_name'))) {
                    $this->d_model->updateEducation($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_job_ref' && empty($this->request->data('job_ref_name'))) {
                    $this->d_model->addJobRef($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_job_ref' && !empty($this->request->data('job_ref_name'))) {
                    $this->d_model->updateJobRef($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_school_ref' && empty($this->request->data('school_ref_name'))) {
                    $this->d_model->addSchoolRef($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_school_ref' && !empty($this->request->data('school_ref_name'))) {
                    $this->d_model->updateSchoolRef($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_org_ref' && empty($this->request->data('org_ref_name'))) {
                    $this->d_model->addOrgRef($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_org_ref' && !empty($this->request->data('org_ref_name'))) {
                    $this->d_model->updateOrgRef($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_char_ref' && empty($this->request->data('ref_char_name'))) {
                    $this->d_model->addCharRef($this->request->data, $user);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'add_char_ref' && !empty($this->request->data('ref_char_name'))) {
                    $this->d_model->updateCharRef($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'essential_skill_form' && empty($this->request->data('essen_val_name'))) {
                    $this->d_model->addEsstintialSkills($user['id'], $this->request->data('essential_skills_update_questions'), $this->request->data('essential_skills_update_answers'), $this->request->data('essential_skills_update_skill_type'));
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'essential_skill_form' && !empty($this->request->data('essen_val_name'))) {
                    $this->d_model->updateEsstintialSkills($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'computer_skill' && empty($this->request->data('comp_skill_id'))) {
                    $this->d_model->addCompSkill($this->request->data, $user['id']);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'computer_skill' && !empty($this->request->data('comp_skill_id'))) {
                    $this->d_model->updateCompSkill($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'evidence_skill' && empty($this->request->data('evidence_skill_id'))) {
                    $this->d_model->addEvidenceSkill($this->request->data, $user['id']);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'elevator_pitch' && empty($this->request->data('elevator_name_id'))) {
                    $this->d_model->addElevatorPitch($this->request->data, $user['id']);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'elevator_pitch' && !empty($this->request->data('elevator_name_id'))) {
                    $this->d_model->updateElevatorPitch($this->request->data);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'interview_question' && empty($this->request->data('interview_id_name'))) {
                    $this->d_model->addInterviewQues($this->request->data, $user['id']);
                    $this->redirect("/icons.html");
                }
                if ($this->request->data('form_name') == 'interview_question' && !empty($this->request->data('interview_id_name'))) {
                    $this->d_model->updateInterviewQues($this->request->data);
                    $this->redirect("/icons.html");
                }
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function reciept() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('country_data', $user['country_value']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('results', $data);
            $url = $this->params['url']['val'];
            $this->set('data', $this->d_model->reciept_data(json_decode($url)));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function typography() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('results', $data);
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function industry_data() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $img = str_replace('data:image/png;base64,', '', $this->request->data('dataurl'));
            $url_data = base64_decode($img);
            $path = 'img/' . uniqid() . '.png';
            $fp = fopen($path, 'wb');
            fwrite($fp, $url_data);
            fclose($fp);
            $this->d_model->industrySignUp($this->request->data('user_name'), $this->request->data('password'), $path, $this->request->data('url_data'), $this->request->data('ref_id'));
        }
    }

    public function legal_docs_send() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $img = str_replace('data:image/png;base64,', '', $this->request->data('dataurl'));
            $url_data = base64_decode($img);
            $path = 'img/' . uniqid() . '.png';
            $fp = fopen($path, 'wb');
            fwrite($fp, $url_data);
            fclose($fp);
            $view_data = $this->d_model->legalDocsSend($this->request->data('employer_name'), $this->request->data('employer_email'), $path, $this->request->data('mcd_data'));
            echo $view_data;
        }
    }

    public function user() {
        error_reporting(0);
        $user = $this->Session->read('udata1');

        $this->set('user_data', $user);

        $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
        $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
        $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

        $this->set('coupon_data', $this->pages_model->showCoupon());
        $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
        $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
        $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
        $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

        $this->set('result', $this->d_model->userData($user));
        $this->set('complete_count', $this->d_model->complete_count($user));
        $this->set('process_count', $this->d_model->process_count($user));
        $this->set('new_count', $this->d_model->new_count($user));
        $this->set('reference_count', $this->d_model->verification($user));
        $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));

        $this->set('register_date', $user['reg_date']);
        $this->set('duration_date', $user['dur_date']);
        $this->set('user_id', $user['id']);
        $this->set('user_email', $user['email']);
        $this->set('progam_pay', $user['program']);
        $this->set('prgrm_duration', $user['program_duration']);
        $this->set('country_data', $user['country_value']);
        $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
        $this->set('user_status', $user['status']);
        $this->set('token_val', $user['token']);
        if ($user['token'] != '') {
            $this->set('logo', $this->d_model->setLogo($user['token']));
        }

        if ($this->request->is('ajax')) {
            error_reporting(0);
            $user = $this->Session->read('udata1');
            $this->autoRender = false;
            $name = $this->request->data('fullname');
            $exp_arr = explode('|', $this->request->data('ref_name'));
            $name = $this->request->data('fullname');
            /* $img = str_replace('data:image/png;base64,', '', $this->request->data('dataurl'));
              $url_data = base64_decode($img);
              $exp_arr = explode('|', $this->request->data('ref_name'));
              $path = 'img/' . uniqid() . '.png';
              $fp = fopen($path, 'wb');
              fwrite($fp, $url_data);
              fclose($fp);
              $this->d_model->saveSign($path, $user); */
            $data = array();
            for ($i = 0; $i < count($exp_arr) - 1; $i++) {
                $single_form_data = array();
                $single_form_data['ref_name'] = $exp_arr[$i];
                array_push($data, $single_form_data);
            }
            echo json_encode($data);
        }
    }

    public function view() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('results', $data);
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('progam_duration', $user['pay_duration']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('view_data', $this->d_model->viewData($user));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function legal_docs_print() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('results', $data);
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('progam_duration', $user['pay_duration']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('view_data', $this->d_model->viewData($user));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function work_references() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            if ($this->request->is('post')) {
                if ($this->request->data('ref_name') == 'coop_verification') {
                    $value = $this->d_model->coop_verification($this->request->data, $user);
                    $this->redirect("/industry_signup.html?val_id=$value");
                } else {
                    $value = $this->d_model->work_reference($this->request->data, $user);
                    $this->redirect("/industry_signup.html?val_id=$value");
                }
            }

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function work_experience() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('work_place', $this->d_model->view_workExperience($user));
            if ($this->request->is('post')) {
                $total_work_exp = count($this->d_model->view_workExperience($user));
                if ($user['program'] == 'starter' && $total_work_exp == '2') {
                    echo "<script>alert('You have reached your maximum limit')</script>";
                } else if ($user['program'] == 'advanced' && $total_work_exp == '5') {
                    echo "<script>alert('You have reached your maximum limit')</script>";
                } else if ($user['program'] == 'access360' && $total_work_exp == '10') {
                    echo "<script>alert('You have reached your maximum limit')</script>";
                } else {
                    $this->d_model->workplace_exp($this->request->data, $user);
                    $this->redirect('/work_experience.html');
                }
            }

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function industry_signup() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $random = "R" . mt_rand(1, 9999);

            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('mcd_number', $user['mcd']);
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('random_no', $random);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            /* if ($this->request->is('post')) {
              $url = $this->params['url']['val_id'];
              $this->d_model->industrySignUp($this->request->data, $url);
              $this->redirect("/individual_dashboard.html");
              } */
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function process() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $data = $this->d_model->processUser($user);

            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('results', $data);
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function job_alert() {
        error_reporting(0);
        $this->loadModel('job_applies');
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('user_data', $user);
            $this->set('results', $this->d_model->jobDetails($user));
            $this->set('mcd_user_val', $user['mcd']);

            $data = $this->job_applies->find('all');
            $this->set('apliedjobs', $data);

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function intern_alert() {
        error_reporting(0);
        $this->loadModel('job_applies');
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('user_data', $user);
            $this->set('results', $this->d_model->internDetails($user));

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $data = $this->job_applies->find('all');
            $this->set('apliedjobs', $data);
            $this->set('mcd_user_val', $user['mcd']);

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function coop_alert() {
        error_reporting(0);
        $this->loadModel('job_applies');
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('mcd_user_val', $user['mcd']);

            $this->set('user_data', $user);
            $this->set('results', $this->d_model->coopDetails($user));

            $data = $this->job_applies->find('all');
            $this->set('apliedjobs', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function job_detail() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('user_data', $user);
            $this->loadModel('JobApply');
            $user = $this->Session->read('udata1');
            $job_id = $this->params['url']['id'];
            $this->set('result', $this->d_model->jobSingleDetail($job_id));
            $this->set('save_job', $this->d_model->viewsaveJob($job_id, $user));
            $job_apply_detail = $this->JobApply->find('all', [
                'conditions' => [
                    'job_id' => $job_id,
                    'user_id' => $user['id'],
            ]]);
            $this->set('mcd_user_val', $user['mcd']);
            $this->set('job_apply_detail', $job_apply_detail);
            $c_date = date('d-m-Y');
            if ($this->request->is('post')) {
                $this->JobApply->create();
                if (isset($_FILES['upload_resume']['name'])) {
                    $resume_name = rand(10, 1000) . $_FILES['upload_resume']['name'];
                    $target = "img/" . $resume_name;
                    move_uploaded_file($_FILES['upload_resume']['tmp_name'], $target);
                }
                $data['JobApply']['job_id'] = $this->request->data['job_id'];
                $data['JobApply']['user_id'] = $this->request->data['user_id'];
                $data['JobApply']['resume'] = $resume_name;
                $data['JobApply']['date'] = $c_date;
                if ($this->JobApply->save($data)) {
                    $sql = $this->d_model->apply_update($this->request->data('job_id'));
                    $this->redirect('/job_alert.html');
                }
            }

            $this->set('user_data', $user);
            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function my_job() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('user_data', $user);
            $this->loadModel('JobApply');
            $user = $this->Session->read('udata1');
            $this->set('result', $this->d_model->viewSingleJobSave($user));
            $job_apply_detail = $this->JobApply->find('all', [
                'conditions' => [
                    'job_id' => $job_id,
                    'user_id' => $user['id'],
            ]]);
            $this->set('mcd_user_val', $user['mcd']);
            $this->set('job_apply_detail', $job_apply_detail);
            $c_date = date('d-m-Y');
            if ($this->request->is('post')) {
                $this->JobApply->create();
                if (isset($_FILES['upload_resume']['name'])) {
                    $resume_name = rand(10, 1000) . $_FILES['upload_resume']['name'];
                    $target = "img/" . $resume_name;
                    move_uploaded_file($_FILES['upload_resume']['tmp_name'], $target);
                }
                $data['JobApply']['job_id'] = $this->request->data['job_id'];
                $data['JobApply']['user_id'] = $this->request->data['user_id'];
                $data['JobApply']['resume'] = $resume_name;
                $data['JobApply']['date'] = $c_date;
                if ($this->JobApply->save($data)) {
                    $sql = $this->d_model->apply_update($this->request->data('job_id'));
                    $this->redirect('/job_alert.html');
                }
            }

            $this->set('user_data', $user);
            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function complete() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $data = $this->d_model->completeUser($user);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function new_value() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $data = $this->d_model->newUser($user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('results', $data);
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function process_view() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $id = $this->params['url']['id'];
            $data = $this->d_model->processView($id);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function complete_view() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $id = $this->params['url']['id'];
            $data = $this->d_model->completeView($id);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function payment_history() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $id = $this->params['url']['id'];
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('payment_history', $this->d_model->payHistory($user['email']));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function referal_list() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $id = $this->params['url']['id'];
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('referal_list', $this->d_model->showReferalList($user['mcd']));
            $this->set('referal_amount', $this->d_model->showReferalAmount($user['mcd']));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function new_view() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $id = $this->params['url']['id'];
            $data = $this->d_model->newView($id);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));

            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function legal_docs() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function job_fair() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function online_interview() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function webinars() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);
            $this->set('results', $data);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function cd_player() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('total_like', $this->d_model->totalLikeMYCD($user['mcd']));
            $this->set('total_dislike', $this->d_model->totalDisLikeMYCD($user['mcd']));
            $this->set('view_msg', $this->d_model->viewMessage($user['id']));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('mcd_user_val', $user['mcd']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('sent_invitation', $this->d_model->viewSentInvite($user));

            $this->set('resume_chron_data', $this->d_model->viewResumeIndustry($user));
            $this->set('accomp_data', $this->d_model->viewAccompIndustry($user));
            $this->set('key_skill_data', $this->d_model->viewKeyIndustry($user));
            $this->set('essentail_skill_data', $this->d_model->viewEssentialIndustry($user));
            $this->set('mission_data', $this->d_model->viewMissionIndustry($user));
            $this->set('view_swot_data', $this->d_model->viewSwotIndustry($user));
            $this->set('view_education_data', $this->d_model->viewEducationIndustry($user));
            $this->set('view_career_activity', $this->d_model->viewCareerActivity($user));
            $this->set('view_vol_work', $this->d_model->viewVolunteerWork($user));
            $this->set('view_course', $this->d_model->viewCourseData($user));
            $this->set('view_evidence_data', $this->d_model->viewEvidenceIndustry($user));
            $this->set('view_computer_data', $this->d_model->viewComputerIndustry($user));
            $this->set('view_ref', $this->d_model->viewCompleteRef($user));
            $this->set('work_exp', $this->d_model->viewWorkExperience($user));

            $this->set('resume_chron_added_data', $this->d_model->viewResumeIndustryAdded($user));
            $this->set('accomp_added_data', $this->d_model->viewAccompIndustryAdded($user));
            $this->set('key_skill_added_data', $this->d_model->viewKeyIndustryAdded($user));
            $this->set('essentail_skill_added_data', $this->d_model->viewEssentialIndustryAdded($user));
            $this->set('mission_added_data', $this->d_model->viewMissionIndustryAdded($user));
            $this->set('view_swot_added_data', $this->d_model->viewSwotIndustryAdded($user));
            $this->set('view_education_added_data', $this->d_model->viewEducationIndustryAdded($user));
            $this->set('view_career_activity_added', $this->d_model->viewCareerActivityAdded($user));
            $this->set('view_vol_work_added', $this->d_model->viewVolunteerWorkAdded($user));
            $this->set('view_course_added', $this->d_model->viewCourseDataAdded($user));
            $this->set('view_evidence_added_data', $this->d_model->viewEvidenceIndustryAdded($user));
            $this->set('view_computer_added_data', $this->d_model->viewComputerIndustryAdded($user));
            $this->set('view_ref_added', $this->d_model->viewCompleteRefAdded($user));
            $this->set('view_resume_summary', $this->d_model->viewResumeSummary($user));
            $this->set('view_user_data', $this->d_model->viewUserData($user));
            $this->set('work_exp_added', $this->d_model->viewWorkExperienceAdded($user));
            if ($this->request->is('post')) {
                if (($this->request->data('form_name') == 'create_profile') && ($this->request->data('form_id') == '')) {
                    $this->d_model->addCareerProfile($user, $this->request->data);
                    $this->redirect('/cd_player.html');
                }
                if (($this->request->data('form_name') == 'create_profile') && ($this->request->data('form_id') != '')) {
                    $this->d_model->updateCareerProfile($this->request->data);
                    $this->redirect('/cd_player.html');
                }
                if (($this->request->data('form_name') == 'resume_summary_val') && ($this->request->data('form_id') == '')) {
                    $this->d_model->addResumeSummary($user, $this->request->data);
                    $this->redirect('/cd_player.html');
                }
                if (($this->request->data('form_name') == 'resume_summary_val') && ($this->request->data('form_id') != '')) {
                    $this->d_model->updateResumeSummary($this->request->data);
                    $this->redirect('/cd_player.html');
                }
            }
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

    public function pdf_data() {
        $id = $this->request->query['id'];
        $data = $this->d_model->pdfValue($id);
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, TRUE, 'UTF-8', FALSE);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('MyCareer Dashboard');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '', PDF_HEADER_STRING);
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->SetFont('helvetica', '', 9);
        $pdf->AddPage();
        //$html = $this->dataPdf($data);
        //$pdf->Write(5, $html, '', 0, '', false, 0, false, false, 0);
        foreach ($data as $result) {
            if ($result['verify_reference']['join_date'] != '') {
                $date5 = date('d-F-Y', strtotime($result['verify_reference']['join_date']));
            } else {
                $date5 = "";
            }
            if ($result['verify_reference']['release_date'] != '') {
                $date6 = date('d-F-Y', strtotime($result['verify_reference']['release_date']));
            } else {
                $date6 = "";
            }
            $html_d = '
                <style>
div{
display: block;
}                
  div#myProgress {
  width: 100%;
  background-color: #ddd;
}

div#myBar {
  width: 30%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 30px;
  color: white;
}
</style>
                            <table cellspacing="0" cellpadding="10">
                                <tbody>';
            if ($result['verify_reference']['reference_name'] == 'coop_verification') {
                $html_d .= '<tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Session Name:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['student_session'] . '</td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Year:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['session_year'] . '</td>                                       
                                        </tr><br/>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Student Name:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['student_name'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">ID NO:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['employee_id'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Company Email Id:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['company_email'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Organization:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['business_name'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Job Title:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['title'] . ' </td>                                       
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">
                                                Interest In Work
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">The degree to which the student pursues goals with commitment and takes pride in accomplishments.</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">
                                                <div id="myProgress">
                                                    <div id="myBar">10%</div>
                                                </div>     
                                            </td>                                                                                   
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Overall Performance Rating:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['performance_rating'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Performance Comment:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['performance_comment'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Supervisor Comments:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['student_comments'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Student Comments:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['student_comments'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Supervisor Recommendations:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['supervisor_recommendation'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Did you review the completed evaluation form with the student?</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['st_evaluation'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Do you wish to have the student return for the next work term?</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['next_work_term'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">If yes, have you offered to re-employ the student for the next work term?</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['re_employ'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">If yes, was your offer</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['st_offer'] . ' </td>                                       
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">Work term Dates</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">From Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['work_date_from'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">To Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['work_date_to'] . ' </td>                                       
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">Supervisor</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Name</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['super_name'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Signature</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['super_title'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Title</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['super_sign'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['super_date'] . ' </td>                                       
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">Student</td>
                                        </tr>
                                        <tr>
                                            <td>Sign</td>
                                            <td>' . $result['verify_reference']['st_sign'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['st_date'] . ' </td>                                       
                                        </tr> 
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">Management/Human Resources (optional)</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Sign</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['hr_sign'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Title</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['hr_title'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['hr_date'] . ' </td>                                       
                                        </tr>
                                        ';
            } else {
                $html_d .= '<tr>
                                        <td>Company Name:</td>
                                        <td class="name">' . $result['verify_reference']['business_name'] . '</td>                                       
                                    </tr>
                                    <tr>
                                        <td>Company Address:</td>
                                        <td class="name">
                                            ' . $result['verify_reference']['business_address'] . '                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Company Telephone:</td>
                                        <td>
                                            ' . $result['verify_reference']['bussiness_phone'] . '
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Name Of Contact:</td>
                                        <td class="name">
                                            ' . $result['verify_reference']['person_name'] . ' 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Telephone: </td>
                                        <td>
                                            ' . $result['verify_reference']['contact_number'] . '                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXT:</td>
                                        <td>
                                            ' . $result['verify_reference']['ext'] . '                                                  
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td>Name</td>
                                        <td class="name">
                                            <p>
                                                ' . $result['register']['first_name'] . '' . $result['register']['last_name'] . '
                                            </p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Date of Birth
                                        </td>
                                        <td class="name">
                                            ' . $result['register']['dob'] . '
                                        </td>
                                    </tr>';
                if ($result['verify_reference']['reference_name'] == 'workplace_verification') {
                    $html_d .= '<tr>
                                        <td>
                                            Employee Number
                                        </td>
                                        <td class="name">
                                            ' . $result['verify_reference']['employee_id'] . '                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>In what capacity were you associated with the applicant</td>
                                        <td>
                                            ' . $result['verify_reference']['associated_with_employee'] . '
                                            <br>
                                            <p class="para_justify">' . $result['verify_reference']['associated_with_employee_comment'] . '
                                                <br>' . $result['verify_reference']['employee_comment_other'] . '
                                                <br>' . $result['verify_reference']['associated_with_employee_comment'] . '
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Since what date</td>
                                        <td>
                                            ' . $date5 . '&nbsp;&nbsp; to&nbsp;&nbsp;' . $date6 . '
                                        </td>
                                    </tr>                                  
                                    <tr>
                                        <td> In what capacity was the applicant employed?</td>
                                        <td>
                                            ' . $result['verify_reference']['job_type'] . '
                                            <br/>
                                            ' . $result['verify_reference']['employed_comment'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Salary </td>
                                        <td>                                           
                                            ' . $result['verify_reference']['employee_salary'] . '
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Was the applicant successful in fulfilling his or her duties?</td>
                                        <td>' . $result['verify_reference']['duties_successful'] . '
                                            <br>' . $result['verify_reference']['duties_successful_comment'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>What was it like to supervise the applicant?</td>
                                        <td>' . $result['verify_reference']['supervise_applicant'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>Was the applicant a valuable member of the team?</td>
                                        <td>' . $result['verify_reference']['valuable_member'] . ' </td>                                                                                  
                                    </tr>

                                    <tr>
                                        <td>What unique skill did the candidate bring to your organization?</td>
                                        <td>' . $result['verify_reference']['unique_skill'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>What were their strengths?</td>
                                        <td>' . $result['verify_reference']['strength'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>What were their weaknesses or areas that needed improvement?<br><br>Weaknesses :<br>Improvements:</td>
                                        <td>' . $result['verify_reference']['weakness'] . '<br/>' . $result['verify_reference']['improvement'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>How would they describe this applicant absenteeism record in relation to other employees?

                                        </td>
                                        <td> ' . $result['verify_reference']['absent_record'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Did you ever find it necessary to reprimand or discipline this person

                                        </td>
                                        <td> ' . $result['verify_reference']['descipline'] . '       
                                            <br> ' . $result['verify_reference']['circumstances'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Considering the job being applied for, do you think the applicant is suitable?
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_suitable'] . '

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Why did they leave your employment?

                                        </td>
                                        <td>' . $result['verify_reference']['leave_employment'] . '<br/>
                                            ' . $result['verify_reference']['leave_employment_comment'] . ' 
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            Would you rehire the candidate?

                                        </td>
                                        <td>' . $result['verify_reference']['rehire'] . '<br/>
                                            ' . $result['verify_reference']['rehire_reason'] . '
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Anything Else?
                                        </td>
                                        <td>' . $result['verify_reference']['anything_else'] . '</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            If you have any questions , please feel free to contact me
                                        </td>
                                        <td>Name : ' . $result['register']['first_name'] . ' ' . $result['register']['last_name'] . '<br/><br/>
                                            Contact No. : ' . $result['register']['phone'] . '
                                        </td>
                                    </tr>';
                }
                if ($result['verify_reference']['reference_name'] == 'volunteer_verification') {
                    $html_d .= '<tr>
                                        <td>
                                            How long have you known this individual
                                        </td>
                                        <td>' . $result['verify_reference']['how_long_known'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            In what capacity
                                        </td>
                                        <td>' . $result['verify_reference']['what_capacity'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            How would you describe the applicant’s ability to work with and relate to their volunteer work
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_ability'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            To the extent you know, please tell me about the applicant roles with their role
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_role'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Have you observed the applicant working
                                        </td>
                                        <td>' . $result['verify_reference']['observe_working'] . '<br>
                                            ' . $result['verify_reference']['example_applicant_role'] . '<br>
                                            ' . $result['verify_reference']['example_applicant_role_comment'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Would you have any reservations about recommending this person to serve as a program volunteer
                                        </td>
                                        <td>' . $result['verify_reference']['reservation'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            If you have any questions , please feel free to contact me
                                        </td>
                                        <td>Name : ' . $result['register']['first_name'] . ' ' . $result['register']['last_name'] . '<br/><br/>
                                            Contact No. : ' . $result['register']['phone'] . '
                                        </td>
                                    </tr>';
                }
                if ($result['verify_reference']['reference_name'] == 'personnel_verification') {
                    $html_d .= '<tr>
                                        <td>
                                            When was the last time you had contact with the applicant
                                        </td>
                                        <td>' . $result['verify_reference']['last_time_contact'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            How does the applicant get along with people
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_get_along'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            How would you describe the applicant’s friends and associates
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_friend'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            How does the applicant react in stressful situations
                                        </td>
                                        <td>' . $result['verify_reference']['stressful_situation'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Is there any reason why you wouldn’t trust the applicant with confidential information
                                        </td>
                                        <td>' . $result['verify_reference']['not_trust'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Do you have any reason to question the applicant’s reliability  
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_reliability'] . '<br>
                                            ' . $result['verify_reference']['applicant_reliability_comment'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Do you have any reason to question the applicant’s honesty or character 
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_character'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Do you know of anything about the applicant that should be investigated 
                                        </td>
                                        <td>' . $result['verify_reference']['investigated'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Do you recommend the applicant for a position 
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_position'] . '<br/>
                                            ' . $result['verify_reference']['applicant_position_comment'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Is there anything else you would like to add
                                        </td>
                                        <td>' . $result['verify_reference']['anything_else'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            If you have any questions , please feel free to contact me
                                        </td>
                                        <td>Name : ' . $result['register']['first_name'] . ' ' . $result['register']['last_name'] . '<br/><br/>
                                            Contact No. : ' . $result['register']['phone'] . '
                                        </td>
                                    </tr>';
                }
            }

            $html_d .= '</tbody>
</table>';
        }
        $pdf->writeHTML($html_d, true, false, true, false, '');
        $pdf->lastPage();
        $pdf->Output('https://mycareerdashboard.com//app/webroot/pdf/completeVerification' . $id . '_.pdf');
    }

    public function dataPdf($data) {
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, TRUE, 'UTF-8', FALSE);
        foreach ($data as $result) {
            if ($result['verify_reference']['join_date'] != '') {
                $date5 = date('d-F-Y', strtotime($result['verify_reference']['join_date']));
            } else {
                $date5 = "";
            }
            if ($result['verify_reference']['release_date'] != '') {
                $date6 = date('d-F-Y', strtotime($result['verify_reference']['release_date']));
            } else {
                $date6 = "";
            }
            $html_d = '
                <style>
div{
display: block;
}                
  div#progressbar {
      background-color: black;
      border-radius: 13px; /* (height of inner div) / 2 + padding */
      padding: 3px;
    }
    
    div#progressbar div {
       background-color: orange;
       width: 40%; /* Adjust with JavaScript */
       height: 20px;
       border-radius: 10px;
    }
</style>
                            <table cellspacing="0" cellpadding="10">
                                <tbody>';
            if ($result['verify_reference']['reference_name'] == 'coop_verification') {
                $html_d .= '<tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Session Name:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['student_session'] . '</td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Year:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['session_year'] . '</td>                                       
                                        </tr><br/>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Student Name:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['student_name'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">ID NO:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['employee_id'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Company Email Id:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['company_email'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Organization:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['business_name'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Job Title:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['title'] . ' </td>                                       
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">
                                                Interest In Work
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">The degree to which the student pursues goals with commitment and takes pride in accomplishments.</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">
                                                    ' . $pdf->Image('http://localhost/MyCareer/img/1.jpg', '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false) . '
                                            </td>                                                                                   
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Overall Performance Rating:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['performance_rating'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Performance Comment:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['performance_comment'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Supervisor Comments:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['student_comments'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Student Comments:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['student_comments'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Supervisor Recommendations:</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['supervisor_recommendation'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Did you review the completed evaluation form with the student?</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['st_evaluation'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Do you wish to have the student return for the next work term?</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['next_work_term'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">If yes, have you offered to re-employ the student for the next work term?</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['re_employ'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">If yes, was your offer</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['st_offer'] . ' </td>                                       
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">Work term Dates</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">From Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['work_date_from'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">To Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['work_date_to'] . ' </td>                                       
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">Supervisor</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Name</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['super_name'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Signature</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['super_title'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Title</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['super_sign'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['super_date'] . ' </td>                                       
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">Student</td>
                                        </tr>
                                        <tr>
                                            <td>Sign</td>
                                            <td>' . $result['verify_reference']['st_sign'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['st_date'] . ' </td>                                       
                                        </tr> 
                                        <tr style="background-color: #ccc;">
                                            <td colspan="2" style="border-bottom: 1px solid #CCC5B9; color: #254094; font-weight: 600;">Management/Human Resources (optional)</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Sign</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['hr_sign'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Title</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['hr_title'] . ' </td>                                       
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #CCC5B9;">Date</td>
                                            <td style="border-bottom: 1px solid #CCC5B9;">' . $result['verify_reference']['hr_date'] . ' </td>                                       
                                        </tr>
                                        ';
            } else {
                $html_d .= '<tr>
                                        <td>Company Name:</td>
                                        <td class="name">' . $result['verify_reference']['business_name'] . '</td>                                       
                                    </tr>
                                    <tr>
                                        <td>Company Address:</td>
                                        <td class="name">
                                            ' . $result['verify_reference']['business_address'] . '                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Company Telephone:</td>
                                        <td>
                                            ' . $result['verify_reference']['bussiness_phone'] . '
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Name Of Contact:</td>
                                        <td class="name">
                                            ' . $result['verify_reference']['person_name'] . ' 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Telephone: </td>
                                        <td>
                                            ' . $result['verify_reference']['contact_number'] . '                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EXT:</td>
                                        <td>
                                            ' . $result['verify_reference']['ext'] . '                                                  
                                        </td>
                                    </tr>
                                    <tr> 
                                        <td>Name</td>
                                        <td class="name">
                                            <p>
                                                ' . $result['register']['first_name'] . '' . $result['register']['last_name'] . '
                                            </p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Date of Birth
                                        </td>
                                        <td class="name">
                                            ' . $result['register']['dob'] . '
                                        </td>
                                    </tr>';
                if ($result['verify_reference']['reference_name'] == 'workplace_verification') {
                    $html_d .= '<tr>
                                        <td>
                                            Employee Number
                                        </td>
                                        <td class="name">
                                            ' . $result['verify_reference']['employee_id'] . '                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>In what capacity were you associated with the applicant</td>
                                        <td>
                                            ' . $result['verify_reference']['associated_with_employee'] . '
                                            <br>
                                            <p class="para_justify">' . $result['verify_reference']['associated_with_employee_comment'] . '
                                                <br>' . $result['verify_reference']['employee_comment_other'] . '
                                                <br>' . $result['verify_reference']['associated_with_employee_comment'] . '
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Since what date</td>
                                        <td>
                                            ' . $date5 . '&nbsp;&nbsp; to&nbsp;&nbsp;' . $date6 . '
                                        </td>
                                    </tr>                                  
                                    <tr>
                                        <td> In what capacity was the applicant employed?</td>
                                        <td>
                                            ' . $result['verify_reference']['job_type'] . '
                                            <br/>
                                            ' . $result['verify_reference']['employed_comment'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Salary </td>
                                        <td>                                           
                                            ' . $result['verify_reference']['employee_salary'] . '
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Was the applicant successful in fulfilling his or her duties?</td>
                                        <td>' . $result['verify_reference']['duties_successful'] . '
                                            <br>' . $result['verify_reference']['duties_successful_comment'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>What was it like to supervise the applicant?</td>
                                        <td>' . $result['verify_reference']['supervise_applicant'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>Was the applicant a valuable member of the team?</td>
                                        <td>' . $result['verify_reference']['valuable_member'] . ' </td>                                                                                  
                                    </tr>

                                    <tr>
                                        <td>What unique skill did the candidate bring to your organization?</td>
                                        <td>' . $result['verify_reference']['unique_skill'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>What were their strengths?</td>
                                        <td>' . $result['verify_reference']['strength'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>What were their weaknesses or areas that needed improvement?<br><br>Weaknesses :<br>Improvements:</td>
                                        <td>' . $result['verify_reference']['weakness'] . '<br/>' . $result['verify_reference']['improvement'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>How would they describe this applicant absenteeism record in relation to other employees?

                                        </td>
                                        <td> ' . $result['verify_reference']['absent_record'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Did you ever find it necessary to reprimand or discipline this person

                                        </td>
                                        <td> ' . $result['verify_reference']['descipline'] . '       
                                            <br> ' . $result['verify_reference']['circumstances'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Considering the job being applied for, do you think the applicant is suitable?
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_suitable'] . '

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Why did they leave your employment?

                                        </td>
                                        <td>' . $result['verify_reference']['leave_employment'] . '<br/>
                                            ' . $result['verify_reference']['leave_employment_comment'] . ' 
                                        </td>
                                    </tr> 

                                    <tr>
                                        <td>
                                            Would you rehire the candidate?

                                        </td>
                                        <td>' . $result['verify_reference']['rehire'] . '<br/>
                                            ' . $result['verify_reference']['rehire_reason'] . '
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Anything Else?
                                        </td>
                                        <td>' . $result['verify_reference']['anything_else'] . '</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            If you have any questions , please feel free to contact me
                                        </td>
                                        <td>Name : ' . $result['register']['first_name'] . ' ' . $result['register']['last_name'] . '<br/><br/>
                                            Contact No. : ' . $result['register']['phone'] . '
                                        </td>
                                    </tr>';
                }
                if ($result['verify_reference']['reference_name'] == 'volunteer_verification') {
                    $html_d .= '<tr>
                                        <td>
                                            How long have you known this individual
                                        </td>
                                        <td>' . $result['verify_reference']['how_long_known'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            In what capacity
                                        </td>
                                        <td>' . $result['verify_reference']['what_capacity'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            How would you describe the applicant’s ability to work with and relate to their volunteer work
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_ability'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            To the extent you know, please tell me about the applicant roles with their role
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_role'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Have you observed the applicant working
                                        </td>
                                        <td>' . $result['verify_reference']['observe_working'] . '<br>
                                            ' . $result['verify_reference']['example_applicant_role'] . '<br>
                                            ' . $result['verify_reference']['example_applicant_role_comment'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Would you have any reservations about recommending this person to serve as a program volunteer
                                        </td>
                                        <td>' . $result['verify_reference']['reservation'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            If you have any questions , please feel free to contact me
                                        </td>
                                        <td>Name : ' . $result['register']['first_name'] . ' ' . $result['register']['last_name'] . '<br/><br/>
                                            Contact No. : ' . $result['register']['phone'] . '
                                        </td>
                                    </tr>';
                }
                if ($result['verify_reference']['reference_name'] == 'personnel_verification') {
                    $html_d .= '<tr>
                                        <td>
                                            When was the last time you had contact with the applicant
                                        </td>
                                        <td>' . $result['verify_reference']['last_time_contact'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            How does the applicant get along with people
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_get_along'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            How would you describe the applicant’s friends and associates
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_friend'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            How does the applicant react in stressful situations
                                        </td>
                                        <td>' . $result['verify_reference']['stressful_situation'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Is there any reason why you wouldn’t trust the applicant with confidential information
                                        </td>
                                        <td>' . $result['verify_reference']['not_trust'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Do you have any reason to question the applicant’s reliability  
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_reliability'] . '<br>
                                            ' . $result['verify_reference']['applicant_reliability_comment'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Do you have any reason to question the applicant’s honesty or character 
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_character'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Do you know of anything about the applicant that should be investigated 
                                        </td>
                                        <td>' . $result['verify_reference']['investigated'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Do you recommend the applicant for a position 
                                        </td>
                                        <td>' . $result['verify_reference']['applicant_position'] . '<br/>
                                            ' . $result['verify_reference']['applicant_position_comment'] . '
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Is there anything else you would like to add
                                        </td>
                                        <td>' . $result['verify_reference']['anything_else'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            If you have any questions , please feel free to contact me
                                        </td>
                                        <td>Name : ' . $result['register']['first_name'] . ' ' . $result['register']['last_name'] . '<br/><br/>
                                            Contact No. : ' . $result['register']['phone'] . '
                                        </td>
                                    </tr>';
                }
            }

            $html_d .= '</tbody>
</table>';
        }
        return $html_d;
    }

    public function update_school() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateSchoolView($this->request->data('school_id'));
        }
    }

    public function update_job() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updatejobView($this->request->data('job_id'));
        }
    }

    public function delete_job() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->deleteJob($this->request->data('job_delete_id'));
        }
    }

    public function delete_school() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->deleteSchool($this->request->data('school_delete_id'));
        }
    }

    public function delete_resume() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->deleteResume($this->request->data('resume_id'));
        }
    }

    public function delete_letter() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->deleteLetter($this->request->data('letter_id'));
        }
    }

    public function remider_set() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->setReminder($this->request->data);
        }
    }

    public function pormo_free_user() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->promoUser($this->request->data('promo_id'));
        }
    }

    public function delete_accomp() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteAcomp($this->request->data('accomp_id'));
        }
    }

    public function delete_reference() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteReference($this->request->data('ref_id'));
        }
    }

    public function transfer() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('user_data', $user);
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('results', $data);
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            if ($this->request->is('post')) {
                $val_id = json_decode($this->request->data('custom'), TRUE);
                echo $this->d_model->transferData($this->request->data, $val_id);
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function update_career_contact() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->viewCareerContactUpdate($this->request->data('career_contact_id'));
        }
    }

    public function delete_career_contact() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteCareerContact($this->request->data('delete_career_contact_id'));
        }
    }

    public function update_reminder_event_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateReminderEventView($this->request->data('reminder_id'));
        }
    }

    public function delete_reminder() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteReminder($this->request->data('delete_reminder_id'));
        }
    }

    public function newsql() {
        $data = $this->pages_model->new_sql();
        debug($data);
    }

    public function delete_task() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteTask($this->request->data('delete_task_id'));
        }
    }

    public function delete_career_goal() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deletecareerGoal($this->request->data('delete_career_goal_id'));
        }
    }

    public function update_career_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateCareerGoalView($this->request->data('career_goal_id'));
        }
    }

    public function update_swot_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateSwotView($this->request->data('swot_id'));
        }
    }

    public function delete_swot() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteSwot($this->request->data('delete_swot_id'));
        }
    }

    public function update_mission_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateMissionView($this->request->data('mission_id'));
        }
    }

    public function delete_mission() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->deleteMission($this->request->data('delete_mission_id'));
        }
    }

    public function update_key_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateKeyView($this->request->data('key_id'));
        }
    }

    public function delete_key_skill() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteKeySkill($this->request->data('delete_skill_id'));
        }
    }

    public function update_accomp_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateAccompView($this->request->data('acomp_id'));
        }
    }

    public function task_reminder_update() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->updateTaskReminder($this->request->data('task_id_val'), $this->request->data('date_pick'), $this->request->data('select_data'));
        }
    }

    public function update_letter_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateLetterView($this->request->data('letter_id'));
        }
    }

    public function update_school_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateSchoolDocView($this->request->data('school_doc_id'));
        }
    }

    public function delete_school_doc() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteSchoolDoc($this->request->data('delete_school_doc_id'));
        }
    }

    public function delete_job_doc() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteJobDoc($this->request->data('delete_job_doc_id'));
        }
    }

    public function update_job_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateJobDocView($this->request->data('job_doc_id'));
        }
    }

    public function update_minimal_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateMinimalView($this->request->data('minimal_id'));
        }
    }

    public function delete_minimal() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteMinimal($this->request->data('minimal_delete_id'));
        }
    }

    public function update_career_act_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updatecareerActView($this->request->data('career_act_id'));
        }
    }

    public function delete_career_act() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteCareerAct($this->request->data('delete_career_act_id'));
        }
    }

    public function update_interview_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateInterviewView($this->request->data('interview_id'));
        }
    }

    public function delete_interview() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteInterview($this->request->data('delete_interview_id'));
        }
    }

    public function update_job_site_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateJobSiteView($this->request->data('job_site_id'));
        }
    }

    public function delete_job_site() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteJobSite($this->request->data('job_site_delete_id'));
        }
    }

    public function update_reference_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateRefrenceView($this->request->data('reference_id'));
        }
    }

    public function update_volunteerwork_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateVolunteerWorkView($this->request->data('volunteer_work_id'));
        }
    }

    public function delete_volunteer_work() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteVolunteerWork($this->request->data('delete_volunteer_id'));
        }
    }

    public function update_course_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateCourseView($this->request->data('course_id'));
        }
    }

    public function delete_course() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteCourse($this->request->data('delete_course_id'));
        }
    }

    public function view_monthly_volunteer() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->viewMonthlyVolunteer($this->request->data('vol_id'));
        }
    }

    public function update_career_plan_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateCareerPlanView($this->request->data('career_plan_id'));
        }
    }

    public function delete_career_plan() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteCareerPlan($this->request->data('delete_career_plan_id'));
        }
    }

    public function update_action_plan_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateCareerActionPlanView($this->request->data('action_plan_id'));
        }
    }

    public function delete_action_plan() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteCareerActionPlan($this->request->data('delete_action_plan_id'));
        }
    }

    public function update_education_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateEducationView($this->request->data('education_view_id'));
        }
    }

    public function delete_education() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteEducation($this->request->data('delete_education_id'));
        }
    }

    public function paypal_cancel_val() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('results', $data);
            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function paypal_sucess_val() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $user = $this->Session->read('udata1');
            $this->set('user_data', $user);

            $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
            $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
            $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

            $this->set('coupon_data', $this->pages_model->showCoupon());
            $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
            $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
            $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
            $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());

            $this->set('register_date', $user['reg_date']);
            $this->set('duration_date', $user['dur_date']);
            $this->set('user_id', $user['id']);
            $this->set('user_email', $user['email']);
            $this->set('progam_pay', $user['program']);
            $this->set('prgrm_duration', $user['program_duration']);
            $this->set('country_data', $user['country_value']);
            $this->set('ambassador_prgrm', $user['ambassador_prgrm']);
            $this->set('user_status', $user['status']);
            $this->set('token_val', $user['token']);
            if ($user['token'] != '') {
                $this->set('logo', $this->d_model->setLogo($user['token']));
            }
            $this->set('results', $data);
            $this->set('complete_count', $this->d_model->complete_count($user));
            $this->set('process_count', $this->d_model->process_count($user));
            $this->set('new_count', $this->d_model->new_count($user));
            $this->set('ambas_program', $this->d_model->showAmbassdorPrgrm($user['id']));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function ipn() {
        $this->autoRender = FALSE;
        if ($this->request->is('post')) {
            $data = $this->request->data('custom');
            $request = 'cmd=_notify-validate';
            foreach ($this->request->data as $key => $value) {
                $request .= '&' . $key . '=' . urlencode(html_entity_decode($value, ENT_QUOTES, 'UTF-8'));
            }
            $curl = curl_init('https://ipnpb.paypal.com/cgi-bin/webscr');
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
            if (strcmp($response, 'VERIFIED') == 0 && $this->request->data('payment_status') != NULL) {
                $this->d_model->updateTransactionId($data, $this->request->data('txn_id'), $this->request->data('payment_status'), $this->request->data('mc_gross'), $this->request->data('payment_date'));
            }
            curl_close($curl);
        }
    }

    public function update_job_ref_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateJobRefView($this->request->data('job_ref_id'));
        }
    }

    public function delete_job_ref() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteJobRef($this->request->data('delete_job_ref_id'));
        }
    }

    public function update_school_ref_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateSchoolRefView($this->request->data('school_ref_id'));
        }
    }

    public function delete_school_ref() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteSchoolRef($this->request->data('delete_school_ref_id'));
        }
    }

    public function update_org_ref_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateOrgRefView($this->request->data('org_ref_id'));
        }
    }

    public function update_char_ref_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateCharRefView($this->request->data('char_ref_id'));
        }
    }

    public function delete_char_ref() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteCharRefView($this->request->data('delete_char_ref_id'));
        }
    }

    public function updateEssentialSkills_View() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateEssentialSkillsView($this->request->data('skill_id'));
        }
    }

    public function decline_data() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->updateDeclineData($this->request->data('decline_id'));
        }
    }

    public function accept_data() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->updateAcceptData($this->request->data('accept_id'));
        }
    }

    public function update_comp_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateCompView($this->request->data('comp_id'));
        }
    }

    public function delete_comp_skill() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteCompSkill($this->request->data('delete_comp_id'));
        }
    }

    public function delete_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteView($this->request->data('delete_view_id'));
        }
    }

    public function delete_evidence_skill() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deletEvidenceSkill($this->request->data('delete_evi_id'));
        }
    }

    public function ipn_val() {
        $this->autoRender = FALSE;
        if ($this->request->is('post')) {
            $email = $this->request->data('custom');
            $request = 'cmd=_notify-validate';
            foreach ($this->request->data as $key => $value) {
                $request .= '&' . $key . '=' . urlencode(html_entity_decode($value, ENT_QUOTES, 'UTF-8'));
            }
            $curl = curl_init('https://ipnpb.paypal.com/cgi-bin/webscr');
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
            if (strcmp($response, 'VERIFIED') == 0 && $this->request->data('payment_status') != NULL) {
                $this->d_model->updateTransactionData($email, $this->request->data('txn_id'), $this->request->data('payment_status'), $this->request->data('mc_gross'), $this->request->data('payment_date'));
            }
            curl_close($curl);
        }
    }

    public function update_industry() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateIndustry($this->request->data);
        }
    }

    public function my_cd() {
        error_reporting(0);
        if ($this->Session->check('indus_data')) {
            if (isset($this->params['url']['mcd_data'])) {
                $mcd = $this->params['url']['mcd_data'];
                $this->set('user_data', $user);

                $this->set('job_alert_count', $this->d_model->jobDetailsCount($user));
                $this->set('intern_alert_count', $this->d_model->internDetailsCount($user));
                $this->set('coop_alert_count', $this->d_model->coopDetailsCount($user));

                $this->set('indus_id', $this->Session->read('indus_data'));
                $indus_data = $this->Session->read('indus_data');
                $this->set('industry_id', $indus_data);
                $this->set('user_mcd', $mcd);
                $this->set('total_like', $this->d_model->totalLikeMYCD($mcd));
                $this->set('total_dislike', $this->d_model->totalDisLikeMYCD($mcd));
                $this->set('user', $this->d_model->userView($mcd));
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
                $this->set('work_exp_mcd', $this->d_model->workExpIndus($mcd));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function my_cd_data() {
        if (isset($this->params['url']['id'])) {
            $id = $this->params['url']['id'];
            $table = $this->params['url']['table_name'];
            $this->set('value', $this->d_model->myCdValue($id, $table));
        }
    }

    public function send_invite() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->inviteIndustry($this->request->data);
        }
    }

    public function job_apply_invite() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->jopApplyInvite($this->request->data);
        }
    }

    public function view_selected_data() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->selectTab($this->request->data('select_tab'), $this->request->data('indus_id'));
        }
    }

    public function delete_mycd() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->deleteMyCD($this->request->data('data_id'), $this->request->data('table'));
        }
    }

    public function delete_invitation() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteInvitation($this->request->data('delete_invitation_id'));
        }
    }

    public function update_elevator_view() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateElevatorView($this->request->data('elevator_id'));
        }
    }

    public function delete_interview_ques() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteInterviewQues($this->request->data('delete_ques_id'));
        }
    }

    public function update_interview_ques() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->updateInterviewQuesView($this->request->data('interview_id'));
        }
    }

    public function delete_elevator() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteElevator($this->request->data('elevator_id'));
        }
    }

    public function delete_org_ref() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteOrgRef($this->request->data('org_ref_id'));
        }
    }

    public function deleteCareerProfile() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteCareerProfile($this->request->data('delete_id'));
        }
    }

    public function industryMessage() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->industryMessage($this->request->data);
        }
    }

    public function industryLiked() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->industryLiked($this->request->data('indus_id'), $this->request->data('mcd'));
        }
    }

    public function industryUnLiked() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->industryUnLiked($this->request->data('indus_id'), $this->request->data('mcd'));
        }
    }

    public function deleteResumeSummary() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteResumeSummary($this->request->data('delete_resume_summary_id'));
        }
    }

    public function readMsg() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->readMsg($this->request->data('user_id'));
        }
    }

    public function starterRenew() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->starterRenew($this->request->data('email'), $this->request->data('pgrm_type'));
        }
    }

    public function deleteReference() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->d_model->deleteReferenceData($this->request->data('delete_ref'));
        }
    }

    public function applyAmbassador() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->applyAmbassador($this->request->data);
        }
    }

    public function logout_data() {
        $id = $this->Session->read('indus_data');
        $this->d_model->logoutTime($id);
        $this->Session->delete('indus_data');
        $this->redirect(['controller' => '/']);
    }

    public function logout() {
        $user = $this->Session->read('udata1');
        if ($user['token'] == '') {
            $this->Session->delete('udata1');
            $this->redirect(['controller' => '/']);
        } else {
            $this->Session->delete('udata1');
            $this->redirect('/school.html?token=' . $user['token'] . '');
        }
    }

    public function job_apply() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $job_id = $this->request->data('job_id');
            $user_id = $this->request->data('user_id');
            $this->d_model->jobApply($job_id, $user_id);
        }
    }

    public function job_view() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $job_id = $this->request->data('job_id');
            $user_id = $this->request->data('user_id');
            $this->d_model->job_view($job_id, $user_id);
        }
    }

    public function updateUserEducation() {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $user_id = $this->request->data('user_id');
            $university_program = $this->request->data('university_program');
            $course = $this->request->data('course');
            $s_date = $this->request->data('s_date');
            $e_date = $this->request->data('e_date');
            echo $this->d_model->updateUserEducation($user_id, $university_program, $course, $s_date, $e_date);
        }
    }

    public function save_job() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->saveJob($this->request->data('job_id'), $this->request->data('user_id1'));
        }
    }

    public function job_delete() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->d_model->delete_Job($this->request->data('job_id'), $this->request->data('user_id1'));
        }
    }

}

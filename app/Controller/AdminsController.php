<?php

App::uses('AppController', 'Controller');

class AdminsController extends AppController {

    private $a_model;

    public function beforeFilter() {
        $this->loadModel('AdminsModel');
        $this->a_model = new AdminsModel();
        session_start();
    }

    public function admin_index() {
        if ($this->Session->check('udata')) {
            $this->redirect('../admin_dashboard.html');
        } else {
            if ($this->request->is('post')) {
                $data = $this->a_model->admin_login($this->request->data);
                if ($data > 1) {
                    $this->Session->write('udata', $data);
                    $this->redirect('../admin_dashboard.html');
                }
            }
        }
    }

    public function signIn() {
        
    }

    public function index() {
        error_reporting(0);
        if ($this->Session->check('udata')) {

            $user = $this->Session->read('udata');

            $this->set('total_trial_user', $this->a_model->totalTrialUser());
            $this->set('total_paid_user', $this->a_model->totalPaidUser());
            $this->set('total_current_member', $this->a_model->totalCurrentMember());
            $this->set('total_before_member', $this->a_model->totalBeforeMember());
            $this->set('total_current_paid_user', $this->a_model->totalCurrentPaidUser());
            $this->set('total_before_paid_user', $this->a_model->totalBeforePaidUser());
            $this->set('total_current_trial_user', $this->a_model->totalCurrentTrialUser());
            $this->set('total_before_trial_user', $this->a_model->totalBeforeTrialUser());
            $this->set('total_current_verify_ref', $this->a_model->totalCurrentVerifyRef());
            $this->set('total_before_verify_ref', $this->a_model->totalBeforeVerifyRef());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            $this->set('results', $this->a_model->inviteUser());

            $this->set('total_ref', $this->a_model->countRef());
            $this->set('member', $this->a_model->countMember());
            $this->set('student', $this->a_model->countStudent());
            $this->set('unemployee', $this->a_model->countUnemployee());
            $this->set('career_advance', $this->a_model->countCareerAdvance());
            $this->set('advance_ref', $this->a_model->countAdvanceRef());
            $this->set('standard_ref', $this->a_model->countStandardref());
            $this->set('amount', $this->a_model->countAmount());
            $this->set('verify_ref', $this->a_model->countVerifyRef());
            $this->set('total_year', $this->a_model->totalYear());
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function ambasdor_prgrm() {
        error_reporting(0);
        if ($this->Session->check('udata')) {

            $user = $this->Session->read('udata');

            $this->set('total_trial_user', $this->a_model->totalTrialUser());
            $this->set('total_paid_user', $this->a_model->totalPaidUser());
            $this->set('total_current_member', $this->a_model->totalCurrentMember());
            $this->set('total_before_member', $this->a_model->totalBeforeMember());
            $this->set('total_current_paid_user', $this->a_model->totalCurrentPaidUser());
            $this->set('total_before_paid_user', $this->a_model->totalBeforePaidUser());
            $this->set('total_current_trial_user', $this->a_model->totalCurrentTrialUser());
            $this->set('total_before_trial_user', $this->a_model->totalBeforeTrialUser());
            $this->set('total_current_verify_ref', $this->a_model->totalCurrentVerifyRef());
            $this->set('total_before_verify_ref', $this->a_model->totalBeforeVerifyRef());
            $this->set('ambassador_apply', $this->a_model->viewAmbassadorApply());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            $this->set('results', $this->a_model->inviteUser());

            $this->set('total_ref', $this->a_model->countRef());
            $this->set('member', $this->a_model->countMember());
            $this->set('student', $this->a_model->countStudent());
            $this->set('unemployee', $this->a_model->countUnemployee());
            $this->set('career_advance', $this->a_model->countCareerAdvance());
            $this->set('advance_ref', $this->a_model->countAdvanceRef());
            $this->set('standard_ref', $this->a_model->countStandardref());
            $this->set('amount', $this->a_model->countAmount());
            $this->set('verify_ref', $this->a_model->countVerifyRef());
            $this->set('total_year', $this->a_model->totalYear());
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function user_referal_list() {
        error_reporting(0);
        if ($this->Session->check('udata')) {

            $user = $this->Session->read('udata');

            $this->set('total_trial_user', $this->a_model->totalTrialUser());
            $this->set('total_paid_user', $this->a_model->totalPaidUser());
            $this->set('total_current_member', $this->a_model->totalCurrentMember());
            $this->set('total_before_member', $this->a_model->totalBeforeMember());
            $this->set('total_current_paid_user', $this->a_model->totalCurrentPaidUser());
            $this->set('total_before_paid_user', $this->a_model->totalBeforePaidUser());
            $this->set('total_current_trial_user', $this->a_model->totalCurrentTrialUser());
            $this->set('total_before_trial_user', $this->a_model->totalBeforeTrialUser());
            $this->set('total_current_verify_ref', $this->a_model->totalCurrentVerifyRef());
            $this->set('total_before_verify_ref', $this->a_model->totalBeforeVerifyRef());

            $this->set('ambassador_appied', $this->a_model->viewAmbassadorAppied());
            $this->set('referal_list', $this->a_model->viewreferal());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            $this->set('results', $this->a_model->inviteUser());

            $this->set('total_ref', $this->a_model->countRef());
            $this->set('member', $this->a_model->countMember());
            $this->set('student', $this->a_model->countStudent());
            $this->set('unemployee', $this->a_model->countUnemployee());
            $this->set('career_advance', $this->a_model->countCareerAdvance());
            $this->set('advance_ref', $this->a_model->countAdvanceRef());
            $this->set('standard_ref', $this->a_model->countStandardref());
            $this->set('amount', $this->a_model->countAmount());
            $this->set('verify_ref', $this->a_model->countVerifyRef());
            $this->set('total_year', $this->a_model->totalYear());

            if ($this->request->is('post')) {
                $this->a_model->setReferalAmount($this->request->data);
                $this->redirect('/user_referal_list.html');
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function invited() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            if ($this->request->is('post')) {
                if ($this->request->data('form_name') == 'search') {
                    $this->set('results', $this->a_model->searchInviteUser($this->request->data));
                }

                if ($this->request->data('form_name') == 'filter') {
                    $this->set('results', $this->a_model->filterInviteUser($this->request->data));
                }
            } else {
                $data = $this->a_model->inviteNewUser();
                $this->set('results', $data);
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function corporate() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            $this->set('corporate_detail', $this->a_model->corporate_detail());
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function add_tax() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            if ($this->request->is('post')) {
                if ($this->request->data('form_name') == 'add') {
                    $this->set('response', $this->a_model->addTax($this->request->data));
                }

                if ($this->request->data('form_name') == 'update') {
                    $this->set('response', $this->a_model->updateTax($this->request->data));
                }
            }

            if (isset($this->params['url']['id'])) {
                $id = $this->params['url']['id'];
                $this->set('tax_detail', $this->a_model->viewTaxId($id));
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function view_tax() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('view_tax', $this->a_model->viewTax());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function change_password() {
        $user = $this->Session->read('udata');
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->a_model->changePassword($this->request->data, $user);
        }
    }

    public function new_page() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->userData();
        $this->set('results', $data);
    }

    public function delete_data() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->a_model->deleteData($this->request->data('delete_id'));
        }
    }

    public function new_profile() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->updateData();
        $this->set('data', $data);
    }

    public function payment() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            if ($this->request->is('post')) {
                if ($this->request->data('form_name') == 'search') {
                    $this->set('payment', $this->a_model->searchPayment($this->request->data));
                }

                if ($this->request->data('form_name') == 'filter') {
                    $this->set('payment', $this->a_model->filterPayment($this->request->data));
                }
            } else {
                $this->set('payment', $this->a_model->viewPayment());
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function send_info() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
        } else {
            $this->redirect('../admin_index.html');
        }

        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->a_model->sendInfo($this->request->data);
        }
    }

    public function send_info1() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
        } else {
            $this->redirect('../admin_index.html');
        }

        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->a_model->sendInfoVal($this->request->data);
        }
    }

    public function send_reminder() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->a_model->sendReminder($this->request->data('user_id'));
        }
    }

    public function lookup() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            if ($this->request->is('post')) {
                if ($this->request->data('form_data') == 'crv_data') {
                    $this->set('results', $this->a_model->lookUp_crv($this->request->data));
                }
                if ($this->request->data('form_data') == 'province_data') {
                    $this->set('results', $this->a_model->lookUp_province($this->request->data));
                }
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function transfer_payment() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('payment_data', $this->a_model->transferPay());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));


            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function canada_student_trail() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaStudentTrail());
            $this->set('invite_data', $this->a_model->canadaStudentTrailInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_career_starter() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaCareerStarter());
            $this->set('invite_data', $this->a_model->canadaCareerStarterInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_career_advanced() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaCareerAdvanced());
            $this->set('invite_data', $this->a_model->canadaCareerAdvancedInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_access360() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaAccess360());
            $this->set('invite_data', $this->a_model->canadaAccess360Invite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_unemployed_trail() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaUnemployedTrail());
            $this->set('invite_data', $this->a_model->canadaUnemployedTrailInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_unemployed_career_starter() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaUnemployedCareerStarter());
            $this->set('invite_data', $this->a_model->canadaUnemployedCareerStarterInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_unemployed_career_advanced() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaUnemployedCareerAdvanced());
            $this->set('invite_data', $this->a_model->canadaUnemployedCareerAdvancedInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_unemployed_career_access360() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaUnemployedCareerAccess360());
            $this->set('invite_data', $this->a_model->canadaUnemployedCareerAccess360Invite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_careeradvance_trail() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaCareeradvanceTrail());
            $this->set('invite_data', $this->a_model->canadaCareeradvanceTrailInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_alumni_career_starter() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaAlumniCareerStarter());
            $this->set('invite_data', $this->a_model->canadaAlumniCareerStarterInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_alumni_career_advance() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaAlumniCareerAdvance());
            $this->set('invite_data', $this->a_model->canadaAlumniCareerAdvanceInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function canada_alumni_acess360() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->canadaAlumniAcess360());
            $this->set('invite_data', $this->a_model->canadaAlumniAcess360Invite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_student_trail() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaStudentTrail());
            $this->set('invite_data', $this->a_model->americaStudentTrailInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_student_career_starter() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaStudentCareerStarter());
            $this->set('invite_data', $this->a_model->americaStudentCareerStarterInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_student_career_advanced() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaStudentCareerAdvanced());
            $this->set('invite_data', $this->a_model->americaStudentCareerAdvancedInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_student_access360() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaStudentAccess360());
            $this->set('invite_data', $this->a_model->americaStudentAccess360Invite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_unemployed_trail() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaUnemployedTrail());
            $this->set('invite_data', $this->a_model->americaUnemployedTrailInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_unemployed_career_starter() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaUnemployedCareerStarter());
            $this->set('invite_data', $this->a_model->americaUnemployedCareerStarterInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_unemployed_career_advance() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaUnemployedCareerAdvance());
            $this->set('invite_data', $this->a_model->americaUnemployedCareerAdvanceInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_unemployed_access360() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaUnemployedAccess360());
            $this->set('invite_data', $this->a_model->americaUnemployedAccess360Invite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_career_advance_trail() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaCareerAdvanceTrail());
            $this->set('invite_data', $this->a_model->americaCareerAdvanceTrailInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_alumni_career_starter() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaAlumniCareerStarter());
            $this->set('invite_data', $this->a_model->americaAlumniCareerStarterInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_alumni_career_advance() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaAlumniCareerAdvance());
            $this->set('invite_data', $this->a_model->americaAlumniCareerAdvanceInvite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function america_alumni_access360() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaAlumniAccess360());
            $this->set('invite_data', $this->a_model->americaAlumniAccess360Invite());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));
        } else {
            $this->redirect('../admin_index.html');
        }

        $data = $this->a_model->user();
        $this->set('results', $data);
    }

    public function school_register() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaCareerAdvanceAccess360());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            $this->set('results', $this->a_model->schoolRegister($this->request->data));
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function registered_school() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('results_data', $this->a_model->americaCareerAdvanceAccess360());

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            $this->set('school_invited', $this->a_model->invitedSchool());
            $this->set('student_detail', $this->a_model->studentDetail());
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function seo_data() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');

            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            if ($this->request->is('post')) {
                $this->set('response', $this->a_model->saveSEO($this->request->data));
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function school_payment() {
        error_reporting(0);
        if ($this->Session->check('udata')) {
            $user = $this->Session->read('udata');
            $this->set('canada_student_trail', count($this->a_model->canadaStudentTrail()));
            $this->set('canada_student_starter', count($this->a_model->canadaCareerStarter()));
            $this->set('canada_student_advance', count($this->a_model->canadaCareerAdvanced()));
            $this->set('canada_student_acess360', count($this->a_model->canadaAccess360()));

            $this->set('canada_unemployed_trail', count($this->a_model->canadaUnemployedTrail()));
            $this->set('canada_unemployed_starter', count($this->a_model->canadaUnemployedCareerStarter()));
            $this->set('canada_unemployed_advance', count($this->a_model->canadaUnemployedCareerAdvanced()));
            $this->set('canada_unemployed_acess360', count($this->a_model->canadaUnemployedCareerAccess360()));

            $this->set('canada_advance_trail', count($this->a_model->canadaCareeradvanceTrail()));

            $this->set('america_student_trail', count($this->a_model->americaStudentTrail()));
            $this->set('america_student_starter', count($this->a_model->americaStudentCareerStarter()));
            $this->set('america_student_advance', count($this->a_model->americaStudentCareerAdvanced()));
            $this->set('america_student_acess360', count($this->a_model->americaStudentAccess360()));

            $this->set('america_unemployed_trail', count($this->a_model->americaUnemployedTrail()));
            $this->set('america_unemployed_starter', count($this->a_model->americaUnemployedCareerStarter()));
            $this->set('america_unemployed_advance', count($this->a_model->americaUnemployedCareerAdvance()));
            $this->set('america_unemployed_acess360', count($this->a_model->americaUnemployedAccess360()));

            $this->set('america_advance_trail', count($this->a_model->americaCareerAdvanceTrail()));

            $this->set('school_invited', $this->a_model->invitedSchool());
            $this->set('manual_payment_detail', $this->a_model->studentManualPaymentDetail());
            $this->set('billing_info', $this->a_model->getBillingInfo());

            if ($this->request->is('post')) {
                if ($this->request->data('form_name') == 'school_paid') {
                    $this->a_model->addSchoolAmount($this->request->data);
                    $this->redirect('/school_payment.html');
                }
                if ($this->request->data('form_name') == 'search_data') {
                    $this->set('manual_payment_detail', $this->a_model->searchStudentList($this->request->data));
                }
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function send_invite_school() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->a_model->sendSchoolInvite($this->request->data);
        }
    }

    public function findChartData() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->a_model->findChartData($this->request->data('max'), $this->request->data('min'), $this->request->data('month_data'), $this->request->data('min_date1'));
        }
    }

    public function delete_data_school() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->a_model->deleteSchool($this->request->data('delete_id'));
        }
    }

    public function changeSEOData() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->a_model->changeSEOData($this->request->data('page_name'));
        }
    }

    public function delete_tax_data() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->a_model->deleteTaxData($this->request->data('delete_id'));
        }
    }

    public function download() {
        $name = "ambassdor_resume/" . $this->request->query['filename'];
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

    public function approve_data() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->a_model->approve_data($this->request->data('user_id'));
        }
    }

    public function reject_data() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->a_model->reject_data($this->request->data('user_id'));
        }
    }

    public function logout() {
        $this->Session->delete('udata');
        $this->redirect('../admin_index.html');
    }

}

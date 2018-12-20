<?php

App::import('Vendor', 'tcpdf/tcpdf');
App::uses('AppController', 'Controller');

class SchoolsController extends AppController {

    private $school_model;

    public function beforeFilter() {
        session_start();
        $this->loadModel('SchoolsModel');
        $this->school_model = new SchoolsModel();
    }

    public function index() {
        error_reporting(0);
        if ($this->Session->check('school_data')) {
            $school_user = $this->Session->read('school_data');
            $token = $school_user['token'];

            $this->set('logo', $this->school_model->viewUploadLogo($school_user));

            if ($this->request->is('post')) {
                if ($this->request->data('form_name') == 'co_brand') {
                    $this->school_model->updateProgramBrand($token);
                }

                if ($this->request->data('form_name') == 'alliance') {
                    $this->set('response', $this->school_model->updateProgramAlliance($token));
                }
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function account_admin() {
        error_reporting(0);
        if ($this->Session->check('school_data')) {
            $school_user = $this->Session->read('school_data');

            $this->set('logo', $this->school_model->viewUploadLogo($school_user));
            $token = $school_user['token'];
            if ($this->request->is('post')) {
                $this->set('response', $this->school_model->updateAdmin($this->request->data, $token));
            }
            $this->set('result', $this->school_model->viewSchoolAdmin($token));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function billing_info() {
        error_reporting(0);
        if ($this->Session->check('school_data')) {
            $school_user = $this->Session->read('school_data');
            $token = $school_user['token'];

            $this->set('logo', $this->school_model->viewUploadLogo($school_user));
            if ($this->request->is('post')) {
                $this->set('response', $this->school_model->updateBillinfo($this->request->data, $token));
            }
            $this->set('bill_detail', $this->school_model->viewBillinfo($token));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function embed_code() {
        error_reporting(0);
        if ($this->Session->check('school_data')) {
            $school_user = $this->Session->read('school_data');

            $this->set('logo', $this->school_model->viewUploadLogo($school_user));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function student_payment() {
        error_reporting(0);
        if ($this->Session->check('school_data')) {
            $school_user = $this->Session->read('school_data');

            $this->set('logo', $this->school_model->viewUploadLogo($school_user));
            $token = $school_user['token'];
            $this->set('student_payment_detail', $this->school_model->viewPaymentDetail($token));
            $this->set('manual_payment', $this->school_model->viewManualPaymentDetail($token));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function school_dashboard() {
        error_reporting(0);
        if ($this->Session->check('school_data')) {
            $school_user = $this->Session->read('school_data');

            $this->set('logo', $this->school_model->viewUploadLogo($school_user));
            $this->set('student', $this->school_model->viewStudentDetails($school_user));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function upload_logo() {
        error_reporting(0);
        if ($this->Session->check('school_data')) {
            $school_user = $this->Session->read('school_data');

            $this->set('logo', $this->school_model->viewUploadLogo($school_user));

            if ($this->request->is('post')) {
                $this->school_model->uploadLogo($school_user);
                $this->redirect('/upload_logo.html');
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function school() {
        if (isset($this->params['url']['token'])) {
            $token = $this->params['url']['token'];
            $this->set('logo', $this->school_model->schoolView($token));

            if ($this->request->is('post')) {
                $this->set('response', $this->school_model->studentRegister($this->request->data, $token));
            }
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function delete_student() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->school_model->deleteStudent($this->request->data('delete_id'));
        }
    }

    public function invite_student() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->school_model->inviteStudent($this->request->data);
        }
    }

    public function school_signup() {
        if (isset($this->params['url']['token'])) {
            $token = $this->params['url']['token'];
            $this->set('logo', $this->school_model->schoolView($token));
            /* if ($this->request->is('post')) {
              $this->set('response', $this->school_model->studentRegister($this->request->data, $token));
              } */
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function school_paypal_success() {
        if (isset($this->params['url']['token'])) {
            $token = $this->params['url']['token'];
            $this->set('logo', $this->school_model->schoolView($token));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function school_paypal_cancel() {
        if (isset($this->params['url']['token'])) {
            $token = $this->params['url']['token'];
            $this->set('logo', $this->school_model->schoolView($token));
        } else {
            $this->redirect(['controller' => '/']);
        }
    }

    public function school_signup_ajax() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->school_model->studentRegister($this->request->data);
        }
    }

    public function school_signup_alliance() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->school_model->studentRegisterView($this->request->data('email_id'), $this->request->data('country_id'), $this->request->data('province_id'), $this->request->data('state_id'));
        }
    }

    public function signIn() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $st = $this->school_model->studentLogin($this->request->data);
            if ($st['status'] == '1') {
                echo json_encode($st);
                $this->Session->write('udata1', $st['msg']);
            } else {
                echo json_encode($st);
            }
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
                $this->school_model->updateTransactionId($data, $this->request->data('txn_id'), $this->request->data('payment_status'), $this->request->data('mc_gross'), $this->request->data('payment_date'));
            }
            curl_close($curl);
        }
    }

    public function forgotPassword() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->school_model->forgetPassword($this->request->data);
        }
    }
    
    public function addPayment() {
        if($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->school_model->addPayment($this->request->data);
        }
    }
    
    public function editPayment() {
        if($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->school_model->editPayment($this->request->data);
        }
    }

    public function logout() {
        $this->Session->delete('school_data');
        $this->redirect(['controller' => '/']);
    }

}

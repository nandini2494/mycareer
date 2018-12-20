<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class PagesController extends AppController {

    private $pages_model;

    public function beforeFilter() {
        $this->loadModel('PagesModel');
        $this->pages_model = new PagesModel();
        session_start();
    }

    public function index() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }

        if ($this->request->is('post')) {
            if ($this->request->data('form_name') == 'free_trail') {
                $this->set('response', $this->pages_model->freeSubmit($this->request->data));
            }
        }
        $page_title = $this->action;
        $this->set('meta_data', $this->pages_model->viewSEO($page_title));
    }

    public function signIn() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $st = $this->pages_model->userLogin($this->request->data);
            if ($st['status'] == '1') {
                $this->Session->write('udata1', $st['msg']);
            }
            if ($st['status'] == '4') {
                echo json_encode($st);
            } else {
                echo json_encode($st);
            }
        }
    }

    public function forgotPassword() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->pages_model->Password_forget($this->request->data);
        }
    }

    public function programs_data() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
        $page_title = $this->action;
        $this->set('meta_data', $this->pages_model->viewSEO($page_title));
    }

    public function sign_up() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
        $page_title = $this->action;
        $this->set('meta_data', $this->pages_model->viewSEO($page_title));
        $this->set('coupon_data', $this->pages_model->showCoupon());
        $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
        $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
        $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
        $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());
        $this->set('mcd_num', $this->pages_model->checkMCD());
        $this->set('country', $this->pages_model->selectCountry());
        $this->set('province', $this->pages_model->selectProvince());
        $this->set('state', $this->pages_model->selectState());
        $this->set('university', $this->pages_model->selectUniversity());
        $this->set('college', $this->pages_model->selectCollege());
    }

    public function selectCity() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $state_id = $this->request->data('state_id');
            $data = $this->pages_model->select_city($state_id);
            echo $data;
        }
    }

    public function signUp() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->pages_model->userRegister($this->request->data);
        }
    }

    public function academic_goals() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
    }

    public function career() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
    }

    public function about() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
        $page_title = $this->action;
        $this->set('meta_data', $this->pages_model->viewSEO($page_title));
    }

    public function contact() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
        if ($this->request->is('post')) {
            $this->set('msg', $this->pages_model->contactDetail($this->request->data));
        }
        $page_title = $this->action;
        $this->set('meta_data', $this->pages_model->viewSEO($page_title));
    }

    public function school_registration() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
        $this->set('university', $this->pages_model->viewUniversity());
        $this->set('college', $this->pages_model->viewCollege());

        if ($this->request->is('post')) {
            if ($this->request->data('form_name') == 'new_user') {
                $this->set('response', $this->pages_model->schoolRegister($this->request->data));
            }
            if ($this->request->data('form_name') == 'already_user') {
                $data = $this->pages_model->schoolLogin($this->request->data);
                if ($data == 0) {
                    $this->set('response1', "Invalid Username and Password");
                } else {
                    $this->Session->write('school_data', $data);
                    $this->redirect('/choose_program.html');
                }
            }
            if ($this->request->data('form_name') == 'forgot_pass') {
                $this->set('response1', $this->pages_model->schoolForgotPassword($this->request->data));
            }
        }
        $page_title = $this->action;
        $this->set('meta_data', $this->pages_model->viewSEO($page_title));
    }

    public function career_conection() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
        $page_title = $this->action;
        $this->set('meta_data', $this->pages_model->viewSEO($page_title));
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
                $this->pages_model->updateTransactionId($data, $this->request->data('txn_id'), $this->request->data('payment_status'), $this->request->data('mc_gross'), $this->request->data('payment_date'));
            }
            curl_close($curl);
        }
    }

    public function register_user() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->pages_model->registerUser($this->request->data('email_id'), $this->request->data('school_mcd'));
        }
    }

    public function paypal_sucess() {
        error_reporting(0);
    }

    public function paypal_cancel() {
        error_reporting(0);
    }

    public function renew() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        } else {
            if (isset($this->params['url']['id'])) {
                $id = $this->params['url']['id'];
                $this->set('user_data', $this->pages_model->renew_data($id));
                $this->set('coupon_data', $this->pages_model->showCoupon());
                $this->set('price_advmonth_data', $this->pages_model->showPriceAdvMonth());
                $this->set('price_advyear_data', $this->pages_model->showPriceAdvYear());
                $this->set('price_accessmonth_data', $this->pages_model->showPriceAccessMonth());
                $this->set('price_accessyear_data', $this->pages_model->showPriceAccessYear());
            }
        }
    }

    public function my_career() {
        error_reporting(0);
        if ($this->Session->check('udata1')) {
            $this->redirect("/individual_dashboard.html");
        }
        $page_title = $this->action;
        $this->set('meta_data', $this->pages_model->viewSEO($page_title));
    }

    public function career_login() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $data = $this->pages_model->confirm_email($this->request->data);
            if ($data['mcd'] > '0') {
                $this->Session->write('indus_data', $data['industry_id']);
            }
            echo json_encode($data);
        }
    }

    public function recruiter_dashboard() {
        error_reporting(0);
        $province = $this->pages_model->selectProvince();
        $state = $this->pages_model->selectState();
        $data = $this->pages_model->recruiterStudentList();
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
            $data = $this->pages_model->recruiterStudentList();
            $data_filter = $this->pages_model->recruiterStudentListFilter($state, $city, $school);
            $this->set('school', $data);
            $this->set('result', $data_filter);
        }
    }

    public function ipn_val() {
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
                $this->pages_model->updateTransactionIdData($data, $this->request->data('txn_id'), $this->request->data('payment_status'), $this->request->data('mc_gross'), $this->request->data('payment_date'));
            }
            curl_close($curl);
        }
    }

    public function newsql() {
        $data = $this->pages_model->new_sql();
        debug($data);
    }

    public function acceptTerms() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $data = $this->pages_model->siginData($this->request->data);
            if ($data['status'] == '1') {
                $this->Session->write('udata1', $data['msg']);
            }
        }
    }

    public function renewStarter() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $this->pages_model->renewStarter($this->request->data('email_id'));
        }
    }

    public function issueReport() {
        error_reporting(0);
        if ($this->request->is('post')) {

            $attachment1 = $this->pages_model->issueReport1($this->request->data);
            $attachment2 = $this->pages_model->issueReport2($this->request->data);
            $attachment3 = $this->pages_model->issueReport3($this->request->data);
            $attachment4 = $this->pages_model->issueReport4($this->request->data);
            $link_not_text = $this->request->data('link_not_text');
            $wrong_info_text = $this->request->data('wrong_info_text');
            $look_info_text = $this->request->data('look_info_text');
            $not_work_device = $this->request->data('not_work_device');
            $not_work_browser = $this->request->data('not_work_browser');

            $Email = new CakeEmail('default');
            $Email->to('kuldeep.dhami@acumaxtechnologies.com');
            $Email->attachments(array('/var/www/vhosts/certifymyresume.com/mycareerdashboard.com/app/webroot/attachment/' . $attachment1, '/var/www/vhosts/certifymyresume.com/mycareerdashboard.com/app/webroot/attachment/' . $attachment2, '/var/www/vhosts/certifymyresume.com/mycareerdashboard.com/app/webroot/attachment/' . $attachment3, '/var/www/vhosts/certifymyresume.com/mycareerdashboard.com/app/webroot/attachment/' . $attachment4));
            $Email->viewVars(array('link_not_text' => $link_not_text, 'wrong_info_text' => $wrong_info_text, 'look_info_text' => $look_info_text, 'not_work_device' => $not_work_device, 'not_work_browser' => $not_work_browser, 'attachment1' => $attachment1, 'attachment2' => $attachment2, 'attachment3' => $attachment3, 'attachment4' => $attachment4));
            $Email->from(array('report@mycareerdashboard.com' => 'My Career Dashboard Issue'));
            $Email->subject('Issue Report');
            $Email->emailFormat('html');
            $Email->template('report');
            $Email->send();
            $this->redirect("/index.html");
        }
    }

    public function feedback() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->pages_model->feedback($this->request->data);
        }
    }

    public function recruiter_signup() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->pages_model->recruiter_signup($this->request->data);
        }
    }

    public function carrer_signIn() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $data = $this->pages_model->recuiterSignin($this->request->data);
            $this->Session->write('recuit_data', $data['recuit_id']);
            echo json_encode($data);
        }
    }

    public function getSchoolMcd() {
        error_reporting(0);
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            $data = $this->pages_model->getSchoolMcd($this->request->data('s_name'));
            echo $data;
        }
    }

}

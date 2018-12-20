<?php

App::uses('AppController', 'Controller');

class IndustrysController extends AppController {

    private $industry_model;

    public function beforeFilter() {
        $this->loadModel('IndustrysModel');
        $this->industry_model = new IndustrysModel();
        session_start();
    }

    public function industry_index() {
        if ($this->Session->check('udata2')) {
            $this->redirect('../new_reference.html');
        } else {
            if ($this->request->is('post')) {
                $data = $this->industry_model->admin_login($this->request->data);
                if ($data > 1) {
                    $ref_type = $data['ref_type'];
                    $ref_name = $data['ref_name'];
                    $this->Session->write('udata2', $data);
                    if ($ref_type == 'Standard') {
                        $this->redirect('../Standard.html');
                    } elseif ($ref_type == 'Advance') {
                        $this->redirect('../Advance.html');
                    }

                    if ($ref_name == 'coop_verification') {
                        $this->redirect('../co_op.html');
                    }
                } else {
                    $this->set('message', $data);
                }
            }
        }
    }

    public function index() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');

            if ($this->request->is('post')) {
                $this->set('results', $this->industry_model->filterPending($this->request->data, $user));
            } else {
                $data = $this->industry_model->pending($user);
                $this->set('results', $data);
            }
        } else {
            $this->redirect('../industry_index.html');
        }
    }

    public function co_op() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');
            $id = $user['id'];
            $ref_name = $user['ref_name'];
            $this->set('ref_name', $user['ref_name']);
            $this->set('results', $this->industry_model->certify_data($id));
            if ($this->request->is('post')) {
                $this->industry_model->co_opRef($this->request->data, $id, $ref_name);
            }
        } else {
            $this->redirect('../industry_index.html');
        }
    }

    public function confirm_verify() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');
        } else {
            $this->redirect('../industry_index.html');
        }
    }

    public function count_ref() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->industry_model->countref($this->request->data('user_id'), $this->request->data('website'));
        }
    }

    public function archived() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');
            $this->set('results', $this->industry_model->archive($user));
        } else {
            $this->redirect('../industry_index.html');
        }
    }

    public function pending1_ref() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');

            if ($this->request->is('ajax')) {
                $this->autoRender = FALSE;
                echo $this->industry_model->pending1Ref($this->request->data('user_id'), $this->request->data('email'));
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function pending2_ref() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');

            if ($this->request->is('ajax')) {
                $this->autoRender = FALSE;
                echo $this->industry_model->pending2Ref($this->request->data('user_id'), $this->request->data('email'));
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function pending3_ref() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');

            if ($this->request->is('ajax')) {
                $this->autoRender = FALSE;
                echo $this->industry_model->pending3Ref($this->request->data('user_id'), $this->request->data('email'));
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function Standard() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');
            $id = $user['id'];
            $ref_name = $user['ref_name'];
            $this->set('ref_name', $user['ref_name']);
            $this->set('results', $this->industry_model->certify_data($id));

            if ($this->request->is('ajax')) {
                $this->autoRender = FALSE;
                echo $this->industry_model->addStar1($this->request->data('val'), $this->request->data('id'));
            }

            if ($this->request->is('post')) {
                $this->industry_model->standard_data($this->request->data, $id, $ref_name);
                $this->redirect('/confirm_verify.html');
            }
        } else {
            $this->redirect('../industry_index.html');
        }
    }

    public function Advance() {
        error_reporting(0);
        if ($this->Session->check('udata2')) {
            $user = $this->Session->read('udata2');
            $id = $user['id'];
            $ref_name = $user['ref_name'];
            $this->set('ref_name', $user['ref_name']);
            $this->set('results', $this->industry_model->certify_data($id));
            if ($this->request->is('post')) {
                $this->industry_model->advance_data($this->request->data, $id, $ref_name);
                $this->redirect('/confirm_verify.html');
            }
        } else {
            $this->redirect('../admin_index.html');
        }
    }

    public function range1() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->industry_model->addRange1($this->request->data('val'), $this->request->data('id'));
        }
    }

    public function range2() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->industry_model->addRange2($this->request->data('val'), $this->request->data('id'));
        }
    }

    public function range3() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->industry_model->addRange3($this->request->data('val'), $this->request->data('id'));
        }
    }

    public function range4() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->industry_model->addRange4($this->request->data('val'), $this->request->data('id'));
        }
    }

    public function range5() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->industry_model->addRange5($this->request->data('val'), $this->request->data('id'));
        }
    }

    public function range6() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->industry_model->addRange6($this->request->data('val'), $this->request->data('id'));
        }
    }

    public function range7() {
        if ($this->request->is('ajax')) {
            $this->autoRender = FALSE;
            echo $this->industry_model->addRange7($this->request->data('val'), $this->request->data('id'));
        }
    }

    public function logout() {
        $this->Session->delete('udata2');
        $this->redirect('../industry_index.html');
    }

}

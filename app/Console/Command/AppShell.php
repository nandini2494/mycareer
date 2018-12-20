<?php

App::uses('Shell', 'Console');
App::uses('CakeEmail', 'Network/Email');

class AppShell extends Shell {

    public $components = array('Email');

    public function main() {
        error_reporting(0);

        $this->loadModel('DashboardsModel');
        $das = new DashboardsModel();

        $this->loadModel('PagesModel');
        $page = new PagesModel();

        $response = $das->getReminders('event_reminder');

        $Email = new CakeEmail('default');
        $Email->from(array('appreminder@mycareerdashboard.com' => 'My Career Dashboard'));
        $Email->subject('My Career Dashboard Reminder');
        $Email->emailFormat('html');
        $Email->template('reminder');

        foreach ($response as $row) {
            $Email->viewVars(array('row' => $row));
            $Email->to($row['register']['email']);
            $Email->send();
            $das->updateReminder($row['event_reminder']['id'], 'event_reminder');
        }

        $response = $das->getReminders('task_list');

        foreach ($response as $row) {
            $Email->viewVars(array('row' => $row));
            $Email->to($row['register']['email']);
            $Email->send();
            $das->updateReminder($row['task_list']['id'], 'task_list');
        }

        $response = $das->getReminders('reminder_tab');

        foreach ($response as $row) {
            $Email->viewVars(array('row' => $row));
            $Email->to($row['register']['email']);
            $Email->send();
            $das->updateReminder($row['reminder_tab']['id'], 'reminder_tab');
        }

        $login_data = $page->getLogin();

        foreach ($login_data as $row_data) {
            if ($row_data['register']['approve_ambassador'] != 'approved') {
                if ($row_data['register']['program'] == 'trail') {
                    $current_date = date_create(date('Y-m-d'));
                    $reg_date = date_create(date('Y-m-d', strtotime($row_data['register']['payment_date'])));
                    $diff = date_diff($reg_date, $current_date);
                    $days = $diff->format("%a");
                    if ($days > '14') {
                        $page->updateLogin($row_data['register']['id']);
                    }
                }
                if ($row_data['register']['program'] == 'advanced' || $row_data['register']['program'] == 'access360') {
                    if ($row_data['register']['duration_date'] == '') {
                        if ($row_data['register']['program_duration'] == 'year') {
                            $current_date = date_create(date('Y-m-d'));
                            $reg_date = date_create(date('Y-m-d', strtotime($row_data['register']['payment_date'])));
                            $diff = date_diff($reg_date, $current_date);
                            $days = $diff->format("%a");
                            if ($days > '365') {
                                $page->updateLogin($row_data['register']['id']);
                            }
                        }
                        if ($row_data['register']['program_duration'] == '6month') {
                            $current_date = date_create(date('Y-m-d'));
                            $reg_date = date_create(date('Y-m-d', strtotime($row_data['register']['payment_date'])));
                            $diff = date_diff($reg_date, $current_date);
                            $days = $diff->format("%a");
                            if ($days > '183') {
                                $page->updateLogin($row_data['register']['id']);
                            }
                        }
                    } else {
                        $current_date = date_create(date('Y-m-d'));
                        $reg_date = date_create(date('Y-m-d', strtotime($row_data['register']['duration_date'])));
                        $diff = date_diff($reg_date, $current_date);
                        $days = $diff->format("%R%a");
                        if ($days > '0') {
                            $page->updateLogin($row_data['register']['id']);
                        }
                    }
                }
            }
        }
    }

}

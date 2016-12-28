<?php

class Admin_logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //if there is no session
        if (!$this->session->userdata('validAdminEntry')) {
            //prompt users that there is no session
            redirect(base_url());
        }
    }

    public function index()
    {
        if ($this->session->userdata('validAdminEntry')) {
            $this->session->unset_userdata('validAdminEntry');
            $this->session->sess_destroy();
            redirect(base_url());
        } else {
            redirect(base_url());
        }
    }
}?>
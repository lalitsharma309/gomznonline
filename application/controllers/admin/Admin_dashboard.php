<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller
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

    public function index(){
        $data ['title'] = '';
        $data ['meta_description'] = '';
        $data ['meta_keywords'] = '';
        $this->load->view('admin/admin_dashboard_view',$data);
    }
}?>
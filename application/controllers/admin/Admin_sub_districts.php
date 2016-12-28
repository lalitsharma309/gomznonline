<?php

/**
 * Created by PhpStorm.
 * User: LS
 * Date: 29-Dec-16
 * Time: 12:03 AM
 */


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_sub_districts extends CI_Controller
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

        $service_url = base_url().'rest/SubDistrictsAPI/all_active_sub_districts/';
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($curl_response, TRUE);
        $data ['all_sub_districts'] = $res;


        $this->load->view('admin/admin_sub_district_view',$data);
    }
}
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_login extends CI_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->library('form_validation');
    }
    public function index($data=""){
        $data ['title'] = '';
        $data ['meta_description'] = '';
        $data ['meta_keywords'] = '';
        $this->load->view('admin/admin_login_view',$data);
    }
    public function login() {
        $this->load->library ( 'form_validation' );
        $this->form_validation->set_error_delimiters ( '<span class="ferror">', '</span>' );
        $this->form_validation->set_rules ( 'email', 'Email', 'trim|required' );
        $this->form_validation->set_rules ( 'password', 'password', 'trim|required' );

        if ($this->form_validation->run () == FALSE)
        {
            $this->index ();
        }
        else
        {
            $email = $this->input->post( 'email' );
            $password = $this->input->post ( 'password' );

            $data=array(
                'email'=>$email,
                'password'=>$password,
            );
            $service_url = base_url() . 'rest/AdminLoginAPI/check_login/';
            $curl = curl_init($service_url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            $postdata = array('theclass' => serialize($data));
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
            $curl_response = curl_exec($curl);
            $res = json_decode($curl_response, TRUE);
            curl_close($curl);

            if(!empty($res) && isset($res)){
                $this->session->set_userdata ( "validAdminEntry", $res );
                redirect(base_url().'admin-dashboard');
            }
            else
            {
                $data['error'] = "Incorrect credentials. <br>Either your login email or password is incorrect.";
                $this->index($data);
            }
        }
    }
}


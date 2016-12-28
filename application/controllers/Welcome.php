<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
	public function index()
	{
        $service_url = base_url().'rest/SubDistrictsAPI/all_active_sub_districts/';
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($curl_response, TRUE);
        $data ['sub_districts'] = $res;

	    $this->load->view('header');
		$this->load->view('home_page_view',$data);
        $this->load->view('footer');
	}
}

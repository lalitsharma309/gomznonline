<?php
/**
 * Created by PhpStorm.
 * User: LS
 * Date: 21-Dec-16
 * Time: 9:08 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {
    public function index()
    {
        $this->load->view('header');
        $this->load->view('contact_us_view');
        $this->load->view('footer');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: LS
 * Date: 21-Dec-16
 * Time: 9:08 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
    public function index()
    {
        $this->load->view('header');
        $this->load->view('sales_view');
        $this->load->view('footer');
    }
}
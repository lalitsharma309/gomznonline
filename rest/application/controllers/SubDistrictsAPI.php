<?php
require ('./application/libraries/REST_Controller.php');
header('Access-Control-Allow-Origin: *');
/**
 * Created by PhpStorm.
 * User: LS
 * Date: 29-Dec-16
 * Time: 12:43 AM
 */
class SubDistrictsAPI extends REST_Controller
{
    public function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('SubDistrictsApiModel');
    }

    public function all_sub_districts_get()
    {
        $result = $this->SubDistrictsApiModel->get_all_sub_districts();
        if ($result === FALSE) {
            $this->response();
        } else {
            $this->response($result);
        }
    }
    public function all_active_sub_districts_get()
    {
        $result = $this->SubDistrictsApiModel->get_active_sub_districts();
        if ($result === FALSE) {
            $this->response();
        } else {
            $this->response($result);
        }
    }
    public function create_sub_district_post()
    {
        $conf = $this->post('theclass');
        $data = unserialize($conf);
        $result = $this->SubDistrictsApiModel->create_sub_districts($data);
        if ($result === FALSE) {
            $this->response();
        } else {
            $this->response($result);
        }
    }
    public function update_sub_district_put()
    {
        $conf = $this->post('theclass');
        $data = unserialize($conf);
        $result = $this->SubDistrictsApiModel->update_sub_districts($data);
        if ($result === FALSE) {
            $this->response();
        } else {
            $this->response($result);
        }
    }

}
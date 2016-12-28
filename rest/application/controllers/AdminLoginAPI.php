<?php

require ('./application/libraries/REST_Controller.php');
header('Access-Control-Allow-Origin: *');

class AdminLoginAPI extends REST_Controller {

  public function __construct($config = 'rest') {
    parent::__construct($config);
    $this->load->model('AdminLoginApiModel');
  }

  function check_login_post() {
      $conf = $this->post('theclass');
      $data = unserialize($conf);
      $result = $this->AdminLoginApiModel->login($data);
      if ($result === FALSE) {
        $this->response();
      } else {
        $this->response($result);
      }
  }

}?>

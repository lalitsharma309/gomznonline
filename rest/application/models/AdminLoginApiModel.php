<?php
class AdminLoginApiModel extends CI_Model {
	public function __construct() {
	}
	
	public function login($data){
		try{
            $query = "select * from admin_users where email='" . $data['email'] . "' and password='" . md5 ( $data['password'] ) . "'";
            $q = $this->db->query ( $query );
            if ($q->num_rows () > 0) {
                foreach ( $q->result () as $rows ) {
                    // add all data to session
                    $newdata = array (
                        'admin_id' => $rows->admin_id,
                        'email' => $rows->email,
                        'user_pic' => $rows->user_pic,
                        'full_name' => $rows->first_name . " " . $rows->last_name,
                        'logged_in' => TRUE
                    );
                }
                return $newdata;
                }
			}catch(Exception $e){
				log_message('debug', 'Error');
			}
	}
}?>
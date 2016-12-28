<?php

/**
 * Created by PhpStorm.
 * User: LS
 * Date: 29-Dec-16
 * Time: 12:46 AM
 */
class SubDistrictsApiModel extends CI_Model
{
    public function __construct() {
    }

    public function get_active_sub_districts()
    {
        $this->db->select('*');
        $this->db->where('seen_status','yes');
        $query=$this->db->get('sub_district');
        $data=array();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] =array(
                    'id'=>$row->id,
                    'name'=>$row->name
                );
            }
        }
        return $data;
    }
    public function get_all_sub_districts()
    {
        $this->db->select('*');
        $query=$this->db->get('sub_district');
        $data=array();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] =array(
                    'id'=>$row->id,
                    'name'=>$row->name
                );
            }
        }
        return $data;
    }
    public function create_sub_districts($data)
    {

    }
    public function update_sub_districts($data)
    {

    }

}
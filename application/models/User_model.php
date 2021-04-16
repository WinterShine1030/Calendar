<?php


class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function AddInfo($values)
    {
        
        $query = $this->db->insert('schedule', $values);
        file_put_contents("2.txt", $query);
        return $query;
    }
    public function FetchInfo()
    {
        
        $query = $this->db->get('schedule');
         return $query->result_array();
    }
    public function DropInfo($values)
    {
       $query = $this->db->update('schedule', $values, array('id' => $values['id']));
       return $query;
    }
    public function DelInfo($values)
    {
        $query = $this->db->delete('schedule', $values);
        return $query;
    }
}

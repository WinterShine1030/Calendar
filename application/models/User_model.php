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
        $this->db->where('accept', 1);
        $query = $this->db->get('schedule');
         return $query->result_array();
    }
    public function DropInfo($values)
    {
       $query = $this->db->update('schedule', $values, array('id' => $values['id']));
       return $query;
    }
    public function AcceptInfo($values)
    {
        $query = $this->db->update('schedule', $values, array('id' => $values['id']));
        return $query;
    }
    public function AdminFetchInfo()
    {
        $this->db->where('accept', 0);
        $query = $this->db->get('schedule');
         return $query->result_array();
    }
}

<?php


class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function loginCheck($values)
    {
        
        $query = $this->db->insert('schedule', $values);
        file_put_contents("2.txt", $query);
        return $query;
        // if ($result->num_rows()==0)
        // {
        //     return "no_user";
        // }

        // $this->db->where('user_name', $username);
        // $this->db->where('password', $password);
        // $result = $this->db->get('anas_admin');

        // if ($result->num_rows()==0)
        // {
        //     return "wrong_password";
        // }

        // $status = $result->row_array();
        // return "ok";
    }

}

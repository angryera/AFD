<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
    function userListing($from, $count)
    {
        $this->db->select('BaseTbl.user_id, BaseTbl.name, BaseTbl.email, BaseTbl.date_time, BaseTbl.role');
        $this->db->from('users as BaseTbl') ;
        $this->db->limit($count, $from);
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }  

    function changeRole($user_id) {
        $this->db->set('role', 'IF(STRCMP(ROLE, "admin") = 0, "", "admin")', FALSE);
        $this->db->where('user_id', $user_id);
        $this->db->update('users');
    }
}

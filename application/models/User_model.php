<?php
class User_model extends CI_Model
{
    public function getUser($email, $password)
    {
        $this->db->select("*");
        $query = $this->db->get_where("users", array("email" => $email, "password" => $password ));

        if ($query->num_rows() > 0) { //如果數量大於0
            return $query->row();  //回傳第一筆
        } else {
            return null;
        }
    }
}

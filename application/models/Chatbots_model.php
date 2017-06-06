<?php
class Chatbots_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   
    public function getHot()
    {
        $this->db->order_by("views", "desc"); 
        $query = $this->db->get('articles');
        
        return $query->result_array();
    }

    public function getTag()
    {
        $this->db->order_by("id", "desc"); 
        $query = $this->db->get('tags');
        
        return $query->result_array();
    }



    

}
?>
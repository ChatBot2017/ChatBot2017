<?php 

class Tag_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($tag_id=null, $tag_id=null)
    {
        if (empty($tag_id) || empty($tag_id)) {
            return false;
        }
        $value['tag_id'] = $tag_id;
        $value['article_id'] = $article_id;
        $query = $this->db->insert("likes", $value);
        if ($query) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

     public function gettag($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tags');
        
        if ($query->num_rows() <= 0) {
            return null; //無資料時回傳 null
        }
        return $query->row_array();  //回傳第一筆
    }

    

}
    
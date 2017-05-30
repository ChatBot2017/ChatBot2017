<?php
class Article_m extends CI_Model {

	public function __construct() {
        parent::__construct();
    }

	public function get_article($limit = 10)
	{
	    $query = $this->db->get('Article', $limit);
	    return $query->result_array();
	}

}
?>
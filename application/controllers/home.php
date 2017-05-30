<?php 	
class Home extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->model('article_m');
        print_r($this->article_m->get_article());
    }

	public function index(){
		$this->load->view("home/header");
		$this->load->view("home/index", $data);
		$this->load->view("home/footer");

		$data['Article'] = $this->Article_m->get_article();
	}

	public function article(){
		$this->load->view("home/header");
		$this->load->view("home/article");
		$this->load->view("home/footer");
	}

	public function upload(){
		$this->load->view("home/upload");
		$this->load->view("home/footer");
	}
	
}
 ?>
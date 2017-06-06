<?php
class chatbots extends CI_Controller{
 public function __construct()/*class類別:訂好的規格 */
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('chatbots_model');
    }
  public function index()
  {
        $this->load->view('templates/header');/*logo*/
        $this->load->view('chatbots/index');
        $this->load->view('templates/footer');	
  
  }
   public function hot()
  {
        
        $data = [
    'hot' => $this->chatbots_model->getHot(), // 範例用model取DB資料 他們裡面都還是陣列
    'all' => $this->article_model->getAll(), // 這也是 model 取出的 raw data
    'page' => 1, // 我也可以指定是一個參數
];
        $this->load->view('templates/header');/*logo*/
        $this->load->view('chatbots/hot',$data);
        $this->load->view('templates/footer');  

  }
  public function tag()
  {
        $data['tag'] =$this->chatbots_model->getTag(); // 範例用model取DB資料 他們裡面都還是陣列];
        $this->load->view('templates/header');/*logo*/
        $this->load->view('chatbots/tag',$data);
        $this->load->view('templates/footer');  

  }
}

?>
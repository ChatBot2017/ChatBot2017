<?php
class Chatbots extends CI_Controller{
 public function __construct()/*class類別:訂好的規格 */
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('like_model');
    }
  public function index()
  {
        $this->load->view('templates/header');/*logo*/
        $this->load->view('chatbots/index');
        $this->load->view('templates/footer');	
  
  }
   public function hot()
    {
        $hots = [];

        $likes = $this->like_model->hot_likes();
        foreach ($likes as $like) {
            $hots[] = $this->article_model->get($like['article_id']);
        }

        $data = [
            'hots' => $hots,
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
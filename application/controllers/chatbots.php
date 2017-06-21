<?php
class Chatbots extends CI_Controller{
 public function __construct()/*class類別:訂好的規格 */
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('like_model');
        $this->load->model('tag_model');
        $this->load->model('articletag_model');
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

        $likes = $this->like_model->hot_likes();/*key*/
        foreach ($likes as &$like) {
            //$hots[] = $this->article_model->get($like['article_id']);
          $article = $this->article_model->get($like['article_id']);
          
          $like['title'] = $article['title'];
        }

        $data = [
            //'hots' => $hots,
          'likes' => $likes
        ];
        $this->load->view('templates/header');/*logo*/
        $this->load->view('chatbots/hot',$data);
        $this->load->view('templates/footer');
    }
  public function tag()
  {
        $tags = [];

        $likes = $this->articletag_model->hot_tag();
        foreach ($likes as $like) {
            $tags[] = $this->tag_model->gettag($like['tag_id']);
        }

        $data = [
            'tags' => $tags,
        ];
        $this->load->view('templates/header');/*logo*/
        $this->load->view('chatbots/tag',$data);
        $this->load->view('templates/footer');  

  }

     

 
  // public function article_tag()
  // {
  //        $article_tag = [];

  //       $likes = $this->like_model->tag_likes();
  //       foreach ($likes as $like) {
  //           $article_tag[] = $this->article_model->get($like['article_id']);
  //       }

  //       $data = [
  //           'tags' => $article_tag,
  //       ];
  //       $this->load->view('templates/header');/*logo*/
  //       $this->load->view('chatbots/article_tag',$data);
  //       $this->load->view('templates/footer');  

  // }
}

?>
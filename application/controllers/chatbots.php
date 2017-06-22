<?php
class Chatbots extends CI_Controller{
 public function __construct()/*class類別:訂好的規格 */
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('like_model');
        $this->load->model('tag_model');
        $this->load->model('articletag_model');
        $this->load->model('user_model');

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

        $likes = $this->like_model->hot_tags();
        foreach ($likes as &$like) {
            //$tags[] = $this->tag_model->gettag($like['tag_id']);
          $article_tag = $this->tag_model->gettag($like['tag_id']);

          $like['name'] = $article_tag['name'];
        }

        $data = [
            //'tags' => $tags,
          'likes' => $likes
        ];
        $this->load->view('templates/header');/*logo*/
        $this->load->view('chatbots/tag',$data);
        $this->load->view('templates/footer');  

  }

     

 
  public function user_articles()
  {
        $articles = [];

        $likes = $this->like_model->user_article();
        foreach ($likes as &$like) {
            //$tags[] = $this->tag_model->gettag($like['tag_id']);
          $user = $this->user_model->get($like['user_id']);
          
          $like['name'] = $user['name'];
        }

        $data = [
            //'tags' => $tags,
          'likes' => $likes
        ];
        $this->load->view('templates/header');/*logo*/
        $this->load->view('chatbots/user_articles',$data);
        $this->load->view('templates/footer');  

  }
}

?>
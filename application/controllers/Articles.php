<?php
class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_model');
        $this->load->model('comment_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['articles'] = $this->article_model->getALL();
        $this->load->view('articles/index', $data);
    }
    public function show($id = null)
    {
        $data['article'] = $this->article_model->get($id);
        $data['comments'] = $this->comment_model->find_by_article($id);
        $this->load->view('articles/show', $data);
    }

    public function create()
    {
        $this->checkSession();

        $this->load->view('templates/message');
        $this->load->view('articles/create');
    }

    public function creating()
    {
        $this->checkSession();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', "建立文章失敗");
            $this->load->view('templates/message');
            $this->load->view('articles/create');
            return true;
        } else {
            $data = array(
              "title" => $this->input->post('title'),
              "content" => $this->input->post('content'),
              "pic_url" => $this->input->post('pic_url')
            );
            $article_id = $this->article_model->insert($data, $_SESSION['user']['id']);
            $this->session->set_flashdata('message', "建立文章成功");
            redirect(site_url('articles/'.$article_id), 'refresh');
            return true;
        }
    }

    public function edit($id=null)
    {
        $this->checkSession();
        $data['article'] = $this->article_model->get($id);
        $this->checkArticleAuthor($data['article'], $_SESSION["user"]);
        $this->load->view('templates/message');
        $this->load->view('articles/edit', $data);
    }

    public function update($id=null)
    {
        $this->checkSession();
        $data['article'] = $this->article_model->get($id);
        $this->checkArticleAuthor($data['article'], $_SESSION["user"]);
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', "更新文章失敗");
            redirect(site_url('articles/'.$id.'/edit'), 'refresh');
            return true;
        } else {
            $data = array(
              "title" => $this->input->post('title'),
              "content" => $this->input->post('content'),
              "pic_url" => $this->input->post('pic_url')
            );
            $query = $this->article_model->update($data, $id);
            $this->session->set_flashdata('message', "更新文章成功");
            redirect(site_url('articles/'.$id), 'refresh');
            return true;
        }
    }
    public function destroy($id=null)
    {
        $this->checkSession();
        $data['article'] = $this->article_model->get($id);
        $this->checkArticleAuthor($data['article'], $_SESSION["user"]);
        $query = $this->article_model->destroy($id);
        if ($query) {
            $this->session->set_flashdata('message', "刪除文章成功");
            redirect(site_url('articles/'), 'refresh');
            return true;
        } else {
            $this->session->set_flashdata('message', "刪除文章失敗");
            redirect(site_url('articles/'.$id), 'refresh');
            return true;
        }
    }

    public function comment($article_id=null)
    {
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', "留言失敗。");
            redirect(site_url('articles/'.$article_id), 'refresh');
            return true;
        } else {
            $data = array(
              "message" => $this->input->post('message'),
              "article_id" => $article_id
            );
            $query = $this->comment_model->create($data);
            $this->session->set_flashdata('message', "留言成功");
            redirect(site_url('articles/'.$article_id), 'refresh');
            return true;
        }
    }
    private function checkSession()
    {
        if (!isset($_SESSION["user"])) {
            $this->session->set_flashdata('message', "尚未登入，請先登入。");
            redirect('/sign_in', 'refresh');
            return false;
        }
    }
    private function checkArticleAuthor($article, $author)
    {
        if ($article['user_id'] != $author['id']) {
            $this->session->set_flashdata('message', "你不是作者，無權操作。");
            redirect(site_url('articles/'.$article['id']), 'refresh');
            return false;
        }
    }
}

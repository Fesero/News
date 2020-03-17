<?php
class Controller_News extends Controller
{
    function __construct()
    {
        $this->model = new Model_news();
        $this->view = new View();
    }

    function action_index($params)
    {
        $data = $this->model->get_data($params);
        $this->view->generate('news_view.php', 'template_view.php', $data, $params);
    }

    function action_page($params)
    {
        $data = $this->model->get_data($params);
        $this->view->generate('news_view.php', 'template_view.php', $data, $params);
    }
}
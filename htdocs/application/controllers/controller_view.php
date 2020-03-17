<?php
class Controller_View extends Controller {
    function __construct()
    {
        $this->model = new Model_view();
        $this->view = new View();
    }

    function action_id($params)
    {
        $data = $this->model->get_data($params);
        $this->view->generate('view_view.php', 'template_view.php', $data);
    }
}
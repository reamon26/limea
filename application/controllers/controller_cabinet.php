<?php

class Controller_Cabinet extends Controller
{
    function __construct()
    {
        $this->model = new Model_Cabinet();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('cabinet_view.php', 'template_view.php');
    }
}
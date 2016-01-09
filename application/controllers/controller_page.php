<?php

class Controller_Page extends Controller
{

    function action_index()
    {
        $this->view->generate('page_view.php', 'template_view.php');
    }
}

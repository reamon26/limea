<?php

class Controller_All_user extends Controller
{

    function action_index()
    {
        $this->view->generate('all_user_view.php', 'template_view.php');
    }
}

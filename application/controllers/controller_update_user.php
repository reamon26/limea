<?php

class Controller_Update_user extends Controller
{

    function action_index()
    {
        $this->view->generate('update_user_view.php', 'template_view.php');
    }
}

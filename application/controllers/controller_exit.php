<?php

class Controller_Exit extends Controller
{

    function action_index()
    {
        $this->view->generate('exit_view.php', 'template_view.php');
    }
}

<?php

class Controller_Upload extends Controller
{

	function action_index()
	{
		$this->view->generate('upload_view.php', 'template_view.php');
	}
}

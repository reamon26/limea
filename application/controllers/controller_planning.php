<?php

class Controller_Planning extends Controller
{

	function action_index()
	{
		$this->view->generate('planning_view.php', 'template_view.php');
	}
}

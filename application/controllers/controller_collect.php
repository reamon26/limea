<?php

class Controller_Collect extends Controller
{
	function __construct()
	{
		$this->model = new Model_Collect();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('collect_view.php', 'template_view.php', $data);
	}
}

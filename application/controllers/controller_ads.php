<?php

class Controller_Ads extends Controller
{

	function action_index()
	{
		$this->view->generate('ads_view.php', 'template_view.php');
	}
}

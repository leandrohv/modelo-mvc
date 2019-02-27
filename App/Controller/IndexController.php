<?php

namespace App\Controller;

class IndexController
{
	private $user;

	public function loadingEnv()
	{
		return require_once "env.php";
	}
	
	public function viewHeader()
	{
		return require_once "App/View/header.phtml";	
	}

	public function viewBody()
	{
	/*	if(isSet($_SESSION['logado'])){
			$viewBody = "../App/View/home/index.phtml";
		}
		else
		{ */
			//$viewBody = ;	
		//}

		return require_once "App/View/login/index.phtml";
	}

	public function viewFooter()
	{
		return require_once "App/View/footer.phtml";
	}	

	public function loadingView()
	{
		$this->loadingEnv();
		$this->viewHeader();
		$this->viewBody();
		$this->viewFooter();
	}

}
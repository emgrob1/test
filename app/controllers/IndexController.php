<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->assets
    	->addCss('css/style.css');
		
		$this->assets
		->addJs('https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js')
		->addJs('js/tools.js');
		
	}
	
	public function mention()
	{
		echo 'Hello!';
	}
}
?>

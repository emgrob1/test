<?php

class MenuItemsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	
			$this->assets
    	->addCss('css/style.css');
		
		$this->assets
		->addJs('https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js')
		->addJs('js/tools.js');
		
		
		
		
		$this->view->menu_items = MenuItems::find();
		$this->view->signup = MenuItems::find();
    }
	
	public function updateAction()
	{
		$menuitems = new MenuItems();
		
		$success = $menuitems->save($this->request->getPost(), array('name','link'));
		 if ($success) {
            echo "The menu has been updated";
        } else {
            echo "Sorry, the following problems were generated: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    
	}

}


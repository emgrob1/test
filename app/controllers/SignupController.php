<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	
		
			$this->assets
    	->addCss('css/style.css');
		
		$this->assets
		->addJs('https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js')
		->addJs('js/tools.js');
		
		
$this->view->signup = MenuItems::find();
    }

	   public function registerAction()
    {

        $user = new Users();

        // Store and check for errors
        $success = $user->save($this->request->getPost(), array('name', 'email'));

        if ($success) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generated: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }
}


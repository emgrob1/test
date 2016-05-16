<?php
use Phalcon\Mvc\User\Component as Element;
/**
 * Elements
 *
 * Helps to build UI elements for the application
 */
class Footerelements extends Element
{

    private $_headerMenu = array(
        'pull-left' => array(
            'index' => array(
                'caption' => 'Home',
                'action' => 'index'
            ),
            'invoices' => array(
                'caption' => 'Invoices',
                'action' => 'index'
            ),
            'about' => array(
                'caption' => 'About',
                'action' => 'index'
            ),
            'contact' => array(
                'caption' => 'Contact',
                'action' => 'index'
            ),
        ),
        'pull-right' => array(
            'session' => array(
                'caption' => 'Log In/Sign Up',
                'action' => 'index'
            ),
        )
    );

    private $_tabs = array(
        'Home' => array(
            'controller' => 'index',
            'action' => '',
            'any' => false
        ),
        'Current Projects' => array(
            'controller' => 'current',
            'action' => '',
            'any' => false
        ),
        'Completed Projects' => array(
            'controller' => 'completed',
            'action' => '',
            'any' => false
        ),
        'About Us' => array(
            'controller' => 'aboutus',
            'action' => '',
            'any' => false
        ),
        'Terms' => array(
            'controller' => 'terms',
            'action' => '',
            'any' => false
        ),
        'Disclaimer' => array(
            'controller' => 'disclaimer',
            'action' => '',
            'any' => false
        ),
        'Landing' => array(
            'controller' => 'landing',
            'action' => '',
            'any' => false
        ),
        'Contact Us' => array(
            'controller' => 'contactus',
            'action' => '',
            'any' => false
        )
    );

    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu()
    {

        $auth = $this->session->get('auth');
        if ($auth) {
            $this->_headerMenu['pull-right']['session'] = array(
                'caption' => 'Log Out',
                'action' => 'end'
            );
        } else {
            unset($this->_headerMenu['pull-left']['invoices']);
        }

        echo '<div class="nav-collapse">';
        $controllerName = $this->view->getControllerName();
        foreach ($this->_headerMenu as $position => $menu) {
            echo '<ul class="nav ', $position, '">';
            foreach ($menu as $controller => $option) {
                if ($controllerName == $controller) {
                    echo '<li class="active">';
                } else {
                    echo '<li>';
                }
                echo Phalcon\Tag::linkTo($controller.'/'.$option['action'], $option['caption']);
                echo '</li>';
            }
            echo '</ul>';
        }
        echo '</div>';
    }

    public function getTabs()
    {
        $controllerName = $this->view->getControllerName();
        $actionName = $this->view->getActionName();
        echo '<ul class="nav navbar-nav navbar-right">';
        foreach ($this->_tabs as $caption => $option) {
            if ($option['controller'] == $controllerName && ($option['action'] == $actionName || $option['any'])) {
                echo '<li class="active">';
            } else {
                echo '<li>';
            }
            echo Phalcon\Tag::linkTo($option['controller'].'/'.$option['action'], $caption), '<li>';
        }
        echo '</ul>';
    }
}
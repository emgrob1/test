<?php

class MenuController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		?>
		<div class="navigation">
<ul>
<li><a href="http://localhost/test/">Home</a></li>
<li><a href="http://localhost/test/signup">Sign Up</a></li>
</ul>
</div>
		
		<?php
    }

}


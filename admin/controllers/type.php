<?php
defined('_JEXEC') or die('Restricted Access');
jimport('joomla.application.component.controllerform');

class JexBookingControllerType extends JControllerForm
{
	public function save(){
		$rob = JRequest::getVar("jform");
		?>
		<pre>
		<?php 
		var_dump($rob);
		?>
		</pre>
		<?php
		parent::save();		
	}
}
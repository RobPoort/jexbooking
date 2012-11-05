<?php
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.view');

class JexBookingViewArrangements extends JView
{
	function display($tpl = null){
		
		$this->items = 'administrator Arrangementen';
		
		parent::display($tpl);
	}
}
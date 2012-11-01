<?php
defined('_JEXEC') or die('Restricted Access');

class JexBookingViewArrangements extends JView
{
	function display($tpl = null){
		$this->items = $this->get('Items');
		
		parent::display($tpl);
	}
}
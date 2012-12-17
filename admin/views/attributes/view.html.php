<?php

defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.view');

class JexBookingViewAttributes extends JView
{
	public function display($tpl = null){
		
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');
		
		//TODO JError deprecated vanaf J! 3.0, vervangen door Exception
		if(count($this->get('Errors'))){
			JError::raiseError(500, implode('<br />', $errors));
			
			return false;
		}
		
		//assign data to the view
		$this->items = $items;
		$this->pagination = $pagination;
		
		parent::display($tpl);
		
		//set the document
		$this->setDocument();
	}
	
	/**
	 *	method to set up the document properties
	 *	@return	void
	 */
	protected function setDocument()
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_JEXBOOKING_ADMINISTRATION'));
	}
}

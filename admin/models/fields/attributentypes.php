<?php
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('Checkboxes');

class JFormFieldAttributenTypes extends JFormField
{
	/**
	 * het formfieldtype
	 */
	protected $type = 'attributentypes';
	
	public function getInput(){
		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->from('#__jexbooking_attributes as ja');
		//$query->join('RIGHT','')
		$query->select('*');
		$query->where('id='.$this->item->id);
		
		var_dump($this->item->id);
	}
}
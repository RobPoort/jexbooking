<?php
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldAttributenTypes extends JFormField
{
	/**
	 * het formfieldtype
	 */
	protected $type = 'attributentypes';
	
	public function getOptions(){
		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->from('#__jexbooking_attributes as ja');
		//$query->join('RIGHT','')
		$query->select('*');
		$query->where('id='.$this->get('Item')->id);
	}
}
<?php
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('Checkboxes');

class JFormFieldAttributenLocations extends JFormField
{
	/**
	 * het formfieldtype
	 */
	protected $type = 'attributenlocations';
	
	public function getInput(){
		
		$this->id = JRequest::getInt('id');
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->from('#__jexbooking_xref_attributes as jxa');
		$query->select('attribute_id');
		$query->where('location_id = '.$this->id);
		$db->setQuery($query);
		//TODO ook de xrefs van de parent moeten opgehaald worden
		$xrefs = $db->loadResultArray();
		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->from('#__jexbooking_attributes as ja');		
		$query->select('*');		
		$db->setQuery($query);
		$rows = $db->loadObjectList();
		
		foreach($rows as $row){
			if(in_array($row->id, $xrefs)){
				$row->checked = 'checked="checked"';
			} else {
				$row->checked = '';
			}
		}
		//$form = array();
		$form = '<fieldset class="checkboxes" id="jform_attribute_id"><ul class="adminform">';
		foreach($rows as $row){			
			$form .= '<li><input type="checkbox" name="jform[attribute_id][]" '.$row->checked.' value="'.$row->id.'" />'.$row->name.'</li>';
		}
		$form .= '</ul></fieldset>';
		
		
		return $form;
		
	}
}
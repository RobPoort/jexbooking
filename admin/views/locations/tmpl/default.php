<?php
defined('_JEXEC') or die('Restricted Access');

JHtml::_('behavior.tooltip');

$items = $this->items;

?>
<form action="<?php echo JRoute::_('index.php?option=com_jexbooking&view=location'); ?>" method="post" name="adminForm" id="adminForm">
	<table class="adminList">
		<tr>
			<th width="5">
				<?php echo JText::_('COM_JEXBOOKING_LOCATIONS_HEADING_ID'); ?>
			</th>
			<th width="20">
				<input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count($this->items); ?>)" />
			</th>
			<th>
				<?php echo JText::_('COM_JEXBOOKING_LOCATIONS_HEADING_NAME'); ?>
			</th>
			<th>
				<?php echo JText::_('COM_JEXBOOKING_LOCATIONS_HEADING_DESC'); ?>
			</th>
			<th width="5">
				<?php echo JText::_('JSTATUS') ?>
			</th>
			<th>
				<?php echo JText::_('COM_JEXBOOKING_LOCATIONS_HEADING_TYPE_NAME'); ?>
			</th>
		</tr>
		<?php
			foreach($items as $i=>$item){ 
		?>
		<tr class="row<?php echo $i % 2; ?>">
			<td>
				<?php echo $item->id; ?>
			</td>
			<td>
				<?php echo JHtml::_('grid.id', $i, $item->id) ?>
			</td>
			<td>
				<a href="index.php?option=com_jexbooking&task=location.edit&id=">
					<?php echo $item->name; ?>
				</a>
			</td>
			<td>
				<?php echo $item->desc; ?>
			</td>
			<td class="center">
				<?php echo JHtml::_('jgrid.published', $item->published, $i, 'locations', true); ?>
			</td>
			<td>
				<?php echo $item->type_name; ?>
			</td>
		</tr>
		<?php }
		?>
	</table>
</form>
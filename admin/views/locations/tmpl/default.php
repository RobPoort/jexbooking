<?php
defined('_JEXEC') or die('Restricted Access');
//TODO backenformulier maken
$items = $this->items;
?>
<pre>
<?php
//var_dump($this->items);
?>
</pre>
<fieldset>
<table>
	<tr>
		<th>ID</th>
		<th>Type ID</th>
		<th>Locatie</th>
		<th>Omschrijving</th>
		<th>Published</th>
	</tr>
	<?php
	foreach($items as $item){
	?>
	<tr>
		<td><?php echo $item->id; ?></td>
		<td><?php echo $item->type_id; ?></td>
		<td><?php echo $item->name; ?></td>
		<td><?php echo $item->desc; ?></td>
		<td><?php echo $item->published; ?></td>
	</tr>
	<?php
	} 
	?>
</table>
</fieldset>
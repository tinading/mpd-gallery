<div class="projects index">
	<h2><?php __('Projects');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('mpd_class');?></th>
			<th><?php echo $this->Paginator->sort('date_presented');?></th>
			<th><?php echo $this->Paginator->sort('patent_number');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projects as $project):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $project['Project']['id']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['title']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['description']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['mpd_class']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['date_presented']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['patent_number']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Participants', true), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant', true), array('controller' => 'participants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures', true), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture', true), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
	</ul>
</div>
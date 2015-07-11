<div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
            <h1 class="page-header">Products</h1>
      </div>
      <div class="col-lg-12"><?php echo $this->Session->flash(); ?></div>
      <div class="col-lg-12">
       	<table class="table table-condensed" cellpadding="0" cellspacing="0" width="100%">
        <thead>
        <tr>
                <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('retail_price'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td>
            <?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
            </td>
            <td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
            <td><?php echo h('Rs '.$product['Product']['retail_price']); ?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id']),array('class'=>'glyphicon glyphicon-eye-open')); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id']),array('class'=>'glyphicon glyphicon-pencil')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('class'=>'glyphicon glyphicon-remove-circle'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        <p>
        <?php
        echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	
        </p>
        <ul class="pagination">
        <li><?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?></li>
        </ul>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php $this->start('sidebar'); ?>
<li>
 <a href="#"><i class="fa fa-files-o fa-fw"></i>Product Actions</a>
	<ul class="nav nav-first-level">
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quantities'), array('controller' => 'quantities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quantity'), array('controller' => 'quantities', 'action' => 'add')); ?> </li>
    </ul>
</li>
<?php $this->end(); ?>
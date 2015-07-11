<div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
            <h1 class="page-header">Orders</h1>
      </div>
      <div class="col-lg-12"><?php echo $this->Session->flash(); ?></div>
      <div class="col-lg-12">
       	<table class="table table-condensed" cellpadding="0" cellspacing="0" width="100%">
        <thead>
        <tr>
                <th><?php echo $this->Paginator->sort('product_id'); ?></th>
                <th><?php echo $this->Paginator->sort('sold_price'); ?></th>
                <th><?php echo $this->Paginator->sort('size'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($orders as $order): ?>
        <tr>

            <td>
                <?php echo $this->Html->link($order['Product']['name'], array('controller' => 'products', 'action' => 'view', $order['Product']['id'])); ?>
            </td>
            <td><?php echo 'Rs. '.$order['Order']['sold_price']; ?>&nbsp;</td>
            <td><?php echo h($order['Order']['size']); ?>&nbsp;</td>

            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id']),array('class'=>'glyphicon glyphicon-eye-open')); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id']),array('class'=>'glyphicon glyphicon-pencil')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array('class'=>'glyphicon glyphicon-remove-circle'), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
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
 <a href="#"><i class="fa fa-files-o fa-fw"></i>Order Actions</a>
	<ul class="nav nav-first-level">
        <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
    </ul>
</li>
<?php $this->end(); ?>
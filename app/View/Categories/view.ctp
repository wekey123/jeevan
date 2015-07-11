<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category View</h1>
        </div>
 
        <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
               <?php  echo ucfirst($category['Category']['name'])." Details"; ?>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">
                    <div class="row">
                      <div class="col-md-12">
                        <table class="table table-bordered"  width="100%">
                        <tr><td style="color:#000;">Id</td><td><?php echo h($category['Category']['id']); ?></td></tr>
                        <tr><td style="color:#000;">Name</td><td><?php echo h($category['Category']['name']); ?></td></tr>
                        <tr><td style="color:#000;">Description</td><td><?php echo h($category['Category']['description']); ?></td></tr>
                        <tr><td style="color:#000;">Created</td><td><?php echo h($category['Category']['created']); ?></td></tr>
                        <tr><td style="color:#000;">Modified</td><td><?php echo h($category['Category']['modified']); ?></td></tr>
                        </table>
                       </div>
                    </div> 
                </div>
            </div>
            <!-- /.panel-body -->
         </div>        
        </div>   
    </div>
<!--    Related Orders-->
 <div class="row">
  <div class="col-lg-12">
	 <h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($category['Order'])): ?>
	<table class="table table-condensed" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['user_id']; ?></td>
			<td><?php echo $order['category_id']; ?></td>
			<td><?php echo $order['product_id']; ?></td>
			<td><?php echo $order['price']; ?></td>
			<td><?php echo $order['description']; ?></td>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id']),array('class'=>'glyphicon glyphicon-eye-open')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id']),array('class'=>'glyphicon glyphicon-pencil')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']),array('class'=>'glyphicon glyphicon-remove-circle'), __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
    </div>
  </div>
<!-- Related Products -->
   <div class="row">
  <div class="col-lg-12">
	  <h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($category['Product'])): ?>
	<table class="table table-condensed" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Model No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Our Price'); ?></th>
		<th><?php echo __('Retail Price'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['category_id']; ?></td>
			<td><?php echo $product['model_no']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['our_price']; ?></td>
			<td><?php echo $product['retail_price']; ?></td>
			<td><?php echo $product['image']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id']),array('class'=>'glyphicon glyphicon-eye-open')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id']),array('class'=>'glyphicon glyphicon-pencil')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']),array('class'=>'glyphicon glyphicon-remove-circle'), __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
    <?php endif; ?>

        <div class="actions">
            <ul>
                <li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
  </div>
<!-- Related Quantities -->
  <div class="row">
  <div class="col-lg-12">
	  <h3><?php echo __('Related Quantities'); ?></h3>
	<?php if (!empty($category['Quantity'])): ?>
	<table class="table table-condensed" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Quantity'] as $quantity): ?>
		<tr>
			<td><?php echo $quantity['id']; ?></td>
			<td><?php echo $quantity['category_id']; ?></td>
			<td><?php echo $quantity['product_id']; ?></td>
			<td><?php echo $quantity['size']; ?></td>
			<td><?php echo $quantity['quantity']; ?></td>
			<td><?php echo $quantity['created']; ?></td>
			<td><?php echo $quantity['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'quantities', 'action' => 'view', $quantity['id']),array('class'=>'glyphicon glyphicon-eye-open')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quantities', 'action' => 'edit', $quantity['id']),array('class'=>'glyphicon glyphicon-pencil')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quantities', 'action' => 'delete', $quantity['id']),array('class'=>'glyphicon glyphicon-remove-circle'), __('Are you sure you want to delete # %s?', $quantity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

        <div class="actions">
            <ul>
                <li><?php echo $this->Html->link(__('New Quantity'), array('controller' => 'quantities', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
  </div>
</div>



<?php $this->start('sidebar'); ?>

<li>
 <a href="#"><i class="fa fa-files-o fa-fw"></i>Category Actions</a>
	<ul class="nav nav-second-level">
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quantities'), array('controller' => 'quantities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quantity'), array('controller' => 'quantities', 'action' => 'add')); ?> </li>
	</ul>
</li>
<?php $this->end(); ?>
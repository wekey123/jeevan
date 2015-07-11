<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product View</h1>
        </div>
 
        <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
               <?php  echo ucfirst($product['Product']['name'])." Details"; ?>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">
                    <div class="row">
                      <div class="col-md-12">
                        <table class="table table-bordered"  width="100%">
                        <tr><td style="color:#000;">Id</td><td><?php echo h($product['Product']['id']); ?></td></tr>
                        <tr><td style="color:#000;">Category</td><td><?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?></td></tr>
                        <tr><td style="color:#000;">Model No</td><td><?php echo h($product['Product']['model_no']); ?></td></tr>
                        <tr><td style="color:#000;">Name</td><td><?php echo h($product['Product']['name']); ?></td></tr>
                        <tr><td style="color:#000;">Description</td><td><?php echo h($product['Product']['description']); ?></td></tr>
                        <tr><td style="color:#000;">Color</td><td><?php echo h($product['Product']['color']); ?></td></tr>
                        <?php
						foreach($product['Quantity'] as $quantity1){
						  if($product['Product']['id'] == $quantity1['product_id']){
							$product1['Quantity']['size'][$quantity1['size']] =  $quantity1['quantity'];
						  }
						}
						?>
                        <?php foreach($product1['Quantity']['size'] as $size=>$qty){ ?> 
                        <tr><td style="color:#000;" colspan="2" rowspan="1"><span style="color:blue;"> Size <?php echo $size;?> - </span> <?php echo $qty;?></td> </tr>
                        <?php $total_products[] = $qty; } ?>
                       
                        <tr><td style="color:#000;">Product Count</td><td><?php echo array_sum($total_products); ?></td></tr>
                        <tr><td style="color:#000;">Own Price</td><td>Rs.<?php echo h($product['Product']['our_price']); ?></td></tr>
                        <tr><td style="color:#000;">Retail Price</td><td>Rs.<?php echo h($product['Product']['retail_price']); ?></td></tr>
                        <tr><td style="color:#000;">Product Stock Left Price</td><td>Rs.<?php echo $product['Product']['our_price']*array_sum($total_products); ?></td></tr>
                        <tr><td style="color:#000;">Created</td><td><?php echo h($product['Product']['created']); ?></td></tr>
                        <tr><td style="color:#000;">Modified</td><td><?php echo h($product['Product']['modified']); ?></td></tr>
                        </table>
                       </div>
                    </div> 
                </div>
            </div>
            <!-- /.panel-body -->
         </div>        
        </div>   
    </div>

<!-- Related Quantity -->
<div class="row">
  <div class="col-lg-12">
  	<?php if (!empty($product['Quantity'])): ?>
    <?php 
	$sizeheader  = '';
	$quantitydata = '';
	foreach ($product['Quantity'] as $quantity): 
			$sizeheader .= '<th>'.$quantity['size'].'</th>';
			//echo $quantity['size'];
			$quantitycount[] =  $quantity['quantity'];
			$quantitydata .= '<td>'.$quantity['quantity'].'</td>';
	 endforeach; 
	 ?>
     
    <h3><?php echo __('Related Quantities:'); ?> <span style="float:right;">Items Left: <?php echo count($quantitycount); ?></span></h3>

	<table class="table table-condensed" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<?php echo $sizeheader; ?>
		</tr>
        <tr>
       		<?php echo $quantitydata; ?>
        </tr>
	</table>
<?php endif; ?>

  </div>
        
</div>


<!--    Related Orders-->
 <div class="row">
  <div class="col-lg-12">
         <h3><?php echo __('Related Orders'); ?></h3>
        <?php if (!empty($product['Order'])): ?>
        
        <table class="table table-condensed" cellpadding="0" cellspacing="0" width="100%">
        <thead>
        <tr>
                <th><?php echo __('sold_price'); ?></th>
                <th><?php echo __('size'); ?></th>
                <th><?php echo __('quantity'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($product['Order'] as $order): ?>
        <tr>

                <td><?php echo $order['sold_price']; ?></td>
                <td><?php echo $order['size']; ?></td>
                <td><?php echo $order['quantity']; ?></td>

            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('action' => 'view', $order['id']),array('class'=>'glyphicon glyphicon-eye-open')); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['id']),array('class'=>'glyphicon glyphicon-pencil')); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['id']), array('class'=>'glyphicon glyphicon-remove-circle'), __('Are you sure you want to delete # %s?', $order['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
        </tbody>
        </table>
    <?php endif; ?>
       <div class="actions">
            <ul>
                <li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
            </ul>
  	   </div>
    </div>
  </div>
  
</div>
<?php $this->start('sidebar'); ?>

<li>
 <a href="#"><i class="fa fa-files-o fa-fw"></i>Product Actions</a>
	<ul class="nav nav-second-level">
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quantities'), array('controller' => 'quantities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quantity'), array('controller' => 'quantities', 'action' => 'add')); ?> </li>
	</ul>
</li>
<?php $this->end(); ?>
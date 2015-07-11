<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Order</h1>
        </div>
 
        <div class="col-lg-12">
         <?php echo $this->Form->create('Order',array('class'=>'form-horizontal','role'=>'form')); ?>
         

          
          <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('category_id',array('class'=>'form-control','empty'=>'Select Category','onChange'=>'OrderCategory(this.value)')); ?>
            </div>
          </div>
         
          <div class="form-group" id="ajaxProductsList">
          </div>
          
          <div class="form-group" id="ajaxProductdetails">
          </div>
          
          <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('sold_price',array('class'=>'form-control','placeholder'=>'Price')); ?>
            </div>
          </div>
     
          <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('description',array('class'=>'form-control','placeholder'=>'Description')); ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <?php  
			  $colors = array('6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12');
			  echo $this->Form->input('size', array('options' =>$colors,'class'=>'form-control','empty' => 'Select Size'));
			  ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <?php  
			  $qty = array('1'=>'one','2'=>'Two');
			  echo $this->Form->input('quantity', array('options' =>$qty,'class'=>'form-control','empty' => 'Select Quantity'));
			  ?>
            </div>
          </div>

         
         <?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
         <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
<?php $this->start('sidebar'); ?>

<li>
 <a href="#"><i class="fa fa-files-o fa-fw"></i>Product Actions</a>
	<ul class="nav nav-second-level">
        <li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</li>
<?php $this->end(); ?>
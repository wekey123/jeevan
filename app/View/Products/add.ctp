<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Product</h1>
        </div>
 
        <div class="col-lg-12">
         <?php echo $this->Form->create('Product',array('class'=>'form-horizontal','role'=>'form')); ?>
         
         <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('category_id',array('class'=>'form-control')); ?>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('model_no',array('class'=>'form-control','placeholder'=>'Model name')); ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('name',array('class'=>'form-control','placeholder'=>'Name')); ?>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('description',array('class'=>'form-control','placeholder'=>'Description')); ?>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-2">
              <?php  echo $this->Form->input('Quantity.size.6',array('class'=>'form-control','placeholder'=>'Quantity','label'=>'Size 6','value'=>0)); ?>
            </div>
            <div class="col-sm-2">
              <?php  echo $this->Form->input('Quantity.size.7',array('class'=>'form-control','placeholder'=>'Quantity','label'=>'Size 7','value'=>0)); ?>
            </div>
            <div class="col-sm-2">
              <?php  echo $this->Form->input('Quantity.size.8',array('class'=>'form-control','placeholder'=>'Quantity','label'=>'Size 8','value'=>0)); ?>
            </div>
            <div class="col-sm-2">
              <?php  echo $this->Form->input('Quantity.size.9',array('class'=>'form-control','placeholder'=>'Quantity','label'=>'Size 9','value'=>0)); ?>
            </div>
            <div class="col-sm-2">
              <?php  echo $this->Form->input('Quantity.size.10',array('class'=>'form-control','placeholder'=>'Quantity','label'=>'Size 10','value'=>0)); ?>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-5">
              <?php  echo $this->Form->input('Quantity.size.11',array('class'=>'form-control','placeholder'=>'Quantity','label'=>'Size 11','value'=>0)); ?>
            </div>
            <div class="col-sm-5">
              <?php  echo $this->Form->input('Quantity.size.12',array('class'=>'form-control','placeholder'=>'Quantity','label'=>'Size 12','value'=>0)); ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-10">
              <?php  
			  $colors = array('Black'=>'Black','Brown'=>'Brown','Green'=>'Green','Red'=>'Red','Blue'=>'Blue');
			  echo $this->Form->input('color', array('options' =>$colors,'class'=>'form-control','empty' => 'Select color'));
			  ?>
            </div>
          </div>
               
          <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('our_price',array('class'=>'form-control','placeholder'=>'Our Price')); ?>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-10">
              <?php  echo $this->Form->input('retail_price',array('class'=>'form-control','placeholder'=>'MRP')); ?>
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
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quantities'), array('controller' => 'quantities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quantity'), array('controller' => 'quantities', 'action' => 'add')); ?> </li>
	</ul>
</li>
<?php $this->end(); ?>
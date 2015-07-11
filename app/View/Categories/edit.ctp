<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Category</h1>
        </div>
 
        <div class="col-lg-12">
			   <?php 
               echo $this->Form->create('Category',array('class'=>'form-horizontal','role'=>'form')); 
               echo $this->Form->input('id');
               ?>

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
               
         
         <?php echo $this->Form->submit('Submit',array('class'=>'btn btn-primary')); ?>
         <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
<?php $this->start('sidebar'); ?>

<li>
 <a href="#"><i class="fa fa-files-o fa-fw"></i>Category Actions</a>
	<ul class="nav nav-second-level">
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Category.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quantities'), array('controller' => 'quantities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quantity'), array('controller' => 'quantities', 'action' => 'add')); ?> </li>
	</ul>
</li>
<?php $this->end(); ?>
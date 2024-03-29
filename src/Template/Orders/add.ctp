<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
       <?php echo __('Order') ?>
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($order, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('ballot_number', ['value'=>$bn, 'readonly'=>'readonly']);
                echo $this->Form->control('user_id', ['options' => $users]);
                //echo $this->Form->control('amount');
                echo $this->Form->control('reload', ['value'=>$re, 'readonly'=>'readonly']);
                echo $this->Form->control('date', ['disabled'=>'disabled', 'value'=>$dat]);
				//echo date('D M j G:i:s T Y');
                //echo $this->Form->control('status_delivery');
                //echo $this->Form->control('status_payment');
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Next')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

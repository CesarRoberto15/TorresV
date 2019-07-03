<ul class="sidebar-menu" data-widget="tree">
  <li class="header"><?= __('MAIN NAVIGATION') ?></li>
  <!--<li>
	<a href="<?php echo $this->Url->build(['controller'=>'users', 'action'=>'login', '_full'=>true]); ?>">
	<i class="fa fa-bug"></i> <span><?= __('Login')?></span></a>
  </li>-->
  <li>
  <a href="<?php echo $this->Url->build(['controller'=>'products', 'action'=>'index', '_full'=>true]); ?>">
  <i class="fa fa-bug"></i> <span><?= __('Products')?></span></a>
</li>
 <li>
  <a href="<?php echo $this->Url->build(['controller'=>'zones', 'action'=>'index', '_full'=>true]); ?>">
  <i class="fa fa-bug"></i> <span><?= __('Zones')?></span></a>
</li>
 <li>
  <a href="<?php echo $this->Url->build(['controller'=>'orders', 'action'=>'index', '_full'=>true]); ?>">
  <i class="fa fa-bug"></i> <span><?= __('Orders')?></span></a>
</li>
 <li>
  <a href="<?php echo $this->Url->build(['controller'=>'cars', 'action'=>'index', '_full'=>true]); ?>">
  <i class="fa fa-bug"></i> <span><?= __('Cars')?></span></a>
</li>
<li>
  <a href="<?php echo $this->Url->build(['controller'=>'users', 'action'=>'index', '_full'=>true]); ?>">
  <i class="fa fa-bug"></i> <span><?= __('Users')?></span></a>
</li>
  <!--<li>
  <a href="<?php echo $this->Url->build('/pages/debug'); ?>">
  <i class="fa fa-bug"></i> <span>Debug</span></a></li>-->
</ul>

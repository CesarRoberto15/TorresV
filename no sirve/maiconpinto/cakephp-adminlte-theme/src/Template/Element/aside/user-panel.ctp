<div class="user-panel">
    <div class="pull-left image">
        <?php 
			if(!is_null($this->request->getSession()->read('Auth.User'))){
			$a=$this->getRequest()->getSession()->read('Auth.User.id');
			echo $this->Html->image($a,['class' => 'img-circle', "width"=>"20px","alt"=>"User Image", "onerror"=>"this.src='webroot/img/login-null.svg';"]);
			}else{
			echo $this->Html->image("login-null.svg",['class'=>'user-image', "width"=>"20px","alt"=>"User Image"]);
			}
			?>
    </div>
    <div class="pull-left info">
        <p>
<?php
if(!is_null($this->request->getSession()->read('Auth.User'))){
$a=$this->getRequest()->getSession()->read('Auth.User.name');
echo __($a);
}else{
echo __('Login'); 
}
 ?>
</p>
        <a href="#"><i class="fa fa-circle text-success"></i> <?= __('Online') ?></a>
    </div>
</div>

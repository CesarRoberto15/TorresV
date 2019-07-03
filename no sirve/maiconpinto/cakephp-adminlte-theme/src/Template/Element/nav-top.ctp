<?php use Cake\Core\Configure; ?>
<nav class="navbar navbar-static-top">

  <?php if (isset($layout) && $layout == 'top'): ?>
  <div class="container">

    <div class="navbar-header">
      <a href="<?php echo $this->Url->build('/'); ?>" class="navbar-brand"><?php echo Configure::read('Theme.logo.large') ?></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
        </div>
      </form>
    </div>
    <!-- /.navbar-collapse -->
  <?php else: ?>

    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

  <?php endif; ?>



  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
	<?=
 $this->Html->image("peru.png",["width"=>"20px","alt"=>"Español",'url'=>['controller'=>'App','action'=>'change-language','es_PE']]);	?>
      </li>
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
       <?=
 $this->Html->image("estados-unidos-de-america.png",["width"=>"20px","alt"=>"English",'url'=>['controller'=>'App','action'=>'change-language','en_US']]); ?>
      </li>
      <!-- Tasks: style can be found in dropdown.less -->
      <li class="dropdown tasks-menu">
       <?=
 $this->Html->image("brasil.png",["width"=>"20px","alt"=>"Portugues",'url'=>['controller'=>'App','action'=>'change-language','pt_BR']]); ?>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
	 <?php if(!is_null($this->request->getSession()->read('Auth.User'))): ?>
			
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php 
			$a=$this->getRequest()->getSession()->read('Auth.User.id');
			echo $this->Html->image($a,['class' => 'img-circle', "width"=>"20px","alt"=>"User Image", "onerror"=>"this.src='webroot/img/login-null.svg';"]);
			?>
          <span class="hidden-xs"><?php
if(!is_null($this->request->getSession()->read('Auth.User'))){
$a=$this->getRequest()->getSession()->read('Auth.User.name');
echo __($a);
}else{
echo __('Login'); 
}
 ?>
 </span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <?php $a=$this->getRequest()->getSession()->read('Auth.User.id');
			echo $this->Html->image($a,['class' => 'img-circle', "width"=>"20px","alt"=>"User Image", "onerror"=>"this.src='webroot/img/login-null.svg';"]); ?>

            <p>
              <?php
if(!is_null($this->request->getSession()->read('Auth.User'))){
	$b=$this->getRequest()->getSession()->read('Auth.User.role_id');
	if($b===1){
		echo __('Boss');
	}
	if($b==2){
		echo __('Delivery man');
	}
}else{
echo __(':::'); 
}
 ?>
              <small><?php 
			  if(!is_null($this->request->getSession()->read('Auth.User'))){
				  $c=$this->getRequest()->getSession()->read('Auth.User.created');
				  $d=$c->year;
				  echo __('Member since '.$d);
			  }else{
				  echo __('');
			  }
			   ?></small>
            </p>
          </li>
          <!-- Menu Body 
		  
          <li class="user-body">
            <div class="row">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
			
             /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
				<?php 
				if(!is_null($this->request->getSession()->read('Auth.User'))){
				  $e=$this->getRequest()->getSession()->read('Auth.User.id');
				  echo $this->Html->link(__('Profile'), ['controller'=>'Users', 'action' => 'view', $e], ['class'=>'btn btn-default btn-flat']);
				}else{
					echo __('uijkl');
				}
				?>
            </div>
            <div class="pull-right">
              <?php 
				  echo $this->Html->link(__('Sign out'), ['controller'=>'Users', 'action' => 'logout'], ['class'=>'btn btn-default btn-flat']);
				?>
            </div>
          </li>
        </ul>
      </li>
	  <?php endif; ?>
	    <?php if(is_null($this->request->getSession()->read('Auth.User'))): ?>
                    <li class="dropdown user user-menu">
					<a href="<?php echo  $this->Url->build(['controller'=>'Users', 'action'=>'login'])?>">
				<?= $this->Html->image("login-null.svg",['class'=>'user-image', "width"=>"20px","alt"=>"User Image"]); ?>
					<?= __('Login')?></a>
		</li>
      <?php endif; ?>
      <!-- Control Sidebar Toggle Button -->
    </ul>
  </div>

  <?php if (isset($layout) && $layout == 'top'): ?>
  </div>
  <?php endif; ?>
</nav>

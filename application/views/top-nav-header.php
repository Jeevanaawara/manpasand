<header class="main-header">
  <!-- Logo -->
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="<?php echo base_url();?>" class="logo">
      <span class="logo-lg"><b>Manpasand</b></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <?php if(!$user) { ?>
        <li>
          <a href="<?php echo base_url().'index.php/sign/in'?>">Sign In/Sign Up</a>
        </li>
        <?php } else { ?>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class=""><?php echo $user->username?></span> <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              
              <p>
                <?php echo $user->username?>
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <?php if($user && $user->role=='USER') {?>
            <li class="user-body">
              <div class="col-xs-6 text-center">
                <a href="#"><i class="fa fa-shopping"></i>Cart</a>
              </div>
              <div class="col-xs-6 text-center">
                <a href="#">Wishlist</a>
              </div>
            </li>
            <?php } ?>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url()?>index.php/sign/out/" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <?php }?>
      </ul>
    </div>
  </nav>
</header>
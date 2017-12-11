<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <?php if($user && $user->role=='ADMIN'){?>
      <li>
        <a href="#">
          <span>Create Category</span>
        </a>
      </li>
      <?php }?>
      <li class="header">CATEGORIES</li>
      <?php foreach ($this->categoryModel->getAll() as $c) { ?>
      <li class="<?php if($c->title==$category) echo 'active'?>">
        <a href='<?php echo base_url("index.php/home/category/$c->title")?>'>
          <span><?php echo $c->title?></span>
        </a>
      </li>
      <?php }?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
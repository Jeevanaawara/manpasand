<!DOCTYPE html>
<html>
  <head>
    <?php $this->view('head-common-files');?>    
  </head>
  <body class="hold-transition layout-top-nav fixed skin-yellow">
    <div class="wrapper">
      <?php $this->view('top-nav-header');?>
      <!-- Left side column. contains the logo and sidebar -->
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Home
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php foreach ($categories as $category) {?>
          <a href='<?php echo base_url("index.php/home/category/$category->title") ?>'>
            <?php echo $category->title?>
          </a>
          <?php }?>
        </section>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2017<a href="<?php echo base_url();?>">Manpasand</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
    <?php $this->view('common-scripts');?>
    
  </body>
</html>

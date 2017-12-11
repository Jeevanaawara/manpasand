<!DOCTYPE html>
<html>
  <head>
    <?php $this->view('head-common-files');?>    
  </head>
  <body class="hold-transition fixed skin-yellow">
    <div class="wrapper">
      <?php $this->view('header');?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php $this->view('aside');?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $category?>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          
        </section>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2017<a href="<?php echo base_url();?>">Manpasand</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
    <?php $this->view('common-scripts');?>
    
  </body>
</html>

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
          <?php if($user && $user->role=='ADMIN') { ?>
          <div class="row m-y">
            <div class="col-md-12">
              <button class="btn btn-primary pull-right">Add Category</button>
            </div>
          </div>
          <?php } ?>
          <div class="row">
            <?php foreach ($categories as $category) {?>
            <div class="col-md-3">
              <div class="box box-widget widget-product">
                <div class="widget-product-header bg-black" style="background: url('') center center;">
                </div>
                <div class="box-footer no-top-p">
                  <div class="row">
                    <div class="col-md-12">
                      <h4>
                        <a href='<?php echo base_url("index.php/home/category/$category->id") ?>'>
                          <?php echo $category->title?>
                        </a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>          
          </div>

        </section>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2017<a href="<?php echo base_url();?>">Manpasand</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
    <?php $this->view('common-scripts');?>
  </body>
</html>

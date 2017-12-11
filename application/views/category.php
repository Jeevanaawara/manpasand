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
        <?php if($category) {?>
        <section class="content-header">
          <h1>
            <?php echo $category->title?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li class="active"><?php echo $category->title?></li>
          </ol>
        </section>
        <?php }?>
        <!-- Main content -->
        <section class="content">
          <?php if($user && $user->role=='ADMIN') { ?>
          <div class="row m-y">
            <div class="col-md-12">
              <button class="btn btn-primary pull-right">Add Item</button>
            </div>
          </div>
          <?php } ?>

          <div class="row">
            <?php if(sizeof($category->items) == 0){?>
              <div class="col-md-12">
                <p>There is no item available here</p>
              </div>
            <?php }?>
          </div>
          <div class="row">
            <?php foreach ($category->items as $item) {?>
            <div class="col-sm-6 col-md-3">
              <div class="box box-widget widget-product">
                <div class="widget-product-header bg-black" style="background: url('') center center;">
                </div>
                <div class="box-footer no-top-p">
                  <div class="row">
                    <div class="col-md-12">
                      <h4>
                        <a href='<?php echo base_url("index.php/home/category/$item->id") ?>'>
                          <?php echo $item->title?>
                        </a>
                      </h4>
                      <p>PKRs: <?php echo $item->price?></p>
                      <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <button class="btn btn-danger btn-md">Add to Wishlist</button>
                    </div>
                    <div class="col-xs-6">
                      <button class="btn btn-primary btn-md pull-right">Add to Cart</button>
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

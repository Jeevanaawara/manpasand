<!DOCTYPE html>
<html>
  <head>
    <?php $this->view('head-common-files');?>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url()?>"><b>Manpasand</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php if($invalid_auth) {?><p class="text-danger">Invalid Username or Password</p><?php }?>
        <?php echo form_open('sign/in'); ?>
          <div class="form-group has-feedback">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Email" id="username" name="username" value="<?php echo set_value('username');?>" required autofocus>
            <span class="text-danger"><?php echo form_error('username')?></span>
          </div>
          <div class="form-group has-feedback">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?php echo set_value('password');?>" required>
            <span class="text-danger"><?php echo form_error('password')?></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="<?php echo base_url().'index.php/sign/up'?>" class="btn btn-success btn-block btn-flat">Create a new account? Sign Up</a>
        </div><!-- /.social-auth-links -->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
    
  </body>
</html>

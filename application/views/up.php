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
        <p class="login-box-msg">Sign up and start your session</p>
        <?php if($invalid_auth) {?><p class="text-danger">Email or username already used by another account. try another email or username</p><?php }?>
        <?php echo form_open('sign/up'); ?>
          <div class="form-group has-feedback">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Email" id="username" name="username"  value="<?php echo set_value('username');?>" required autofocus>
            <span class="text-danger"><?php echo form_error('username')?></span>
          </div>
          <div class="form-group has-feedback">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?php echo set_value('password');?>" required>
            <span class="text-danger"><?php echo form_error('password')?></span>
          </div>
          <div class="form-group has-feedback">
            <label for="confirmPassword">Confrim Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword" name="confirmPassword" value="<?php echo set_value('confirmPassword');?>" required>
            <span class="text-danger"><?php echo form_error('confirmPassword')?></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-success btn-block btn-flat">Sign Up</button>
            </div><!-- /.col -->
          </div>
        </form>
        
        
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="<?php echo base_url().'index.php/sign/in'?>" class="btn btn-primary btn-block btn-flat">Already have an account? Sign In</a>
        </div><!-- /.social-auth-links -->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
    
  </body>
</html>

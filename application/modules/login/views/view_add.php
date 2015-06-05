
    <form action="<?php echo base_url() ?>index.php/login/register" method="post">
        <div id="content">
       
        <div class="reg_form">
        <a href="<?php echo base_url() ?>index.php/login/login1">Đăng nhập</a>
        <div class="form_title">Đăng Ký</div>
         
          <p>
          <label for="user_name">Tài khoản:</label>
          <input type="text" name="username" value="<?php echo set_value('username');?>" /> <?php echo form_error('username');?>
          </p>
          <p>
          <label for="email_address">Email:</label>
          <input type="text" name="email" value="<?php echo set_value('email');?>" /><?php echo form_error('email');?>
          </p>
          <p>
          <label for="password">Mật khẩu:</label>
          <input type="password" name="password" value="<?php echo set_value('password');?>" /><?php echo form_error('password');?>
          </p>
          <p>
          <label for="con_password">Nhập lại mật khẩu:</label>
          <input type="password" name="password2" value="<?php echo set_value('password2');?>" /><?php echo form_error('password2');?>
          </p>
          <p>
          <input type="submit" class="greenButton" value="Đăng ký" />         
          </p>
   
        </div><!--<div class="reg_form">-->
        </div><!--<div id="content">-->
    </form>


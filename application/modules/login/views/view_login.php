

<form method="post">


	<div id="content">
       
        <div class="reg_form">
        <a href="<?php echo base_url() ?>index.php/login/register">Đăng ký</a>
        <div class="form_title">Đăng Nhập</div>
         
          <p id="error">
          	<?php echo $error; ?>
          </p>	
          <p>
          <label for="user_name">Tài khoản:</label>
          <input type="text" name="user" value="<?php echo set_value('user'); ?>" /> <span><?php echo form_error('user', '<span>','</span>'); ?></span>
          </p>
          <p>
          <label for="password">Mật khẩu:</label>
          <input  class="left_1" type="password" name="pass" /> <?php echo form_error('pass', '<span>','</span>'); ?>
          </p>
          <p>
          <label for="remember">Ghi nhớ:</label><input checked="checked" type="checkbox" name="check" />	
          </p>
          <p>
          <input type="submit" name="submit1" class="greenButton" value="Đăng nhập" /> <input type="reset" name="reset" class="greenButton" value="Làm mới" />
          </p>
   
        </div><!--<div class="reg_form">-->
        </div><!--<div id="content">-->
</form>


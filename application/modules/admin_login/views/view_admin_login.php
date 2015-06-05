<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/quantri/login1.css" />
</head>
<body>

<form method="post">
<div id="login">
	<h2>Đăng nhập hệ thống quản trị</h2>
    <ul id="login-form">
        <li ><?php echo $error; ?></li>
    	<li class="inp"><label>Tài khoản</label><input class="left_1" type="text" name="user" value="<?php echo set_value('user'); ?>" /> <span><?php echo form_error('user', '<span>','</span>'); ?></span></li>
        <li class="inp"><label>Mật khẩu</label><input  class="left_1" type="password" name="pass" /> <?php echo form_error('pass', '<span>','</span>'); ?></li>
        <li><label>Ghi nhớ</label><input checked="checked" type="checkbox" name="check" /></li>
        <li><input type="submit" name="submit" value="Đăng nhập" /> <input type="reset" name="reset" value="Làm mới" /></li>
    </ul>
</div>
</form>

</body>
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Control Panel</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/quantri/admin1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/quantri/posts.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/quantri/add-post.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/quantri/edit-post.css" />
</head>
<body>

<div id="main-wrap">
<div id="top-box">

<div id="logined">
<p>Xin chào <span><?php echo $this->session->userdata('user_sess'); ?></span> đăng nhập thành công vào hệ thống Backend</p>
<p><a href="<?php echo base_url() ?>admin_login/logout">Đăng xuất</a></p>
</div>
</div>
<!-- Wrap -->
<div id="wrap">
    <!-- Head -->
    <div id="head">
    <!-- Navbar -->
    <div id="navbar">
    <ul>
    <li><a href="<?php echo base_url(); ?>admin_login">Trang chủ</a></li>
    <li><a href="<?php echo base_url(); ?>admin_news">Quản lý thành viên</a></li>
    <li><a href="#">Quản lý danh mục</a></li>
    <li><a href="">Quản lý bài viết</a></li>
    <li><a href="#">Cấu hình</a></li>
    <li><a href="#">Trợ giúp</a></li>
    <li><a href="#">Xem website</a></li>
    </ul>
    </div>
    <!-- End Navbar -->
    </div>
    <!-- End Head -->

    <!-- Body -->
    <div id="body">
    <!-- Main -->
    <div id="main">
        <?php $this->load->view($content); ?>
    </div>
    <!-- End Main -->
    </div>
    <!-- End Body -->
    </div>
    <!-- End Wrap -->

    <!-- Foot -->
    <div id="foot">
    <p>Khoa an toàn thông tin - Học viện Kỹ Thuật Mật Mã - Website: <a href="#">http://hvktmm.edu.vn</a> - Email: <span>hvktmm.edu.vn@gmail.com</span></p>
    </div>
    <!-- End Foot -->
    </div>

    </body>
    </html>

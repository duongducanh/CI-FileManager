<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>

        <meta charset="utf-8">

        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->

        <title>FileManager</title>
        <meta name="keywords" content="keywords" />
        <meta name="description" content="description" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico" />

        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />

        <link href="<?= base_url() ?>assets/css/admin.css" rel="stylesheet" type="text/css" />

        <script src="<?= base_url() ?>assets/js/libs/prefixfree.min.js"></script>
        <script src="<?= base_url() ?>assets/js/libs/modernizr-2.7.1.dev.js"></script>

        <!--[if lt IE 9]>
        <script src="<?= base_url() ?>assets/js/libs/html5shiv.js"></script>
        <script src="<?= base_url() ?>assets/js/libs/respond.js"></script>
        <![endif]-->

    </head>

    <body>
            <div id="logined">
                <p>Xin chào <span><?php echo $this->session->userdata('user_sess'); ?></span> đăng nhập thành công vào hệ thống website!</p>
                <p><a href="<?php echo base_url() ?>login/logout">Đăng xuất</a></p>
           </div>
        <header>
            <a href="<?= site_url('filemanager') ?>" class="btn <?= ($current_nav == 'local') ? 'btn-primary' : 'btn-info' ?> btn-sm">Local</a>
             <a href="<?= site_url('filemanager/list_trash') ?>" class="btn <?= ($current_nav == 'list_trash') ? 'btn-primary' : 'btn-info' ?> btn-sm">File_share</a>
        </header>
        <section id="main" class="clearfix">
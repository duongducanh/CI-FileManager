<?php $this->load->view('frontend/header'); ?>
<body>

<!-- Wrapper -->
<div id="wrapper">

	<!-- phan dau --------------------------------->
	<!-- Header -->
	<div id="header">
		
		
			<ul id="subnav">
            	<li><a href="<?php echo base_url() ?>index.php/login/register">Đăng ký</a></li>
                <li><a href="<?php echo base_url() ?>index.php/login/login1">Đăng nhập</a></li>
                <li><a href="#">Trợ giúp</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
           
             </br>
         <?php  
            if($this->session->userdata('user_sess') != ""){ 
        ?>
            <div id="user">
                <div >
                        <p>Xin chào, <label><?php echo $this->session->userdata('user_sess'); ?></label>  =>  <a href="<?php echo base_url();?>filemanager">Kho tài liệu</a></p>
                </div>
            </br>
                <div >
                        <span><a href="<?php echo base_url() ?>login/logout">Đăng xuất</a></span>
                </div>
            </div>
        <?php  
            }
        ?>    
		
	
	<!-- End Header -->	
	</div>
	
	<!-- phan body ----------------------------------->
	<!-- Body -->
	<div id="body">
        <!-- banner -->
        <div id="banner1">
                <img src="<?php echo base_url(); ?>assets/images/image/banner.png">
        </div>
        <!-- menu ngang -->
        <div id="nav">   
            <ul>
                <li><a href="http://localhost/filemanager/index.php/home"><span>Trang Chủ</span></a></li>
                <li><a rel="nofollow" href="#"><span>Tài Liệu</span></a></li>
                <li><input id="button" type="image" title="tìm kiếm" src="<?php echo base_url(); ?>assets/images/image/search.png"></li>
                <li> <input  type="text" style="width: 30%; padding: 0px; border: none; margin: 4px 12px; height: 73%; outline: none; background: url(http://www.google.com/cse/intl/vi/images/google_custom_search_watermark.gif) 0% 50% no-repeat rgb(255, 255, 255);" spellcheck="false" dir="ltr" title="tìm kiếm" name="search" size="10" autocomplete="off"></li>      
            </ul>
        </div>
		<!-- Left Column -->
		<div id="l-col">
			
            <div class="l-sidebar">
                <div class="box-header">
                    Danh Mục
                </div>
            	<ul id="main-menu">
                	<li><a href="#">Đồ Án Tốt Nghiệp</a></li>
                    <li><a href="#">Bài Tập Lớn</a></li>
                    <li><a href="#">Nghiên Cứu Khoa Học</a></li>
                    <li><a href="#">Mẫu Văn Bản</a></li>
                    <li><a href="#">Tài Liệu Tham Khảo</a></li>
                    <li><a href="#">Lập Trình</a></li>
                    <li><a href="#">An Toàn Thông Tin</a></li>
                    <li><a href="#">Phần Mềm</a></li>
                    <li><a href="#">Web</a></li>
                    <li><a href="#">Tin Tức Công Nghệ</a></li>
                    <li><a href="#">Chưa phân loại</a></li>
                </ul>
            </div>
            
            <div class="l-sidebar">
            	<div class="l-banner"><img src="<?php echo base_url(); ?>assets/images/image/qc.jpg" /></div>
            </div>
		<!-- end Left Column -->
		</div>
		
		<!-- Right Column -->
		<div id="r-col">
			
			<!-- main -->
			<div id="main">
            	<?php $this->load->view($content); ?>
            </div>
			
		<!-- End Right Column -->
		</div>			
	<!-- End Body -->
	</div>
	
	<!-- Footer -->
    <?php $this->load->view('frontend/footer'); ?>
	
<!-- End Wrapper -->	
</div>
</body>
</html>
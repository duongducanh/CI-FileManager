
	
            	<div class="prd-block">
                	<p><a href="">Tài liệu nổi bật</a></p>
                    <div class="pr-list">
                         <?php 
                          
                            foreach ($file_desc as $news) {
                               $i=1;
                        ?>
                    	<div class="prd-item">
                        	<div class="image"><a href="<?php echo base_url(); echo $news['path'];echo $news['file_name']; ?>"><img width="80" height="144" src="<?php echo base_url(); ?>assets/images/image/tailieu.jpg" /></a></div>
                            <div class="title"><a href="<?php echo base_url(); echo $news['path'];echo $news['file_name']; ?>"><?php echo $news['raw_name'];?></a></div>
                            <div class="detail">
                            	<span>Đăng bởi <?php echo $news['user_name'];?></span>
                            </div>
                            <?php  
                                if($this->session->userdata('user_sess') != ""){ 
                            ?>
                              <div>
                                   <a href="<?php echo base_url();?>home/download?path=<?php echo base_url(); echo $news['path'];echo $news['file_name']; ?>&name=<?php echo $news['file_name'];?>">Download</a>       
                              </div>
                             <?php  
                                }
                            ?>    
                        </div>                      
                       
                         <?php 
                           if($i%4 == 0){
                            echo ' <div class="clear"></div>';
                           }
                           $i++;
                           }
                           if($i<4){
                            echo ' <div class="clear"></div>';
                           }
                        ?>
                    </div>
                </div>
                
                <div class="prd-block">
                	<p><a href="">Tài liệu nổi bật</a></p>
                    <div class="pr-list">
                    	 <?php 
                          
                            foreach ($file_random as $news) {
                               $i=1;
                        ?>
                        <div class="prd-item">
                            <div class="image"><a href="<?php echo base_url(); echo $news['path'];echo $news['file_name']; ?>"><img width="80" height="144" src="<?php echo base_url(); ?>assets/images/image/tailieu.jpg" /></a></div>
                            <div class="title"><a href="<?php echo base_url(); echo $news['path'];echo $news['file_name']; ?>"><?php echo $news['raw_name'];?></a></div>
                            <div class="detail">
                                <span>Đăng bởi <?php echo $news['user_name'];?></span>
                            </div>
                            <?php  
                                if($this->session->userdata('user_sess') != ""){ 
                            ?>
                              <div>
                                   <a href="<?php echo base_url();?>home/download?path=<?php echo base_url(); echo $news['path'];echo $news['file_name']; ?>&name=<?php echo $news['file_name'];?>">Download</a>       
                              </div>
                           <?php  
                                }
                            ?>    
                        </div>                      
                       
                         <?php 
                           if($i%4 == 0){
                            echo ' <div class="clear"></div>';
                           }
                           $i++;
                           }
                           if($i<4){
                            echo ' <div class="clear"></div>';
                           }
                        ?>             
                        <div class="clear"></div>
                    </div>
                </div>
        
	
	
<h2>Quản lý thành viên <span id="add-post"><a href="<?php echo base_url();?>admin_news/add_user">Tạo tài khoản</a></span></h2>
                
<div id="posts">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    	<tr id="first-row">
        	<td width="5%">ID</td>
            <td width="10%">User ID</td>
            <td width="15%">Tên tài khoản</td>
            <td width="25%">Mật khẩu</td>
            <td width="20%">Email</td>
            <td width="15%">Quyền</td>
            <td width="5%">Edit</td>
            <td width="5%">Delete</td>
        </tr>
        <?php 
            $i = 1;
                foreach ($user as $news){    
        ?>
        <tr class="post-item">
        	<td><?php echo $i; ?></td>
            <td><?php echo $news['user_id'] ?></td>
            <td><a href="#"><?php echo $news['user_name'] ?></a></td>
            <td><?php echo $news['user_password'] ?></td>
            <td><?php echo $news['user_email'] ?></td>
            <td><?php echo $news['privilege'] ?></td>
            <td><a href="<?php echo base_url();?>admin_news/update_user/<?php echo $news['user_id']; ?>">Edit</a></td>
            <td><a href="<?php echo base_url();?>admin_news/delete_user/<?php echo $news['user_id']; ?>">Delete</a></td>
        </tr>
        <?php 
            $i++;
            }
        ?>
    </table>
</div>
<div id="pagination"><?php echo $pagination; ?></div>

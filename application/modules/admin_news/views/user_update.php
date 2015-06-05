<script type="text/javascript" src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
<h2>Bài mới</h2>
                
<div id="new-post">
    <form method="post" enctype="multipart/form-data">
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td id="post-title"><label>Tên tài khoản</label><br /><input type="text" name="user_name" value="<?php echo $user['user_name']; ?>" /> <span><?php echo form_error('user_name', '<span>','</span>'); ?></span></td>
        </tr>
        <tr>
            <td id="post-title"><label>Mật khẩu</label><br /><input type="text" name="user_password" value="<?php echo $user['user_password']; ?>" /> <span><?php echo form_error('user_password', '<span>','</span>'); ?></span></td>
        </tr>
        <tr>
            <td id="post-title"><label>Email</label><br /><input type="text" name="user_email" value="<?php echo $user['user_email']; ?>" /> <span><?php echo form_error('user_email', '<span>','</span>'); ?></span></td>
        </tr>
        <tr>
            <td><label>Quyền</label><br />
                <select name="privilege">
                    <option value="0">Lựa chọn quyền</option>
                    <?php foreach ($list_pri as $pri){
                       if($pri['privilege_id'] == $user['privilege_id']){                  
                    ?>
                       <option selected="selected" value="<?php echo $pri['privilege_id']; ?>"><?php echo $pri['privilege']; ?></option>
                    <?php 
                       }else{
                    ?>
                    <option value="<?php echo $pri['privilege_id']; ?>"><?php echo $pri['privilege']; ?></option>
                    <?php 
                           }
                       } 
                     ?>
                </select> <?php echo form_error('privilege', '<span>','</span>'); ?>
            </td>
        </tr>
        
        <tr>
            <td><input type="submit" name="submit" value="Sửa tài khoản" /> <input type="reset" name="reset" value="Làm mới" /></td>
        </tr>
    </table>
    </form>
</div>





              
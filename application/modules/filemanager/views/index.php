<div class="col-fixed">
    <div class="tree" data-token-name="<?= $this->security->get_csrf_token_name(); ?>" data-token-value="<?= $this->security->get_csrf_hash(); ?>">
        <?= $tree ?>
    </div>
</div>
<div class="row-fluid">
    <div class="taskbar">
        <button id="create-folder" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#create-folder-modal">Create folder</button>
        <button id="rename-folder" class="btn btn-primary btn-sm hide" data-toggle="modal" data-target="#rename-folder-modal">Rename folder</button>
        <!-- <button id="trash" class="btn btn-default btn-sm hide" data-id="0">Trash</button> -->
        <button id="delete-folder" class="btn btn-danger btn-sm hide" data-id="0">Delete folder</button>

        <div class="modal fade folder-modal" id="create-folder-modal" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php echo form_open("filemanager/create_folder", "data-parsley-validate method='post' id='create-folder-form' class='folder-form'"); ?>
                    <input type="hidden" name="parent_id" value="0" />
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Create folder</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="folder_name" class="req">Folder name:</label>
                            <input type="text" name="folder_name" id="folder_name" class="form-control" required data-parsley-trigger="change">
                            <div class="message"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div class="modal fade folder-modal" id="rename-folder-modal" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php echo form_open("filemanager/rename_folder", "data-parsley-validate method='post' id='rename-folder-form' class='folder-form'"); ?>
                    <input type="hidden" name="folder_id" />
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Rename folder</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="folder_name" class="req">Folder name:</label>
                            <input type="text" name="folder_name" id="folder_name" class="form-control" required data-parsley-trigger="change">
                            <div class="message"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="file-toolbar hide">
            <?php echo form_open_multipart('filemanager/upload', "id='upload-file-form' class='form-inline'"); ?>
            <input type="hidden" name="folder_id" value="0" />
            <input type="file" name="userfile[]" id="userfile" multiple>
            <button class="btn btn-success btn-sm">Upload</button>
            <?php echo form_close(); ?>
            <br />
            <div class="wrap-progress"> 
            </div>
        </div>

        <div class="main-content" data-token-name="<?= $this->security->get_csrf_token_name(); ?>" data-token-value="<?= $this->security->get_csrf_hash(); ?>">
            <h4>Choose folder...</h4>
        </div>
    </div>
</div>
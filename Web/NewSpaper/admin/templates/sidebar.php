<div class="col-md-3 sidebar">
    <ul class="list-group">
        
        
        <a class="list-group-item" href="<?php echo $_DOMAIN; ?>posts">
            <span class="glyphicon glyphicon-edit"></span> Bài viết
        </a>  
        <a class="list-group-item" href="<?php echo $_DOMAIN; ?>photos">
            <span class="glyphicon glyphicon-picture"></span> Hình ảnh
        </a>
        <?php
        $data_user['position'] = 1;
        // Phân quyền sidebar
        // Nếu tài khoản là admin
        if ($data_user['position'] == '1')
        {
            echo
            '
                <a class="list-group-item" href="' . $_DOMAIN . 'categories">
                    <span class="glyphicon glyphicon-tag"></span> Chuyên mục
                </a>
                <a class="list-group-item" href="' . $_DOMAIN . 'setting">
                    <span class="glyphicon glyphicon-cog"></span> Cài đặt chung
                </a>  
            ';
        }
 
        ?>
        
    </ul><!-- ul.list-group -->
</div><!-- div.sidebar -->
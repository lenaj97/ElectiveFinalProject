    
    </body>
    <script type="text/javascript" src="<?php echo resource_url("vendors/jQuery/jquery-3.1.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo resource_url("vendors/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo resource_url("vendors/notify/notify.min.js"); ?>"></script>
    <?php 
        if(isset($scripts)){
            foreach ($scripts as $link) {
                echo '
                    <script type="text/javascript" src="'.resource_url("js/$link").'"></script>
                ';
            }
        }
    ?>
</html>
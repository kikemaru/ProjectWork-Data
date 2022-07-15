<?php $this->title('404 page');?>
<h3>Page "<?php echo $this->page; ?>" not found</h3>
<div class="alert alert-danger" role="alert" style="max-width: 500px;">
    <?php
   echo $_SERVER['SERVER_NAME'];
    ?>/?page=<?php echo $this->page;?> (Проверьте путь)
</div>
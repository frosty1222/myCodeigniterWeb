<?= $this->extend("User_site/main_user") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="form_add_avatar">
   <div class="img">
       <img src="<?php echo ('public')?>/img/success.jpg" alt="" width="500px" height="300px">
   </div>
</div>
<?= $this->endSection() ?>
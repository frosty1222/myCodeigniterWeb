<?= $this->extend("User_site/main_user") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="form_add_avatar">
    <form action="<?= base_url('ava_save') ?>" method="POST" role="form" enctype="multipart/form-data">
        <legend>Add new avatar</legend>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" class="form-control" name="avatar" placeholder="choose file" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
<?= $this->endSection() ?>
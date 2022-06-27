<?= $this->extend("User_site/main_user") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="form_add_avatar">
    <?php foreach($user->getResult() as $row):?>
    <form action="<?= base_url('save_address') ?>" method="POST" role="form" enctype="multipart/form-data">
        <legend>Add new address</legend>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $row->name?>" placeholder="enter field" required>
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone"  placeholder="enter field" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="<?= $row->email?>" placeholder="enter field" required>
        </div>
        <div class="form-group">
            <label for="">City</label>
            <input type="text" class="form-control" name="city" placeholder="enter field" required>
        </div>
        <div class="form-group">
            <label for="">district</label>
            <input type="text" class="form-control" name="district" placeholder="enter field" required>
        </div>
        <div class="form-group">
            <label for="">village</label>
            <input type="text" class="form-control" name="village" placeholder="enter field" required>
        </div>
        <div class="form-group">
            <label for="">alley</label>
            <input type="text" class="form-control" name="alley" placeholder="enter field" required>
        </div>
        <div class="form-group">
            <label for="">Home number</label>
            <input type="text" class="form-control" name="home_number" placeholder="choose file" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>
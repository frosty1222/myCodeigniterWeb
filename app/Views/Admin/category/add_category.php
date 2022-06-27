<?= $this->extend("layouts/layout") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="content-wrapper">
    <?php
    if (session()->getFlashdata('status')) {
        echo "<h4>" . session()->getFlashdata('status') . "</h4>";
    }
    ?>
    <section class="content">
        <form action="<?= base_url('add_cate') ?>" method="post">
            <?= csrf_field() ?>
            <legend>Form Add new</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="<?= set_value('name') ?>" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" value="<?= set_value('status') ?>" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="prioty">prioty</label>
                <input type="text" class="form-control" name="prioty" <?= set_value('prioty') ?> placeholder="Input field">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>
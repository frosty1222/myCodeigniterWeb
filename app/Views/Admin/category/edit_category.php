<?= $this->extend("layouts/layout") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <?php foreach($page->getResult() as $key => $pa):?>
            <form action="<?= base_url('update_category/'.$pa->id)?>" method="POST" role="form">
                <legend>Form Edit</legend>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?=$pa->name?>">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" name="status" value="<?=$pa->status?>">
                </div>
                <div class="form-group">
                    <label for="prioty">prioty</label>
                    <input type="text" class="form-control" name="prioty" value="<?=$pa->prioty?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php endforeach; ?>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection()?>
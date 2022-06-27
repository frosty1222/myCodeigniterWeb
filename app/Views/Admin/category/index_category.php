<?= $this->extend("layouts/layout") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="container">
    <div class="row">
        <section>
            <?php
            if (session()->getFlashdata('status')) {
                echo "<h4>" . session()->getFlashdata('status') . "</h4>";
            }
            ?>

            <div class="col-md-3">
                <span class="btn btn-default"><a href="<?= base_url('add_category') ?>">Add product</a></span>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Prioty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 1 ?>
                        <?php foreach ($category as $val) : ?>
                            <tr>
                                <td><?= $n++ ?></td>
                                <td><?= $val['name'] ?></td>
                                <td><?= $val['status'] ?></td>
                                <td><?= $val['prioty'] ?></td>
                                <td>
                                    <form action="#">
                                        <span><a href="<?= base_url('delete_category') ?>/<?= $val['id'] ?>" onclick="return confirm('Are you sure?')"><span class="btn btn-danger"><i class="fa fa-trash"></i></span></a></span>
                                        <span><a href="<?= base_url('edit_category') ?>/<?= $val['id'] ?>" onclick="return confirm('Are you sure?')"><span class="btn btn-primary"><i class="fa fa-pen"></i></span></a></span>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <td><span class="btn btn-default"><?= $pager->links('category') ?></span></td>
                    </tbody>

                </table>
            </div>

        </section>
    </div>
</div>
</div>
<?= $this->endSection() ?>
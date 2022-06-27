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
                <span class="btn btn-default"><a href="<?= base_url('layout') ?>">return admin</a></span>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 1 ?>
                        <?php foreach ($user as $val) : ?>
                            <tr>
                                <td><?= $n++ ?></td>
                                <td><?= $val['id'] ?></td>
                                <td><?= $val['name'] ?></td>
                                <td><?= $val['email'] ?></td>
                                <td><?= $val['created_at'] ?></td>
                                <td>
                                    <span><a href="<?= base_url('delete_user') ?>/<?= $val['id'] ?>" onclick="return confirm('Are you sure?')"><span class="btn btn-danger"><i class="fa fa-trash"></i></span></a></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <td><span class="btn btn-default"><?= $pager->links('user') ?></span></td>
                    </tbody>

                </table>
            </div>

        </section>
    </div>
</div>
</div>
<?= $this->endSection() ?>
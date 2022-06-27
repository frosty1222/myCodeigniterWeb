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
                            <th>Customer_id</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>content</th>
                            <th>Address</th>
                            <th>Protocol</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 1 ?>
                        <?php foreach ($contact as $val) : ?>
                            <tr>
                                <td><?= $n++ ?></td>
                                <td><?= $val['fullname'] ?></td>
                                <td><?= $val['customer_id'] ?></td>
                                <td><?= $val['email'] ?></td>
                                <td><?= $val['phone'] ?></td>
                                <td><?= $val['content'] ?></td>
                                 <td><?=$val['address']?></td>
                                 <td><?=$val['protocol']?></td>
                                <td>
                                        <span><a href="<?= base_url('contact_delete') ?>/<?= $val['id'] ?>" onclick="return confirm('Are you sure?')"><span class="btn btn-danger"><i class="fa fa-trash"></i></span></a></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <td><span class="btn btn-default"><?= $pager->links('contact') ?></span></td>
                    </tbody>

                </table>
            </div>

        </section>
    </div>
</div>
</div>
<?= $this->endSection() ?>
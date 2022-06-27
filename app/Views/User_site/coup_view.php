<?= $this->extend("User_site/main_user") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="form_add_avatar">

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Expired day</th>
                <th>Coupon id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $n = 1 ?>
            <?php foreach ($vou->getResult() as $key => $vo) : ?>


                <tr>
                    <td><?= $n++ ?></td>
                    <td><?= $vo->name ?></td>
                    <td><?= $vo->type ?></td>
                    <td><?= $vo->number ?></td>
                    <?php if ($vo->expired_day == $today) : ?>
                        <td><span class="fa fa-danger">This couon is expired</span></td>
                    <?php else : ?>
                        <td><?= $vo->expired_day ?></td>
                    <?php endif ?>
                    <td><?= $vo->coupid ?></td>
                    <td>
                        <a href="<?= base_url('unsetcoupon') ?>/<?= $vo->coupid ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        <a href="<?= base_url('product') ?>" class="btn btn-danger">Use</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?= $this->endSection() ?>
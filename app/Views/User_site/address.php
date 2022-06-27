<?= $this->extend("User_site/main_user") ?>
<?= $this->section("title") ?>
<?= $title ?>
<?= $this->endSection(); ?>
<?= $this->section("content") ?>
<div class="form_add_avatar">
    <span><a href="<?= base_url('address') ?>">add new address</a></span>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>city</th>
                <th>Village</th>
                <th>Alley</th>
                <th>Home Number</th>
                <th>User Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $n = 1; ?>
            <?php foreach ($address->getResult() as $add) : ?>
                <tr>
                    <td><?php echo $n++ ?></td>
                    <td><?= $add->name ?></td>
                    <td><?= $add->email ?></td>
                    <td><?= $add->phone ?></td>
                    <td><?= $add->city ?></td>
                    <td><?= $add->village ?></td>
                    <td><?= $add->alley ?></td>
                    <td><?= $add->home_number ?></td>
                    <td><?= $add->user_id ?></td>
                    <td>
                        <a href="<?= base_url('delete_address/' . $add->id) ?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>
<?= $this->endSection() ?>
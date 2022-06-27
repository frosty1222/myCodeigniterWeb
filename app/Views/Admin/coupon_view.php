  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>
              <div class="col-md-10">
                  <span class="btn btn-default"><a href="<?= base_url('add_coupon') ?>">Add coupon</a></span>
                  <?php
                    if (session()->getFlashdata('status')) {
                        echo "<h4>" . session()->getFlashdata('status') . "</h4>";
                    }
                    ?>
              </div>
              <table class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Expired day</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $n = 1 ?>
                      <?php foreach ($coupon as $key=> $info) : ?>
                          <tr>
                              <td><?= $n++ ?></td>
                              <td><?= $info['name'] ?></td>
                              <td><?= $info['type'] ?></td>
                              <td><?= $info['amount'] ?></td>
                              <td><?= $info['expired_day'] ?></td>
                              <td>
                                  <form action="#">
                                      <span class="btn btn-danger"><a href="<?= base_url('delete_coupon') ?>/<?= $info['id'] ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a></span>
                                  </form>
                              </td>
                          </tr>
                      <?php endforeach ?>
                  </tbody>
              </table>
              <span class="btn btn-default"><?= $pager->links('coupon') ?></span>
          </section>
      </div>
  </div>
  </div>
  <?= $this->endSection() ?>
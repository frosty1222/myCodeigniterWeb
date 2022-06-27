  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>

              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Price</th>
                          <th>color</th>
                          <th>capaity</th>
                          <th>quantity</th>
                          <th>status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $n = 1; ?>
                      <?php foreach ($order_view as $result) : ?>
                          <tr>
                              <td><?= $n++ ?></td>
                              <td><?= $result['name'] ?></td>
                              <td>
                                  <?php if ($result['image'] == $checkid) : ?>
                                      <img src="<?php echo base_url('public/upload') ?>/<?= $imag ?>" alt="" width="50">
                                  <?php else : ?>
                                      <img src="<?php echo base_url('public/uploads') ?>/<?= $result['image'] ? $result['image'] : $imag ?>" alt="" width="50">
                                  <?php endif; ?>
                              </td>
                              <td><?= $result['price'] ?></td>
                              <td><i class="fa fa-tree" style="color:<?= $result['color'] ?>"></i></td>
                              <td><?= $result['capacity'] ?></td>
                              <td><?= $result['quantity'] ?></td>
                              <td><?= $result['status']?></td>
                              <td>
                                  <a href="<?= base_url('delete_cart/'.$result['id']) ?>"><i class="fa fa-trash"></i></a>
                              </td>
                          </tr>

                      <?php endforeach; ?>
                  </tbody>
              </table>
              <td><mark>Total after applied coupons:<?=$total_apdiscount?>$</mark></td>
              <br>
              <span class="btn btn-default"><?= $pager->links('order') ?></span>
          </section>
      </div>
  </div>
  </div>
  <?= $this->endSection() ?>
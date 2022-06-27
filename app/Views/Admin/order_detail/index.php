  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>
              <table class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Customer_id</th>
                          <th>Product_id</th>
                          <th>type_delivery</th>
                          <th>Total_price</th>
                          <th>Status </th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $n = 1; ?>
                      <?php foreach ($detail as $val) : ?>
                          <tr>
                              <td><?= $n++ ?></td>
                              <td><?= $val['customer_id'] ?></td>
                              <td><?= $val['cart_id'] ?></td>
                              <td><?= $val['type_delivery'] ?></td>
                              <td><?= $val['total_price'] ?>$</td>
                              <td>
                                  <form action="<?= base_url('update_status/' . $val['id']) ?>" method="post">
                                      <input type="text" value="<?= $val['status'] ?>" name="status" style="width:100px">
                                      <input type="submit" value="Update">
                                  </form>
                              </td>
                              <td>
                                  <a href=""><i class="fa fa-trash"></i></a>
                                  <a href=""><i class="fa fa-pen"></i></a>
                              </td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
              <span class="btn btn-default"></span>
          </section>
      </div>
  </div>
  </div>
  <?= $this->endSection() ?>
  <?= $this->extend("User_site/main_user") ?>
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
                          <th>Cart Id</th>
                          <th>Total Price</th>
                          <th>Type Delivery</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $n = 1; ?>
                      <?php foreach($orderdetail->getResult() as $val):?>
                      <tr>
                          <td><?= $n++?></td>
                          <td><?= $val->cart_id?></td>
                          <td><?= $val->total_price?></td>
                          <td><?= $val->type_delivery?></td>
                          <td><?= $val->status?></td>
                          <td>
                              <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
              <td><mark>Total after applied coupons:<?= $total_apdiscount ?>$</mark></td>
          </section>
      </div>
  </div>
  </div>
  <?= $this->endSection() ?>
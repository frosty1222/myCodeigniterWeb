  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>
              <div class="col-md-3">
                  <span class="btn btn-default"><a href="<?= base_url('add_product') ?>">Add product</a></span>
              </div>
              <table class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Sale_price</th>
                          <th>Image</th>
                          <th>Category_id</th>
                          <th>Description</th>
                          <th>Hastag Status </th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $n = 1 ?>
                      <?php foreach ($info as $info_item) : ?>
                          <tr>
                              <td><?= $n++ ?></t->
                              <td><?= $info_item['name'] ?></td>
                              <td><?= $info_item['price'] ?></td>
                              <td><?= $info_item['sale_price'] ?></td>

                              <td><img src="<?php echo base_url('public') ?>/uploads/<?= $info_item['image'] ?>" width="50" alt=""></td>
                              <td><?= $info_item['category_id'] ?></td>
                              <td><?= $info_item['description'] ?></td>
                              <td>
                                  <form action="<?= base_url('update_hastag/' . $info_item['id']) ?>" method="post">
                                      <input type="number" value="<?= $info_item['hastag'] ?>" name="hastag" style="width:50px;">
                                      <input type="submit" value="Update">
                                  </form>
                              </td>
                              <td>
                                  <form action="#">
                                      <span class="btn btn-danger"><a href="<?= base_url('delete_product') ?>/<?= $info_item['id'] ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a></span>
                                      <span class="btn btn-success"><a href="<?= base_url('edit_product') ?>/<?= $info_item['id'] ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-pen"></i></a></span>
                                      <span class="btn btn-success"><a href="<?= base_url('add_product') ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-plus"></i></a></span>
                                  </form>
                              </td>
                          </tr>
                      <?php endforeach ?>
                  </tbody>
              </table>
              <span class="btn btn-default"><?= $pager->links('category') ?></span>
          </section>
      </div>
  </div>
  </div>
  <?= $this->endSection() ?>
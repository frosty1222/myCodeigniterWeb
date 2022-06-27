  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>
              <div class="col-md-12">
                  <?php foreach ($datas->getResult() as $value) : ?>
                      <form action="<?= base_url('save_describe/' . $value->id) ?>" method="POST" role="form" enctype="multipart/form-data">
                          <legend>Form add describe</legend>

                          <div class="form-group">
                              <label for="productcode">productcode</label>
                              <input type="text" class="form-control" name="productcode" value="<?= $procodes ?>" placeholder="Input field">
                          </div>
                          <div class="form-group">
                              <label for="brand">brand</label>
                              <input type="text" class="form-control" name="brand" placeholder="Input field">
                          </div>
                          <div class="form-group">
                              <label for="origin">origin</label>
                              <input type="text" class="form-control" name="origin" placeholder="Input field">
                          </div>
                          <div class="form-group">
                              <label for="guarantee">origin</label>
                              <input type="text" class="form-control" name="guarantee" placeholder="Input field">
                          </div>
                          <div class="form-group">
                              <label for="product_id">product id</label>
                              <input type="text" class="form-control" name="product_id" value="<?php echo $value->id; ?>" placeholder="Input field">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  <?php endforeach; ?>
              </div>
          </section>
      </div>
  </div>
  </div>
  <?= $this->endSection() ?>
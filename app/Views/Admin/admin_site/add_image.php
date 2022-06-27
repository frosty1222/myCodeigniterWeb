  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>
              <div class="col-md-12">
                  <?php foreach ($datas->getResult() as $value):?>
                  <form action="<?= base_url('save_image/'.$value->id) ?>" method="POST" role="form" enctype="multipart/form-data">
                      <legend>Form add capacity</legend>

                      <div class="form-group">
                          <label for="images">capacity</label>
                          <input type="file" class="form-control" name="images[]" placeholder="Input field" multiple>
                      </div>
                      <div class="form-group">
                          <label for="product_id">product id</label>
                          <input type="text" class="form-control" name="product_id" value="<?php echo $value->id; ?>"placeholder="Input field">
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
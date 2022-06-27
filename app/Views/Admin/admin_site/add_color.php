  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>
              <div class="col-md-12">
                <?php foreach($fet->getResult() as $key => $val):?>
                  <form action="<?= base_url('save_color/'.$val->id) ?>" method="POST" role="form">
                      <legend>Form add capacity</legend>

                      <div class="form-group">
                          <label for="color">color</label>
                          <input type="color" class="form-control" name="color" placeholder="Input field">
                      </div>
                      <div class="form-group">
                          <label for="product_id">product id</label>
                          <input type="text" class="form-control" name="product_id" value="<?= $val->id?>" placeholder="Input field">
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
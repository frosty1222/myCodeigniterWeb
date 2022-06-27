  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>
              <div class="col-md-12">
                 <?php foreach($capacity->getResult() as $key=>$val):?>
                  <form action="<?= base_url('save_capacity/'.$val->id) ?>" method="POST" role="form">
                      <legend>Form add capacity</legend>

                      <div class="form-group">
                          <label for="capacity">capacity</label>
                          <select name="capacity[]" multiple="true" class="form-control">
                              <option value="1TGB">1TGB</option>
                              <option value="500GB">500GB</option>
                              <option value="250GB">250GB</option>
                              <option value="125GB">125GB</option>
                              <option value="60GB">60GB</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="product_id">product id</label>
                          <input type="text" class="form-control" name="product_id" value="<?php echo $val->id?>" placeholder="Input field">
                      </div>
                      <div class="form-group">
                          <label for="quantity">quantity</label>
                          <input type="text" class="form-control" name="quantity" placeholder="Input field">
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
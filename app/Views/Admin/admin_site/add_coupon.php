  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="container">
      <div class="row">
          <section>
              <div class="col-md-12">

                  <form action="<?= base_url('save_coupon') ?>" method="POST" role="form">
                      <legend>Form add coupon</legend>

                      <div class="form-group">
                          <label for="name">name</label>
                          <input type="text" class="form-control" name="name" placeholder="Input field">
                      </div>
                      <div class="form-group">
                          <label for="type">type</label>
                          <input type="text" class="form-control" name="type" placeholder="Input field">
                      </div>
                      <div class="form-group">
                          <label for="amount">amount</label>
                          <input type="number" class="form-control" name="amount" placeholder="Input field">
                      </div>
                      <div class="form-group">
                          <label for="expired_day">Expired Day</label>
                          <input type="date" class="form-control" name="expired_day" placeholder="Input field">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

              </div>
          </section>
      </div>
  </div>
  </div>
  <?= $this->endSection() ?>
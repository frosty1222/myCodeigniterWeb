  <?= $this->extend("layouts/layout") ?>
  <?= $this->section("title") ?>
  <?= $title ?>
  <?= $this->endSection(); ?>
  <?= $this->section("content") ?>
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <section class="content">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <?php foreach ($product->getResult() as $value): ?>
                          <form action="<?=base_url('update_product/'.$value->id)?>" method="POST" role="form" enctype="multipart/form-data">
                              <legend>Form title</legend>
                              <div class="form-group">
                                  <label for="">ID</label>
                                  <input type="text" class="form-control" name="id" hidden value="<?= $value->id ?>">
                              </div>

                              <div class="form-group">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control" name="name" value="<?= $value->name ?>">
                              </div>

                              <div class="form-group">
                                  <label for="">Price</label>
                                  <input type="text" class="form-control" name="price" value="<?= $value->price ?>">
                              </div>
                              <div class="form-group">
                                  <label for="">Sale_price</label>
                                  <input type="text" class="form-control" name="sale_price" value="<?= $value->sale_price ?>">
                              </div>
                              <div class="form-group">
                                  <label for="">Image</label>
                                  <input type="file" class="form-control" name="image" value="<?= $value->image ?>">
                              </div>
                              <div class="form-group">
                                  <label for="">description</label>
                                  <textarea name="description" cols="30" rows="1" value=<?= $value->description?>></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="">Category_id</label>
                                  <input type="text" class="form-control" name="category_id" value="<?= $value->category_id ?>">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      <?php endforeach; ?>
                  </div>
              </div>
          </div>

      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?= $this->endSection() ?>
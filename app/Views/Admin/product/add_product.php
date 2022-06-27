 <?= $this->extend("layouts/layout") ?>
 <?= $this->section("title") ?>
 <?= $title ?>
 <?= $this->endSection(); ?>
 <?= $this->section("content") ?>
 <div class="content-wrapper">
     <section class="content">
         <form action="<?=base_url('addnew_product')?>" method="POST" role="form" enctype="multipart/form-data">
             <legend>Form title</legend>

             <div class="form-group">
                 <label for="name">Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Input field">
             </div>

             <div class="form-group">
                 <label for="price">Price</label>
                 <input type="text" class="form-control" name="price" placeholder="Input field">
             </div>
             <div class="form-group">
                 <label for="sale_price">Sale_price</label>
                 <input type="text" class="form-control" name="sale_price" placeholder="Input field">
             </div>
             <div class="form-group">
                 <label for="description">Description</label>
                 <textarea name="description" cols="50" rows="3"></textarea>
             </div>
             <div class="form-group">
                 <label for="image">Image</label>
                 <input type="file" class="form-control" name="image" placeholder="Input field">
             </div>
             <div class="form-group">
                 <label for="category_id">Category_id</label>
                
                 <select name="category_id" class="form-control" required="required">
                        <?php foreach($category->getResult() as $key => $val):?>
                         <option value="<?= $val->id ?>"><?= $val->name?></option>
                        <?php endforeach; ?>
                 </select>
                 
             </div>
             <button type="submit" name="submit" class="btn btn-primary">Submit</button>
         </form>
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <?=$this->endSection()?>
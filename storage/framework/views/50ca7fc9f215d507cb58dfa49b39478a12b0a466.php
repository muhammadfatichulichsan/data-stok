<?php $__env->startSection('content'); ?>
  <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tambah Produk
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nama Produk" name="product_name" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Harga Produk" name="harga" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Stok Produk" name="stock" required>
                    </div>
                    <div class="form-group">
                      <select name="category_id" class="form-control">
                        <option value="NULL">--Pilih Kategori --</option>
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($data->id); ?>"><?php echo e($data->category_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea type="text" class="form-control" name="deskripsi" required>
                      -- Deskripsi Produk --
                      </textarea>
                    </div>
                    <div class="form-group">
                      <textarea id="editor1"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-sm btn-info"> Tambah </button>
                    </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
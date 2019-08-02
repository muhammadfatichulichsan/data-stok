<?php $__env->startSection('content'); ?>
<!-- Page Content -->
    <div class="container" style="margin-top: 80px">

      <div class="row">

        <div class="col-lg-3">
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="<?php echo e(asset('storage/' . $product->foto)); ?>" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo e($product->product_name); ?></h3>
              <h4>Rp . <?php echo e($product->harga); ?></h4>
              <p class="card-text"><?php echo e($product->deskripsi); ?></p>
              <form action="<?php echo e(route('order.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                      <input type="hidden" name="product_name" value="<?php echo e($product->product_name); ?>">
                      <input type="hidden" name="harga" value="<?php echo e($product->harga); ?>">
                      <button type="submit" class="btn btn-sm btn-info"> Pesan Sekarang </button>
              </form>
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
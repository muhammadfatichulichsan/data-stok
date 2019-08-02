<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 80px">
            <div>
              <form>
                <div class="form-group row">
                  <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="Cari Produk Disini . . " required>
                  </div>
                  <div class="col-md-2">
                    <button type="submit" class="btn btn-xs btn-primary">Cari</button>
                  </div>
                </div>
              </form>
            </div>
      <!-- Page Features -->
      <div class="row text-center">
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="min-height: 200px">
            <a href="<?php echo e(route('product.show',$data->slug)); ?>">
              <img class="card-img-top" src="<?php echo e(asset('storage/' . $data->foto)); ?>" alt="" style="min-height: 200px">
            </a>
            <div class="card-body">
              <h4 class="card-title"><b><?php echo e(substr($data->product_name,0,11)); ?></b></h4>
              <p><span class="float-left"><a href="<?php echo e(route('category.show',$data->category_slug)); ?>"><?php echo e($data->category_name); ?></a></span><span class="float-right"><b>Rp . <?php echo e($data->harga); ?></b></span></p>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
      </div>
      <!-- /.row -->

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
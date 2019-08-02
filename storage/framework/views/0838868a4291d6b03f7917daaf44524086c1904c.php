<?php $__env->startSection('content'); ?>
  <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edit Kategori
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="<?php echo e(route('category.update',$category->category_slug)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo e($category->category_name); ?>" name="category_name" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-sm btn-info"> Simpan </button>
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
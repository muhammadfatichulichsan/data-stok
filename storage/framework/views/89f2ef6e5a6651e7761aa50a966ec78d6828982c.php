<?php $__env->startSection('content'); ?>
  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo e($pesanan); ?></h3>

              <p>Pesanan Baru</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo e($terjual); ?></h3>

              <p>Produk Terjual</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo e($user); ?></h3>

              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo e($jml_product); ?></h3>

              <p>Cek Produk</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Produk</th>
                  <th>Deskripsi Produk</th>
                  <th>Harga Produk</th>
                  <th>Kode Produk</th>
                  <th> Stok Produk</th>
                  <th> Edit </th>
                  <th> Hapus </th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($data->product_name); ?></td>
                  <td><?php echo e(substr($data->deskripsi,0,20)); ?> . . .</td>
                  <td><?php echo e($data->harga); ?></td>
                  <td><?php echo e($data->product_kode); ?></td>
                  <td><?php echo e($data->stock); ?></td>
                  <td>
                    <a class="btn btn-xs btn-danger" href="<?php echo e(route('product.edit',$data->slug)); ?>"> edit </a>
                  </td>
                  <td>
                    <form class="" action="<?php echo e(route('product.destroy',$data)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-xs btn-danger">Hapus</button>
                    </form>
                  </td>
                </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
          <!-- /.box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
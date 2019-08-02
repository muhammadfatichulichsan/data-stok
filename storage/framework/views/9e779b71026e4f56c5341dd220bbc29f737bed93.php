<?php $__env->startSection('content'); ?>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Send Email</h1>
            <?php if(\Session::has('alert-failed')): ?>
                <div class="alert alert-failed">
                    <div><?php echo e(Session::get('alert-failed')); ?></div>
                </div>
            <?php endif; ?>
            <?php if(\Session::has('alert-success')): ?>
                <div class="alert alert-success">
                    <div><?php echo e(Session::get('alert-success')); ?></div>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(url('/sendEmail')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="name" name="nama"/>
                </div>
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" id="judul" name="judul"/>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan:</label>
                    <textarea class="form-control" id="pesan" name="pesan"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Send Email</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
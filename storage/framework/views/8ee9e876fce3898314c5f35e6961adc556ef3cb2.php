

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                  <div class="col-sm-6">
                      <h5 class="m-1">External<span class="ml-2" style="font-size:18px;color:#737373;">Documents</span></h5>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                      <li class="breadcrumb-item active">My Files</li>
                    </ol>
                  </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">

                      <?php if(Session::has('message')): ?>
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo e(Session::get('message')); ?>

                        </div>
                      <?php endif; ?>

                      <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <?php echo e($message); ?>

                        </div>
                      <?php endif; ?>

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                    <table id="myexternal" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th hidden>ID</th>
                              <th width="8%">DTS No.</th>
                              <th width="15%">Addressed to</th>
                              <th width="5%">Classification</th>
                              <th width="30%">Subject</th>
                              <th width="5%">Status</th>
                              <th width="5%">Action</th>
                            </tr>
                          </thead>

                          <?php $__currentLoopData = $externals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $externals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                              <td hidden><?php echo e(++$i); ?></td>
                              <td><?php echo e($externals->dts); ?><?php echo e($externals->id); ?></td>
                              <td><?php echo e($externals->personnel); ?></td>
                              <td><?php echo e($externals->doc_class); ?></td>
                              <td><?php echo e($externals->subject); ?></td>
                              <td>
                                <?php if($externals->status == 'Open'): ?>
                                  <label class="badge badge-warning"> <?php echo e($externals->status); ?> </label>
                                  <?php else: ?>
                                    <label class="badge badge-secondary"> <?php echo e($externals->status); ?> </label>
                                <?php endif; ?>
                              </td>
                              <td><a class="btn btn-primary btn-sm mr-0" href="<?php echo e(route('ev.index',$externals->id)); ?>">View</a></td>
                            </tr>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>

                    </div>
                    <div class="card-footer">
                      <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                    </div>
                  </div>
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.Main content -->

</body>
</html>

<script>
    function goBack() {
        window.history.back();
    }
</script>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctracker\resources\views/livewire/files/external.blade.php ENDPATH**/ ?>
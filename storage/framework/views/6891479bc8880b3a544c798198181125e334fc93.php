

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                  <div class="col-sm-6">
                      <h5 class="m-1">Internal Documents<span class="ml-2" style="font-size:18px;color:#737373;">Division - Unit</span></h5>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                      <li class="breadcrumb-item active">Division - Unit</li>
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

                    <table id="divunitinternal" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th hidden>ID</th>
                              <th width="8%">DTS No.</th>
                              <th width="15%">Addressed to</th>
                              <th width="10%">Classification</th>
                              <th width="30%">Title</th>
                              <th width="5%">Status</th>
                              <th width="5%">Action</th>
                            </tr>
                          </thead>

                          <?php $__currentLoopData = $internals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                              <td hidden><?php echo e(++$i); ?></td>
                              <td><?php echo e($internals->dts); ?><?php echo e($internals->id); ?></td>
                              <td><?php echo e($internals->personnel); ?> <br /><?php echo e($internals->div_unit); ?></td>
                              <td><?php echo e($internals->doc_class); ?></td>
                              <td><?php echo e($internals->subject); ?></td>
                              <td>
                                <?php if($internals->status == 'Open'): ?>
                                  <label class="badge badge-warning"> <?php echo e($internals->status); ?> </label>
                                  <?php else: ?>
                                    <label class="badge badge-secondary"> <?php echo e($internals->status); ?> </label>
                                <?php endif; ?>
                              </td>
                              <td><a class="btn btn-primary btn-sm mr-0" href="<?php echo e(route('iv.index',$internals->id)); ?>">View</a></td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/div-unit/internal.blade.php ENDPATH**/ ?>
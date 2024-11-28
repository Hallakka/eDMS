

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                  <div class="col-sm-6">
                    <h5 class="m-0">External <span class="ml-2" style="font-size:18px;color:#737373;">Assigned Documents</span></h5>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                      <li class="breadcrumb-item active">In-progress</li>
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

                    <table id="ipexternal" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th hidden>ID</th>
                              <th width="10%">DTS No.</th>
                              <th width="10%">Assigned date</th>
                              <th width="20%">Assigned by</th>
                              <th width="20%">Subject</th>
                              <th width="15%">Action Required</th>
                              <th width="5%">Status</th>
                              <th width="5%">Action</th>
                            </tr>
                          </thead>

                          <?php $__currentLoopData = $exroute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exroute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                              <td hidden><?php echo e(++$i); ?></td>
                              <td><?php echo e($exroute->dts); ?><?php echo e($exroute->dts_no); ?></td>
                              <td><?php echo e($exroute->assigned_date); ?></td>
                              <td><?php echo e($exroute->routed_by); ?> <br /><?php echo e($exroute->routed_by_div_unit); ?></td>
                              <td><?php echo e($exroute->subject); ?></td>
                              <td><?php echo e($exroute->action_req); ?></td>
                              <td>
                                <?php if($exroute->status == 'In-progress'): ?>
                                  <label class="badge badge-danger"> <?php echo e($exroute->status); ?> </label>
                                  <?php else: ?>
                                <?php endif; ?>
                              </td>
                              <td><a class="btn btn-primary btn-sm mr-0" href="<?php echo e(route('ev.index',$exroute->dts_no)); ?>">View</a></td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/forward/p/external.blade.php ENDPATH**/ ?>
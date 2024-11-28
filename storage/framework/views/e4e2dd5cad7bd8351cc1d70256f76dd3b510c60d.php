

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

                    <table id="doneexternal" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th hidden>ID</th>
                              <th width="10%">DTS No.</th>
                              <th width="10%">Assigned date</th>
                              <th width="20%">Assigned by</th>
                              <th width="20%">Assigned to</th>
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
                              <td><?php echo e($exroute->personnel); ?> <br />

                                <?php if($exroute->div_unit > 0): ?>
                                    <?php if($exroute->div_unit == '1'): ?>
                                    Head Executive Assistant (HEA)
                                        <?php elseif($exroute->div_unit == '2'): ?>
                                            Executive Assistant (EA)
                                        <?php elseif($exroute->div_unit == '3'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '4'): ?>
                                            PRU - Personnel
                                        <?php elseif($exroute->div_unit == '5'): ?>
                                            Executive Assistant (EA)
                                        <?php elseif($exroute->div_unit == '6'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '7'): ?>
                                            Director
                                        <?php elseif($exroute->div_unit == '8'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '9'): ?>
                                            Finance Division
                                        <?php elseif($exroute->div_unit == '10'): ?>
                                            General Services Division (GSD)
                                        <?php elseif($exroute->div_unit == '11'): ?>
                                            Human Resource Development Division (HRDD)
                                        <?php elseif($exroute->div_unit == '12'): ?>
                                            ICTU - Personnel
                                        <?php elseif($exroute->div_unit == '13'): ?>
                                            PU - Personnel
                                        <?php elseif($exroute->div_unit == '14'): ?>
                                            Executive Assistant (EA)
                                        <?php elseif($exroute->div_unit == '15'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '16'): ?>
                                            Director
                                        <?php elseif($exroute->div_unit == '17'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '18'): ?>
                                            Investigation and Enforcement Division (IED)
                                        <?php elseif($exroute->div_unit == '19'): ?>
                                            Litigation Division
                                        <?php elseif($exroute->div_unit == '20'): ?>
                                            Director
                                        <?php elseif($exroute->div_unit == '21'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '22'): ?>
                                            Legal Division
                                        <?php elseif($exroute->div_unit == '23'): ?>
                                            Public Assistance Division (PAD)
                                        <?php elseif($exroute->div_unit == '24'): ?>
                                            Executive Assistant (EA)
                                        <?php elseif($exroute->div_unit == '25'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '26'): ?>
                                            Director
                                        <?php elseif($exroute->div_unit == '27'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '28'): ?>
                                            Better Regulation Division A (BRD A)
                                        <?php elseif($exroute->div_unit == '29'): ?>
                                            Better Regulation Division B (BRD B)
                                        <?php elseif($exroute->div_unit == '30'): ?>
                                            Better Regulation Division C (BRD C)
                                        <?php elseif($exroute->div_unit == '31'): ?>
                                            Better Regulation Division D (BRD D)
                                        <?php elseif($exroute->div_unit == '32'): ?>
                                            Doing Business Division (DBD)
                                        <?php elseif($exroute->div_unit == '33'): ?>
                                            Regulatory Management and Training Division (RMTD)
                                        <?php elseif($exroute->div_unit == '34'): ?>
                                            Director
                                        <?php elseif($exroute->div_unit == '35'): ?>
                                            Administrative Officer
                                        <?php elseif($exroute->div_unit == '36'): ?>
                                            Compliance Monitoring and Evaluation Division A (CMED A)
                                        <?php elseif($exroute->div_unit == '37'): ?>
                                            Compliance Monitoring and Evaluation Division B (CMED B)
                                        <?php elseif($exroute->div_unit == '38'): ?>
                                            Compliance Monitoring and Evaluation Division C (CMED C)
                                        <?php else: ?>
                                            Compliance Monitoring and Evaluation Division D (CMED D)
                                    <?php endif; ?>
                                <?php endif; ?>

                              </td>
                              <td><?php echo e($exroute->subject); ?></td>
                              <td><?php echo e($exroute->action_req); ?></td>
                              <td>
                                <?php if($exroute->status == 'New'): ?>
                                  <label class="badge badge-primary"> <?php echo e($exroute->status); ?> </label>
                                  <?php elseif($exroute->status == 'In-progress'): ?>
                                  <label class="badge badge-danger"> <?php echo e($exroute->status); ?> </label>
                                  <?php elseif($exroute->status == 'Hold'): ?>
                                  <label class="badge badge-warning"> <?php echo e($exroute->status); ?> </label>
                                  <?php else: ?>
                                  <label class="badge badge-secondary"> <?php echo e($exroute->status); ?> </label>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/div-unit/ead.blade.php ENDPATH**/ ?>
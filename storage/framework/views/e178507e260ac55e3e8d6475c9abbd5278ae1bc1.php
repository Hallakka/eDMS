

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0">Dashboard</h5>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <?php if(Session::has('message')): ?>
          <div class="alert alert-success alert-dismissible mb-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo e(Session::get('message')); ?>

          </div>
        <?php endif; ?>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">

              <div class="col-12">
                <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Important Reminder</h5>
                  Please check your &nbsp <b>ARTA Email Account &nbsp > Junk Email folder</b> &nbsp regularly. Thank you.
                </div>
              </div>

              <?php if(!auth()->check() || ! auth()->user()->hasRole('SuperAdmin|Admin|User|Head|Director')): ?>
                <div class="col-12">
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i> Welcome!</h5>
                    Please wait 10-15 minutes for the Administrator to verify and activate your account. Thank you.
                  </div>
                </div>
              <?php endif; ?>

              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any('dashboard-view','sidebar-view')): ?>
                <!-- External Assigned Documents -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">External<span class="ml-2" style="font-size:15px;color:#737373;">Assigned Documents</span></h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <!--<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                          </button>-->
                        </div>
                    </div>

                    <div class="card-body">
                      <!-- Small boxes (Stat box) -->
                      <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1">
                              <a href="<?php echo e(url('files/n/external')); ?>"><i class="fas fa-folder-plus"></i></a>
                            </span>
                              <div class="info-box-content">
                                <span class="info-box-text">New</span>
                                <h3 class="info-box-number">
                                  <?php echo e($extcounts); ?>

                                </h3>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-lg-6 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1">
                              <a href="<?php echo e(url('files/p/external')); ?>"><i class="fas fa-spinner"></i></a>
                            </span>
                              <div class="info-box-content">
                                <span class="info-box-text">In-progress</span>
                                <h3 class="info-box-number">
                                  <?php echo e($extprocounts); ?>

                                </h3>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                          <!-- /.col -->
                      </div>

                      <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-warning elevation-1">
                              <a href="<?php echo e(url('files/h/external')); ?>"><i class="fas fa-folder"></i></a>
                            </span>
                              <div class="info-box-content">
                                <span class="info-box-text">Hold</span>
                                <h3 class="info-box-number">
                                  <?php echo e($extholdcounts); ?>

                                </h3>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                          <div class="col-lg-6 col-sm-12 col-md-12">
                            <div class="info-box">
                              <span class="info-box-icon bg-secondary elevation-1">
                                <a href="<?php echo e(url('files/d/external')); ?>"><i class="fas fa-folder-minus"></i></a>
                              </span>
                                <div class="info-box-content">
                                  <span class="info-box-text">Done</span>
                                  <h3 class="info-box-number">
                                    <?php echo e($extdonecounts); ?>

                                  </h3>
                                </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->

                      </div>
                      <!-- ./row -->
                    </div>
                    <!-- /.card-body -->
                      <a href="<?php echo e(url('files/a/external')); ?>">
                        <button type="button" class="btn btn-default btn-block btn-flat">View All &nbsp<i class="fas fa-arrow-circle-right"></i></button>
                      </a>
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->

                <!-- Internal Assigned Documents -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Internal<span class="ml-2" style="font-size:15px;color:#737373;">Assigned Documents</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <!-- Small boxes (Stat box) -->
                      <div class="row">

                        <div class="col-lg-6 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1">
                              <a href="<?php echo e(url('files/n/internal')); ?>"><i class="fas fa-folder-plus"></i></a>
                            </span>
                              <div class="info-box-content">
                                <span class="info-box-text">New</span>
                                <h3 class="info-box-number">
                                  <?php echo e($intcounts); ?>

                                </h3>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-lg-6 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1">
                              <a href="<?php echo e(url('files/p/internal')); ?>"><i class="fas fa-spinner"></i></a>
                            </span>
                              <div class="info-box-content">
                                <span class="info-box-text">In-progress</span>
                                <h3 class="info-box-number">
                                  <?php echo e($intprocounts); ?>

                                </h3>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                      </div>

                      <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-warning elevation-1">
                              <a href="<?php echo e(url('files/h/internal')); ?>"><i class="fas fa-folder"></i></a>
                            </span>
                              <div class="info-box-content">
                                <span class="info-box-text">Hold</span>
                                <h3 class="info-box-number">
                                  <?php echo e($intholdcounts); ?>

                                </h3>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-lg-6 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-secondary elevation-1">
                              <a href="<?php echo e(url('files/d/internal')); ?>"><i class="fas fa-folder-minus"></i></a>
                            </span>
                              <div class="info-box-content">
                                <span class="info-box-text">Done</span>
                                <h3 class="info-box-number">
                                  <?php echo e($intdonecounts); ?>

                                </h3>
                              </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- ./row -->

                    </div>
                    <!-- /.card-body -->
                      <a href="<?php echo e(url('files/a/internal')); ?>">
                        <button type="button" class="btn btn-default btn-block btn-flat">View All &nbsp<i class="fas fa-arrow-circle-right"></i></button>
                      </a>
                  </div>
                  <!-- /.card -->
                </div>

                <!-- My Files Charts -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">My Files<span class="ml-2" style="font-size:15px;color:#737373;">External Status</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                          <?php echo $__env->make('livewire.files.external-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                      </div>
                    </div>
                    <a href="<?php echo e(url('files/external')); ?>">
                    <button type="button" class="btn btn-default btn-block btn-flat">View All &nbsp<i class="fas fa-arrow-circle-right"></i></button>
                  </a>

                  </div>
                </div>

                <!-- My Files Charts -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title"><span class="ml-2" style="font-size:15px;color:#737373;">Internal Status</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                          <?php echo $__env->make('livewire.files.internal-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                      </div>
                    </div>
                    <a href="<?php echo e(url('files/internal')); ?>">
                      <button type="button" class="btn btn-default btn-block btn-flat">View All &nbsp<i class="fas fa-arrow-circle-right"></i></button>
                    </a>

                  </div>
                </div>
              <?php endif; ?>

              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department-status')): ?>
                <!-- Overall External Documents -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Overall External Documents</h3>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-primary"><i class="far fa-folder-open"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Open</span>
                              <h3 class="info-box-number"><?php echo e($allextopen); ?></h3>
                            </div>
                              
                            <span class="info-box-icon bg-warning"><i class="far fa-folder"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Closed</span>
                              <h3 class="info-box-number"><?php echo e($allextclosed); ?></h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <!-- Overall Internal Documents -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Overall Internal Documents</h3>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                          <div class="info-box">
                            <span class="info-box-icon bg-danger"><i class="far fa-folder-open"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Open</span>
                              <h3 class="info-box-number"><?php echo e($allintopen); ?></h3>
                            </div>
                            
                            <span class="info-box-icon bg-warning"><i class="far fa-folder"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Closed</span>
                              <h3 class="info-box-number"><?php echo e($allintclosed); ?></h3>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <!-- Charts -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">External Status<span class="ml-2" style="font-size:15px;color:#737373;">Head Office</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row">

                        <div class="col-lg-6 col-sm-12 col-md-12">
                            <?php echo $__env->make('livewire.files.department.external-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <div class="col-lg-6 col-sm-12 col-md-12">
                            <?php echo $__env->make('livewire.files.department.exroute-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>

                <!-- Charts -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Internal Status<span class="ml-2" style="font-size:15px;color:#737373;">Head Office</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row">

                      <div class="col-lg-6 col-sm-12 col-md-12">
                        <?php echo $__env->make('livewire.files.department.internal-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>

                      <div class="col-lg-6 col-sm-12 col-md-12">
                          <?php echo $__env->make('livewire.files.department.inroute-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>

                      </div>
                    </div>

                  </div>
                </div>
              <?php endif; ?>

              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('office-status')): ?>
                <!-- Charts -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">External Status<span class="ml-2" style="font-size:15px;color:#737373;">Office</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row">

                        <div class="col-lg-6 col-sm-12 col-md-12">
                            <?php echo $__env->make('livewire.files.office.external-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <div class="col-lg-6 col-sm-12 col-md-12">
                            <?php echo $__env->make('livewire.files.office.exroute-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>

                <!-- Charts -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Internal Status<span class="ml-2" style="font-size:15px;color:#737373;">Office</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row">

                      <div class="col-lg-6 col-sm-12 col-md-12">
                        <?php echo $__env->make('livewire.files.office.internal-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>

                      <div class="col-lg-6 col-sm-12 col-md-12">
                        <?php echo $__env->make('livewire.files.office.inroute-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>

                      </div>
                    </div>

                  </div>
                </div>
              <?php endif; ?>

              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('div_unit-status')): ?>
                <!-- Charts -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">External Status<span class="ml-2" style="font-size:15px;color:#737373;">Division / Unit</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row">

                        <div class="col-lg-6 col-sm-12 col-md-12">
                            <?php echo $__env->make('livewire.files.div-unit.external-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <div class="col-lg-6 col-sm-12 col-md-12">
                            <?php echo $__env->make('livewire.files.div-unit.exroute-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>

                <!-- Charts -->
                <div class="col-lg-6 col-sm-12 col-md-12">
                  <!-- Default box -->
                  <div class="card card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Internal Status<span class="ml-2" style="font-size:15px;color:#737373;">Division / Unit</span></h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>

                    <div class="card-body">
                      <div class="row">

                      <div class="col-lg-6 col-sm-12 col-md-12">
                        <?php echo $__env->make('livewire.files.div-unit.internal-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>

                      <div class="col-lg-6 col-sm-12 col-md-12">
                        <?php echo $__env->make('livewire.files.div-unit.inroute-chart-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>

                      </div>
                    </div>

                  </div>
                </div>
              <?php endif; ?>

        </section>
        <!-- /.main-content -->
        
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/dashboard.blade.php ENDPATH**/ ?>
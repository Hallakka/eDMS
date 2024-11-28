

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h4 class="m-1">Account Management</h4>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('users.create')); ?>"><i class="fa fa-plus-circle mr-1"></i> Create New User</a>
                        <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createUser"><i class="fa fa-plus-circle mr-1"></i> Create New User</button> -->
                      <?php endif; ?>
                    </div>
                    <!-- /.col -->
                    
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                  <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-dismissible mb-3">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <?php echo e($message); ?>

                    </div>
                  <?php endif; ?>

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                        <table id="usermanage" class="table table-bordered table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th hidden>ID</th>
                              <th>Name</th>
                              <th>Email Address</th>
                              <th>Role</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                              <td><?php echo e(++$i); ?></td>
                              <td hidden><?php echo e($user->id); ?></td>
                              <td><?php echo e($user->name); ?></td>
                              <td><?php echo e($user->email); ?></td>
                              <td>
                                <?php if(!empty($user->getRoleNames())): ?>
                                  <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label class="badge badge-secondary"><i class="fas fa-user mr-1"></i> <?php echo e($v); ?> </label>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                              </td>
                              <td>
                                <?php if($user->approved == 'pending'): ?>
                                  <label class="badge badge-warning"> <?php echo e($user->approved); ?> </label>
                                  <?php elseif($user->approved == 'active'): ?>
                                    <label class="badge badge-success"> <?php echo e($user->approved); ?> </label>
                                  <?php else: ?>
                                    <label class="badge badge-secondary"> <?php echo e($user->approved); ?> </label>
                                <?php endif; ?>
                              </td>
                              <td>
                                <!-- <a class="btn btn-info btn-sm mr-0" href="<?php echo e(route('users.show',$user->id)); ?>">View</a> -->
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
                                  <a  class="btn btn-primary btn-sm mr-0" href="<?php echo e(route('users.edit',$user->id)); ?>" title="View / Edit">View / Edit</i></a>
                                <?php endif; ?>
                                
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                                  <?php echo Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline', 'title'=>'Delete']); ?>

                                      <?php echo Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] ); ?>

                                  <?php echo Form::close(); ?>

                                <?php endif; ?>
                              </td>
                            </tr>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>

                        <?php echo $data->render(); ?>


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
        <!-- /.content -->

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/admin/users/index.blade.php ENDPATH**/ ?>
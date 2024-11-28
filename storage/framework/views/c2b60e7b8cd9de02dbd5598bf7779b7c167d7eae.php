

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5 class="m-1">Role Management</h5>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('roles.create')); ?>"><i class="fa fa-plus-circle mr-1"></i> Create New Role</a>
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

                                <table id="rolemanage" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>

                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            <td><?php echo e($role->name); ?></td>
                                            <td>
                                                <!-- <a class="btn btn-info btn-sm" href="<?php echo e(route('roles.show',$role->id)); ?>" title="View">View</i></a> -->
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('roles.edit',$role->id)); ?>" title="View / Edit">View / Edit</i></a>
                                                <?php endif; ?>

                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                                                    <?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline', 'title'=>'Delete']); ?>

                                                        <?php echo Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] ); ?>

                                                    <?php echo Form::close(); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>

                                <?php echo $roles->render(); ?>

                            
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctracker\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>
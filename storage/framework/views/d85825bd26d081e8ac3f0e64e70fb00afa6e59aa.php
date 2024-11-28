

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h5 class="m-1">Edit Role</h5>
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

                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger alert-dismissible mb-3">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <!-- Default box -->
                        <div class="card card-outline card-info">
                            <div class="card-body">

                                <?php echo Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]); ?>

                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Name</strong>
                                            <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Permissions</strong>
                                            <p class="mt-2">
                                                <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <label><?php echo e(Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name'))); ?>

                                                        <?php echo e($value->name); ?> &nbsp&nbsp&nbsp
                                                    </label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Descriptions</strong>
                                            <ul class="mt-2">
                                                <span class="mb-2" style="font-size:13px;color:#737373;"><i class="icon fas fa-exclamation-circle"></i> </i>DEFAULT PERMISSION <i>important.</i></span>
                                                    <li><b>dashboard-view</b> - have access to Dashboard External and Internal Assigned Documents and My Files.</li>
                                                    <li><b>sidebar-view</b> - have access to Sidebar Menu.</li>
                                                    <li><b>user-view</b> - have access to URLs.</li>
                                                <span class="mb-2" style="font-size:13px;color:#737373;">MANAGE ROLES</span>
                                                    <li><b>role-list</b> - have access in /admin/roles.</li>
                                                    <li><b>role-create</b> - have access in /admin/roles/create.</li>
                                                    <li><b>role-edit</b> - have access in /admin/roles/{id}/edit.</li>
                                                    <li><b>role-delete</b> - can delete roles.</li>
                                                <span class="mb-2" style="font-size:13px;color:#737373;">MANAGE ACCOUNTS</span>
                                                    <li><b>user-list</b> - have access in /admin/users.</li>
                                                    <li><b>user-create</b> - have access in /admin/users/create.</li>
                                                    <li><b>user-edit</b> - have access in /admin/users/{id}/edit.</li>
                                                    <li><b>user-delete</b> - can delete users.</li>
                                                <span class="mb-2" style="font-size:13px;color:#737373;">DASHBOARD GRAPH STATUS</span>
                                                    <li><b>department-status</b> - have access to External and Internal Department Status.</li>
                                                    <li><b>office-status</b> - have access to External and Internal Office Status.</li>
                                                    <li><b>div_unit-status</b> - have access to External and Internal Divsion/Unit Status.</li>
                                                <span class="mb-2" style="font-size:13px;color:#737373;">APP LAYOUT</span>
                                                    <li><b>guest-view</b> - have access only in /guest.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /.card-outline -->
                            <div class="card-footer">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>
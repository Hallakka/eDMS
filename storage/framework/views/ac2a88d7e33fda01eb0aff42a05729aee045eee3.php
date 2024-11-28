

<?php $__env->startSection('content'); ?>
  
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                <div class="col-sm-6">
                    <h5 class="m-0">Create New <span class="ml-2" style="font-size:18px;color:#737373;">External Document</span></h5>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <?php if(session()->has('message')): ?>
                      <div class="alert alert-success">
                        <?php echo e(session('message')); ?>

                      </div>
                    <?php endif; ?>
                    
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('docs.e.create-new')->html();
} elseif ($_instance->childHasBeenRendered('qpDqypO')) {
    $componentId = $_instance->getRenderedChildComponentId('qpDqypO');
    $componentTag = $_instance->getRenderedChildComponentTagName('qpDqypO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qpDqypO');
} else {
    $response = \Livewire\Livewire::mount('docs.e.create-new');
    $html = $response->html();
    $_instance->logRenderedChild('qpDqypO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                  </div>
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.1stcontent -->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctracker\resources\views/livewire/docs/e/create.blade.php ENDPATH**/ ?>
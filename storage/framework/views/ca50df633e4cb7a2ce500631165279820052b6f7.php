

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="m-0">Print Preview</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <!-- <button type="button" class="btn btn-secondary float-right" onclick="goBack()">Back</button> -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 mb-4">
                        <button type="button" class="btn btn-secondary mt-3" onclick="goBack()">Back</button>
                        <img src="<?php echo e(asset('/images/ARTA-OP.png')); ?>" style="top:-50px;width:250px;height:80px;float:right;margin-botton:30px;" alt="" title="">
                    </div>

                    <div class="col-7 table-responsive">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0">Document Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th>DTS No.</th>
                                <th><?php echo e($externals->dts); ?><?php echo e($externals->id); ?></th>
                            </tr>
                            <tr>
                                <th width="20%">Addressed to</th>
                                <td>
                                    <?php if($externals->personnel > 0): ?>
                                        <?php echo e($externals->personnel); ?> <br />
                                    <?php endif; ?>
                                    <span class="ml-0" style="font-size:14px;">
                                        <?php if($externals->department > 0): ?>
                                            <?php if($externals->department == '1'): ?>
                                                    Office of the Director General (ODG)
                                                <?php elseif($externals->department == '2'): ?>
                                                    Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                                <?php elseif($externals->department == '3'): ?>
                                                    Office of the Deputy Director General for Legal (ODDGL)
                                                <?php else: ?>
                                                    Office of the Deputy Director General for Operations (ODDGO)
                                            <?php endif; ?> <br />
                                        <?php endif; ?>
                                                                    
                                        <?php if($externals->office > 0): ?>
                                            <?php if($externals->office == '1'): ?>
                                                ODG - Personnel
                                                <?php elseif($externals->office == '2'): ?>
                                                    Public Relations Unit (PRU)
                                                <?php elseif($externals->office == '3'): ?>
                                                    ODDGAF - Personnel
                                                <?php elseif($externals->office == '4'): ?>
                                                    Finance and Administrative Office (FAO)
                                                <?php elseif($externals->office == '5'): ?>
                                                    Information and Communications Technology Unit (ICTU)
                                                <?php elseif($externals->office == '6'): ?>
                                                    Planning Unit (PU)
                                                <?php elseif($externals->office == '7'): ?>
                                                    ODDGL - Personnel
                                                <?php elseif($externals->office == '8'): ?>
                                                    Investigation, Enforcement and Litigation Office (IELO)
                                                <?php elseif($externals->office == '9'): ?>
                                                    Legal and Public Assistance Office (LPAO)
                                                <?php elseif($externals->office == '10'): ?>
                                                    ODDGO - Personnel
                                                <?php elseif($externals->office == '11'): ?>
                                                    Better Regulations Office (BRO)
                                                <?php else: ?>
                                                    Compliance Monitoring and Evaluation Office (CMEO)
                                            <?php endif; ?> <br />
                                        <?php endif; ?>

                                        <?php if($externals->div_unit > 0): ?>
                                            <?php echo e($externals->div_unit); ?>

                                        <?php endif; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td><?php echo e($externals->title); ?></td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td><?php echo e($externals->subject); ?></td>
                            </tr>
                            <tr>
                                <th>Classification</th>
                                <td><?php echo e($externals->doc_class); ?></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td><?php echo e($externals->doc_type); ?></td>
                            </tr>
                        </table>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                <p class="my-0 mb-0">Sender's Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th width="20%">Name</th>
                                <td><?php echo e($externals->s_name); ?></td>
                            </tr>
                            <tr>
                                <th>Profile</th>
                                <td><?php echo e($externals->s_profile); ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo e($externals->s_address); ?></td>
                            </tr>
                            <tr>
                                <th>Contact Details</th>
                                <td><?php echo e($externals->s_email); ?> <br /> <?php echo e($externals->s_contact); ?></td>
                            </tr>
                            <tr>
                                <th>Mode of Transmittal</th>
                                <td><?php echo e($externals->mode_of_trans); ?></td>
                            </tr>
                        </table>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                    <p class="my-0 mb-0">Receiver's Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th width="20%">Received by</th>
                                <td><?php echo e($externals->received_by); ?> <br /> <?php echo e($externals->received_by_div_unit); ?></td>
                            </tr>
                            <tr>
                                <th>Date & Time received</th>
                                <td><?php echo e($externals->date_received); ?> <?php echo e($externals->time_received); ?></td>
                            </tr>
                            <tr>
                                <th>Remarks</th>
                                <td><?php echo e($externals->comment); ?></td>
                            </tr>
                            <!-- <tr>
                                <th>Eloquent Relationship</th>
                                <td height="100px">
                                     <?php $__empty_1 = true; $__currentLoopData = $externals->exRoute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exRoute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <b><?php echo e($exRoute['subject']); ?></b>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                None.
                                            <?php endif; ?>
                                </td>
                            </tr> -->
                        </table>
                                                        
                    </div>

                    <div class="col-5 table-responsive">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                    <p class="my-0 mb-0">ARTA-EDTS Details</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Document Status</th>
                                <td><?php echo e($externals->status); ?></td>
                            </tr>
                            <tr>
                                <th width="30%">Created by</th>
                                <td><?php echo e($externals->created_by); ?><br /> 
                                    <span class="ml-0" style="font-size:14px;"> <?php echo e($externals->created_by_div_unit); ?></td>
                            </tr>
                            <tr>
                                <th>Date & Time created</th>
                                <td><?php echo e($externals->created_at); ?></td>
                            </tr>
                            <tr>
                                <th>Closed by</th>
                                <td><?php echo e($externals->modified_by); ?><br /> 
                                    <span class="ml-0" style="font-size:14px;"><?php echo e($externals->modified_by_div_unit); ?></td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td><?php echo e($externals->updated_at); ?></td>
                            </tr>
                            <tr>
                                <th rowspan="2">URL</th>
                                <td><span class=""><?php echo QrCode::size(70)->backgroundColor(255,255,255)->generate('ARTA-EDTS URL:' .' http://10.20.29.32/files/ev/'.$externals->id); ?></span></td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
        </section>
         
        <br /><br /><br />

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script>
  window.addEventListener("load", window.print());
</script>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/ev/print.blade.php ENDPATH**/ ?>
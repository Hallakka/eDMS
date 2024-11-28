

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

    <?php if(count($exroute) > 0): ?>

        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-12 mb-3">
                        <button type="button" class="btn btn-secondary mt-3" onclick="goBack()">Back</button>
                        <img src="<?php echo e(asset('/images/ARTA-OP.png')); ?>" style="top:-50px;width:250px;height:80px;float:right;margin-botton:30px;" alt="" title="">
                    </div>

                    <?php $__currentLoopData = $exroute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exroute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($exroute->open_at > 0): ?>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th width="25%">DTS No.</th>
                                        <td><?php echo e($exroute->dts); ?><?php echo e($exroute->dts_no); ?></td>
                                    </tr>
                                    <tr>
                                        <th width="30%">Assigned to</th>
                                        <td><?php echo e($exroute->personnel); ?> <br />
                                            <span class="ml-0" style="font-size:14px;">
                                            <?php if($exroute->department > 0): ?>
                                                <?php if($exroute->department == '1'): ?>
                                                        ODG
                                                    <?php elseif($exroute->department == '2'): ?>
                                                        ODDGAF
                                                    <?php elseif($exroute->department == '3'): ?>
                                                        ODDGL
                                                    <?php else: ?>
                                                        ODDGO
                                                <?php endif; ?> /
                                            <?php endif; ?>
                                                                                
                                            <?php if($exroute->office > 0): ?>
                                                <?php if($exroute->office == '1'): ?>
                                                    ODG - Personnel
                                                    <?php elseif($exroute->office == '2'): ?>
                                                        PRU
                                                    <?php elseif($exroute->office == '3'): ?>
                                                        ODDGAF - Personnel
                                                    <?php elseif($exroute->office == '4'): ?>
                                                        FAO
                                                    <?php elseif($exroute->office == '5'): ?>
                                                        ICTU
                                                    <?php elseif($exroute->office == '6'): ?>
                                                        PU
                                                    <?php elseif($exroute->office == '7'): ?>
                                                        ODDGL - Personnel
                                                    <?php elseif($exroute->office == '8'): ?>
                                                        IELO
                                                    <?php elseif($exroute->office == '9'): ?>
                                                        LPAO
                                                    <?php elseif($exroute->office == '10'): ?>
                                                        ODDGO - Personnel
                                                    <?php elseif($exroute->office == '11'): ?>
                                                        BRO
                                                    <?php else: ?>
                                                        CMEO
                                                <?php endif; ?> /
                                            <?php endif; ?>

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
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Remarks / Instructions</th>
                                        <td><?php echo e($exroute->note_comment_routed); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Action Requested</th>
                                        <td><?php echo e($exroute->action_req); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Deadline</th>
                                        <td><?php echo e($exroute->due_date); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td><?php echo e($exroute->modeoftrans); ?></td>
                                    </tr>
                                    <tr>
                                        <th>File Upload</th>
                                        <td><?php if($exroute->file_upload > 0): ?>
                                            <?php if(Auth::check() && (Auth::user()->name == $exroute->personnel)): ?>
                                                <a href="<?php echo e(asset('/storage/'.$exroute->file_upload)); ?>" target="_blank" ><i>private</i></a>
                                                    <?php else: ?> <i>private</i>
                                            <?php endif; ?>
                                        <?php endif; ?></td>
                                    </tr>
                                    <tr>
                                        <th>SharePoint Link</th>
                                        <td><?php if($exroute->sharepoint_link > 0): ?>
                                            <?php if(Auth::check() && (Auth::user()->name == $exroute->personnel)): ?>
                                                <a href="<?php echo e($exroute->sharepoint_link); ?>" target="_blank" ><i>private</i></a>
                                                    <?php else: ?> <i>private</i>
                                            <?php endif; ?>
                                        <?php endif; ?></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 table-responsive">

                                <?php if(Auth::check() && (Auth::user()->name == $exroute->personnel)): ?>
                                <form action="<?php echo e(route('forward.exroute.update',$exroute->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                <p class="my-0 mb-0">To be filled out by the Assigned Personnel</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="35%">Status</th>
                                            <td><?php echo e($exroute->status); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td><?php echo e($exroute->outgoing); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td><?php echo e($exroute->note_comment_personnel); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td><?php echo e($exroute->modified_at); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Opened at</th>
                                            <td><?php echo e($exroute->open_at); ?></td>
                                        </tr>
                                    </table>

                                    <?php else: ?>   
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                <p class="my-0 mb-0">To be filled out by the Assigned Personnel</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="35%">Status</th>
                                            <td><?php echo e($exroute->status); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td><?php echo e($exroute->outgoing); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td><?php echo e($exroute->note_comment_personnel); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td><?php echo e($exroute->modified_at); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Opened at</th>
                                            <td><?php echo e($exroute->open_at); ?></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php endif; ?>

                            </div>

                            <?php else: ?>
                            
                                <?php if(Auth::check() && (Auth::user()->name == $exroute->personnel)): ?>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <form action="<?php echo e(route('forward.exroute.open',$exroute->id)); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        
                                        <div class="callout callout-light col-lg-12 col-md-12 col-sm-12" align="center">
                                            <h5>This route has not yet been open.</h5>
                                            <p>Assigned to <?php echo e($exroute->personnel); ?> (<?php echo e($exroute->div_unit); ?>)</p>
                                        </div>
                                    </form>
                                </div>
                                <?php endif; ?>

                        <?php endif; ?>

                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
                            <p class="my-0" style="color:#BFBFBF;"><i class="fas fa-arrow-up bg-info fa-lg" style="padding:6px;border-radius:50%;"></i> <span class="text-muted well well-sm shadow-none ml-3" style="font-size:15px;">Routed at: <strong><?php echo e($exroute->created_at); ?></strong> / by <strong><?php echo e($exroute->routed_by); ?></strong> (<?php echo e($exroute->routed_by_div_unit); ?>)</span></p>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>
        </section>

        <?php else: ?>
            <p class="ml-4">No Route History.</p>
    <?php endif; ?>

    <br /><br />

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script>
  window.addEventListener("load", window.print());
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/forward/exroute/print.blade.php ENDPATH**/ ?>
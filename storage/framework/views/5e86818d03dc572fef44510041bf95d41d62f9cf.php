

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Edit Route Details <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. <?php echo e($inroute->dts); ?><?php echo e($inroute->dts_no); ?></span></h5>
                    </div><!-- /.col -->

                    <div class="col-sm-4" >
                        
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

                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success" style="margin-bottom:30px">
                          <?php echo e($message); ?>

                        </div>
                    <?php endif; ?>

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                    <form action="<?php echo e(route('forward.inroute.updateroute',$inroute->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                                <table class="table table-bordered table-striped table-hover">

                                    <tr>
                                        <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                            <p class="my-0 mb-0"><i class="fas fa-file-alt mr-2"></i> Route Details</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="25%">Assigned to</th>
                                        <td><?php echo e($inroute->personnel); ?> <br /> 
                                            <span class="ml-0" style="font-size:14px;">
                                                <?php if($inroute->department > 0): ?>
                                                    <?php if($inroute->department == '1'): ?>
                                                            ODG
                                                        <?php elseif($inroute->department == '2'): ?>
                                                            ODDGAF
                                                        <?php elseif($inroute->department == '3'): ?>
                                                            ODDGL
                                                        <?php else: ?>
                                                            ODDGO
                                                    <?php endif; ?> /
                                                <?php endif; ?>
                                                                                
                                                <?php if($inroute->office > 0): ?>
                                                    <?php if($inroute->office == '1'): ?>
                                                        SPMO
                                                        <?php elseif($inroute->office == '2'): ?>
                                                            FAO
                                                        <?php elseif($inroute->office == '3'): ?>
                                                            IELO
                                                        <?php elseif($inroute->office == '4'): ?>
                                                            LPAO
                                                        <?php elseif($inroute->office == '5'): ?>
                                                            BRO
                                                        <?php elseif($inroute->office == '6'): ?>
                                                            CMEO
                                                        <?php elseif($inroute->office == '7'): ?>
                                                            ODG
                                                        <?php elseif($inroute->office == '8'): ?>
                                                            ODDGAF
                                                        <?php elseif($inroute->office == '9'): ?>
                                                            ODDGL
                                                        <?php else: ?>
                                                            ODDGO
                                                    <?php endif; ?> /
                                                <?php endif; ?>

                                                <?php if($inroute->div_unit > 0): ?>
                                                    <?php if($inroute->div_unit == '1'): ?>
                                                        Security and Intelligence
                                                        <?php elseif($inroute->div_unit == '2'): ?>
                                                            Special Project Management Teams (SPMT)
                                                        <?php elseif($inroute->div_unit == '3'): ?>
                                                            Finance Division
                                                        <?php elseif($inroute->div_unit == '4'): ?>
                                                            General Services Division (GSD)
                                                        <?php elseif($inroute->div_unit == '5'): ?>
                                                            Human Resource Development Division (HRDD)
                                                        <?php elseif($inroute->div_unit == '6'): ?>
                                                            Information and Communications Technology Unit (ICTU)
                                                        <?php elseif($inroute->div_unit == '7'): ?>
                                                            Public Relations Unit (PRU)
                                                        <?php elseif($inroute->div_unit == '8'): ?>
                                                            Investigation and Enforcement Division (IED)
                                                        <?php elseif($inroute->div_unit == '9'): ?>
                                                            Litigation Division
                                                        <?php elseif($inroute->div_unit == '10'): ?>
                                                            Legal Division
                                                        <?php elseif($inroute->div_unit == '11'): ?>
                                                            Public Assistance Division (PAD)
                                                        <?php elseif($inroute->div_unit == '12'): ?>
                                                            Better Regulation Division A (BRD A)
                                                        <?php elseif($inroute->div_unit == '13'): ?>
                                                            Better Regulation Division B (BRD B)
                                                        <?php elseif($inroute->div_unit == '14'): ?>
                                                            Better Regulation Division C (BRD C)
                                                        <?php elseif($inroute->div_unit == '15'): ?>
                                                            Better Regulation Division D (BRD D)
                                                        <?php elseif($inroute->div_unit == '16'): ?>
                                                            Compliance Monitoring and Evaluation Division A (CMED A)
                                                        <?php elseif($inroute->div_unit == '17'): ?>
                                                            Compliance Monitoring and Evaluation Division B (CMED B)
                                                        <?php elseif($inroute->div_unit == '18'): ?>
                                                            Compliance Monitoring and Evaluation Division C (CMED C)
                                                        <?php elseif($inroute->div_unit == '19'): ?>
                                                            Compliance Monitoring and Evaluation Division D (CMED D)
                                                        <?php elseif($inroute->div_unit == '20'): ?>
                                                            Head Executive Assistant (HEA)
                                                        <?php elseif($inroute->div_unit == '21'): ?>
                                                            Executive Assistant (EA)
                                                        <?php elseif($inroute->div_unit == '22'): ?>
                                                            Executive Assistant (EA)
                                                        <?php elseif($inroute->div_unit == '23'): ?>
                                                            Executive Assistant (EA)
                                                        <?php elseif($inroute->div_unit == '24'): ?>
                                                            Executive Assistant (EA)
                                                        <?php elseif($inroute->div_unit == '25'): ?>
                                                            Doing Business Division (DBD)
                                                        <?php elseif($inroute->div_unit == '26'): ?>
                                                            Regulatory Management and Training Division (RMTD)
                                                        <?php elseif($inroute->div_unit == '27'): ?>
                                                            Community and Multi-Sector Affairs Unit (CMSAU)
                                                        <?php else: ?>
                                                            Planning Unit
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Remarks / Instructions</th>
                                        <td><textarea type="text" name="note_comment_routed" class="form-control" rows="1"><?php echo e($inroute->note_comment_routed); ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Action Request</th>
                                        <td>
                                            <select name="action_req" id="action_req" class="form-control">
                                                <option value="<?php echo e($inroute->action_req); ?>" selected><?php echo e($inroute->action_req); ?></option>
                                                <option value="For appropriate action">For appropriate action</option>
                                                <option value="For approval">For approval</option>
                                                <option value="For comment/reaction/response">For comment/reaction/response</option>
                                                <option value="For compliance/implementation">For compliance/implementation</option>
                                                <option value="For dissemination of information">For dissemination of information</option>
                                                <option value="For draft of reply">For draft of reply</option>
                                                <option value="For endorsement/recommendation">For endorsement/recommendation</option>
                                                <option value="For filing">For filing</option>
                                                <option value="For investigation/verification and report">For investigation/verification and report</option>
                                                <option value="For notation and return/fileFor notification/reply to party">For notation and return/fileFor notification/reply to party</option>
                                                <option value="For notification/reply to party">For notification/reply to party</option>
                                                <option value="For reply">For reply</option>
                                                <option value="For review">For review</option>
                                                <option value="For revision">For revision</option>
                                                <option value="For signature">For signature</option>
                                                <option value="For study and report to">For study and report to</option>
                                                <option value="For your information">For your information</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Deadline</th>
                                        <td><textarea type="text" name="due_date" class="form-control" rows="1"><?php echo e($inroute->due_date); ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td>
                                            <select name="modeoftrans" id="modeoftrans" class="form-control">
                                                <option value="<?php echo e($inroute->modeoftrans); ?>" selected><?php echo e($inroute->modeoftrans); ?></option>
                                                <option value="Courier">Courier</option>
                                                <option value="EDTS">EDTS</option>
                                                <option value="Gmail">Gmail</option>
                                                <option value="In person">In person</option>
                                                <option value="Outlook">Outlook</option>
                                                <option value="PhilPost">PhilPost</option>
                                                <option value="Registered">Registered</option>
                                                <option value="Social Media">Social Media</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>File Upload</th>
                                        <td><a href="<?php echo e(asset('/storage/'.$inroute->file_upload)); ?>" target="_blank" >View</td>
                                    </tr>
                                    <tr>
                                        <th>SharePoint Link</th>
                                        <td><textarea type="text" name="sharepoint_link" class="form-control" rows="1"><?php echo e($inroute->sharepoint_link); ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Last updated</th>
                                        <td><?php echo e($inroute->updated_at); ?></td>
                                    </tr>
                                    
                                </table>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                                <table class="table table-bordered table-striped">

                                    <tr>
                                        <td colspan="4" style="background:#E9ECEF;color:#6c757d;">
                                            <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="25%">Status</th>
                                        <td>
                                            <?php if($inroute->status == 'New'): ?>
                                                <label class="badge badge-primary"> <?php echo e($inroute->status); ?> </label>
                                                <?php elseif($inroute->status == 'In-progress'): ?>
                                                    <label class="badge badge-danger"> <?php echo e($inroute->status); ?> </label>
                                                <?php elseif($inroute->status == 'Hold'): ?>
                                                    <label class="badge badge-warning"> <?php echo e($inroute->status); ?> </label>
                                                <?php else: ?>
                                                    <label class="badge badge-secondary"> <?php echo e($inroute->status); ?> </label>
                                            <?php endif; ?>
                                        </td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td><?php echo e($inroute->outgoing); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td><?php echo e($inroute->note_comment_personnel); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td><?php echo e($inroute->modified_at); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Opened at</th>
                                            <td><?php echo e($inroute->open_at); ?></td>
                                    </tr>
                                    
                                </table>
                            </div>
                             
                        </div>
                        
                    </div>

                        <div class="card-footer">
                            <button type="button" class="btn btn-sm btn-secondary" onclick="goBack()">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Update</button>
                        </div>
                </form>
                    
                  <!-- /.card-outline -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.1stcontent -->

<script>
    function goBack() {
        window.history.back();
    }
</script>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/forward/inroute/edit.blade.php ENDPATH**/ ?>
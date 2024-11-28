

<?php $__env->startSection('content'); ?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Edit Route Details <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. <?php echo e($exroute->dts); ?><?php echo e($exroute->dts_no); ?></span></h5>
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

                    <form action="<?php echo e(route('forward.exroute.updateroute',$exroute->id)); ?>" method="POST" enctype="multipart/form-data">
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
                                        <td><textarea type="text" name="note_comment_routed" class="form-control" rows="3"><?php echo e($exroute->note_comment_routed); ?></textarea></td>
                                    </tr>

                                    <tr>
                                        <th>Action Requested</th>
                                        <td>
                                            <select name="action_req" id="action_req" class="form-control">
                                                <option value="<?php echo e($exroute->action_req); ?>" selected><?php echo e($exroute->action_req); ?></option>
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
                                        <td><textarea type="text" name="due_date" class="form-control" rows="1"><?php echo e($exroute->due_date); ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td>
                                            <select name="modeoftrans" id="modeoftrans" class="form-control">
                                                <option value="<?php echo e($exroute->modeoftrans); ?>" selected><?php echo e($exroute->modeoftrans); ?></option>
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
                                        <td><a href="<?php echo e(asset('/storage/'.$exroute->file_upload)); ?>" target="_blank" >View</td>
                                    </tr>
                                    <tr>
                                        <th>SharePoint Link</th>
                                        <td><textarea type="text" name="sharepoint_link" class="form-control" rows="1"><?php echo e($exroute->sharepoint_link); ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Last updated</th>
                                        <td><?php echo e($exroute->updated_at); ?></td>
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
                            </div>
                             
                        </div>
                        
                    </div>

                        <div class="card-footer">
                            <button type="button" class="btn btn-sm btn-secondary" onclick="goBack()">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save mr-1"></i> Update</button>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/forward/exroute/edit.blade.php ENDPATH**/ ?>
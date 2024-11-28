<?php if(count($exroute) > 0): ?>

        <div class="row">
            <?php $__currentLoopData = $exroute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exroute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($exroute->open_at > 0): ?>

                    <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                        <table class="table table-bordered table-striped">
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
                                        <a href="<?php echo e(asset('/storage/'.$exroute->file_upload)); ?>" target="_blank" >View</a>
                                            <?php else: ?> View
                                    <?php endif; ?>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <th>SharePoint Link</th>
                                <td><?php if($exroute->sharepoint_link > 0): ?>
                                    <?php if(Auth::check() && (Auth::user()->name == $exroute->personnel)): ?>
                                        <a href="<?php echo e($exroute->sharepoint_link); ?>" target="_blank" >View</a>
                                            <?php else: ?> View
                                    <?php endif; ?>
                                <?php endif; ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">

                        <?php if(Auth::check() && (Auth::user()->name == $exroute->personnel)): ?>
                        <form action="<?php echo e(route('forward.exroute.update',$exroute->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td colspan="4" style="background:#E9ECEF;color:#6c757d;">
                                        <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                                    </td>
                                </tr>

                                <?php if($externals->status <> 'Closed'): ?>

                                    <?php if($exroute->status <> 'Done'): ?>
                                        <tr>
                                            <th style="width:25%">Status *</th>
                                            <td colspan="2"><select name="status" id="status" class="form-control">
                                                    <option value="<?php echo e($exroute->status); ?>" selected><?php echo e($exroute->status); ?></option>
                                                    <option value="In-progress">In-progress</option>
                                                    <option value="Hold">Hold</option>
                                                    <option value="Done">Done</option>
                                                </select>
                                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing *</th>
                                            <td><select name="outgoing" id="outgoing" class="form-control">
                                                    <option value="<?php echo e($exroute->outgoing); ?>" selected><?php echo e($exroute->outgoing); ?></option>
                                                    <option value="External">External</option>
                                                    <option value="Internal">Internal</option>
                                                </select>
                                                <?php $__errorArgs = ['outgoing'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>
                                                <textarea type="text" name="note_comment_personnel" class="form-control" id="note_comment_personnel" rows="1"><?php echo e($exroute->note_comment_personnel); ?></textarea>
                                            </td>
                                        </tr>
                                        <?php else: ?>
                                        <tr>
                                            <th style="width:25%">Status</th>
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
                                    <?php endif; ?>

                                    <?php else: ?>
                                    <tr>
                                        <th style="width:25%">Status</th>
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
                                <?php endif; ?>
                                
                                <tr>
                                    <th>Last modified</th>
                                    <td><?php echo e($exroute->modified_at); ?></td>
                                </tr>
                                <tr>
                                    <th>Opened at</th>
                                    <td><?php echo e($exroute->open_at); ?></td>
                                </tr>
                            </table>

                                <?php if($externals->status <> 'Closed'): ?>

                                    <?php if($exroute->status <> 'Done'): ?>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Update</button>
                                            <!-- <a href="/files/forward/edit/<?php echo e($exroute->id); ?>" class="edit btn btn-info btn-sm " title="Edit"><i class="fas fa-edit"></i> Update</i></a> -->
                                            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" disabled><i class="fas fa-share-square"></i> Add Route</button>
                                        </div>
                                            
                                        <?php else: ?>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save"></i> Update</button>
                                            <!-- <a href="/files/forward/edit/<?php echo e($exroute->id); ?>" class="edit btn btn-info btn-sm " title="Edit"><i class="fas fa-edit"></i> Update</i></a> -->
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-share-square"></i> Add Route</button>
                                        </div>
                                                    
                                    <?php endif; ?>

                                <?php endif; ?>

                            <?php else: ?>   
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
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
                        </form>
                        <?php endif; ?>

                    </div>

                    <?php else: ?>
                    
                        <?php if(Auth::check() && (Auth::user()->name == $exroute->personnel)): ?>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="<?php echo e(route('forward.exroute.open',$exroute->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    
                                        <div class="callout callout-light" align="center">
                                            <h6><i class="fas fa-exclamation-circle"></i> This document has been assigned to you.</h6>
                                                <p><span style="font-size:14px;color:#737373;">Open to see route details.</span></p>
                                                <div class="col-lg-2 col-md-6 col-sm-6 mt-0">
                                                    <button type="submit" class="btn btn-warning btn-sm"><i class="fas fa-envelope-open-text mr-1"></i> Open</button>
                                                </div>
                                        </div>
                                </form>
                            </div>
                                <?php else: ?>
                                <div class="callout callout-light col-lg-12 col-md-12 col-sm-12" align="center">
                                    <h6><i class="fas fa-exclamation-circle"></i> This route is yet to be opened.</h6>
                                    <p><span style="font-size:14px;color:#737373;">Assigned to <?php echo e($exroute->personnel); ?> 
                                            (<?php if($exroute->div_unit > 0): ?>
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
                                            <?php endif; ?>)
                                        </span></p>
                                        <?php if(Auth::check() && (Auth::user()->name == $exroute->routed_by)): ?>
                                            <div class="col-lg-2 col-md-6 col-sm-6 mt-0">
                                                <a href="<?php echo e(url('files/forward/exroute/edit',$exroute->id)); ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-edit mr-1"></i> View/Edit</button></a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#routeRemove" data-whatever="@getbootstrap"><i class="fas fa-times-circle mr-1"></i> Remove</button>
                                            </div>
                                        <?php endif; ?>
                                </div>
                        <?php endif; ?>

                <?php endif; ?>

                <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
                    <p class="my-0" style="color:#BFBFBF;"><i class="fas fa-arrow-up bg-info fa-lg" style="padding:6px;border-radius:50%;"></i> <span class="text-muted well well-sm shadow-none ml-2" style="font-size:16px;">Routed at: <strong><?php echo e($exroute->created_at); ?></strong> / by <strong><?php echo e($exroute->routed_by); ?></strong> (<?php echo e($exroute->routed_by_div_unit); ?>)</span></p>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Modal for Remove Button -->
            <div class="modal fade" id="routeRemove" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title" id="ModalLabel">Remove Route</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to remove this route?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm close-btn float-right" data-dismiss="modal">Cancel</button>
                            <a href="<?php echo e(url('delete/ev',$exroute->id)); ?>"><button class="btn btn-danger btn-sm">Confirm</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <?php else: ?>
        <p class="ml-4">No Route History.</p>
<?php endif; ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/forward/exroute/show.blade.php ENDPATH**/ ?>
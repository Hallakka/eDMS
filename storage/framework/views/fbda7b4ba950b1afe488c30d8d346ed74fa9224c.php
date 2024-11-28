<?php if(count($inroute) > 0): ?>

        <div class="row">
            <?php $__currentLoopData = $inroute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inroute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($inroute->open_at > 0): ?>

                    <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                        <table class="table table-bordered table-striped">
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
                                                ODG - Personnel
                                                <?php elseif($inroute->office == '2'): ?>
                                                    PRU
                                                <?php elseif($inroute->office == '3'): ?>
                                                    ODDGAF - Personnel
                                                <?php elseif($inroute->office == '4'): ?>
                                                    FAO
                                                <?php elseif($inroute->office == '5'): ?>
                                                    ICTU
                                                <?php elseif($inroute->office == '6'): ?>
                                                    PU
                                                <?php elseif($inroute->office == '7'): ?>
                                                    ODDGL - Personnel
                                                <?php elseif($inroute->office == '8'): ?>
                                                    IELO
                                                <?php elseif($inroute->office == '9'): ?>
                                                    LPAO
                                                <?php elseif($inroute->office == '10'): ?>
                                                    ODDGO - Personnel
                                                <?php elseif($inroute->office == '11'): ?>
                                                    BRO
                                                <?php else: ?>
                                                    CMEO
                                            <?php endif; ?> /
                                        <?php endif; ?>

                                        <?php if($inroute->div_unit > 0): ?>
                                            <?php if($inroute->div_unit == '1'): ?>
                                                Head Executive Assistant (HEA)
                                                <?php elseif($inroute->div_unit == '2'): ?>
                                                    Executive Assistant (EA)
                                                <?php elseif($inroute->div_unit == '3'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '4'): ?>
                                                    PRU - Personnel
                                                <?php elseif($inroute->div_unit == '5'): ?>
                                                    Executive Assistant (EA)
                                                <?php elseif($inroute->div_unit == '6'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '7'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '8'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '9'): ?>
                                                    Finance Division
                                                <?php elseif($inroute->div_unit == '10'): ?>
                                                    General Services Division (GSD)
                                                <?php elseif($inroute->div_unit == '11'): ?>
                                                    Human Resource Development Division (HRDD)
                                                <?php elseif($inroute->div_unit == '12'): ?>
                                                    ICTU - Personnel
                                                <?php elseif($inroute->div_unit == '13'): ?>
                                                    PU - Personnel
                                                <?php elseif($inroute->div_unit == '14'): ?>
                                                    Executive Assistant (EA)
                                                <?php elseif($inroute->div_unit == '15'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '16'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '17'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '18'): ?>
                                                    Investigation and Enforcement Division (IED)
                                                <?php elseif($inroute->div_unit == '19'): ?>
                                                    Litigation Division
                                                <?php elseif($inroute->div_unit == '20'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '21'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '22'): ?>
                                                    Legal Division
                                                <?php elseif($inroute->div_unit == '23'): ?>
                                                    Public Assistance Division (PAD)
                                                <?php elseif($inroute->div_unit == '24'): ?>
                                                    Executive Assistant (EA)
                                                <?php elseif($inroute->div_unit == '25'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '26'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '27'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '28'): ?>
                                                    Better Regulation Division A (BRD A)
                                                <?php elseif($inroute->div_unit == '29'): ?>
                                                    Better Regulation Division B (BRD B)
                                                <?php elseif($inroute->div_unit == '30'): ?>
                                                    Better Regulation Division C (BRD C)
                                                <?php elseif($inroute->div_unit == '31'): ?>
                                                    Better Regulation Division D (BRD D)
                                                <?php elseif($inroute->div_unit == '32'): ?>
                                                    Doing Business Division (DBD)
                                                <?php elseif($inroute->div_unit == '33'): ?>
                                                    Regulatory Management and Training Division (RMTD)
                                                <?php elseif($inroute->div_unit == '34'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '35'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '36'): ?>
                                                    Compliance Monitoring and Evaluation Division A (CMED A)
                                                <?php elseif($inroute->div_unit == '37'): ?>
                                                    Compliance Monitoring and Evaluation Division B (CMED B)
                                                <?php elseif($inroute->div_unit == '38'): ?>
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
                                <td><?php echo e($inroute->note_comment_routed); ?></td>
                            </tr>
                            <tr>
                                <th>Action Requested</th>
                                <td><?php echo e($inroute->action_req); ?></td>
                            </tr>
                            <tr>
                                <th>Deadline</th>
                                <td><?php echo e($inroute->due_date); ?></td>
                            </tr>
                            <tr>
                                <th>Mode of Transmittal</th>
                                <td><?php echo e($inroute->modeoftrans); ?></td>
                            </tr>
                            <tr>
                                <th>File Upload</th>
                                <td><?php if($inroute->file_upload > 0): ?>
                                    <?php if(Auth::check() && (Auth::user()->name == $inroute->personnel)): ?>
                                        <a href="<?php echo e(asset('/storage/'.$inroute->file_upload)); ?>" target="_blank" >View</a>
                                            <?php else: ?> View
                                    <?php endif; ?>
                                <?php endif; ?></td>
                            </tr>
                            <tr>
                                <th>SharePoint Link</th>
                                <td><?php if($inroute->sharepoint_link > 0): ?>
                                    <?php if(Auth::check() && (Auth::user()->name == $inroute->personnel)): ?>
                                        <a href="<?php echo e($inroute->sharepoint_link); ?>" target="_blank" >View</a>
                                            <?php else: ?> View
                                    <?php endif; ?>
                                <?php endif; ?></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">

                        <?php if(Auth::check() && (Auth::user()->name == $inroute->personnel)): ?>
                        <form action="<?php echo e(route('forward.inroute.update',$inroute->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td colspan="4" style="background:#E9ECEF;color:#6c757d;">
                                        <p class="my-0 mb-0"><i class="fas fa-edit mr-2"></i> To be filled out by the Assigned Personnel</p>
                                    </td>
                                </tr>

                                <?php if($internals->status <> 'Closed'): ?>

                                    <?php if($inroute->status <> 'Done'): ?>
                                        <tr>
                                            <th style="width:25%">Status *</th>
                                            <td colspan="2"><select name="status" id="status" class="form-control">
                                                    <option value="<?php echo e($inroute->status); ?>" selected><?php echo e($inroute->status); ?></option>
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
                                                    <option value="<?php echo e($inroute->outgoing); ?>" selected><?php echo e($inroute->outgoing); ?></option>
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
                                                <textarea type="text" name="note_comment_personnel" class="form-control" id="note_comment_personnel" rows="1"><?php echo e($inroute->note_comment_personnel); ?></textarea>
                                            </td>
                                        </tr>
                                        <?php else: ?>
                                        <tr>
                                            <th style="width:25%">Status</th>
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
                                    <?php endif; ?>

                                    <?php else: ?>
                                    <tr>
                                        <th style="width:25%">Status</th>
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
                                <?php endif; ?>
                                
                                <tr>
                                    <th>Last modified</th>
                                    <td><?php echo e($inroute->modified_at); ?></td>
                                </tr>
                                <tr>
                                    <th>Opened at</th>
                                    <td><?php echo e($inroute->open_at); ?></td>
                                </tr>
                            </table>

                                <?php if($internals->status <> 'Closed'): ?>

                                    <?php if($inroute->status <> 'Done'): ?>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Update</button>
                                            <!-- <a href="/files/forward/edit/<?php echo e($inroute->id); ?>" class="edit btn btn-info btn-sm " title="Edit"><i class="fas fa-edit"></i> Update</i></a> -->
                                            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" disabled><i class="fas fa-share-square"></i> Add Route</button>
                                        </div>
                                            
                                        <?php else: ?>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save"></i> Update</button>
                                            <!-- <a href="/files/forward/edit/<?php echo e($inroute->id); ?>" class="edit btn btn-info btn-sm " title="Edit"><i class="fas fa-edit"></i> Update</i></a> -->
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
                        </form>
                        <?php endif; ?>

                    </div>

                    <?php else: ?>
                    
                        <?php if(Auth::check() && (Auth::user()->name == $inroute->personnel)): ?>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="<?php echo e(route('forward.inroute.open',$inroute->id)); ?>" method="POST" enctype="multipart/form-data">
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
                                    <p><span style="font-size:14px;color:#737373;">Assigned to <?php echo e($inroute->personnel); ?> 
                                            (<?php if($inroute->div_unit > 0): ?>
                                                <?php if($inroute->div_unit == '1'): ?>
                                                Head Executive Assistant (HEA)
                                                <?php elseif($inroute->div_unit == '2'): ?>
                                                    Executive Assistant (EA)
                                                <?php elseif($inroute->div_unit == '3'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '4'): ?>
                                                    PRU - Personnel
                                                <?php elseif($inroute->div_unit == '5'): ?>
                                                    Executive Assistant (EA)
                                                <?php elseif($inroute->div_unit == '6'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '7'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '8'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '9'): ?>
                                                    Finance Division
                                                <?php elseif($inroute->div_unit == '10'): ?>
                                                    General Services Division (GSD)
                                                <?php elseif($inroute->div_unit == '11'): ?>
                                                    Human Resource Development Division (HRDD)
                                                <?php elseif($inroute->div_unit == '12'): ?>
                                                    ICTU - Personnel
                                                <?php elseif($inroute->div_unit == '13'): ?>
                                                    PU - Personnel
                                                <?php elseif($inroute->div_unit == '14'): ?>
                                                    Executive Assistant (EA)
                                                <?php elseif($inroute->div_unit == '15'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '16'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '17'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '18'): ?>
                                                    Investigation and Enforcement Division (IED)
                                                <?php elseif($inroute->div_unit == '19'): ?>
                                                    Litigation Division
                                                <?php elseif($inroute->div_unit == '20'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '21'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '22'): ?>
                                                    Legal Division
                                                <?php elseif($inroute->div_unit == '23'): ?>
                                                    Public Assistance Division (PAD)
                                                <?php elseif($inroute->div_unit == '24'): ?>
                                                    Executive Assistant (EA)
                                                <?php elseif($inroute->div_unit == '25'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '26'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '27'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '28'): ?>
                                                    Better Regulation Division A (BRD A)
                                                <?php elseif($inroute->div_unit == '29'): ?>
                                                    Better Regulation Division B (BRD B)
                                                <?php elseif($inroute->div_unit == '30'): ?>
                                                    Better Regulation Division C (BRD C)
                                                <?php elseif($inroute->div_unit == '31'): ?>
                                                    Better Regulation Division D (BRD D)
                                                <?php elseif($inroute->div_unit == '32'): ?>
                                                    Doing Business Division (DBD)
                                                <?php elseif($inroute->div_unit == '33'): ?>
                                                    Regulatory Management and Training Division (RMTD)
                                                <?php elseif($inroute->div_unit == '34'): ?>
                                                    Director
                                                <?php elseif($inroute->div_unit == '35'): ?>
                                                    Administrative Officer
                                                <?php elseif($inroute->div_unit == '36'): ?>
                                                    Compliance Monitoring and Evaluation Division A (CMED A)
                                                <?php elseif($inroute->div_unit == '37'): ?>
                                                    Compliance Monitoring and Evaluation Division B (CMED B)
                                                <?php elseif($inroute->div_unit == '38'): ?>
                                                    Compliance Monitoring and Evaluation Division C (CMED C)
                                                <?php else: ?>
                                                    Compliance Monitoring and Evaluation Division D (CMED D)
                                                    
                                                <?php endif; ?>
                                            <?php endif; ?>)
                                        </span></p>
                                        <?php if(Auth::check() && (Auth::user()->name == $inroute->routed_by)): ?>
                                            <div class="col-lg-2 col-md-6 col-sm-6 mt-0">
                                                <a href="<?php echo e(url('files/forward/inroute/edit',$inroute->id)); ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-edit mr-1"></i> View/Edit</button></a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#routeRemove" data-whatever="@getbootstrap"><i class="fas fa-times-circle mr-1"></i> Remove</button>
                                            </div>
                                        <?php endif; ?>
                                </div>
                        <?php endif; ?>

                <?php endif; ?>

                <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-2">
                    <p class="my-0" style="color:#BFBFBF;"><i class="fas fa-arrow-up bg-info fa-lg" style="padding:6px;border-radius:50%;"></i> <span class="text-muted well well-sm shadow-none ml-2" style="font-size:16px;">Routed at: <strong><?php echo e($inroute->created_at); ?></strong> / by <strong><?php echo e($inroute->routed_by); ?></strong> (<?php echo e($inroute->routed_by_div_unit); ?>)</span></p>
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
                            <button type="button" class="btn btn-secondary btn-sm close-btn float-right" data-dismiss="modal">Close</button>
                            <a href="<?php echo e(url('delete/iv',$inroute->id)); ?>"><button class="btn btn-danger btn-sm">Yes</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <?php else: ?>
        <p class="ml-4">No Route History.</p>
<?php endif; ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/forward/inroute/show.blade.php ENDPATH**/ ?>
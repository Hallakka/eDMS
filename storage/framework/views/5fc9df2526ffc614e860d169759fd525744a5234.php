<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
            <form wire:submit.prevent="submit" method="post" enctype="multipart/form-data">

                <!-- Addressed to --> 
                <h6 class="text-primary mb-3">ASSIGNED TO</h6>
                    <div class="form-row">
                        
                        <div class="form-group col-md-3">
                            <label for="department">Head Office *</label>
                            <select wire:model="selectedDepartment" wire:model.defer="department" class="form-control rounded-0">
                                <option value="" selected>-</option>
                                
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select>
                            <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="office">Office/Unit *</label>
                            <select wire:model="selectedOffice" wire:model.defer="office" class="form-control rounded-0">
                                <option value="" selected>-</option>
                                <?php if(!is_null($selectedDepartment)): ?>
                                    <?php $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($office->id); ?>"><?php echo e($office->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <?php $__errorArgs = ['office'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="div_unit">Director/Division/Personnel *</label>
                            <select wire:model="selectedDivunit" wire:model.defer="div_unit" class="form-control rounded-0">
                                <option value="" selected>-</option>
                                <?php if(!is_null($selectedOffice)): ?>
                                    <?php $__currentLoopData = $div_units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $div_unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($div_unit->id); ?>"><?php echo e($div_unit->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <?php $__errorArgs = ['div_unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="personnel">Name *</label>
                            <select wire:model="selectedPersonnel" wire:model.defer="personnel" name="personnels_id" class="form-control rounded-0">
                                <option value="" selected>-</option>
                                <?php if(!is_null($selectedDivunit)): ?>
                                    <?php $__currentLoopData = $personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($personnel->name); ?>"><?php echo e($personnel->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <?php $__errorArgs = ['personnel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group col-md-3" hidden>
                            <label for="email">Email Address*</label>
                            <select wire:model.defer="email" name="emails_id" class="form-control rounded-0">
                                <?php if(!is_null($selectedPersonnel)): ?>
                                    <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($email->email); ?>"><?php echo e($email->email); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                    </div>

                    <!-- Subject, Remarks / Instructions -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="subject">Subject *</label>
                            <textarea class="form-control rounded-0" id="subject" rows="3" wire:model="subject"></textarea>
                                <ul class="text-muted well well-sm shadow-none">
                                    <li>- Max Length: 1000 characters</li>
                                    <li>- You may remove any sensitive information (monetary amounts, names, etc.)</li>
                                    <li>* if they are not necessary in tracking the document.</li>
                                </ul>
                                <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="note_comment_routed">Remarks / Instructions</label>
                            <textarea class="form-control rounded-0" name="note_comment_routed" id="note_comment_routed" wire:model="note_comment_routed" rows="3"></textarea>
                                <ul class="text-muted well well-sm shadow-none">
                                    <li>- Max Length: 1000 characters</li>
                                </ul>
                        </div>
                    </div>

                    <!-- Action, Deadline, Email -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="action_req">Action Requested * </label>
                            <select wire:model.defer="action_req" name="action_req" class="form-control rounded-0">
                                <option value="" selected>-</option>
                                    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action_req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($action_req); ?>"><?php echo e($action_req); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['action_req'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Deadline</label>
                            <div wire:ignore class="input-group date" id="docDateRoute" data-target-input="nearest" data-docdateroute="window.livewire.find('<?php echo e($_instance->id); ?>')">
                                <input type="text" class="form-control datetimepicker-input" data-target="#docDateRoute" id="docdaterouteInput">
                                <div class="input-group-append" data-target="#docDateRoute" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                            <?php $__errorArgs = ['due_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="modeoftrans">Mode of Transmittal *</label>
                            <select wire:model.defer="modeoftrans" name="modeoftrans" class="form-control rounded-0">
                                <option value="" selected>-</option>
                                    <?php $__currentLoopData = $exmodeoftrans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modeoftrans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($modeoftrans); ?>"><?php echo e($modeoftrans); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['modeoftrans'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- <div class="form-group col-md-4">
                            <label for="cc_email">Email Notification</label>
                            <textarea class="form-control rounded-0" id="cc_email" wire:model="cc_email" rows="1" placeholder="Add CC email account" disabled></textarea>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div> -->
                    </div>

                    <!-- Upload File, Sharepoint -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="file_upload">Upload file </label> <div wire:loading wire:target="file_upload"><span style="color:#007bff; font-weight:500;"><i class="fas fa-upload"></i> Uploading...</i></span></div>
                            <input type="file" class="form-control rounded-0" name="file_upload" wire:model="file_upload">
                                <ul class="text-muted well well-sm shadow-none">
                                    <li>- Allowed formats: PDF, DOCX, JPG, PNG</li>
                                    <li>- Maximum Size: 10MB</li>
                                </ul>
                                <?php $__errorArgs = ['file_upload'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="note_comment">SharePoint Link</label>
                            <div class="input-group">
                                <input type="text" class="form-control rounded-0" id="sharepoint_link" wire:model="sharepoint_link">
                                <div class="input-group-prepend"></div>
                                    <ul class="text-muted well well-sm shadow-none">
                                        <li>- You can upload files via <a href="#">SharePoint</a> and then input the link here.</li>
                                    </ul>
                            </div>
                                <?php $__errorArgs = ['sharepoint_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                    </div>
                    
                    <div class="card-footer mt-6">
                        <button type="reset" class="btn btn-secondary btn-sm">Clear all</button>
                        <a data-toggle="modal" href="#routeExternalSubmit" class="btn btn-primary btn-sm"><i class="fas fa-share-square"></i> Submit</a>
                    </div>

                    <!-- Modal for Submit Button -->
                    <div class="modal fade" id="routeExternalSubmit" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title" id="ModalLabel">Submit Route</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Make sure to select the correct Assigned Personnel and File before confirming. Do you want to submit?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm close-btn float-right" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger btn-sm"> Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>

            </form>

        </div>
    </div>
</div>

<script>
    window.addEventListener('closeModal', event=> {
        $('#exampleModal').modal('hide')
    });
</script>

<!-- <script>
    $('#exampleModal').on('hidden.bs.modal', function () { 
    location.reload();
});
</script> -->
<?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/forward/forward-docs.blade.php ENDPATH**/ ?>
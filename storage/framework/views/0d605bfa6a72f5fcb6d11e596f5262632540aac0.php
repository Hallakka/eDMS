<div>

    <div class="card-body">

        <!-- Document Details -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-alt mr-2"></i> Document Details</li>
            </ol>
        </nav>

        <form wire:submit.prevent="submit" enctype="multipart/form-data">

            <!-- Recipient --> 
            <p class="text-primary my-3"> ADDRESS TO</p>

            <div class="form-row">
                <!-- Department -->
                <div class="form-group col-md-4">
                    <label for="department">Head Office/s</label>
                    <select wire:model="selectedDepartment" wire:model.defer="department" class="form-control" id="department">
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

                <!-- Office/Unit -->
                <?php if(!is_null($selectedDepartment)): ?>
                <div class="form-group col-md-4">
                    <label for="office">Office/Unit</label>
                    <select wire:model="selectedOffice" wire:model.defer="office" class="form-control" id="office">
                        <option value="" selected>-</option>
                            <?php $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($office->id); ?>"><?php echo e($office->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </select>
                </div>
                <?php endif; ?>
                
                <!-- Director/Division/Personnel -->
                <?php if(!is_null($selectedOffice)): ?>
                <div class="form-group col-md-4">
                    <label for="div_unit">Director/Division/Personnel</label>
                    <select wire:model.defer="div_unit" class="form-control" id="div_unit">
                        <option value="" selected>-</option>
                            <?php $__currentLoopData = $div_units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $div_unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($div_unit->name); ?>"><?php echo e($div_unit->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <?php endif; ?>

                <!-- Original Name -->
                <!-- <div class="form-group col-md-3"> -->
                    <!-- <label for="personnel">Personnel</label>
                    <select wire:model="selectedPersonnel" wire:model.defer="personnel" name="personnels_id" class="form-control rounded-0">
                        <option value="" selected>-</option>
                        <?php if(!is_null($selectedDiv_unit)): ?>
                            <?php $__currentLoopData = $personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($personnel->name); ?>"><?php echo e($personnel->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select> -->

                    <!-- <label for="personnel">Name *</label>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0" id="personnel" wire:model="personnel">
                        <div class="input-group-prepend"></div>
                    </div>
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
                </div> -->
            </div>

            <!-- Personnel (For) -->
            <div class="form-row">
                <div wire:ignore class="form-group col-md-6">
                    <label for="personnel">and/or For</label>
                    <select wire:model="personnel" class="form-control select2" id="personnel">
                        <option value="" selected>-</option>    
                            <?php $__currentLoopData = $personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($personnel->name); ?> / (<?php echo e($personnel->div_unit); ?>)"><?php echo e($personnel->name); ?> (<?php echo e($personnel->div_unit); ?>)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            </div>

            <!-- Type & Class -->
            <div class="form-row">
                <div wire:ignore class="form-group col-md-6">
                    <label for="doc_type">Type <code>*</code></label>
                    <select wire:model.defer="doc_type" name="doc_type" class="form-control select2" id="doc_type">
                        <option value="" selected>-</option>
                        <?php $__currentLoopData = $doctype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($doc_type); ?>"><?php echo e($doc_type); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['doc_type'];
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

                <div wire:ignore class="form-group col-md-6">
                    <label for="doc_class">Classification <code>*</code></label>
                    <select wire:model.defer="doc_class" name="doc_class" class="form-control select2" id="doc_class">
                        <option value="" selected>-</option>
                            <?php $__currentLoopData = $docclass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc_class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($doc_class); ?>"><?php echo e($doc_class); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['doc_class'];
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

            <!-- Title & Subject -->
            <div class="form-row">
                <!-- <div class="form-group col-md-6">
                    <label for="title">Title *</label>
                    <textarea class="form-control rounded-0" id="title" rows="3" wire:model="title"></textarea>
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div> -->

                <div class="form-group col-md-12">
                    <label for="subject">Subject <code>*</code></label>
                    <textarea class="form-control" id="subject" rows="3" wire:model="subject"></textarea>
                        <ul class="text-muted well well-sm shadow-none">
                            <li>- Max Length: 1000 characters</li>
                            <li>- You may remove any sensitive information (monetary amounts, names, etc.). If they are not necessary in tracking the document.</li>
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
            </div>
                    
            <!-- Sender's Details -->
            <nav aria-label="breadcrumb" class="mt-0 mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-tie mr-2"></i> Sender's Details</li>
                </ol>
            </nav>

            <!-- MOD & Profile -->
            <div  class="form-row">
                <div wire:ignore class="form-group col-md-6">
                    <label for="mode_of_trans">Mode of Transmittal <code>*</code></label>
                    <select wire:model.defer="mode_of_trans" name="mode_of_trans" class="form-control select2" id="mode_of_trans">
                        <option value="" selected>-</option>
                            <?php $__currentLoopData = $modeoftrans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mode_of_trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($mode_of_trans); ?>"><?php echo e($mode_of_trans); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['mode_of_trans'];
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

                <div wire:ignore class="form-group col-md-6">
                    <label for="s_profile">Profile <code>*</code></label>
                    <select wire:model.defer="s_profile" name="s_profile" class="form-control select2" id="s_profile">
                        <option value="" selected>-</option>
                            <?php $__currentLoopData = $sprofile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($s_profile); ?>"><?php echo e($s_profile); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                        <?php $__errorArgs = ['s_profile'];
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

            <!-- Name & Address -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="s_name">Name <code>*</code></label>
                    <textarea type="text" class="form-control" id="s_name" rows="3" wire:model="s_name"></textarea>
                        <?php $__errorArgs = ['s_name'];
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
                    <label for="s_address">Address</label>
                    <textarea type="text" class="form-control" id="s_address" rows="3" wire:model="s_address"></textarea>
                        <?php $__errorArgs = ['s_address'];
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

            <!-- Contact -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="s_email">Email Address</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="s_email" wire:model="s_email">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="s_contact">Contact Number</label>
                    <div class="input-group">
                        <input wire:model="s_contact" type="text" class="form-control" id="s_contact" >
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    </div>
                    <?php $__errorArgs = ['s_contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <!-- Receiver's Details -->
            <nav aria-label="breadcrumb" class="mt-6 mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user-edit mr-2"></i> Receiver's Details</li>
                </ol>
            </nav>

            <!-- Date & Time -->
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>Date Received <code>*</code></label>
                    <div wire:ignore class="input-group date" id="docDateReceived" data-target-input="nearest" data-docdatereceived="window.livewire.find('<?php echo e($_instance->id); ?>')">
                        <input type="text" class="form-control datetimepicker-input" data-target="#docDateReceived" id="docdatereceivedInput">
                        <div class="input-group-append" data-target="#docDateReceived" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                    </div>
                        <?php $__errorArgs = ['date_received'];
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
                <label>Time Received <code>*</code></label>
                    <div wire:ignore class="input-group date" id="docTimeReceived" data-target-input="nearest" data-doctimereceived="window.livewire.find('<?php echo e($_instance->id); ?>')">
                    <input type="text" class="form-control datetimepicker-input" data-target="#docTimeReceived" id="doctimereceivedInput" >
                        <div class="input-group-append" data-target="#docTimeReceived" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                    </div>
                        <?php $__errorArgs = ['time_received'];
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

            <!-- Name and Comment -->
            <div class="form-row">
                <div wire:ignore class="form-group col-md-6">
                    <label for="received_by">Received by <code>*</code></label>
                    <select wire:model="received_by" class="form-control select2" id="received_by">
                        <option value="" selected>-</option>    
                            <?php $__currentLoopData = $personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($personnel->name); ?> (<?php echo e($personnel->div_unit); ?>)"><?php echo e($personnel->div_unit); ?> - <?php echo e($personnel->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['received_by'];
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
                    <label for="comment">Remarks</label>
                    <textarea type="text" class="form-control" id="comment" rows="2" wire:model="comment"></textarea>
                        <ul class="text-muted well well-sm shadow-none">
                            <li>- Max Length: 500 characters</li>
                        </ul>    
                        <?php $__errorArgs = ['comment'];
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
            
        </div>
                    
            <div class="card-footer">
                <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Cancel</button>
                <button type="reset" class="btn btn-secondary btn-sm">Clear all</button>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
            </div>
        </form>


</div>

<?php $__env->startPush('personnel-js'); ?>
<script>
    $(document).ready(function() {
        $('#personnel').select2();
        $('#personnel').on('change', function (e) {
            var data = $('#personnel').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('personnel', data);
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('doc_type-js'); ?>
<script>
    $(document).ready(function() {
        $('#doc_type').select2();
        $('#doc_type').on('change', function (e) {
            var data = $('#doc_type').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('doc_type', data);
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('doc_class-js'); ?>
<script>
    $(document).ready(function() {
        $('#doc_class').select2();
        $('#doc_class').on('change', function (e) {
            var data = $('#doc_class').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('doc_class', data);
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('mode_of_trans-js'); ?>
<script>
    $(document).ready(function() {
        $('#mode_of_trans').select2();
        $('#mode_of_trans').on('change', function (e) {
            var data = $('#mode_of_trans').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('mode_of_trans', data);
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('s_profile-js'); ?>
<script>
    $(document).ready(function() {
        $('#s_profile').select2();
        $('#s_profile').on('change', function (e) {
            var data = $('#s_profile').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('s_profile', data);
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('received_by-js'); ?>
<script>
    $(document).ready(function() {
        $('#received_by').select2();
        $('#received_by').on('change', function (e) {
            var data = $('#received_by').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('received_by', data);
        });
    });
</script>
<?php $__env->stopPush(); ?>

<!-- Select2 Dropdown for Department, Office, Div_unit (Working but returning to default style) -->
<!-- <?php $__env->startPush('addressed-to-js'); ?>
<script>
    $(document).ready(function() {
        $('.form-select').select2();
        $('#department').on('change', function (e) {
            console.log(e.target.value);
            var data = $('#department').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('selectedDepartment', data);
        });

        $('#office').select2();
        $('#office').on('change', function (e) {
            console.log(e.target.value);
            var data = $('#office').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('selectedOffice', data);
        });

        $('#div_unit').select2();
        $('#div_unit').on('change', function (e) {
            console.log(e.target.value);
            var data = $('#div_unit').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('div_unit', data);
        });
    });
</script>
<?php $__env->stopPush(); ?> -->

<script>
    function goBack() {
        window.history.back();
    }
</script>


 <?php /**PATH C:\xampp\htdocs\doctracker\resources\views/livewire/docs/e/create-new.blade.php ENDPATH**/ ?>
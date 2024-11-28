

<?php $__env->startSection('content'); ?>

        <style>
        .table td, .table th {
            color:#000;
        }
        </style>

       <!-- Content Header (Page header) -->
       <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Document Profile <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. <?php echo e($externals->dts); ?><?php echo e($externals->id); ?></span></h5>
                    </div><!-- /.col -->

                    <div class="col-sm-4" >
                        
                    </div>


                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">

                     <?php if(Session::has('message')): ?>
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo e(Session::get('message')); ?>

                        </div>
                      <?php endif; ?>

                      <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <?php echo e($message); ?>

                        </div>
                      <?php endif; ?>

                    <div class="card card-outline card-info">
                        <div class="card-header p-0 p-1 border-bottom-0">

                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#summary" data-toggle="tab">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" href="#route" data-toggle="tab">Route History</a></li>
                            </ul>
                        </div>

                        <!-- Document Profile -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Overview tab -->
                                <div class="active tab-pane" id="summary">
                                    <div class="post">

                                        <div class="row">
                                            <!-- left side -->
                                            <div class="col-lg-8 col-md-12 col-sm-12 table-responsive">
                                                
                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                           <p class="my-0 mb-0"><i class="fas fa-file-alt mr-2"></i> Document Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">Addressed to</th>
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
                                                                        <?php elseif($externals->department == '4'): ?>
                                                                            Office of the Deputy Director General for Operations (ODDGO)
                                                                        <?php else: ?>
                                                                            All Offices
                                                                    <?php endif; ?> <br />
                                                                <?php endif; ?>
                                                                    
                                                                <?php if($externals->office > 0): ?>
                                                                    <?php if($externals->office == '1'): ?>
                                                                            ODG
                                                                        <?php elseif($externals->office == '2'): ?>
                                                                            Information and Public Relations Division (IPRD)
                                                                        <?php elseif($externals->office == '3'): ?>
                                                                            ODDGAF
                                                                        <?php elseif($externals->office == '4'): ?>
                                                                            Finance and Administrative Office (FAO)
                                                                        <?php elseif($externals->office == '5'): ?>
                                                                            Information and Communications Technology Unit (ICTU)
                                                                        <?php elseif($externals->office == '6'): ?>
                                                                            Planning Unit (PU)
                                                                        <?php elseif($externals->office == '7'): ?>
                                                                            ODDGL
                                                                        <?php elseif($externals->office == '8'): ?>
                                                                            Investigation, Enforcement and Litigation Office (IELO)
                                                                        <?php elseif($externals->office == '9'): ?>
                                                                            Legal and Public Assistance Office (LPAO)
                                                                        <?php elseif($externals->office == '10'): ?>
                                                                            ODDGO
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
                                                           <p class="my-0 mb-0"><i class="fas fa-user-tie mr-2"></i> Sender's Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">Name</th>
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
                                                           <p class="my-0 mb-0"><i class="fas fa-user-edit mr-2"></i> Receiver's Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">Received by</th>
                                                        <td><?php echo e($externals->received_by); ?> <br /> <?php echo e($externals->received_by_div_unit); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time received</th>
                                                        <td><?php echo e($externals->date_received); ?> <?php echo e($externals->time_received); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Remarks</th>
                                                        <td height="100px"><?php echo e($externals->comment); ?></td>
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

                                            <!-- Modal for File upload
                                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content modal-lg">
                                                        <embed src="<?php echo e(asset('/storage/'.$externals->filename)); ?>"/>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-info"><i class="fa fa-download"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <!-- right side -->
                                            <div class="col-lg-4 col-md-12 col-sm-12 table-responsive">
                                                <form action="<?php echo e(route('ev.update',$externals->id)); ?>" method="POST" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>

                                                    <table class="table table-bordered table-striped">
                                                        <tr>
                                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                                <p class="my-0 mb-0">
                                                                    <?php if($externals->status <> 'Closed'): ?>
                                                                        <i class="fas fa-folder-open mr-2"></i>
                                                                        <?php else: ?>
                                                                            <i class="fas fa-folder mr-2"></i>
                                                                    <?php endif; ?>

                                                                Document Status</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <?php if($externals->status <> 'Closed'): ?>
                                                            <td><select name="status" class="form-control">
                                                                    <option value="<?php echo e($externals->status); ?>" selected><?php echo e($externals->status); ?></option>
                                                                    <option value="Open">Open</option>
                                                                    <option value="Closed">Closed</option>
                                                                </select>
                                                            </td>
                                                            <?php else: ?>
                                                            <td><select name="status" class="form-control" disabled>
                                                                    <option value="<?php echo e($externals->status); ?>" selected><?php echo e($externals->status); ?></option>
                                                                </select>
                                                            </td>
                                                            <?php endif; ?>
                                                            <?php if($externals->status <> 'Closed'): ?>
                                                                <td style="width:40%;">
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exdocstatusSave" data-whatever="@getbootstrap"><i class="fas fa-save mr-2"></i> Save</button>
                                                                    <!-- <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-save mr-2"></i> Save</button> -->
                                                                </td>
                                                                <?php else: ?>
                                                                <td style="width:40%;">
                                                                    <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save mr-2"></i> Save</button>
                                                                </td>
                                                            <?php endif; ?>
                                                        </tr>

                                                        <!-- Modal for Doc Status Save Button -->
                                                        <div class="modal fade" id="exdocstatusSave" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-danger">
                                                                        <h5 class="modal-title" id="ModalLabel">Document Status</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Do you want to save this status?</p>
                                                                        <h6 class="mt-3"><i class="fas fa-exclamation-circle"></i> Closing this document is not reversible.</h6>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary btn-sm close-btn float-right" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" class="btn btn-danger btn-sm"> Confirm</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </table>

                                                </form>

                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <th width="40%">Created by</th>
                                                        <td><?php echo e($externals->created_by); ?> <br /> 
                                                        <span class="ml-0" style="font-size:14px;"><?php echo e($externals->created_by_div_unit); ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time created</th>
                                                        <td><?php echo e($externals->created_at); ?></td>
                                                    </tr>
                                                </table>

                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <th width="40%">Closed by</th>
                                                        <td><?php echo e($externals->modified_by); ?> <br /> 
                                                        <span class="ml-0" style="font-size:14px;"><?php echo e($externals->modified_by_div_unit); ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time modified</th>
                                                        <td><?php echo e($externals->updated_at); ?></td>
                                                    </tr>
                                                </table>

                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#QRModal" data-whatever="@getbootstrap"><i class="fas fa-qrcode"></i> Generate QR Code</button>
                                                <!-- <a href="/files/ev/qr-code/<?php echo e($externals->id); ?>" class="edit btn btn-primary"><i class="fas fa-qrcode"></i> Generate QR Code</i></a> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- Route History Tab -->
                                <div class="tab-pane" id="route">
                                    <?php echo $__env->make('livewire.files.forward.exroute.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                            </div>
                        </div>

                        <!-- Footer buttons -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                            <!-- <a href="/files/ev/edit/<?php echo e($externals->id); ?>" class="edit btn btn-primary" title="Edit"><i class="fas fa-edit"></i> Edit</i></a> -->
                            <?php if($externals->status <> 'Closed'): ?>
                                    <?php if(Auth::check() && (Auth::user()->name == $externals->created_by)): ?>
                                        <?php if(count($exroute) > 0): ?>
                                            <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                                            <?php else: ?> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-share-square"></i> Add Route</button>
                                        <?php endif; ?>
                                        <?php else: ?> <!-- <button type="button" class="btn btn-secondary btn-sm float-right" disabled><i class="fas fa-edit"></i> Update</button> -->
                                    <?php endif; ?>
                                <?php else: ?> <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                            <?php endif; ?>
                            
                            <!-- <div  class="float-right">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle float-right" data-toggle="dropdown">
                                    <i class="fas fa-print"></i> Print
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="/files/ev/print/<?php echo e($externals->id); ?>" class="btnprn btn">Overview</a></li>
                                    <li class="dropdown-item"><a href="/files/forward/exroute/print/<?php echo e($externals->id); ?>" class="btnprn btn">Route History</a></li>
                                </ul>
                            </div> -->

                            <div class="float-right mr-1">
                                <a href="/files/ev/pdf/<?php echo e($externals->id); ?>" class="edit btn btn-primary btn-sm" title="PDF"><i class="fas fa-file-download"></i> Export to PDF</a>
                            </div>

                        </div>

                        <!-- Modal for Add Route -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ADD ROUTE</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('files.forward.forward-docs')->html();
} elseif ($_instance->childHasBeenRendered('QYyN4iZ')) {
    $componentId = $_instance->getRenderedChildComponentId('QYyN4iZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('QYyN4iZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QYyN4iZ');
} else {
    $response = \Livewire\Livewire::mount('files.forward.forward-docs');
    $html = $response->html();
    $_instance->logRenderedChild('QYyN4iZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                    </div>
                                </div>
                            </div>
                        </div> 

                        <!-- Modal for QR Code -->
                        <div class="modal fade" id="QRModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">GENERATE QR CODE</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <?php echo $__env->make('livewire.files.ev.qrcode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.col -->

                <br>
            </div>
        </div>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.btnprn').printPage();
            });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/ev/show.blade.php ENDPATH**/ ?>
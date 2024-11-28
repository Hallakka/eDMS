

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
                        <h5 class="mr-0">Document Profile <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. <?php echo e($internals->dts); ?><?php echo e($internals->id); ?></span></h5>
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
                                            <!-- Right side -->
                                            <div class="col-lg-8 col-md-12 col-sm-12 table-responsive">
                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                           <p class="my-0 mb-0"><i class="fas fa-file-alt mr-2"></i> Document Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">Addressed to</th>
                                                        <td><?php echo e($internals->personnel); ?> <br />
                                                        <span class="ml-0" style="font-size:14px;">
                                                            <?php if($internals->department > 0): ?>
                                                                <?php if($internals->department == '1'): ?>
                                                                        Office of the Director General (ODG)
                                                                    <?php elseif($internals->department == '2'): ?>
                                                                        Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                                                    <?php elseif($internals->department == '3'): ?>
                                                                        Office of the Deputy Director General for Legal (ODDGL)
                                                                    <?php else: ?>
                                                                        Office of the Deputy Director General for Operations (ODDGO)
                                                                <?php endif; ?> <br />
                                                            <?php endif; ?>
                                                                
                                                            <?php if($internals->office > 0): ?>
                                                                <?php if($internals->office == '1'): ?>
                                                                    ODG - Personnel
                                                                    <?php elseif($internals->office == '2'): ?>
                                                                        Public Relations Unit (PRU)
                                                                    <?php elseif($internals->office == '3'): ?>
                                                                        ODDGAF - Personnel
                                                                    <?php elseif($internals->office == '4'): ?>
                                                                        Finance and Administrative Office (FAO)
                                                                    <?php elseif($internals->office == '5'): ?>
                                                                        Information and Communications Technology Unit (ICTU)
                                                                    <?php elseif($internals->office == '6'): ?>
                                                                        Planning Unit (PU)
                                                                    <?php elseif($internals->office == '7'): ?>
                                                                        ODDGL - Personnel
                                                                    <?php elseif($internals->office == '8'): ?>
                                                                        Investigation, Enforcement and Litigation Office (IELO)
                                                                    <?php elseif($internals->office == '9'): ?>
                                                                        Legal and Public Assistance Office (LPAO)
                                                                    <?php elseif($internals->office == '10'): ?>
                                                                        ODDGO - Personnel
                                                                    <?php elseif($internals->office == '11'): ?>
                                                                        Better Regulations Office (BRO)
                                                                    <?php else: ?>
                                                                        Compliance Monitoring and Evaluation Office (CMEO)
                                                                    
                                                                <?php endif; ?> <br />
                                                            <?php endif; ?>

                                                            <?php if($internals->div_unit > 0): ?>
                                                                <?php echo e($internals->div_unit); ?>

                                                            <?php endif; ?>
                                                        </span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Subject</th>
                                                        <td><?php echo e($internals->subject); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Classification</th>
                                                        <td><?php echo e($internals->doc_class); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Type</th>
                                                        <td><?php echo e($internals->doc_type); ?></td>
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                           <p class="my-0 mb-0"><i class="fas fa-info-circle"></i> Sending Details</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="25%">From</th>
                                                        <td><?php echo e($internals->s_name); ?> <br /> 
                                                        <span class="ml-0" style="font-size:14px;"><?php echo e($internals->created_by_div_unit); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Address</th>
                                                        <td><?php echo e($internals->s_email); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time Sent</th>
                                                        <td><?php echo e($internals->created_at); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mode of Transmittal</th>
                                                        <td><?php echo e($internals->mode_of_trans); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Remarks</th>
                                                        <td height="100px"><?php echo e($internals->comment); ?></td>
                                                    </tr>
                                                </table>
                                                
                                            </div>

                                            <!-- Left side -->
                                            <div class="col-lg-4 col-md-12 col-sm-12 table-responsive">
                                                <form action="<?php echo e(route('iv.update',$internals->id)); ?>" method="POST" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>

                                                    <table class="table table-bordered table-striped">
                                                        <tr>
                                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                                <p class="my-0 mb-0">
                                                                    <?php if($internals->status <> 'Closed'): ?>
                                                                        <i class="fas fa-folder-open mr-2"></i>
                                                                        <?php else: ?>
                                                                            <i class="fas fa-folder mr-2"></i>
                                                                    <?php endif; ?>

                                                                Document Status</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <?php if($internals->status <> 'Closed'): ?>
                                                            <td><select name="status" class="form-control">
                                                                    <option value="<?php echo e($internals->status); ?>" selected><?php echo e($internals->status); ?></option>
                                                                    <option value="Open">Open</option>
                                                                    <option value="Closed">Closed</option>
                                                                </select>
                                                            </td>
                                                            <?php else: ?>
                                                            <td><select name="status" class="form-control" disabled>
                                                                    <option value="<?php echo e($internals->status); ?>" selected><?php echo e($internals->status); ?></option>
                                                                </select>
                                                            </td>
                                                            <?php endif; ?>
                                                            <?php if($internals->status <> 'Closed'): ?>
                                                                <td style="width:40%;">
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#indocstatusSave" data-whatever="@getbootstrap"><i class="fas fa-save mr-2"></i> Save</button>
                                                                    <!-- <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-save mr-2"></i> Save</button> -->
                                                                </td>
                                                                <?php else: ?>
                                                                <td style="width:40%;">
                                                                    <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save mr-2"></i> Save</button>
                                                                </td>
                                                            <?php endif; ?>
                                                        </tr>

                                                        <!-- Modal for Doc Status Save Button -->
                                                        <div class="modal fade" id="indocstatusSave" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                                                        <th width="40%">Closed by</th>
                                                        <td><?php echo e($internals->modified_by); ?> <br /> 
                                                        <span class="ml-0" style="font-size:14px;"><?php echo e($internals->modified_by_div_unit); ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time modified</th>
                                                        <td><?php echo e($internals->updated_at); ?></td>
                                                    </tr>
                                                </table>

                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#QRModal" data-whatever="@getbootstrap"><i class="fas fa-qrcode"></i> Generate QR Code</button>
                                                <!-- <a href="/files/iv/qr-code/<?php echo e($internals->id); ?>" class="edit btn btn-primary"><i class="fas fa-qrcode"></i> Generate QR Code</i></a> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Route History Tab -->
                                <div class="tab-pane" id="route">
                                    <?php echo $__env->make('livewire.files.forward.inroute.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                            </div>
                        </div>
                        
                        <!-- Footer buttons -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                            
                            <?php if($internals->status <> 'Closed'): ?>
                                    <?php if(Auth::check() && (Auth::user()->name == $internals->created_by)): ?>
                                        <?php if(count($inroute) > 0): ?>
                                            <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                                            <?php else: ?> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-share-square"></i> Add Route</button>
                                        <?php endif; ?>
                                        <?php else: ?> <!-- <button type="button" class="btn btn-secondary btn-sm float-right" disabled><i class="fas fa-edit"></i> Update</button> -->
                                    <?php endif; ?>
                                <?php else: ?> <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                            <?php endif; ?>

                            <!-- <div class="float-right">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle float-right" data-toggle="dropdown">
                                    <i class="fas fa-print"></i> Print
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="/files/iv/print/<?php echo e($internals->id); ?>" class="btnprn btn"> Overview</a></li>
                                    <li class="dropdown-item"><a href="/files/forward/inroute/print/<?php echo e($internals->id); ?>" class="btnprn btn"> Route History</a></li>
                                </ul>
                            </div> -->

                            <div class="float-right mr-1">
                                <a href="/files/iv/pdf/<?php echo e($internals->id); ?>" class="edit btn btn-primary btn-sm" title="PDF"><i class="fas fa-file-download"></i> Export to PDF</a>
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
    $html = \Livewire\Livewire::mount('files.forward.forward-in-docs')->html();
} elseif ($_instance->childHasBeenRendered('S7XOMea')) {
    $componentId = $_instance->getRenderedChildComponentId('S7XOMea');
    $componentTag = $_instance->getRenderedChildComponentTagName('S7XOMea');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('S7XOMea');
} else {
    $response = \Livewire\Livewire::mount('files.forward.forward-in-docs');
    $html = $response->html();
    $_instance->logRenderedChild('S7XOMea', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

                                        <?php echo $__env->make('livewire.files.iv.qrcode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/iv/show.blade.php ENDPATH**/ ?>
                    <style>
                        table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        }

                        td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 5px;
                        }

                    </style>

                    <!-- DOCUMENT ROUTING SLIP -->

                        <div class="col-12 mb-3">
                            <img src="<?php echo $header_logo1 ?>" style="position:fixed;top:-30px;width:250px height:60px;float:right;margin-botton:30px">
                        </div>

                        <br/><br/><br/>

                        <table>
                            <tr>
                                <td colspan="2" style="background:#404040;color:#FFFFFF;padding:5px;text-align:center;">
                                    DOCUMENT ROUTING SLIP
                                </td>
                            </tr>
                        </table>

                        <br/>

                        <table>
                            <tr>
                                <th>DTS No.</th>
                                <th width="25%">Document Status</th>
                                <th>ARTA-EDTS URL</th>
                            </tr>
                            <tr>
                                <td><?php echo e($internals->dts); ?><?php echo e($internals->id); ?></td>
                                <td><?php echo e($internals->status); ?></td>
                                <td>http://10.20.29.32/files/iv/<?php echo e($internals->id); ?></td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                Document Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Addressed to</th>
                                <td>
                                    <?php if($internals->personnel > 0): ?>
                                        <?php echo e($internals->personnel); ?> <br />
                                    <?php endif; ?>
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
                                </span>
                                </td>
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

                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                    ARTA-EDTS Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Closed by</th>
                                <td><?php echo e($internals->modified_by); ?> <br /> 
                                    <span class="ml-0" style="font-size:14px;"><?php echo e($internals->modified_by_div_unit); ?></td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td><?php echo e($internals->updated_at); ?></td>
                            </tr>
                        </table>

                        <img src="<?php echo $footer_logo1 ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">

                        <br/>

                        <!-- DOCUMENT ROUTING AND TRACKING RECORD -->

                            <table>
                                <tr>
                                    <td colspan="2" style="background:#404040;color:#FFFFFF;padding:5px;text-align:center;">
                                        DOCUMENT ROUTING AND TRACKING RECORD
                                    </td>
                                </tr>
                            </table>

                            <table>
                                <tr style="background:#f2f2f2;">
                                    <th width="25%">From</th>
                                    <th width="25%">To</th>
                                    <th width="10%">Action Requested</th>
                                    <th width="40%">Remarks / Instructions</th>
                                </tr>

                                <?php $__currentLoopData = $internals->inRoute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inRoute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(count($internals->inRoute) > 0): ?>

                                        <tr>
                                            <td><?php echo e($inRoute->routed_by); ?> <br/> <span style="font-size:13px;"><?php echo e($inRoute->routed_by_div_unit); ?> <br/> <?php echo e($inRoute->created_at); ?></span></td>
                                            <td><?php echo e($inRoute->personnel); ?><br />
                                                <span class="ml-0" style="font-size:13px;">
                                                    <?php if($inRoute->div_unit > 0): ?>
                                                        <?php if($inRoute->div_unit == '1'): ?>
                                                        Head Executive Assistant (HEA)
                                                        <?php elseif($inRoute->div_unit == '2'): ?>
                                                            Executive Assistant (EA)
                                                        <?php elseif($inRoute->div_unit == '3'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '4'): ?>
                                                            PRU - Personnel
                                                        <?php elseif($inRoute->div_unit == '5'): ?>
                                                            Executive Assistant (EA)
                                                        <?php elseif($inRoute->div_unit == '6'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '7'): ?>
                                                            Director
                                                        <?php elseif($inRoute->div_unit == '8'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '9'): ?>
                                                            Finance Division
                                                        <?php elseif($inRoute->div_unit == '10'): ?>
                                                            General Services Division (GSD)
                                                        <?php elseif($inRoute->div_unit == '11'): ?>
                                                            Human Resource Development Division (HRDD)
                                                        <?php elseif($inRoute->div_unit == '12'): ?>
                                                            ICTU - Personnel
                                                        <?php elseif($inRoute->div_unit == '13'): ?>
                                                            PU - Personnel
                                                        <?php elseif($inRoute->div_unit == '14'): ?>
                                                            Executive Assistant (EA)
                                                        <?php elseif($inRoute->div_unit == '15'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '16'): ?>
                                                            Director
                                                        <?php elseif($inRoute->div_unit == '17'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '18'): ?>
                                                            Investigation and Enforcement Division (IED)
                                                        <?php elseif($inRoute->div_unit == '19'): ?>
                                                            Litigation Division
                                                        <?php elseif($inRoute->div_unit == '20'): ?>
                                                            Director
                                                        <?php elseif($inRoute->div_unit == '21'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '22'): ?>
                                                            Legal Division
                                                        <?php elseif($inRoute->div_unit == '23'): ?>
                                                            Public Assistance Division (PAD)
                                                        <?php elseif($inRoute->div_unit == '24'): ?>
                                                            Executive Assistant (EA)
                                                        <?php elseif($inRoute->div_unit == '25'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '26'): ?>
                                                            Director
                                                        <?php elseif($inRoute->div_unit == '27'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '28'): ?>
                                                            Better Regulation Division A (BRD A)
                                                        <?php elseif($inRoute->div_unit == '29'): ?>
                                                            Better Regulation Division B (BRD B)
                                                        <?php elseif($inRoute->div_unit == '30'): ?>
                                                            Better Regulation Division C (BRD C)
                                                        <?php elseif($inRoute->div_unit == '31'): ?>
                                                            Better Regulation Division D (BRD D)
                                                        <?php elseif($inRoute->div_unit == '32'): ?>
                                                            Doing Business Division (DBD)
                                                        <?php elseif($inRoute->div_unit == '33'): ?>
                                                            Regulatory Management and Training Division (RMTD)
                                                        <?php elseif($inRoute->div_unit == '34'): ?>
                                                            Director
                                                        <?php elseif($inRoute->div_unit == '35'): ?>
                                                            Administrative Officer
                                                        <?php elseif($inRoute->div_unit == '36'): ?>
                                                            Compliance Monitoring and Evaluation Division A (CMED A)
                                                        <?php elseif($inRoute->div_unit == '37'): ?>
                                                            Compliance Monitoring and Evaluation Division B (CMED B)
                                                        <?php elseif($inRoute->div_unit == '38'): ?>
                                                            Compliance Monitoring and Evaluation Division C (CMED C)
                                                        <?php else: ?>
                                                            Compliance Monitoring and Evaluation Division D (CMED D)
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <br/>
                                                    <?php echo e($inRoute->open_at); ?>

                                                </span>
                                            </td>
                                            <td><?php echo e($inRoute->action_req); ?></td>
                                            <td class="mb-4">Dealine: <?php echo e($inRoute->due_date); ?> <br/> MOT: <?php echo e($inRoute->modeoftrans); ?> <br/><br/> <?php echo e($inRoute->note_comment_routed); ?></td>
                                        </tr>

                                        <?php else: ?>
                                            <p class="ml-4">No Route History.</p>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </table>

                            <img src="<?php echo $footer_logo1 ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">
<?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/iv/pdf.blade.php ENDPATH**/ ?>
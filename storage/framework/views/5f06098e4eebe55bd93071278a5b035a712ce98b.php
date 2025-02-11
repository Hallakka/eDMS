<!-- DON'T CHANGE SPACING -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12"></div>
        
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card-body">
                <?php echo QrCode::size(400)->backgroundColor(255,255,255)->generate(
                   'DOCUMENT DETAILS' .'
DTS No: '.$externals->dts.''.$externals->id.'
Status: '.$externals->status.'
Addressed to: '.$externals->personnel.'
Title: '.$externals->title.' 
Subject: '.$externals->subject.' 
Classification: '.$externals->doc_class.' 
Type: '.$externals->doc_type.'

SENDERS DETAILS
Name: '.$externals->s_name.'
Profile: '.$externals->s_profile.'
Address: '.$externals->s_address.'
Contact Details: '.$externals->s_email.' '.$externals->s_contact.'
Mode of Transmittal: '.$externals->mode_of_trans.'

Received by: '.$externals->received_by.' '.$externals->received_by_div_unit.'
Date & Time received: '.$externals->date_received.' '.$externals->time_received.'
Remarks: '.$externals->comment.'

Created by: '.$externals->created_by.' ('.$externals->created_by_div_unit.')
Date & Time created: '.$externals->created_at.'
Closed by: '.$externals->modified_by.' ('.$externals->modified_by_div_unit.')
Date & Time modified: '.$externals->updated_at.''); ?>

            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12"></div>
    </div>
</div><?php /**PATH C:\inetpub\wwwroot\doctracker\resources\views/livewire/files/ev/qrcode.blade.php ENDPATH**/ ?>
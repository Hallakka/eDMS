@extends('layouts.app')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h5 class="mr-0">Edit Route Details <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. {{ $exroute->dts }}{{ $exroute->dts_no }}</span></h5>
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

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" style="margin-bottom:30px">
                          {{ $message }}
                        </div>
                    @endif

                  <!-- Default box -->
                  <div class="card card-outline card-info">
                    <div class="card-body">

                    <form action="{{ route('forward.exroute.updateroute',$exroute->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        
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
                                        <td>{{ $exroute->personnel }} <br /> 
                                            <span class="ml-0" style="font-size:14px;">
                                            @if($exroute->department > 0)
                                                @if ($exroute->department == '1')
                                                        ODG
                                                    @elseif ($exroute->department == '2')
                                                        ODDGAF
                                                    @elseif ($exroute->department == '3')
                                                        ODDGL
                                                    @else ($exroute->department == '4')
                                                        ODDGO
                                                @endif /
                                            @endif
                                                                            
                                            @if($exroute->office > 0)
                                                @if ($exroute->office == '1')
                                                    ODG - Personnel
                                                    @elseif ($exroute->office == '2')
                                                        PRU
                                                    @elseif ($exroute->office == '3')
                                                        ODDGAF - Personnel
                                                    @elseif ($exroute->office == '4')
                                                        FAO
                                                    @elseif ($exroute->office == '5')
                                                        ICTU
                                                    @elseif ($exroute->office == '6')
                                                        PU
                                                    @elseif ($exroute->office == '7')
                                                        ODDGL - Personnel
                                                    @elseif ($exroute->office == '8')
                                                        IELO
                                                    @elseif ($exroute->office == '9')
                                                        LPAO
                                                    @elseif ($exroute->office == '10')
                                                        ODDGO - Personnel
                                                    @elseif ($exroute->office == '11')
                                                        BRO
                                                    @else ($exroute->office == '12')
                                                        CMEO
                                                @endif /
                                            @endif

                                            @if($exroute->div_unit > 0)
                                                @if ($exroute->div_unit == '1')
                                                    Head Executive Assistant (HEA)
                                                    @elseif ($exroute->div_unit == '2')
                                                        Executive Assistant (EA)
                                                    @elseif ($exroute->div_unit == '3')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '4')
                                                        PRU - Personnel
                                                    @elseif ($exroute->div_unit == '5')
                                                        Executive Assistant (EA)
                                                    @elseif ($exroute->div_unit == '6')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '7')
                                                        Director
                                                    @elseif ($exroute->div_unit == '8')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '9')
                                                        Finance Division
                                                    @elseif ($exroute->div_unit == '10')
                                                        General Services Division (GSD)
                                                    @elseif ($exroute->div_unit == '11')
                                                        Human Resource Development Division (HRDD)
                                                    @elseif ($exroute->div_unit == '12')
                                                        ICTU - Personnel
                                                    @elseif ($exroute->div_unit == '13')
                                                        PU - Personnel
                                                    @elseif ($exroute->div_unit == '14')
                                                        Executive Assistant (EA)
                                                    @elseif ($exroute->div_unit == '15')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '16')
                                                        Director
                                                    @elseif ($exroute->div_unit == '17')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '18')
                                                        Investigation and Enforcement Division (IED)
                                                    @elseif ($exroute->div_unit == '19')
                                                        Litigation Division
                                                    @elseif ($exroute->div_unit == '20')
                                                        Director
                                                    @elseif ($exroute->div_unit == '21')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '22')
                                                        Legal Division
                                                    @elseif ($exroute->div_unit == '23')
                                                        Public Assistance Division (PAD)
                                                    @elseif ($exroute->div_unit == '24')
                                                        Executive Assistant (EA)
                                                    @elseif ($exroute->div_unit == '25')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '26')
                                                        Director
                                                    @elseif ($exroute->div_unit == '27')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '28')
                                                        Better Regulation Division A (BRD A)
                                                    @elseif ($exroute->div_unit == '29')
                                                        Better Regulation Division B (BRD B)
                                                    @elseif ($exroute->div_unit == '30')
                                                        Better Regulation Division C (BRD C)
                                                    @elseif ($exroute->div_unit == '31')
                                                        Better Regulation Division D (BRD D)
                                                    @elseif ($exroute->div_unit == '32')
                                                        Doing Business Division (DBD)
                                                    @elseif ($exroute->div_unit == '33')
                                                        Regulatory Management and Training Division (RMTD)
                                                    @elseif ($exroute->div_unit == '34')
                                                        Director
                                                    @elseif ($exroute->div_unit == '35')
                                                        Administrative Officer
                                                    @elseif ($exroute->div_unit == '36')
                                                        Compliance Monitoring and Evaluation Division A (CMED A)
                                                    @elseif ($exroute->div_unit == '37')
                                                        Compliance Monitoring and Evaluation Division B (CMED B)
                                                    @elseif ($exroute->div_unit == '38')
                                                        Compliance Monitoring and Evaluation Division C (CMED C)
                                                    @else ($exroute->div_unit == '39')
                                                        Compliance Monitoring and Evaluation Division D (CMED D)
                                                    
                                                @endif
                                            @endif
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Remarks / Instructions</th>
                                        <td><textarea type="text" name="note_comment_routed" class="form-control" rows="3">{{ $exroute->note_comment_routed }}</textarea></td>
                                    </tr>

                                    <tr>
                                        <th>Action Requested</th>
                                        <td>
                                            <select name="action_req" id="action_req" class="form-control">
                                                <option value="{{ $exroute->action_req }}" selected>{{ $exroute->action_req }}</option>
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
                                        <td><textarea type="text" name="due_date" class="form-control" rows="1">{{ $exroute->due_date }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Mode of Transmittal</th>
                                        <td>
                                            <select name="modeoftrans" id="modeoftrans" class="form-control">
                                                <option value="{{ $exroute->modeoftrans }}" selected>{{ $exroute->modeoftrans }}</option>
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
                                        <td><a href="{{ asset('/storage/'.$exroute->file_upload) }}" target="_blank" >View</td>
                                    </tr>
                                    <tr>
                                        <th>SharePoint Link</th>
                                        <td><textarea type="text" name="sharepoint_link" class="form-control" rows="1">{{ $exroute->sharepoint_link }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Last updated</th>
                                        <td>{{ $exroute->updated_at }}</td>
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
                                            @if ($exroute->status == 'New')
                                                <label class="badge badge-primary"> {{ $exroute->status }} </label>
                                                @elseif ($exroute->status == 'In-progress')
                                                    <label class="badge badge-danger"> {{ $exroute->status}} </label>
                                                @elseif ($exroute->status == 'Hold')
                                                    <label class="badge badge-warning"> {{ $exroute->status}} </label>
                                                @else ($exroute->status == 'Hold')
                                                    <label class="badge badge-secondary"> {{ $exroute->status}} </label>
                                            @endif
                                        </td>
                                        </tr>
                                        <tr>
                                            <th>Outgoing</th>
                                            <td>{{ $exroute->outgoing }}</td>
                                        </tr>
                                        <tr>
                                            <th>Note / Comment</th>
                                            <td>{{ $exroute->note_comment_personnel}}</td>
                                        </tr>
                                        <tr>
                                            <th>Last modified</th>
                                            <td>{{ $exroute->modified_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Opened at</th>
                                            <td>{{ $exroute->open_at }}</td>
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
 

@endsection
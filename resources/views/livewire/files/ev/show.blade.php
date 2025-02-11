@extends('layouts.app')

@section('content')

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
                        <h5 class="mr-0">Document Profile <span class="ml-2" style="font-size:18px;color:#737373;">DTS No. {{ $externals->dts }}{{ $externals->id }}</span></h5>
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

                     @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{Session::get('message')}}
                        </div>
                      @endif

                      @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible mb-3">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{ $message }}
                        </div>
                      @endif

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
                                                            @if($externals->personnel > 0)
                                                                {{ $externals->personnel }} <br />
                                                            @endif
                                                            <span class="ml-0" style="font-size:14px;">
                                                                @if($externals->department > 0)
                                                                    @if ($externals->department == '1')
                                                                            Office of the Director General (ODG)
                                                                        @elseif ($externals->department == '2')
                                                                            Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                                                        @elseif ($externals->department == '3')
                                                                            Office of the Deputy Director General for Legal (ODDGL)
                                                                        @elseif ($externals->department == '4')
                                                                            Office of the Deputy Director General for Operations (ODDGO)
                                                                        @else ($externals->department == '5')
                                                                            All Offices
                                                                    @endif <br />
                                                                @endif
                                                                    
                                                                @if($externals->office > 0)
                                                                    @if ($externals->office == '1')
                                                                            ODG
                                                                        @elseif ($externals->office == '2')
                                                                            Information and Public Relations Division (IPRD)
                                                                        @elseif ($externals->office == '3')
                                                                            ODDGAF
                                                                        @elseif ($externals->office == '4')
                                                                            Finance and Administrative Office (FAO)
                                                                        @elseif ($externals->office == '5')
                                                                            Information and Communications Technology Unit (ICTU)
                                                                        @elseif ($externals->office == '6')
                                                                            Planning Unit (PU)
                                                                        @elseif ($externals->office == '7')
                                                                            ODDGL
                                                                        @elseif ($externals->office == '8')
                                                                            Investigation, Enforcement and Litigation Office (IELO)
                                                                        @elseif ($externals->office == '9')
                                                                            Legal and Public Assistance Office (LPAO)
                                                                        @elseif ($externals->office == '10')
                                                                            ODDGO
                                                                        @elseif ($externals->office == '11')
                                                                            Better Regulations Office (BRO)
                                                                        @else ($externals->office == '12')
                                                                            Compliance Monitoring and Evaluation Office (CMEO)
                                                                            
                                                                    @endif <br />
                                                                @endif

                                                                @if($externals->div_unit > 0)
                                                                    {{ $externals->div_unit }}
                                                                @endif
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Subject</th>
                                                        <td>{{ $externals->subject }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Classification</th>
                                                        <td>{{ $externals->doc_class }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Type</th>
                                                        <td>{{ $externals->doc_type }}</td>
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
                                                        <td>{{ $externals->s_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Profile</th>
                                                        <td>{{ $externals->s_profile }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td>{{ $externals->s_address }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Contact Details</th>
                                                        <td>{{ $externals->s_email }} <br /> {{ $externals->s_contact }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mode of Transmittal</th>
                                                        <td>{{ $externals->mode_of_trans }}</td>
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
                                                        <td>{{ $externals->received_by }} <br /> {{ $externals->received_by_div_unit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time received</th>
                                                        <td>{{ $externals->date_received }} {{ $externals->time_received }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Remarks</th>
                                                        <td height="100px">{{ $externals->comment }}</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <th>Eloquent Relationship</th>
                                                        <td height="100px">
                                                            @forelse ($externals->exRoute as $exRoute)
                                                                <b>{{ $exRoute['subject'] }}</b>

                                                                @empty

                                                                None.

                                                            @endforelse

                                                            
                                                        </td>
                                                    </tr> -->
                                                </table>
                                            </div>

                                            <!-- Modal for File upload
                                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content modal-lg">
                                                        <embed src="{{ asset('/storage/'.$externals->filename) }}"/>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-info"><i class="fa fa-download"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <!-- right side -->
                                            <div class="col-lg-4 col-md-12 col-sm-12 table-responsive">
                                                <form action="{{ route('ev.update',$externals->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <table class="table table-bordered table-striped">
                                                        <tr>
                                                            <td colspan="2" style="background:#E9ECEF;color:#6c757d;">
                                                                <p class="my-0 mb-0">
                                                                    @if ($externals->status <> 'Closed')
                                                                        <i class="fas fa-folder-open mr-2"></i>
                                                                        @else
                                                                            <i class="fas fa-folder mr-2"></i>
                                                                    @endif

                                                                Document Status</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            @if ($externals->status <> 'Closed')
                                                            <td><select name="status" class="form-control">
                                                                    <option value="{{ $externals->status }}" selected>{{ $externals->status }}</option>
                                                                    <option value="Open">Open</option>
                                                                    <option value="Closed">Closed</option>
                                                                </select>
                                                            </td>
                                                            @else
                                                            <td><select name="status" class="form-control" disabled>
                                                                    <option value="{{ $externals->status }}" selected>{{ $externals->status }}</option>
                                                                </select>
                                                            </td>
                                                            @endif
                                                            @if ($externals->status <> 'Closed')
                                                                <td style="width:40%;">
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exdocstatusSave" data-whatever="@getbootstrap"><i class="fas fa-save mr-2"></i> Save</button>
                                                                    <!-- <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-save mr-2"></i> Save</button> -->
                                                                </td>
                                                                @else
                                                                <td style="width:40%;">
                                                                    <button type="submit" class="btn btn-secondary btn-sm" disabled><i class="fas fa-save mr-2"></i> Save</button>
                                                                </td>
                                                            @endif
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
                                                        <td>{{ $externals->created_by }} <br /> 
                                                        <span class="ml-0" style="font-size:14px;">{{ $externals->created_by_div_unit }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time created</th>
                                                        <td>{{ $externals->created_at }}</td>
                                                    </tr>
                                                </table>

                                                <table class="table table-bordered table-striped">
                                                    <tr>
                                                        <th width="40%">Closed by</th>
                                                        <td>{{ $externals->modified_by }} <br /> 
                                                        <span class="ml-0" style="font-size:14px;">{{ $externals->modified_by_div_unit }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time modified</th>
                                                        <td>{{ $externals->updated_at }}</td>
                                                    </tr>
                                                </table>

                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#QRModal" data-whatever="@getbootstrap"><i class="fas fa-qrcode"></i> Generate QR Code</button>
                                                <!-- <a href="/files/ev/qr-code/{{ $externals->id }}" class="edit btn btn-primary"><i class="fas fa-qrcode"></i> Generate QR Code</i></a> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- Route History Tab -->
                                <div class="tab-pane" id="route">
                                    @include('livewire.files.forward.exroute.show')
                                </div>

                            </div>
                        </div>

                        <!-- Footer buttons -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="goBack()">Back</button>
                            <!-- <a href="/files/ev/edit/{{ $externals->id }}" class="edit btn btn-primary" title="Edit"><i class="fas fa-edit"></i> Edit</i></a> -->
                            @if ($externals->status <> 'Closed')
                                    @if(Auth::check() && (Auth::user()->name == $externals->created_by))
                                        @if(count($exroute) > 0)
                                            <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                                            @else <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-share-square"></i> Add Route</button>
                                        @endif
                                        @else <!-- <button type="button" class="btn btn-secondary btn-sm float-right" disabled><i class="fas fa-edit"></i> Update</button> -->
                                    @endif
                                @else <button type="button" class="btn btn-secondary btn-sm" disabled><i class="fas fa-share-square"></i> Add Route</button>
                            @endif
                            
                            <!-- <div  class="float-right">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle float-right" data-toggle="dropdown">
                                    <i class="fas fa-print"></i> Print
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="/files/ev/print/{{ $externals->id }}" class="btnprn btn">Overview</a></li>
                                    <li class="dropdown-item"><a href="/files/forward/exroute/print/{{ $externals->id }}" class="btnprn btn">Route History</a></li>
                                </ul>
                            </div> -->

                            <div class="float-right mr-1">
                                <a href="/files/ev/pdf/{{ $externals->id }}" class="edit btn btn-primary btn-sm" title="PDF"><i class="fas fa-file-download"></i> Export to PDF</a>
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

                                        @livewire('files.forward.forward-docs')

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

                                        @include('livewire.files.ev.qrcode')

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
@endsection
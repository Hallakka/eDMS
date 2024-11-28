                    <style>
                        table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        }

                        td, th {
                        border: 1px solid #bfbfbf;
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
                                <td>{{ $externals->dts }}{{ $externals->id }}</td>
                                <td>{{ $externals->status }}</td>
                                <td>http://10.20.29.32/files/ev/{{ $externals->id }}</td>
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
                                            @else ($externals->department == '4')
                                                Office of the Deputy Director General for Operations (ODDGO)
                                        @endif <br />
                                    @endif
                                                                    
                                    @if($externals->office > 0)
                                        @if ($externals->office == '1')
                                            ODG - Personnel
                                            @elseif ($externals->office == '2')
                                                Public Relations Unit (PRU)
                                            @elseif ($externals->office == '3')
                                                ODDGAF - Personnel
                                            @elseif ($externals->office == '4')
                                                Finance and Administrative Office (FAO)
                                            @elseif ($externals->office == '5')
                                                Information and Communications Technology Unit (ICTU)
                                            @elseif ($externals->office == '6')
                                                Planning Unit (PU)
                                            @elseif ($externals->office == '7')
                                                ODDGL - Personnel
                                            @elseif ($externals->office == '8')
                                                Investigation, Enforcement and Litigation Office (IELO)
                                            @elseif ($externals->office == '9')
                                                Legal and Public Assistance Office (LPAO)
                                            @elseif ($externals->office == '10')
                                                ODDGO - Personnel
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

                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                Sender's Details
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

                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                    Receiver's Details
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
                                <td>{{ $externals->comment }}</td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td colspan="2" style="background:#f2f2f2;color:#6c757d;padding:5px;">
                                    ARTA-EDTS Details
                                </td>
                            </tr>
                            <tr>
                                <th width="25%">Created by</th>
                                <td>{{ $externals->created_by }} <br /> 
                                    <span class="ml-0" style="font-size:13px;">{{ $externals->created_by_div_unit }}</span></td>
                            </tr>
                            <tr>
                                <th>Date & Time created</th>
                                <td>{{ $externals->created_at }}</td>
                            </tr>
                            <tr>
                                <th width="25%">Closed by</th>
                                <td>{{ $externals->modified_by }} <br /> 
                                    <span class="ml-0" style="font-size:13px;">{{ $externals->modified_by_div_unit }}</span></td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td>{{ $externals->updated_at }}</td>
                            </tr>
                        </table>

                        <img src="<?php echo $footer_logo2 ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">

                        <br/><br/><br/><br/><br/><br/><br/><br/><br/>

                        <!-- DOCUMENT ROUTING AND TRACKING RECORD -->

                        <div class="col-12 mb-3">
                            <img src="<?php echo $header_logo2 ?>" style="position:fixed;top:-30px;width:250px height:60px;float:right;margin-botton:30px">
                        </div>

                        <br/><br/><br/>

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

                            @foreach ($externals->exRoute as $exRoute)
                                @if(count($externals->exRoute) > 0)
                                    <tr>
                                        <td>{{ $exRoute->routed_by }} <br/> <span style="font-size:13px;">{{ $exRoute->routed_by_div_unit }} <br/> {{ $exRoute->created_at }}</span></td>
                                        <td>{{ $exRoute->personnel }}<br />
                                            <span class="ml-0" style="font-size:13px;">
                                                @if($exRoute->div_unit > 0)
                                                    @if ($exRoute->div_unit == '1')
                                                    Head Executive Assistant (HEA)
                                                    @elseif ($exRoute->div_unit == '2')
                                                        Executive Assistant (EA)
                                                    @elseif ($exRoute->div_unit == '3')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '4')
                                                        PRU - Personnel
                                                    @elseif ($exRoute->div_unit == '5')
                                                        Executive Assistant (EA)
                                                    @elseif ($exRoute->div_unit == '6')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '7')
                                                        Director
                                                    @elseif ($exRoute->div_unit == '8')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '9')
                                                        Finance Division
                                                    @elseif ($exRoute->div_unit == '10')
                                                        General Services Division (GSD)
                                                    @elseif ($exRoute->div_unit == '11')
                                                        Human Resource Development Division (HRDD)
                                                    @elseif ($exRoute->div_unit == '12')
                                                        ICTU - Personnel
                                                    @elseif ($exRoute->div_unit == '13')
                                                        PU - Personnel
                                                    @elseif ($exRoute->div_unit == '14')
                                                        Executive Assistant (EA)
                                                    @elseif ($exRoute->div_unit == '15')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '16')
                                                        Director
                                                    @elseif ($exRoute->div_unit == '17')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '18')
                                                        Investigation and Enforcement Division (IED)
                                                    @elseif ($exRoute->div_unit == '19')
                                                        Litigation Division
                                                    @elseif ($exRoute->div_unit == '20')
                                                        Director
                                                    @elseif ($exRoute->div_unit == '21')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '22')
                                                        Legal Division
                                                    @elseif ($exRoute->div_unit == '23')
                                                        Public Assistance Division (PAD)
                                                    @elseif ($exRoute->div_unit == '24')
                                                        Executive Assistant (EA)
                                                    @elseif ($exRoute->div_unit == '25')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '26')
                                                        Director
                                                    @elseif ($exRoute->div_unit == '27')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '28')
                                                        Better Regulation Division A (BRD A)
                                                    @elseif ($exRoute->div_unit == '29')
                                                        Better Regulation Division B (BRD B)
                                                    @elseif ($exRoute->div_unit == '30')
                                                        Better Regulation Division C (BRD C)
                                                    @elseif ($exRoute->div_unit == '31')
                                                        Better Regulation Division D (BRD D)
                                                    @elseif ($exRoute->div_unit == '32')
                                                        Doing Business Division (DBD)
                                                    @elseif ($exRoute->div_unit == '33')
                                                        Regulatory Management and Training Division (RMTD)
                                                    @elseif ($exRoute->div_unit == '34')
                                                        Director
                                                    @elseif ($exRoute->div_unit == '35')
                                                        Administrative Officer
                                                    @elseif ($exRoute->div_unit == '36')
                                                        Compliance Monitoring and Evaluation Division A (CMED A)
                                                    @elseif ($exRoute->div_unit == '37')
                                                        Compliance Monitoring and Evaluation Division B (CMED B)
                                                    @elseif ($exRoute->div_unit == '38')
                                                        Compliance Monitoring and Evaluation Division C (CMED C)
                                                    @else ($exRoute->div_unit == '39')
                                                        Compliance Monitoring and Evaluation Division D (CMED D)
                                                    @endif
                                                @endif

                                                <br/>
                                                {{ $exRoute->open_at }}
                                            </span>
                                        </td>
                                        <td>{{ $exRoute->action_req }}</td>
                                        <td class="mb-4">Dealine: {{ $exRoute->due_date }} <br/> MOT: {{ $exRoute->modeoftrans }} <br/><br/> {{ $exRoute->note_comment_routed }}</td>
                                    </tr>

                                    @else
                                        <p class="ml-4">No Route History.</p>
                                @endif
                            @endforeach
                        </table>

                    <img src="<?php echo $footer_logo1 ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">


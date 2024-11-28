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
                                <td>{{ $internals->dts }}{{ $internals->id }}</td>
                                <td>{{ $internals->status }}</td>
                                <td>http://10.20.29.32/files/iv/{{ $internals->id }}</td>
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
                                    @if($internals->personnel > 0)
                                        {{ $internals->personnel }} <br />
                                    @endif
                                    <span class="ml-0" style="font-size:14px;">
                                    @if($internals->department > 0)
                                        @if ($internals->department == '1')
                                                Office of the Director General (ODG)
                                            @elseif ($internals->department == '2')
                                                Office of the Deputy Director General for Administration & Finance (ODDGAF)
                                            @elseif ($internals->department == '3')
                                                Office of the Deputy Director General for Legal (ODDGL)
                                            @else ($internals->department == '4')
                                                Office of the Deputy Director General for Operations (ODDGO)
                                        @endif <br />
                                    @endif
                                                                    
                                    @if($internals->office > 0)
                                        @if ($internals->office == '1')
                                            ODG - Personnel
                                            @elseif ($internals->office == '2')
                                                Public Relations Unit (PRU)
                                            @elseif ($internals->office == '3')
                                                ODDGAF - Personnel
                                            @elseif ($internals->office == '4')
                                                Finance and Administrative Office (FAO)
                                            @elseif ($internals->office == '5')
                                                Information and Communications Technology Unit (ICTU)
                                            @elseif ($internals->office == '6')
                                                Planning Unit (PU)
                                            @elseif ($internals->office == '7')
                                                ODDGL - Personnel
                                            @elseif ($internals->office == '8')
                                                Investigation, Enforcement and Litigation Office (IELO)
                                            @elseif ($internals->office == '9')
                                                Legal and Public Assistance Office (LPAO)
                                            @elseif ($internals->office == '10')
                                                ODDGO - Personnel
                                            @elseif ($internals->office == '11')
                                                Better Regulations Office (BRO)
                                            @else ($internals->office == '12')
                                                Compliance Monitoring and Evaluation Office (CMEO)
                                        @endif <br />
                                    @endif

                                    @if($internals->div_unit > 0)
                                        {{ $internals->div_unit }}
                                    @endif
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{ $internals->subject }}</td>
                            </tr>
                            <tr>
                                <th>Classification</th>
                                <td>{{ $internals->doc_class }}</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>{{ $internals->doc_type }}</td>
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
                                <td>{{ $internals->modified_by }} <br /> 
                                    <span class="ml-0" style="font-size:14px;">{{ $internals->modified_by_div_unit }}</td>
                            </tr>
                            <tr>
                                <th>Date & Time modified</th>
                                <td>{{ $internals->updated_at }}</td>
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

                                @foreach ($internals->inRoute as $inRoute)
                                    @if(count($internals->inRoute) > 0)

                                        <tr>
                                            <td>{{ $inRoute->routed_by }} <br/> <span style="font-size:13px;">{{ $inRoute->routed_by_div_unit }} <br/> {{ $inRoute->created_at }}</span></td>
                                            <td>{{ $inRoute->personnel }}<br />
                                                <span class="ml-0" style="font-size:13px;">
                                                    @if($inRoute->div_unit > 0)
                                                        @if ($inRoute->div_unit == '1')
                                                        Head Executive Assistant (HEA)
                                                        @elseif ($inRoute->div_unit == '2')
                                                            Executive Assistant (EA)
                                                        @elseif ($inRoute->div_unit == '3')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '4')
                                                            PRU - Personnel
                                                        @elseif ($inRoute->div_unit == '5')
                                                            Executive Assistant (EA)
                                                        @elseif ($inRoute->div_unit == '6')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '7')
                                                            Director
                                                        @elseif ($inRoute->div_unit == '8')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '9')
                                                            Finance Division
                                                        @elseif ($inRoute->div_unit == '10')
                                                            General Services Division (GSD)
                                                        @elseif ($inRoute->div_unit == '11')
                                                            Human Resource Development Division (HRDD)
                                                        @elseif ($inRoute->div_unit == '12')
                                                            ICTU - Personnel
                                                        @elseif ($inRoute->div_unit == '13')
                                                            PU - Personnel
                                                        @elseif ($inRoute->div_unit == '14')
                                                            Executive Assistant (EA)
                                                        @elseif ($inRoute->div_unit == '15')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '16')
                                                            Director
                                                        @elseif ($inRoute->div_unit == '17')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '18')
                                                            Investigation and Enforcement Division (IED)
                                                        @elseif ($inRoute->div_unit == '19')
                                                            Litigation Division
                                                        @elseif ($inRoute->div_unit == '20')
                                                            Director
                                                        @elseif ($inRoute->div_unit == '21')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '22')
                                                            Legal Division
                                                        @elseif ($inRoute->div_unit == '23')
                                                            Public Assistance Division (PAD)
                                                        @elseif ($inRoute->div_unit == '24')
                                                            Executive Assistant (EA)
                                                        @elseif ($inRoute->div_unit == '25')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '26')
                                                            Director
                                                        @elseif ($inRoute->div_unit == '27')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '28')
                                                            Better Regulation Division A (BRD A)
                                                        @elseif ($inRoute->div_unit == '29')
                                                            Better Regulation Division B (BRD B)
                                                        @elseif ($inRoute->div_unit == '30')
                                                            Better Regulation Division C (BRD C)
                                                        @elseif ($inRoute->div_unit == '31')
                                                            Better Regulation Division D (BRD D)
                                                        @elseif ($inRoute->div_unit == '32')
                                                            Doing Business Division (DBD)
                                                        @elseif ($inRoute->div_unit == '33')
                                                            Regulatory Management and Training Division (RMTD)
                                                        @elseif ($inRoute->div_unit == '34')
                                                            Director
                                                        @elseif ($inRoute->div_unit == '35')
                                                            Administrative Officer
                                                        @elseif ($inRoute->div_unit == '36')
                                                            Compliance Monitoring and Evaluation Division A (CMED A)
                                                        @elseif ($inRoute->div_unit == '37')
                                                            Compliance Monitoring and Evaluation Division B (CMED B)
                                                        @elseif ($inRoute->div_unit == '38')
                                                            Compliance Monitoring and Evaluation Division C (CMED C)
                                                        @else ($inRoute->div_unit == '39')
                                                            Compliance Monitoring and Evaluation Division D (CMED D)
                                                        @endif
                                                    @endif

                                                    <br/>
                                                    {{ $inRoute->open_at }}
                                                </span>
                                            </td>
                                            <td>{{ $inRoute->action_req }}</td>
                                            <td class="mb-4">Dealine: {{ $inRoute->due_date }} <br/> MOT: {{ $inRoute->modeoftrans }} <br/><br/> {{ $inRoute->note_comment_routed }}</td>
                                        </tr>

                                        @else
                                            <p class="ml-4">No Route History.</p>
                                    @endif
                                @endforeach

                            </table>

                            <img src="<?php echo $footer_logo1 ?>" style="position:fixed;bottom:-40px;left:0;right:0;height:30px;width:100%;">

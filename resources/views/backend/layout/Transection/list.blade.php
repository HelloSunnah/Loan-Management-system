@extends('backend.master')
@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{session("success")}}
</div>
@endif
@if (session('danger'))
<div class="alert alert-danger">
    {{session("danger")}}
</div>
@endif

<div class="card card-outline card-primary">
    <div class="card-header">

        <center>
            <h3>Transection Histroy</h3>
        </center>
        <div class="card-tools">
        <button onclick="printDiv()">Print</button>

        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive" id="print_history">
            <table id="myTable" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Account Number</th>
                        <th>Account Holder</th>
                        <th>Transection Type</th>
                        <th>Account Type</th>
                        <th>Account Activity</th>
                        <th>Transection Amount</th>
                        <th>Transection Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $data)
                    <tr>
                        <td>{{$data->Transection->account_number}}</td>
                        <td>{{$data->Transection->name}}</td>
                        <td> @if($data->transection_type==1)
                            Deposit @endif
                            @if($data->transection_type==2)
                            Withdraw
                            @endif
                        </td>
                        <td>
                            @if($data->account_type==1)
                            Account @endif
                            @if($data->account_type==2)
                            FDR @endif
                            @if($data->account_type==3)
                            DPS
                            @endif
                            @if($data->account_type==4)
                            Loan
                            @endif


                        </td>
                        <td>
                            @if($data->status==1)

                            <button class="badge text-bg-success">Active</button>
                            @else
                            <button class="badge text-bg-primary">Deactive</button>
                            @endif

                        </td>
                        <td>{{$data->transection_amount}}</td>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div style="display: none"><div id="printable_content" style="font-size: 12px;"></div></div>

</div>


<script src="{{asset('js/printThis.js')}}"></script>

 <script>

    function printDiv(printDiv) {

        $("#printable_content").html($("#print_history").html());
            $("#printable_content #action_table_th").remove();
            
            $("#printable_content #example_length").remove();
            $("#printable_content #example_filter").remove();
            $("#printable_content #example_paginate").remove();

        $("#printable_content").printThis({
            header: `<div class="d-flex justify-content-center">
                                                                                                                                                                                
                        <div class="text-center text-dark">
                            <h4 style="margin-bottom:0px;">Navaratno </h4>
                            <p><b> Transection History</b></p>                                       
                        </div>                      
                </div>`,
            footer: `<div class="d-flex justify-content-between">
                        <small class="m-0">This is auto generated copy.</small>
                        <small class="m-0">Powerd By Navaratno </small>
                    </div>`
        });
    }
</script> 
<!-- <script>
        function printDiv(printDiv) {
            var printContents = document.getElementById('printDiv').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script> -->
<!-- <script>
        function printDiv() {
            var content = document.getElementById('printDiv');
            var contentClone = content.cloneNode(true);

            var printWindow = window.open('', '', 'width=600,height=600');
            printWindow.document.write('<html><head><title>Print Div</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(contentClone.outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script> -->




<div class="d-flex justify-content-center" @endsection
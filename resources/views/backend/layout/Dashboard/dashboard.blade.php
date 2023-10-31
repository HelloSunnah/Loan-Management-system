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

<div class="row mb-3">

    <div class="col-xl-3 col-md-6 mb-4">

        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <center>
                            <h4>Member Personal Amount</h4>
                            <h3>{{$personal_ammount}}</h3>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">

        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <center>
                            <h3>Available DPS Amount</h3>
                            <h4>{{$dps_amount}}</h4>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">

        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <center>
                            <h3>Available FDR Amount</h3>
                            <h4>{{$fdr_amount}}</h4>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">

        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <center>
                            <h3>Loan Provided</h3>
                            <h4>{{$loan}}</h4>
                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">

        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <center>
                            <h3> Collected Loan</h3>

                            <h4>{{$loan_collect}}</h4>

                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">

        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <center>
                            <h3>Official Income</h3>
                            <h4>{{$income}}</h4>

                        </center>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <center>
                            <h3>Official Expense</h3>
                            <h4>{{$expense}}</h4>
                        </center>

                    </div>
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="d-flex justify-content-center" @endsection
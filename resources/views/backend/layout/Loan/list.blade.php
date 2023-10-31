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
        <h3 class="card-title">
            Loan List </h3>
        <div class="card-tools">
            <a href="{{route('loan.create')}}" type="button" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                Create
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="list" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Account Number</th>
                        <th>Account Holder</th>
                        <th>Loan Amount</th>
                        <th>interest</th>
                        <th>interests Amount</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fdr as $data)
                    <tr>
                        <td>{{$data->loan->account_number ??''}}
                        </td>

                        <td>{{$data->loan->name ??''}}</td>
                        <td>
                            {{$data->loan_amount}}
                        </td>
                        <td>
                            {{$data->loan_amount}}
                        </td>
                        <td>
                            {{$data->loan_amount}}
                        </td>
                        <td>
                            {{$data->interest}}%
                        </td>
                        <td>
                            @if($data->status==1)
                            <a class="btn btn-success" href="{{route('loan.status.change',$data->id)}}">
                                active
                            </a>

                            @else
                            <a class="btn btn-danger" href="{{route('loan.status.change',$data->id)}}">
                                Inactive
                            </a>

                            @endif
                        </td>
                        <td>
                            <button>Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="d-flex justify-content-center" @endsection
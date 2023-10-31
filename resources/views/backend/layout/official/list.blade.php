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
            Officical Account List </h3>
        <div class="card-tools">
            <a href="{{route('official.create')}}" type="button" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                Create
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
        <table id="myTable" class="table table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Account Number</th>
                        <th>Father name</th>
                        <th>Mother Name</th>
                        <th>Mobile</th>
                        <th>Nominee Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->account_number}}</td>
                        <td>{{$value->father_name}}</td>
                        <td>{{$value->mother_name}}</td>
                        <td>{{$value->mobile}}</td>
                        <td>{{$value->nominee_name}}</td>
                        <td>
                        <a class="btn btn-success" href="{{route('profile',$value->id)}}">Profile</a>    
                        <a class="btn btn-primary" href="{{route('official.edit',$value->id)}}">Edit</a>    
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="d-flex justify-content-center" @endsection
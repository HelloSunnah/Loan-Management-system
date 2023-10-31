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
           Staff List</h3>
        <div class="card-tools">
            <a href="{{route('staff.create')}}" type="button" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                Create
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="myTable" class="table table-striped table-bordered dt-responsive " cellspacing="0" width="100%">
                <thead>
                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <th>Name</th>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <th>Father Name</th>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <th>Mother Name</th>
                        <th>Image</th>
                        <th>Parmanent Address</th>
                        <th>Salary</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($staffMembers as $member)
                    <tr>
                        <td>{{$member->name}}</td>
                        <td>{{$member->father_name}}</td>
                        <td>{{$member->mother_name}}</td>
                        <td>{{$member->image}}</td>
                        <td>{{$member->permanent_address}}</td>

                        <td>{{$member->salary}}</td>
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
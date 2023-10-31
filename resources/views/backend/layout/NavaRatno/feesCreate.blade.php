@extends('backend.master')
@section('content')

<!--start content-->
<h1>Fees Amount Update</h1>
<main class="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded" style="margin-top: 20px;">
                        <form class="row g-3" method="post" action="{{ route('fees.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Admission Fee<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="admission" value="{{$fees->admission}}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="form-label">Form Fee<span style="color:red;">&nbsp;&nbsp;&nbsp;</span>
                                            <input type="text" class="form-control" name="form" value="{{$fees->form}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Savings Fee<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="savings"  value="{{$fees->savings}}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="form-label">Share Fee<span style="color:red;">&nbsp;&nbsp;&nbsp;</span>
                                            <input type="text" class="form-control" name="share"  value="{{$fees->share}}" required>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>




@endsection
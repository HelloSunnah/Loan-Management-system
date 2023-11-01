@extends('backend.master')




@section('content')

<!--start content-->
<main class="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded" style="margin-top: 20px;">
                        <center>
                            <h2>Accountant Information</h2>
                        </center>
                        <form class="row g-3" method="post" id="studentData" action="{{ route('personal.update',$edit->id) }}" enctype="multipart/form-data">
                            @csrf





                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="name" value="{{$edit->name}}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Name(Bangle)<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="name_bn" value="{{$edit->name_bn}}" >
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>

                                        </div>
                                        <label class="form-label">Father Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="father_name" value="{{$edit->father_name}}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label"> Mother Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="mother_name" value="{{$edit->mother_name}}" >
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>

                                        </div>
                                        <label class="form-label">Present Address<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="present_address" value="{{$edit->present_address}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Parmanent Address<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="parmanent_address" value="{{$edit->parmanent_address}}">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Birth Id<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" placeholder="" name="birth_id" value="{{$edit->birth_id}}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nid <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" name="nid" value="{{$edit->nid}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Birth Date<span style="color:red;">*</span></label>
                                        <input type="date" class="form-control" placeholder="" name="dob" value="{{$edit->dob}}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mobile Number<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" name="mobile" value="{{$edit->mobile}}" >
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Image<span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" placeholder="" name="image" value="{{$edit->image}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Signature<span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" name="signature" value="{{$edit->signature}}">
                                    </div>
                                </div>
                      

                            </div>


                            <div style="margin-top:30px;">
                                <center>
                                    <h2>Nominee Information</h2>
                                </center>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Nominee<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="nominee_name" value="{{$edit->nominee_name}}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nominee Relation<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="nominee_relation" value="{{$edit->nominee_relation}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Father Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="nominee_father_name" value="{{$edit->nominee_father_name}}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mother Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="nominee_mother_name" value="{{$edit->nominee_mother_name}}" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">NID Number<span style="color:red;"></span></label>
                                        <input type="number" class="form-control" placeholder="" name="nominee_nid" value="{{$edit->nominee_nid}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Birth Id<span style="color:red;"></span></label>
                                        <input type="number" class="form-control" name="nominee_birth_id" value="{{$edit->nominee_birth_id}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <label class="form-label">Present Address<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="" name="nominee_present_adress" required value="{{$edit->nominee_present_adress}}">
                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">Profession<span style="color:red;"></span></label>
                                    <input type="text" class="form-control" placeholder="" name="nominee_profession" value="{{$edit->nominee_profession}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Birth Date<span style="color:red;"></span></label>
                                    <input type="date" class="form-control" name="nominee_dob" value="{{$edit->nominee_dob}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nominee Image<span style="color:red;"></span></label>
                                    <input type="file" class="form-control" name="nominee_image" value="{{$edit->nominee_image}}">
                                </div>
                            </div>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">{{ __('app.Submit') }}</button>
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
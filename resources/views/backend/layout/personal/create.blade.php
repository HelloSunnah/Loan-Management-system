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
                        <form class="row g-3" method="post" id="" action="{{ route('personal.create.post') }}" enctype="multipart/form-data">
                            @csrf
                         
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Name(Bangle)<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="name_bn" value="{{ old('name_bn') }}">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>

                                        </div>
                                        <label class="form-label">Father Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="father_name" value="{{ old('father_name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label"> Mother Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="mother_name" value="{{ old('mother_name') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>

                                        </div>
                                        <label class="form-label">Present Address<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="present_address" value="{{ old('present_address') }}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Parmanent Address<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="parmanent_address" value="{{ old('parmanent_address') }}" >
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Birth Id<span style="color:red;"></span></label>
                                        <input type="number" class="form-control" placeholder="" name="birth_id" value="{{ old('dob') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nid <span style="color:red;"></span></label>
                                        <input type="number" class="form-control" name="nid" value="{{ old('nid') }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Birth Date<span style="color:red;"></span></label>
                                        <input type="date" class="form-control" placeholder="" name="dob" value="{{ old('dob') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mobile Number<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Image<span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" placeholder="" name="image" value="{{ old('image') }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Signature<span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" name="signature" value="{{ old('signature') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="row">
                   
                                    <div class="col-md-6">
                                    <label class="form-label">Personal Amount<span style="color:red;"></span></label>
                                    <input type="text" class="form-control" placeholder="" name="personal_amount" value="{{ old('personal_amount') }}">
                                </div>
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
                                        <input type="text" class="form-control" placeholder="" name="nominee_name" value="{{ old('nominee_name') }}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nominee Relation<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="nominee_relation" value="{{ old('nominee_relation') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Father Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="nominee_father_name" value="{{ old('nominee_father_name') }}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mother Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="nominee_mother_name" value="{{ old('nominee_mother_name') }}" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">NID Number<span style="color:red;"></span></label>
                                        <input type="number" class="form-control" placeholder="" name="nominee_nid" value="{{ old('nominee_nid') }}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Birth Id<span style="color:red;"></span></label>
                                        <input type="number" class="form-control" name="nominee_birth_id" value="{{ old('nominee_birth_id') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <label class="form-label">Present Address<span style="color:red;"></span></label>
                                    <input type="text" class="form-control" placeholder="" name="nominee_present_adress" value="{{ old('nominee_present_address') }}" >
                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">Profession<span style="color:red;"></span></label>
                                    <input type="text" class="form-control" placeholder="" name="nominee_profession" value="{{ old('nominee_profession') }}" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Birth Date<span style="color:red;"></span></label>
                                    <input type="date" class="form-control" name="nominee_dob" value="{{ old('nominee_dob') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nominee Image<span style="color:red;"></span></label>
                                    <input type="file" class="form-control" name="nominee_image" value="{{ old('nominee_image') }}">
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
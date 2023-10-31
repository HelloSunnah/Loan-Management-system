@extends('backend.master')
@section('content')
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
                        <form class="row g-3" method="post" id="studentData" action="{{ route('official.create.post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Account Number<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" placeholder="" name="account_number" value="{{ old('account_number') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Id Number<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" name="id_number" value="{{ old('id_number') }}" required>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Name<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Name(Bangle)<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="name_bn" value="{{ old('name_bn') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>

                                        </div>
                                        <label class="form-label">Father Name<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="father_name" value="{{ old('father_name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label"> Mother Name<span style="color:red;"></span></label>
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
                                        <input type="text" class="form-control" placeholder="" name="present_address" value="{{ old('present_address') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Parmanent Address<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="parmanent_address" value="{{ old('parmanent_address') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Birth Id<span style="color:red;"></span></label>
                                        <input type="number" class="form-control" placeholder="" name="birth_id" value="{{ old('dob') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nid <span style="color:red;"></span></label>
                                        <input type="number" class="form-control" name="nid" value="{{ old('mobile') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Birth Date<span style="color:red;"></span></label>
                                        <input type="date" class="form-control" placeholder="" name="dob" value="{{ old('dob') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mobile Number<span style="color:red;"></span></label>
                                        <input type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" required>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Image<span style="color:red;"></span></label>
                                        <input type="file" class="form-control" placeholder="" name="image" value="{{ old('image') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Signature<span style="color:red;"></span></label>
                                        <input type="file" class="form-control" name="signature" value="{{ old('signature') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Personal Amount<span style="color:red;"></span></label>
                                    <input type="text" class="form-control" placeholder="" name="personal_amount" value="{{ old('personal_amount') }}" required>
                                </div>
                            </div>
                            <div style="margin-top:30px;">
                                <center>
                                    <h2>company Information</h2>
                                </center>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Type<span style="color:red;"></span></label>
                                        <select class="form-control" name="company_type" id="">
                                            <option value="private">Private</option>
                                            <option value="public">Public</option>
                                            <option value="share">Share</option>
                                            <option value="combined">Combined</option>
                                            <option value="single">Single</option>
                                            <option value="govt">Govt</option>
                                            <option value="ngo">NGO</option>
                                            <option value="club">Club</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Account Mantainance<span style="color:red;"></span></label>
                                        <select class="form-control" name="account_mantain" id="">
                                            <option value="single">Single</option>
                                            <option value="comnined">combined</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label class="form-label">Account Mantainer Name<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="account_mantainer" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Company Address<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="company_address" id="">
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label class="form-label">Trade License<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="trade_license" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">TIN<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="tin" id="">
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label class="form-label">Issued By<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="issued_by" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Issue Date<span style="color:red;"></span></label>
                                        <input type="date" class="form-control" name="issue_date" id="">
                                    </div>

                                </div>
                            </div>

                            <div style="margin-top:30px;">
                                <center>
                                    <h2>Garanteer Information</h2>
                                </center>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Name<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="garanteer_name" value="{{ old('garanteer_name') }}" required>
                                    </div>
                                    <div class="col-md-6">

                                        <label class="form-label">Name Bangla<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="garanteer_name_bn" value="{{ old('garanteer_name_bn') }}" required>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label class="form-label">NID <span style="color:red;"></span></label>
                                        <input type="number" class="form-control" name="garanteer_nid" value="{{ old('garanteer_nid') }}">
                                    </div>


                                    <div class="col-md-6">
                                        <label class="form-label">Phone <span style="color:red;"></span></label>
                                        <input type="number" class="form-control" name="garanteer_phone" value="{{ old('garanteer_phone') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Image<span style="color:red;"></span></label>
                                        <input type="file" class="form-control" placeholder="" name="garanteer_image" value="{{ old('garanteer_image') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Signature <span style="color:red;"></span></label>
                                        <input type="file" class="form-control" name="garanteer_signature" value="{{ old('garanteer_signature') }}">
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

                                        <label class="form-label">Nominee<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="nominee_name" value="{{ old('nominee_name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nominee Relation<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="nominee_relation" value="{{ old('nominee_relation') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Father Name<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="nominee_father_name" value="{{ old('nominee_father_name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mother Name<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" name="nominee_mother_name" value="{{ old('nominee_mother_name') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">NID Number<span style="color:red;"></span></label>
                                        <input type="text" class="form-control" placeholder="" name="nominee_nid" value="{{ old('nominee_nid') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Birth Id<span style="color:red;"></span></label>
                                        <input type="date" class="form-control" name="nominee_birth_id" value="{{ old('nominee_birth_id') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <label class="form-label">Present Address<span style="color:red;"></span></label>
                                    <input type="text" class="form-control" placeholder="" name="nominee_present_adress" value="{{ old('nominee_present_address') }}" required>
                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">Profession<span style="color:red;"></span></label>
                                    <input type="text" class="form-control" placeholder="" name="nominee_profession" value="{{ old('nominee_profession') }}">
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
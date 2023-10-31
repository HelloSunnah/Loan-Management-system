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
                        <form class="row g-3" method="post" id="studentData" action="{{ route('personal.edit.post') }}" enctype="multipart/form-data">
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

                                        <label class="form-label">Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Name(Bangle)<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="name_bn" value="{{ old('name_bn') }}" required>
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
                                        <label class="form-label">Present Address<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="present_address" value="{{ old('present_address') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Parmanent Address<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="parmanent_address" value="{{ old('parmanent_address') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Birth Id<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" placeholder="" name="birth_id" value="{{ old('dob') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nid <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" name="nid" value="{{ old('nid') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Birth Date<span style="color:red;">*</span></label>
                                        <input type="date" class="form-control" placeholder="" name="dob" value="{{ old('dob') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mobile Number<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" required>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Image<span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" placeholder="" name="image" value="{{ old('image') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Signature<span style="color:red;">*</span></label>
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
                                    <h2>Nominee Information</h2>
                                </center>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Nominee<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="nominee_name" value="{{ old('nominee_name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nominee Relation<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="nominee_relation" value="{{ old('nominee_relation') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Father Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="nominee_father_name" value="{{ old('nominee_father_name') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Mother Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="nominee_mother_name" value="{{ old('nominee_mother_name') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">NID Number<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" placeholder="" name="nominee_nid" value="{{ old('nominee_nid') }}" required>
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






                    {{--<form class="row g-3" method="post"
                            action="{{ route('student.update.post', $studentEdit->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.Student') }} {{ __('app.Name') }}
                                    <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ $studentEdit->name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.RollNumber') }} <span style="color:red;">*</span></label>
                                <input type="number" class="form-control" name="roll_number" value="{{ $studentEdit->roll_number }}" required>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.Email') }} <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="email" value="{{ $studentEdit->email }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.PhoneNumber') }} <span style="color:red;">*</span></label>
                                <input type="number" class="form-control" name="phone" value="{{ $studentEdit->phone }}" required>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label>{{ __('app.Gender') }} <span style="color:red;">*</span></label>


                                <input type="radio" id="Male" name="gender" value="Male" {{ $studentEdit->gender == 'Male' ? 'checked' : '' }} required>
                                <label for="huey">Male</label>

                                <input type="radio" id="Female" name="gender" value="Female" {{ $studentEdit->gender == 'Female' ? 'checked' : '' }}>
                                <label for="dewey">Female</label>

                            </div>
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.Birth') }} <span style="color:red;">*</span></label>
                                <input type="date" id="datepicker" class="form-control" onfocus="this.showPicker()" name="dob" value="{{ $studentEdit->dob }}" required>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.Blood') }}
                                    {{ __('app.Group') }}</label>
                                <select name="blood_group" class="form-control mb-3 js-select" id="formSelect">
                                    <option value="" selected></option>
                                    <option value="A+" {{ $studentEdit->blood_group == 'A+' ? 'selected' : '' }}>A+
                                    </option>
                                    <option value="A-" {{ $studentEdit->blood_group == 'A-' ? 'selected' : '' }}>A-
                                    </option>
                                    <option value="B+" {{ $studentEdit->blood_group == 'B+' ? 'selected' : '' }}>B+
                                    </option>
                                    <option value="B-" {{ $studentEdit->blood_group == 'B-' ? 'selected' : '' }}>B-
                                    </option>
                                    <option value="O+" {{ $studentEdit->blood_group == 'O+' ? 'selected' : '' }}>O+
                                    </option>
                                    <option value="O-" {{ $studentEdit->blood_group == 'O-' ? 'selected' : '' }}>O-
                                    </option>
                                    <option value="AB+" {{ $studentEdit->blood_group == 'AB+' ? 'selected' : '' }}>AB+
                                    </option>
                                    <option value="AB-" {{ $studentEdit->blood_group == 'AB-' ? 'selected' : '' }}>AB-
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.Shift') }} <span style="color:red;">*</span></label>
                                <select class="form-control mb-3 js-select" name="shift" required>
                                    <option value="1" {{ $studentEdit->shift == 1 ? 'selected' : '' }}>Morning</option>
                                    <option value="2" {{ $studentEdit->shift == 2 ? 'selected' : '' }}>Day</option>
                                    <option value="3" {{ $studentEdit->shift == 3 ? 'selected' : '' }}>Evening</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md">
                                <label class="form-label">{{ __('app.Class') }} <span style="color:red;">*</span></label>
                                <select class="form-control mb-3 js-select" aria-label="Default select example" name="class_id" id="class_id" onchange="loadSection()" required>
                                    <option value="{{ $studentEdit->class_id }}" selected>
                                        {{ getClassName($studentEdit->class_id)->class_name }}
                                    </option>
                                    @foreach ($class as $data)
                                    <option value="{{ $data->id }}">{{ $data->class_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md">
                                <label class="form-label">{{ __('app.Section') }} {{ __('app.Name') }}
                                    <span style="color:red;">*</span></label>
                                <select class="form-control mb-3 js-select" id="section_id" name="section_id" required>
                                    <option value="{{ $studentEdit->section_id }}" selected>
                                        {{ getSectionName($studentEdit->section_id)->section_name }}
                                    </option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md" id="group-select">
                                <label class="form-label">{{ __('app.Group') }}
                                    {{ __('app.Name') }}</label>
                                <select class="form-control mb-3" name="group_id" js-select>
                                    <option value=""></option>
                                    <option value="1" {{ $studentEdit->group_id == 1 ? 'selected' : '' }}>Science
                                    </option>
                                    <option value="2" {{ $studentEdit->group_id == 2 ? 'selected' : '' }}>Commerce
                                    </option>
                                    <option value="2" {{ $studentEdit->group_id == 3 ? 'selected' : '' }}>Humanities
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('app.Image') }}</label>
                                <input type="file" class="form-control mt-2" placeholder="" name="image" accept="image/*"><br>
                                <img src="{{ asset($studentEdit->image ?? 'd/no-img.jpg') }}" alt="" width="50" class="rounded-circle">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.Father Name') }} <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" placeholder="Father name" name="father_name" value="{{ $studentEdit->father_name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">{{ __('app.Mother Name') }} <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" placeholder="Mother name" name="mother_name" value="{{ $studentEdit->mother_name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md">
                                <label class="form-label">{{ __('app.Discount') }} (TK) <span style="color:red;"></span></label>
                                <input type="number" class="form-control" name="discount" value="{{ $studentEdit->discount }}">
                            </div>
                            <div class="col-md">
                                <label class="form-label">{{ __('app.Address') }} <span style="color:red;"></span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $studentEdit->address }}" name="address"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">{{ __('app.Submit') }}</button>
                        </div>
                    </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</main>




@endsection
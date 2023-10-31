@extends('backend.master')
@section('content')

    <!--start content-->
    <h1>Staff Create</h1>
    <main class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded" style="margin-top: 20px;">
                            <form class="row g-3" method="post" id="studentData" action="{{ route('staff.store') }}" enctype="multipart/form-data">
                                @csrf
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
                                            <label class="form-label">Birth Date</label>
                                            <input type="date" class="form-control" placeholder="" name="dob" value="{{ old('dob') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Phone Number<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                    <div class="col-md-6">                                            
                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control" placeholder="" name="image" value="{{ old('image') }}">
                                        </div> 
                     
                                        <div class="col-md-6">
                                            <label class="form-label"> Blood Group</label>
                                            <select  class="form-control" name="blood_group" id="">
                                                <option value="A+" >A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">                                        
                                        <div class="col-md-6">
                                            <label class="form-label">Parmanent Address<span style="color:red;">*</span></label>
                                            <input type="text" class="form-control" name="parmanent_address" value="{{ old('parmanent_address') }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="form-label">Present Address<span style="color:red;">&nbsp;&nbsp;&nbsp;</span>
                                                <input type="checkbox" name="same" id="">&nbsp;<span><i>Same As Parmanent Address</i></span></label>
                                            </div>                                            
                                            <input type="text" class="form-control" placeholder="" name="present_address" value="{{ old('present_address') }}">
                                        </div>
                                    </div>
                                </div>

                              

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
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
                                            <label class="form-label">NID / Birth Certificate No.</label>
                                            <input type="text" class="form-control" name="nid" value="{{ old('nid') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Staff Salary</label>
                                            <input type="number" class="form-control" name="salary" value="{{ old('salary') }}">
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
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
                        <form class="row g-3" method="post" id="" action="{{ route('fdr.create.post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Account Number<span style="color:red;">*</span></label>
                                        <select name="account_number" class="form-control" id="">
                                            @foreach($account as $data)
                                            <option value="{{$data->id}}">{{$data->account_number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">FDR Ammount<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" name="ammount" value="{{ old('ammount') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="form-label">Monthly interest(%)<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" placeholder="5%" name="interest" value="{{ old('interest') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">FDR Savings Month<span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" placeholder="Please Enter Month Number" name="month" value="{{ old('month') }}" required>
                                    </div>
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
<script>
    $(document).ready(function() {
        $('#accountNumber').on('input', function() {
            let accountNumber = $(this).val();

            if (accountNumber.length >= 2) {
                $.ajax({
                    url: 'search.account',
                    type: 'POST',
                    data: {
                        account_number: accountNumber
                    },
                    success: function(data) {
                        $('#accountNumber').html(data);
                    }
                });
            } else {
                $('#accountNumber').html('');
            }
        });
    });
</script>
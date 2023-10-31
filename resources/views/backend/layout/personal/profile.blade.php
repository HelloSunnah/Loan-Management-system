@extends('backend.master')

@section('content')<div id="content">



  <div class="card mb-4">
    <div class="row">
      <div class="col-md-2">
        <div class="user-image" style="padding: 50px;">
          <img class="" src="{{ asset('/uploads/image/' . $member->image) }}" style="height: 100px;width:100px" alt="No Image">

        </div>
      </div>
      <div class="col-md-5 mt-5">
        <div class="table-responsive show-table">
          <table class="table">
            <tbody>
              <tr>
                <th>Account Number</th>
                <td>{{$member->account_number}}</td>
              </tr>
              
              <tr>
                <th>Holder Name</th>
                <td>{{$member->name}}</td>
              </tr>

              <tr>
                <th>Address</th>
                <td>{{$member->present_address}}</td>
              </tr>

              <tr>
                <th>Mobile</th>
                <td>{{$member->mobile}}</td>
              </tr>


              <tr>
                <th>Joined</th>
                <td>{{$member->created_at}}</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4 mx-auto mt-5">
        <h3 class="card-title text-center"> <strong>Available Balance</strong></h3>
        <form action="{{route('transection',$member->id)}}" method="post">
          @csrf
          <div class="form-group">
            <label for="inp-address">Amount</label>
            <input type="number" class="form-control" id="" name="transection_amount" placeholder="Enter Amount" value="" min="0" step="0.01" required="">
          </div>

          <input type="hidden" name="account_id" value="{{$member->id}}">

          <div class="form-group">
            <label for="exampleFormControlSelect1">Select One</label>
            <select class="form-control" name="transection_type" id="exampleFormControlSelect1" required="">
              <option value="1">Deposit</option>

              <option value="2">WITHDRAW </option>
            </select>
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Method</label>
            <select class="form-control" name="account_type" id="exampleFormControlSelect1" required="">
              <option value="1">Account</option>
              <option value="2">FDR </option>

              <option value="3">DPS</option>
              <option value="4">Loan</option>

            </select>
          </div>
          <br>
          <button style="margin-bottom: 10px;" type="submit" id="submit-btn" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>

  </div>
</div>
<!-- DataTable with Hover -->

</div>
{{-- loan  card --}}

{{-- withdraw Card--}}
<div class="row mb-3">

  <div class="col-xl-3 col-md-6 mb-4">
    <a href="" data-bs-toggle="modal" data-bs-target="#withdraw">

      <div class="card h-100">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col mr-2">
              <center>
                <h3>Personal Account</h3>
              </center>
            </div>
            <div class="col-auto">
              <i class="fas fa-file-signature fa-2x text-danger"></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>


  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col mr-2">
            <center>
              <div class="text-xs font-weight-bold text-uppercase mb-1">Loan</div>

              @if($loan)

              <a href="" data-bs-toggle="modal" data-bs-target="#loan">

                <h3>LOAN</h3>
                <h3>{{$loan->loan_amount}}</h3>
              </a>
              @else
              <h4>No Loan Account Available</h4>
              @endif
            </center>
          </div>


          <div class="col-auto">
            <i class="fas fa-cash-register fa-2x text-danger"></i>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- fdr  card --}}
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col mr-2">

            <center>
              <div class="text-xs font-weight-bold text-uppercase mb-1">FDR</div>

              @if($fdr)
              <a href="" data-bs-toggle="modal" data-bs-target="#fdr">

                <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">


                  <h2> {{$fdr_deposit_amount}}
                  </h2>

                </div>
              </a>
              @else
              <div>
                <h4>No FDR Account Available</h4>
              </div>

              @endif
          </div>
          </center>
          <div class="col-auto">
            <i class="fas fa-user-shield fa-2x text-success"></i>
          </div>
        </div>
      </div>
    </div>

  </div>


  {{-- dps Card--}}
  <div class="col-xl-3 col-md-6 mb-4">


    <div class="card h-100">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col mr-2">

            <center>
              <div class="text-xs font-weight-bold text-uppercase mb-1">DPS</div>

              @if($dps)
              <a href="" data-bs-toggle="modal" data-bs-target="#dps">

                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  @if($dps->type==7 ?? '')
                  <h3>{{$dps->amount}} Weekly </h3>
                  @endif
                  @if($dps->type==30)
                  <h3>{{$dps->amount}} Monthly </h3>
                  @endif
                  @if($dps->type==1)
                  <h3>{{$dps->amount}} Daily </h3>
                  @endif
                </div>
              </a>
              @else
              <h4>No DPS Account Available</h4>
              @endif
            </center>

          </div>
          <div class="col-auto">
            <i class="fas fa-warehouse fa-2x text-success"></i>
          </div>
        </div>
      </div>
    </div>


  </div>







  {{-- loan modal--}}

  <div class="modal fade" id="loan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <center>
            <h5> Loan Information</h5>
          </center>
        </div>
        <div class="modal-body">
          <div class="list-group">
            @if($loan)
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Loan Amount</h3>
                <h4>{{$loan->loan_amount}}</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Interest Rate</h3>
                <h4>{{$loan->interest}}%</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Total interest</h3>
                <h4>{{$total_interest}}</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Total Amount</h3>
                <h4>{{$total_interest+$loan->loan_amount}}</h4>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Deposit Loan Amount</h3>
                <h4>{{$deposit_amount}}</h4>
              </div>
            </a>
            <a href="#" style="background-color: red;" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Lake Amount</h3>
                <h4>{{$total_interest+$loan->loan_amount-$deposit_amount}}</h4>
              </div>
            </a>
            @endif
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>


  {{-- dps modal--}}


  <div class="modal fade" id="dps" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <center>
            <h5>DPS Information</h5>
          </center>
        </div>
        <div class="modal-body">
          <div class="list-group">
            @if($dps)
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">DPS Installment Type</h3>
                <h4>
                  @if($dps)
                  @if($dps->type==7 ?? '')
                  Weekly
                  @endif
                  @if($dps->type==30)
                  Monthly
                  @endif
                  @if($dps->type==1)
                  Daily
                  @endif
                  @endif</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">DPS Installment Amount</h3>
                <h4>{{$dps->amount ??''}}</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">DPS Interest Rate</h3>
                <h4>{{$dps->interest ?? ''}}%</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Deposited Amount</h3>
                <h4>{{$dps_deposit_amount ?? ''}}</h4>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Total Interest Amount</h3>
                <h4>{{$total_interest_amount ?? ''}}</h4>
              </div>
            </a>
            <a href="#" style="background-color:aqua;" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Intotal Amount</h3>
                <h4>{{$dps_deposit_amount+$total_interest_amount ?? ''}}</h4>
              </div>
            </a>
            @endif
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>


  {{-- fdr modal--}}
  <div class="modal fade" id="fdr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <center>
            <h5>FDR Information</h5>
          </center>
        </div>
        <div class="modal-body">
          <div class="list-group">
            @if($fdr)

            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">FDR Amount</h3>
                <h4>{{$fdr_deposit_amount}}</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">FDR Interest Rate</h3>
                <h4>{{$fdr->interest ??''}}%</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Total Interest</h3>
                <h4>{{$total_interest_amount}}</h4>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Total Amount & Interest</h3>
                <h4>{{$total_interest_amount+$fdr_deposit_amount}}

                </h4>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">withdraw Amount</h3>
                <h4>{{$fdr_withdraw_amount}}</h4>
              </div>
            </a>
            <a href="#" style="background-color:greenyellow" class="list-group-item list-group-item-action">

              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Available Amount</h3>
                <h4>
                  {{$total_interest_amount+$fdr_deposit_amount-$fdr_withdraw_amount}}
                </h4>
              </div>
            </a>
            @endif

          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>


  {{-- withdraw modal--}}

  <div class="modal fade" id="withdraw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <center>
            <h5>Personal Account Information</h5>
          </center>
        </div>
        <div class="modal-body">
          <div class="list-group">


            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h3 class="mb-1">Account Amount</h3>
                <h4>{{$Account4}}</h4>
              </div>
            </a>

          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!---Container Fluid-->
</div>

@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Member;
use App\Models\Transection;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class LoanController extends Controller
{

    public function loan_list()
    {
        $loan = Loan::where('status','1')->get();
        return view('backend.layout.Loan.list', compact('loan'));
    }

public function loan_list_close(){
    
    $loan = Loan::where('status','0')->get();
    return view('backend.layout.Loan.list_all', compact('loan'));
}
    public function loan_create()
    {
        $account = Member::where('status', '1')->get();
        return view('backend.layout.Loan.create', compact('account'));
    }
    public function loan_edit($id)
    {
        $data['account'] = Member::where('status', '1')->get();
        $data['edit'] = Loan::find($id);
        return view('backend.layout.Loan.edit', $data);
    }
    public function loan_create_post(Request $request)
    {
        $data = new Loan();
        $data->account_number = $request->account_number;
        $data->loan_amount = $request->amount;
        $data->interest = $request->interest;
        $data->time = $request->validate_year;
        $data->status = '1';
        $data->save();
        toastr()->Success('Loan create Successfully');


        return to_route('loan.list');
    }
    public function loan_edit_post(Request $request, $id)
    {
        $data = Loan::find($id);
        $data->account_number = $request->account_number;
        $data->loan_amount = $request->amount;
        $data->interest = $request->interest;
        $data->time = $request->validate_year;
        $data->status = '1';
        $data->save();
        

     toastr()->Success('Loan Update Successfully');

        return to_route('loan.list');
    }
    public function loan_status($id)
    {
        $data = Loan::find($id);

        if ($data->status == 0) {
            $data->update([
                'status' => '1',
            ]);
        } else {
            $data->update([
                'status' => '0',
            ]);
        }
        Toastr::success('Status updtrd');

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\FDR;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class LoanController extends Controller
{
    
    public function loan_list(){
        $fdr=Loan::all();
        return view('backend.layout.Loan.list',compact('fdr'));
    }



    public function loan_create(){
        $account=Member::where('status','1')->get();
        return view('backend.layout.Loan.create',compact('account'));

    }
    public function loan_create_post(Request $request){
        $data= New Loan();
        $data->account_number=$request->account_number;
        $data->loan_amount=$request->amount;
        $data->interest=$request->interest;
        $data->time=$request->validate_year;
        $data->status='1';
        $data->save();
        toastr()->addSuccess('Loan Create Successfully');

        return to_route('loan.list');

    }
    public function loan_status($id)
        {
            $data = Loan::find($id);
    
            if ($data->status == 1) {
                $data->update([
                    'status' => '0',
                ]);
            } else {
                $data->update([
                    'status' => '1',
                ]);
            }
            return back();
        
    }

}

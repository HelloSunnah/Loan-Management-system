<?php

namespace App\Http\Controllers;

use App\Models\DPS;
use App\Models\FDR;
use App\Models\InnerTransection;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Transection;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $MemberDeposit = Member::where('status', '1')->sum('personal_amount');
        $data['totalAmount'] = $MemberDeposit;


        $fdrDeposit = FDR::where('status', '1')->sum('ammount');
        $fdrDeposit1 = FDR::where('status', '1')->sum('interest_amount');
        $data['totalfdr'] = $fdrDeposit+ $fdrDeposit1;

        $dpsDeposit = DPS::where('status', '1')->sum('amount');
        $dpsDeposit1 = DPS::where('status', '1')->sum('interest_amount');
        $data['totaldps'] = $dpsDeposit+ $dpsDeposit1;



        $loanDeposit = Loan::where('status', '1')->sum('loan_amount');
        // $loanDeposit1 = Loan::where('status', '1')->sum('interest_amount');
        $data['loanDeposit'] = $loanDeposit;




        //official Expense And income
        $data['income']=InnerTransection::where('transection_type','1')->sum('amount');
        $data['expense']=InnerTransection::where('transection_type','2')->sum('amount');


        return view('backend.layout.Dashboard.dashboard',$data);
    }
}

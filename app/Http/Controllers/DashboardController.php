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

        $MemberDeposit = Transection::where('status', '1')->where('transection_type', '1')->where('account_type', '1')->sum('transection_amount');
        $Memberwith = Transection::where('status', '1')->where('transection_type', '2')->where('account_type', '1')->sum('transection_amount');
        $data['totalAmount'] = $MemberDeposit - $Memberwith;


        $fdrDeposit = Transection::where('status', '1')->where('transection_type', '1')->where('account_type', '2')->sum('transection_amount');
        $fdrWithdraw = Transection::where('status', '1')->where('transection_type', '2')->where('account_type', '2')->sum('transection_amount');
        $data['totalfdr'] = $fdrDeposit - $fdrWithdraw;


        $dpsDeposit = Transection::where('status', '1')->where('transection_type', '1')->where('account_type', '3')->sum('transection_amount');
        $dpsWithdraw = Transection::where('status', '1')->where('transection_type', '2')->where('account_type', '3')->sum('transection_amount');
        $data['totaldps'] = $dpsDeposit - $dpsWithdraw;

        $data['loanDeposit'] = Transection::where('status', '1')->where('transection_type', '1')->where('account_type', '4')->sum('transection_amount');
        $data['loanWithdraw'] = Transection::where('status', '1')->where('transection_type', '2')->where('account_type', '4')->sum('transection_amount');


        //official Expense And income
        $data['income']=InnerTransection::where('transection_type','1')->sum('amount');
        $data['expense']=InnerTransection::where('transection_type','2')->sum('amount');


        return view('backend.layout.Dashboard.dashboard',$data);
    }
}

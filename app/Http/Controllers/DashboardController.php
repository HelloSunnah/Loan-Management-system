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

        $data1=Member::all()->sum('personal_amount');
        $data2=Transection::where('transection_type','1')->where('account_type','1')->sum('transection_amount');
        $data['personal_ammount']= $data1+ $data2;


        $dps1=DPS::all()->sum('amount');
        $dps2=Transection::where('transection_type','1')->where('account_type','3')->sum('transection_amount');
        $data['dps_amount']= $dps1+ $dps2;

        $fdr1=FDR::all()->sum('ammount');
        $fdr2=Transection::where('transection_type','1')->where('account_type','2')->sum('transection_amount');
        $data['fdr_amount']= $fdr1+ $fdr2;

        $loan1=Loan::all()->sum('loan_amount');
        $loan2=Transection::where('transection_type','2')->where('account_type','4')->sum('transection_amount');
        $data['loan']= $loan1+ $loan2;

        $data['loan_collect']=Transection::where('transection_type','1')->where('account_type','4')->sum('transection_amount');


        //official Expense And income
        $data['income']=InnerTransection::where('transection_type','1')->sum('amount');
        $data['expense']=InnerTransection::where('transection_type','2')->sum('amount');


        return view('backend.layout.Dashboard.dashboard',$data);
    }
}

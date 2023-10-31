<?php

namespace App\Http\Controllers;

use App\Models\DPS;
use App\Models\FDR;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Transection;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class TransectionController extends Controller
{
    


    public function transection(Request $request, $id)
    {
        $transection_type = $request->get('transection_type');
        $account_type = $request->account_type;
        $account_id = $request->account_id;
        $transection_amount  = $request->transection_amount;


        $Member = Member::where('id', $id)->where('status', '1')->count();
        $fdr = FDR::where('account_number', $id)->where('status', '1')->count();
        $dps = DPS::where('account_number', $id)->where('status', '1')->count();
        $loan = Loan::where('account_number', $id)->where('status', '1')->count();


        $MemberDeposit = Transection::where('account_id', $id)->where('status', '1')->where('transection_type', '1')->where('account_type', '1')->sum('transection_amount');
        $Memberwith = Transection::where('account_id', $id)->where('status', '1')->where('transection_type', '2')->where('account_type', '1')->sum('transection_amount');
        $totalAmount = $MemberDeposit - $Memberwith;


        $fdrDeposit = Transection::where('account_id', $id)->where('status', '1')->where('transection_type', '1')->where('account_type', '2')->sum('transection_amount');
        $fdrWithdraw = Transection::where('account_id', $id)->where('status', '1')->where('transection_type', '2')->where('account_type', '2')->sum('transection_amount');
        $totalfdr = $fdrDeposit - $fdrWithdraw;


        $dpsDeposit = Transection::where('account_id', $id)->where('status', '1')->where('transection_type', '1')->where('account_type', '3')->sum('transection_amount');
        $dpsWithdraw = Transection::where('account_id', $id)->where('status', '1')->where('transection_type', '2')->where('account_type', '3')->sum('transection_amount');
        $totaldps = $dpsDeposit - $dpsWithdraw;

        $loanDeposit = Transection::where('account_id', $id)->where('status', '1')->where('transection_type', '1')->where('account_type', '4')->sum('transection_amount');
        $loanWithdraw = Transection::where('account_id', $id)->where('status', '1')->where('transection_type', '2')->where('account_type', '4')->sum('transection_amount');




        $transection = new Transection();
        $transection->account_type = $account_type;
        $transection->account_id =  $account_id;
        $transection->transection_type = $transection_type;
        $transection->transection_amount = $transection_amount;

        if ($account_type == 1 && $transection_type == 1) {
            $transection->save();
            toastr()->success('Personal Deposit Successfull');
        } elseif ($account_type == 2 && $transection_type == 1) {
            if ($fdr) {
                $transection->save();
                toastr()->success('FDR Deposit Successfull');
            } else {
                toastr()->error('You Dont habe FDR account');
            }
        } elseif ($account_type == 3 && $transection_type == 1) {
            if ($fdr) {
                $transection->save();
                toastr()->success('DPS Deposit Successfull');
            } else {
                toastr()->error('You Dont habe DPS account');
            }
        } elseif ($account_type == 4 && $transection_type == 1) {
            if ($loan) {
                $transection->save();
                toastr()->success('Loan Deposit Successfull');
            } else {
                toastr()->error('You Dont habe Loan account');
            }
        } elseif ($account_type == 1 && $transection_type == 2) {
            if ($totalAmount >= $transection_amount) {
                $transection->save();
                toastr()->success('Personal withdraw Successfull');
            } else {
                toastr()->error('You Have unsufficient Balancee');
            }
        } elseif ($account_type == 2 && $transection_type == 2) {
            if ($fdr) {
                if ($totalfdr >= $transection_amount) {
                    $transection->save();
                    toastr()->success('FDR withdraw Successfull');
                } else {
                    toastr()->error('You Have unsufficient Balancee');
                }
            } else {
                toastr()->error('You Dont have any FDR account');
            }
        } elseif ($account_type == 3 && $transection_type == 2) {
            if ($dps) {
                if ($totaldps >= $transection_amount) {
                    $transection->save();
                    toastr()->success('DPS Withdraw Successfull');
                } else {
                    toastr()->error('You Have unsufficient Balance in DPS');
                }
            } else {
                toastr()->error('You dont  Have any Dps Account!');
            }
        } elseif ($account_type == 4 && $transection_type == 2) {
            toastr()->error('SORRY! You cant Withdraw From Loan');
        } else {
            toastr()->error('SORRY! You Dont Have Any Account');
        }
        return back();
    }

    public function transection_history()
    {
        $history = Transection::all();
        return view('backend.layout.Transection.list', compact('history'));
    }
}

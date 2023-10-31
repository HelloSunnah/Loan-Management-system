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
    public function transection_add_withdraw(Request $request)
    {

        $type = $request->get('type');
        $method = $request->get('method');
        $amount = $request->get('amount');
        $user_id = $request->get('user_id');

        $Member1 = Member::find($user_id);
        $dps1 = DPS::find($user_id);
        $fdr1 = FDR::find($user_id);
        // $loan1 = Loan::find($user_id);

        $Member2 = $Member1->personal_amount += $amount;
        $dps2 = $dps1->amount += $amount;
        $fdr2 = $fdr1->ammount += $amount;
        // $loan2 = $loan1->ammount += $amount;


        if ($type == 1) {
            if ($method == 1) {
                $Member1->update([
                    'personal_amount' => $Member2,

                ]);
            }
            if ($method == 2) {
                $dps1->update([
                    'amount' => $dps2,

                ]);
            }
            if ($method == 3) {
                $fdr1->update([
                    'ammount' => $fdr2,

                ]);
            }
            // if ($method == 4) {
            //     $loan1->update([
            //         'ammount' => $loan2,

            //     ]);
            // }
        }




        if ($type == 2) {
            if ($method == 1) {
                if ($Member1->personal_amount >= $amount) {
                    $Member3 = $Member1->personal_amount -= $amount;
                    $Member4 = $Member1->withdraw_amount += $amount;
                    toastr()->addSuccess('Transection succesfull');

                    $Member1->update([
                        'personal_amount' => $Member3,
                        'withdraw_amount' => $Member4,

                    ]);
                } else {
                    toastr()->addSuccess('sorry you have unsufficient balance');

                    return back();
                }
            }

            if ($method == 2) {

                if ($dps1->amount >= $amount) {
                    $dps5 = $dps1->amount;
                    $dps3 = $dps5 - $amount;
                    $dps4 = $dps1->withdraw_amount += $amount;
                    toastr()->addSuccess('Transection succesfull');

                    $dps1->update([
                        'amount' => $dps3,
                        'withdraw_amount' => $dps4,

                    ]);
                } else {

                    return back();
                }
            }

            if ($method == 3) {


                if ($fdr1->ammount >= $amount) {
                    return  $fdr3 = $fdr1->ammount += $amount;
                    $fdr4 = $fdr1->withdraw_amount += $amount;
                    toastr()->addSuccess('Transection succesfull');

                    $fdr1->update([
                        'ammount' => $fdr3,
                        'withdraw_amount' => $fdr4,

                    ]);
                } else {

                    return back();
                }
            }
        }


        // if ($type == 2 && $method == 1) {

        //     $account1->update([
        //         'withdraw_amount' => $account2,

        //     ]);
        // }

        return back();
    }
    public function  transection(Request $request, $id)
    {

        $transection_type = $request->get('transection_type');
        $account_type = $request->account_type;
        $account_id = $request->account_id;
        $transection_amount  = $request->transection_amount;

        $transection2 = FDR::where('account_number', $id)->where('status', '1')->count();

        $transection3 = DPS::where('account_number', $id)->where('status', '1')->count();
        $transection4 = Loan::where('account_number', $id)->where('status', '1')->count();

        $save = new Transection();

        // if ($account_type == 1) {

        //     $save->transection_type = $transection_type;

        //     $save->account_type = $account_type;
        //     $save->account_id =    $account_id;
        //     $save->transection_amount = $transection_amount;
        //$save->save();
        // }
        if ($account_type == 2 && $transection2) {
            $save->transection_type = $transection_type;

            $save->account_type = $account_type;
            $save->account_id =    $account_id;
            $save->transection_amount = $transection_amount;
            toastr()->addSuccess('Transection Successfull');

            $save->save();
        }
        if ($account_type == 3 && $transection3) {
            $save->transection_type = $transection_type;

            $save->account_type = $account_type;
            $save->account_id =    $account_id;
            $save->transection_amount = $transection_amount;
            toastr()->addSuccess('Transection Successfull');


            $save->save();
        }
        if ($account_type == 4 && $transection4) {
            $save->transection_type = $transection_type;

            $save->account_type = $account_type;
            $save->account_id =    $account_id;
            $save->transection_amount = $transection_amount;
            toastr()->addSuccess('Transection Successfull');

            $save->save();
        } else {
            toastr()->addSuccess('sorry you have unsufficient balance');

            return back();
        }


        return back();
    }
    public function transection_history()
    {
        $history = Transection::all();
        return view('backend.layout.Transection.list', compact('history'));
    }
}

<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\DPS;
use App\Models\FDR;
use App\Models\Member;
use App\Models\Transection;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class DPSController extends Controller
{
    public function dps_list()
    {
        $fdr = DPS::where('status', '0')->get();
        return view('backend.layout.DPS.dps_list_mature', compact('fdr'));
    }
    public function dps_list_all()
    {
        $fdr = DPS::where('status', '1')->get();
        return view('backend.layout.DPS.dps_list_all', compact('fdr'));
    }


    public function dps_create()
    {
        $account = Member::where('status', '1')->get();
        return view('backend.layout.DPS.dps_create', compact('account'));
    }
    public function dps_edit($id)
    {


        $data['edit'] = DPS::find($id);
        $data['account'] = Member::where('status', '1')->get();
        return view('backend.layout.DPS.dps_edit', compact('edit'));
    }
    public function dps_create_post(Request $request)
    {
        $dps = new  DPS();
        $dps->account_number = $request->get('account_number');
        $dps->type = $request->get('type');
        $dps->interest = $request->get('interest');
        $dps->amount = $request->get('amount');
        $dps->validate_year = $request->get('validate_year');
        $dps->save();


        $transaction = new Transection();
        $transaction->account_id = $request->get('account_number');
        $transaction->account_type = '3';
        $transaction->transection_type = '1';
        $transaction->transection_amount = $request->get('amount');

        $transaction->save();
        toastr()->success('DPS Create succesfull!');
       
        return to_route('dps.list.all');
    }
    public function dps_status_post($id)
    {
        $data = DPS::find($id);

        if ($data->status == 0) {
            $data->update([
                'status' => '1',
            ]);
        } else {
            $data->update([
                'status' => '0',
            ]);
        }
        toastr()->success('Status update succesfull!');

        return back();
    }
}

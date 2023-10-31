<?php

namespace App\Http\Controllers;

use App\Models\DPS;
use App\Models\FDR;
use App\Models\Member;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class DPSController extends Controller
{
    public function dps_list()
    {
        $fdr = DPS::where('status','0')->get();
        return view('backend.layout.DPS.dps_list_mature', compact('fdr'));
    }
    public function dps_list_all()
    {
        $fdr = DPS::where('status','1')->get();
        return view('backend.layout.DPS.dps_list_all', compact('fdr'));
    }


    public function dps_create()
    {
         $account = Member::where('status', '1')->get();
        return view('backend.layout.DPS.dps_create', compact('account'));
    }
    public function dps_create_post(Request $request){
        $dps= New  DPS();
        $dps->account_number=$request->get('account_number');
        $dps->type=$request->get('type');
        $dps->interest=$request->get('interest');
        $dps->amount=$request->get('amount');
        $dps->validate_year=$request->get('validate_year');
        $dps->save();
        toastr()->addSuccess('Dps Create Successfully');

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
        return back();
    }
}

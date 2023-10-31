<?php

namespace App\Http\Controllers;

use alert;
use App\Models\FDR;
use App\Models\Member;
use App\Models\Transection;
use Illuminate\Http\Request;

class FDRController extends Controller
{
    public function fdr_list()
    {
        $fdr = FDR::where('status', '0')->get();
        return view('backend.layout.FDR.fdr_list_close', compact('fdr'));
    }
    public function fdr_list_all()
    {
        $fdr = FDR::where('status', '1')->get();
        return view('backend.layout.FDR.fdr_list_all', compact('fdr'));
    }

    public function  fdr_create()
    {
        $account = Member::where('status', '1')->get();
        return view('backend.layout.FDR.fdr_create', compact('account'));
    }
    public function fdr_edit($id){
        $data['edit']=FDR::find($id);
        $data['account'] = Member::where('status', '1')->get();

        return view('backend.layout.FDR.fdr_edit',$data);

    }
    public function fdr_status_post($id)
    {
        $data = FDR::find($id);
        $data1 = Transection::where('account_id', $data->account_number)->where('account_type', '2')->get();

        if ($data->status == 0) {
            $data->update([
                'status' => '1',
            ]);
            foreach ($data1 as $data2) {
                $data2->status = 1;
                $data2->save();
            }
        } else {
            $data->update([
                'status' => '0',
            ]);
            foreach ($data1 as $data2) {
                $data2->status = 0;
                $data2->save();
            }
        }
        // toastr()->addSuccess('Status Update Successfully');
        return back();
    }
    public function fdr_create_post(Request $request)
    {

        $fdr = new FDR();
        $fdr->account_number =  $request->get('account_number');
        $fdr->ammount =  $request->get('ammount');
        $fdr->interest =  $request->get('interest');
        $fdr->validate_year = $request->get('validate_year');
        $fdr->save();
        // toastr()->addSuccess('FDR Create Successfully');
        $transaction = new Transection();
        $transaction->account_id = $request->get('account_number');
        $transaction->account_type = '2';
        $transaction->transection_type = '1';
        $transaction->transection_amount = $request->get('ammount');

        $transaction->save();
        return to_route('fdr.list.all');
    }
    public function fdr_edit_post(Request $request,$id)
    {

        $fdr = FDR::find($id);
        $fdr->account_number =  $request->get('account_number');
        $fdr->ammount =  $request->get('ammount');
        $fdr->interest =  $request->get('interest');
        $fdr->validate_year = $request->get('validate_year');
        $fdr->save();
        toastr()->addSuccess('FDR update Successfully');

        return to_route('fdr.list.all');
    }
    public function  search_account(Request $request)
    {
        $accountNumber = $request->input('account_number');
        $accounts = Member::where('account_number', 'LIKE', '%' . $accountNumber . '%')->get();

        return view('backend.layout.FDR.fdr_create', compact('accounts'));
    }
}

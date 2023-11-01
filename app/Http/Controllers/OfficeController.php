<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\Fee;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\InnerTransection;
use Illuminate\Support\Facades\Hash;

class OfficeController extends Controller
{
    public function fees_create()
    {
        $fees = Fee::first();
        return view('backend/layout/NavaRatno/feesCreate', compact('fees'));
    }
    public function fees_create_post(Request $request)
    {

        $fees = Fee::first();
        $fees->admission = $request->get('admission');
        $fees->form = $request->get('form');
        $fees->share = $request->get('share');
        $fees->savings = $request->get('savings');
        $fees->save();

        toastr()->success('Fees Created Successfully');

        return back();
    }
    public function incomingTransection()
    {
        $data['income'] = InnerTransection::where('transection_type', '1')->get();

        return view('backend/layout/NavaRatno/incoming', $data);
    }
    public function outgoingTransection()
    {
        $data['staff'] = Staff::all();
        $data['expense'] = InnerTransection::where('transection_type', '2')->get();
        return view('backend/layout/NavaRatno/outgoing', $data);
    }
    public function incomeStore(Request $request)
    {
        $data = new InnerTransection();
        $data->transection_type = 1;
        $data->purpose = $request->purpose;
        $data->income_by = $request->income_by;
        $data->date = $request->date;
        $data->account = $request->account;
        $value = $request->purpose;
        if ($value == 'Admission Fee') {
            $value1 = Fee::sum('admission');
            $data->amount = $value1;
        } elseif ($value == 'Savings Fee') {
            $value1 = Fee::sum('savings');
            $data->amount = $value1;
        } elseif ($value == 'Share Fee') {
            $value1 = Fee::sum('share');
            $data->amount = $value1;
        } elseif ($value == 'Form Fee') {
            $value1 = Fee::sum('form');
            $data->amount = $value1;
        } else {
            $data->amount = $request->amount;
        }

        $data->save();
        toastr()->success('Data Store Successfully');

        return back();
    }
    public function expense_store(Request $request)
    {

        $data = new InnerTransection();
        $data->transection_type = 2;

        $data->purpose = $request->purpose;
        $data->expense_by = $request->expense_by;
        $data->date = $request->date;
        $data->amount = $request->amount;
        $data->save();
        return back();
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = User::first();
        $user->password = Hash::make($request->new_password);
        $user->save();
        toastr()->success('Password Updated Successfully');

        return redirect('dashboard');
    }
    public function income_edit($id)
    {
   return  $incomeEdit = InnerTransection::find($id);

        return to_route('incoming.transection',$incomeEdit);
    }
    public function expense_edit($id)
    {
        $data['ExpenseEdit'] = InnerTransection::find($id);

        return to_route('outgoing.transection',$data);
    }
}

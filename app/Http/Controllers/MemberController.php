<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Member;
use App\Models\Transection;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use Illuminate\Auth\Events\Validated;

class MemberController extends Controller
{
    //
    public function office_list()
    {

        $data = Member::where('type', '2')->get();
        return view('backend/layout/official/list', compact('data'));
    }
    public function list()
    {
        $data = Member::where('type', '1')->get();
        return view('backend/layout/personal/list', compact('data'));
    }
    public function  createShow()
    {
        return view('backend/layout/personal/create');
    }
    public function create(Request $request)
    {

        $currentDateTime = Carbon::now();
        $date = $currentDateTime->format('mdHis');
        $accountNumber = "98" . $date;


        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
            $request->file('image')->move(public_path('/uploads/image'), $fileName);
        }
        $data = null;
        if ($request->hasFile('nominee_image')) {
            $data = time() . '.' . $request->file('nominee_image')->getclientOriginalExtension();
            $request->file('nominee_image')->move(public_path('/uploads/image'), $data);
        }
        $member = new Member();
        $member->type = '1';
        $member->account_number = $accountNumber;
        $member->id_number = $request->get('id_number');
        $member->status = '1';

        $member->name = $request->get('name');
        $member->personal_amount = $request->get('personal_amount');

        $member->name_bn = $request->get('name_bn');
        $member->father_name = $request->get('father_name');
        $member->mother_name = $request->get('mother_name');
        $member->present_address = $request->get('present_address');
        $member->parmanent_address = $request->get('parmanent_address');
        $member->dob = $request->get('dob');
        $member->birth_id = $request->get('birth_id');
        $member->mobile = $request->get('mobile');
        $member->image = $fileName;
        $member->signature = $request->get('signature');
        $member->nominee_name = $request->get('nominee_name');
        $member->nominee_father_name = $request->get('nominee_father_name');
        $member->nominee_mother_name = $request->get('nominee_mother_name');
        $member->nominee_nid = $request->get('nominee_nid');
        $member->nominee_birth_id = $request->get('nominee_birth_id');
        $member->nominee_dob = $request->get('nominee_dob');
        $member->nominee_present_address = $request->get('nominee_present_address');
        $member->nominee_profession = $request->get('nominee_profession');
        $member->nominee_image = $data;
        $member->save();
        toastr()->success('Member Created Successfully');


        $transaction = new Transection();
        $transaction->account_id = $member->id;
        $transaction->account_type = '1';
        $transaction->transection_type = '1';
        $transaction->transection_amount = $request->get('personal_amount');
        $transaction->save();
        return to_route('personal.list');
    }


    public function office_createShow()
    {
        return view('backend/layout/official/create');
    }
    public function office_edit($id)
    {
        $edit = Member::find($id);
        return view('backend/layout/official/edit', compact('edit'));
    }

    public function office_create(Request $request)
    {

        $amount=$request->get('personal_amount');
        $currentDateTime = Carbon::now();
        $date = $currentDateTime->format('mdHis');
        $accountNumber = "98" . $date;

        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
            $request->file('image')->move(public_path('/uploads/image'), $fileName);
        }
        $data = null;
        if ($request->hasFile('nominee_image')) {
            $data = time() . '.' . $request->file('nominee_image')->getclientOriginalExtension();
            $request->file('nominee_image')->move(public_path('/uploads/image'), $data);
        }
        $image = null;
        if ($request->hasFile('garanteer_image')) {
            $image = time() . '.' . $request->file('garanteer_image')->getclientOriginalExtension();
            $request->file('garanteer_image')->move(public_path('/uploads/image'), $image);
        }
        $member = new Member();
        $member->type = '2';
        $member->account_number = $accountNumber;
        $member->id_number = $request->get('id_number');
        $member->status = '1';

        $member->personal_amount = $request->get('personal_amount');
        $member->name = $request->get('name');
        $member->name_bn = $request->get('name_bn');
        $member->father_name = $request->get('father_name');
        $member->mother_name = $request->get('mother_name');
        $member->present_address = $request->get('present_address');
        $member->parmanent_address = $request->get('parmanent_address');
        $member->dob = $request->get('dob');
        $member->birth_id = $request->get('birth_id');
        $member->mobile = $request->get('mobile');
        $member->image = $fileName;
        $member->signature = $request->get('signature');
        $member->nominee_name = $request->get('nominee_name');
        $member->nominee_relation = $request->get('nominee_relation');

        $member->nominee_father_name = $request->get('nominee_father_name');
        $member->nominee_mother_name = $request->get('nominee_mother_name');
        $member->nominee_nid = $request->get('nominee_nid');
        $member->nominee_birth_id = $request->get('nominee_birth_id');
        $member->nominee_dob = $request->get('nominee_dob');
        $member->nominee_present_address = $request->get('nominee_present_address');
        $member->nominee_profession = $request->get('nominee_profession');
        $member->nominee_image = $data;


        $member->company_type = $request->get('company_type');
        $member->account_mantain = $request->get('account_mantain');
        $member->account_mantainer = $request->get('account_mantainer');

        $member->company_address = $request->get('company_address');
        $member->trade_license = $request->get('trade_license');


        $member->tin = $request->get('tin');
        $member->issued_by = $request->get('issued_by');
        $member->issue_date = $request->get('issue_date');
        $member->garanteer_name = $request->get('garanteer_name');

        $member->garanteer_signature = $request->get('garanteer_signature');
        $member->garanteer_name_bn = $request->get('garanteer_name_bn');
        $member->garanteer_nid = $request->get('garanteer_nid');
        $member->garanteer_image = $image;
        $member->garanteer_phone = $request->get('garanteer_phone');

        $member->save();
        $transaction = new Transection();
        $transaction->account_id = $member->id;
        $transaction->account_type = '1';
        $transaction->transection_type = '1';
        $transaction->transection_amount = $request->get('personal_amount');
        $transaction->save();
        toastr()->success('Member Created Successfully');

        return to_route('official.list');
    }




    public function office_edit_post(Request $request, $id)
    {
        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
            $request->file('image')->move(public_path('/uploads/image'), $fileName);
        }
        $data = null;
        if ($request->hasFile('nominee_image')) {
            $data = time() . '.' . $request->file('nominee_image')->getclientOriginalExtension();
            $request->file('nominee_image')->move(public_path('/uploads/image'), $data);
        }
        $image = null;
        if ($request->hasFile('garanteer_image')) {
            $image = time() . '.' . $request->file('garanteer_image')->getclientOriginalExtension();
            $request->file('garanteer_image')->move(public_path('/uploads/image'), $image);
        }
        $member = Member::find($id);
        $member->type = '2';
        $member->status = '1';
        $member->name = $request->get('name');
        $member->name_bn = $request->get('name_bn');
        $member->father_name = $request->get('father_name');
        $member->mother_name = $request->get('mother_name');
        $member->present_address = $request->get('present_address');
        $member->parmanent_address = $request->get('parmanent_address');
        $member->dob = $request->get('dob');
        $member->birth_id = $request->get('birth_id');
        $member->mobile = $request->get('mobile');
        $member->image = $fileName;
        $member->signature = $request->get('signature');
        $member->nominee_name = $request->get('nominee_name');
        $member->nominee_relation = $request->get('nominee_relation');

        $member->nominee_father_name = $request->get('nominee_father_name');
        $member->nominee_mother_name = $request->get('nominee_mother_name');
        $member->nominee_nid = $request->get('nominee_nid');
        $member->nominee_birth_id = $request->get('nominee_birth_id');
        $member->nominee_dob = $request->get('nominee_dob');
        $member->nominee_present_address = $request->get('nominee_present_address');
        $member->nominee_profession = $request->get('nominee_profession');
        $member->nominee_image = $data;


        $member->company_type = $request->get('company_type');
        $member->account_mantain = $request->get('account_mantain');
        $member->account_mantainer = $request->get('account_mantainer');

        $member->company_address = $request->get('company_address');
        $member->trade_license = $request->get('trade_license');


        $member->tin = $request->get('tin');
        $member->issued_by = $request->get('issued_by');
        $member->issue_date = $request->get('issue_date');
        $member->garanteer_name = $request->get('garanteer_name');

        $member->garanteer_signature = $request->get('garanteer_signature');
        $member->garanteer_name_bn = $request->get('garanteer_name_bn');
        $member->garanteer_nid = $request->get('garanteer_nid');
        $member->garanteer_image = $image;
        $member->garanteer_phone = $request->get('garanteer_phone');

        $member->save();
        toastr()->success('Member Created Successfully');

        return to_route('official.list');
    }

    public function edit($id)
    {
        $edit = Member::find($id);
        return view('backend/layout/personal/edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
            $request->file('image')->move(public_path('/uploads/image'), $fileName);
        }
        $data = null;
        if ($request->hasFile('nominee_image')) {
            $data = time() . '.' . $request->file('nominee_image')->getclientOriginalExtension();
            $request->file('nominee_image')->move(public_path('/uploads/image'), $data);
        }
        $member = Member::find($id);
        $member->type = '1';
        $member->status = '1';

        $member->name = $request->get('name');

        $member->name_bn = $request->get('name_bn');
        $member->father_name = $request->get('father_name');
        $member->mother_name = $request->get('mother_name');
        $member->present_address = $request->get('present_address');
        $member->parmanent_address = $request->get('parmanent_address');
        $member->dob = $request->get('dob');
        $member->birth_id = $request->get('birth_id');
        $member->mobile = $request->get('mobile');
        $member->image = $fileName;
        $member->signature = $request->get('signature');
        $member->nominee_name = $request->get('nominee_name');
        $member->nominee_father_name = $request->get('nominee_father_name');
        $member->nominee_mother_name = $request->get('nominee_mother_name');
        $member->nominee_nid = $request->get('nominee_nid');
        $member->nominee_birth_id = $request->get('nominee_birth_id');
        $member->nominee_dob = $request->get('nominee_dob');
        $member->nominee_present_address = $request->get('nominee_present_address');
        $member->nominee_profession = $request->get('nominee_profession');
        $member->nominee_image = $data;
        $member->save();
        toastr()->success('Member Updated Successfully');

        return to_route('personal.list');
    }
}

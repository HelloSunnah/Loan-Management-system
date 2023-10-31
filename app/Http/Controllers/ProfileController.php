<?php

namespace App\Http\Controllers;

use App\Models\DPS;
use App\Models\FDR;
use App\Models\Loan;
use App\Models\Member;
use Illuminate\View\View;
use App\Models\Transection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function log(){
        return view('log');
     }
    public function profile($id)
    {
        $data['member'] = Member::find($id);



        //deposit calculate
        $data['dps'] = DPS::where('status', '1')->where('account_number', $id)->first();
        $data['dps_deposit_amount'] = Transection::where('account_id', $id)->where('account_type', '3')->where('status', '1')->where('transection_type', '1')->sum('transection_amount');
        $dps_deposit_amount = Transection::where('account_id', $id)->where('account_type', '3')->where('transection_type', '1')->where('status', '1')->sum('transection_amount');

        if ($data['dps']) {
            $data['total_interest_amount'] = ($dps_deposit_amount * $data['dps']->interest) / 100;
        }


        //fdr
        $data['fdr'] = FDR::where('status', '1')->where('account_number', $id)->first();
        $fdr1 = FDR::where('status', '1')->where('account_number', $id)->sum('ammount');
        $fdr2 = Transection::where('account_id', $id)->where('account_type', '2')->where('transection_type', '1')->where('status', '1')->sum('transection_amount');

        $data['fdr_deposit_amount'] = $fdr1 + $fdr2;
        if ($data['fdr']) {
            $data['total_interest_amount'] = ($data['fdr_deposit_amount'] * $data['fdr']->interest) / 100;
        }

        $data['fdr_withdraw_amount'] = Transection::where('account_id', $id)->where('account_type', '2')->where('transection_type', '2')->where('status', '1')->sum('transection_amount');





        //local Account
        $Account = Member::where('status', '1')->where('id', $id)->first();
        $Account1 = Transection::where('account_id', $id)->where('account_type', '1')->where('status', '1')->where('transection_type', '1')->sum('transection_amount');
        $Account2 = Transection::where('account_id', $id)->where('account_type', '1')->where('status', '1')->where('transection_type', '2')->sum('transection_amount');
        $Account3 = $Account1 + $Account->personal_amount;

        $data['Account4'] = $Account3 - $Account2;
        //loan calculate

        $data['loan'] = Loan::where('account_number', $id)->first();
        $loanData1 = Loan::where('account_number', $id)->sum('loan_amount');
        $data['deposit_amount'] = Transection::where('account_id', $id)->where('account_type', '4')->where('transection_type', '1')->where('status', '1')->sum('transection_amount');
        if ($data['loan']) {
            $data['total_interest']  =  ($loanData1 * $data['loan']->interest) / 100;
        }
        return view('backend.layout.personal.profile', $data);
    }
    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('welcome');
    }
    public function password(){
        return view('backend/layout/NavaRatno/passwordChange');

    }

}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

    public function log()
    {
        return view('log');
    }
    public function profile($id)
    {
        $data['member'] = Member::find($id);
        //loan 
         $data['loan'] = Loan::where('account_number', $id)->first();
        //for showing loan closed Date

        //deposit calculate
        $data['dps'] = DPS::where('status', '1')->where('account_number', $id)->first();
     
        //fdr
        $data['fdr'] = FDR::where('status', '1')->where('account_number', $id)->first();
       
        //local Account
        $data['Account'] = Member::where('status', '1')->where('id', $id)->first();

    
        return view('backend.layout.personal.profile', $data);
    }

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
    public function password()
    {
        return view('backend/layout/NavaRatno/passwordChange');
    }
}

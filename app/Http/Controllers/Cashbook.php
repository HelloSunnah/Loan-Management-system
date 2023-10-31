<?php

namespace App\Http\Controllers;

use App\Models\InnerTransection;
use Carbon\Carbon;
use App\Models\Transection;
use Illuminate\Http\Request;

class Cashbook extends Controller
{
    public function cashbook()
    {
        $today = Carbon::today();

        $deposit = Transection::whereDate('created_at', $today)->where('transection_type', '1')->sum('transection_amount');
        $withraw = Transection::whereDate('created_at', $today)->where('transection_type', '2')->sum('transection_amount');

        $income = InnerTransection::whereDate('created_at', $today)->where('transection_type', '1')->sum('amount');
        $outgone = InnerTransection::whereDate('created_at', $today)->where('transection_type', '2')->sum('amount');

        $data['incomes'] = $deposit + $income;
        $data['expense'] = $withraw + $outgone;
        $data['drawer'] =  $data['incomes'] - $data['expense'];
        return view('backend/layout/Cashbook/book',$data);
    }
}

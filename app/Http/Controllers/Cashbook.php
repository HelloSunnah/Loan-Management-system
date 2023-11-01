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

        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();
    
        $today = Carbon::today();

        $deposit = Transection::whereDate('created_at', $today)->where('transection_type', '1')->sum('transection_amount');
        $withraw = Transection::whereDate('created_at', $today)->where('transection_type', '2')->sum('transection_amount');
        $deposit1 = Transection::whereDate('created_at', $today)->where('transection_type', '1')->whereBetween('created_at', [$startDate, $endDate])->sum('transection_amount');
        $withraw1 = Transection::whereDate('created_at', $today)->where('transection_type', '2')->whereBetween('created_at', [$startDate, $endDate])->sum('transection_amount');


        $income = InnerTransection::whereDate('created_at', $today)->where('transection_type', '1')->sum('amount');
        $outgone = InnerTransection::whereDate('created_at', $today)->where('transection_type', '2')->sum('amount');
     
        $income1 = InnerTransection::whereDate('created_at', $today)->where('transection_type', '1')->whereBetween('created_at', [$startDate, $endDate])->sum('amount');
        $outgone1 = InnerTransection::whereDate('created_at', $today)->where('transection_type', '2')->whereBetween('created_at', [$startDate, $endDate])->sum('amount');


        $data['incomes1'] = $deposit1 + $income1;
        $data['expense1'] = $withraw1 + $outgone1;
        $data['drawer1'] =  $data['incomes1'] - $data['expense1'];

        $data['incomes'] = $deposit + $income;
        $data['expense'] = $withraw + $outgone;
        $data['drawer'] =  $data['incomes'] - $data['expense'];
        return view('backend/layout/Cashbook/book',$data);
    }
}

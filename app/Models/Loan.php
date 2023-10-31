<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function loan()
    {
        return $this->belongsTo(Member::class,'account_number','id');
    }
}

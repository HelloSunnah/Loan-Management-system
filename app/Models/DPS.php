<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPS extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function dps()
    {
        return $this->belongsTo(Member::class,'account_number','id');
    }
}

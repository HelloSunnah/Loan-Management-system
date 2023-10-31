<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FDR extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function fdr()
    {
        return $this->belongsTo(Member::class, 'account_number', 'id');
    }


}

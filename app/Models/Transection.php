<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transection extends Model
{
    use HasFactory;
    protected $guarded = [];

        public function Transection()
        {
            return $this->belongsTo(Member::class, 'account_id', 'id');
        }
}

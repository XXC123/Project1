<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{

    protected $table = 'verifications';
    protected $primaryKey='id';
    public $timestamps = true;
    protected $guarded=[];
}

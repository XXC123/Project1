<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class WTB extends Model
{
    protected $table = 'wtbs';
    protected $primaryKey='id';
    public $timestamps = true;
    protected $guarded=[];

   	public function customer()
	{
	    return $this->belongsTo('App\Http\Models\Customer', 'customer_id');
	}
}

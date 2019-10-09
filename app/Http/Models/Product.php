<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use Notifiable;

    protected $table = 'saleshoes';

     protected $fillable = [
        'customer_id','brandname', 'color', 'size','price','year','series','img'
    ];
    public $timestamps = false;
}

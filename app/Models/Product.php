<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use Notifiable;

    protected $table = 'saleshoes';

     protected $fillable = [
        'brandname', 'color', 'size',
    ];
    public $timestamps = false;
}

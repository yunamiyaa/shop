<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table = 'carts';
    protected $guarded = ['id'];
    protected $fillable = [
        'stock_id', 'user_id','number'
    ];
}

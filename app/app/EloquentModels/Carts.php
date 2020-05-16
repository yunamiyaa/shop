<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Carts extends Model
{
    protected $table = 'carts';
    protected $guarded = ['id'];
    protected $fillable = [
        'stock_id', 'user_id','number'
    ];


//　　public function Carts()
//{
//    $user_id = Auth::id();
//    return $this->where('user_id',$user_id)->get();
//}

    public function stock()
    {
        return $this->belongsTo('\App\EloquentModels\Stocks');
    }
}

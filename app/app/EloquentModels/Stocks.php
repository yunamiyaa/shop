<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    protected $table = 'stocks';
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'content',
        'fee',
        'filename'
        ];
}

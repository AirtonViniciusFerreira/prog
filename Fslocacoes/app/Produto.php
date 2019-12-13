<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = [
        'name', 'amount', 'value', 'details', 'foto',
    ];
}

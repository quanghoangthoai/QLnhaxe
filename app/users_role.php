<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_role extends Model
{
    protected $fillable = [
        'name', 'note'
    ];
}

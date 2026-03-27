<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
      protected $fillable = [
        'user_id',
        'conference_id',
    ];

}

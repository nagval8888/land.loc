<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';

    protected $fillable = ['name', 'text', 'alias', 'image'];
}

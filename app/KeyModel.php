<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyModel extends Model
{
    protected $table = 'key';

    protected $fillable = ['name'];
}

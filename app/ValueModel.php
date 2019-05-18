<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValueModel extends Model
{
    protected $table = 'value';

    protected $fillable = ['key_id', 'name'];
}

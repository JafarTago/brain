<?php

namespace App\Http\Controllers;

use App\KeyModel;
use App\ValueModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $keyId = rand(53,163);
        $keyName = KeyModel::find($keyId)->name;
        $valueName = ValueModel::where('key_id', $keyId)->first()->name;
        dd($valueName);
    }
}

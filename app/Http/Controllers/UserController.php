<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class UserController extends Controller
{
    //
    function show(){
        return Pengguna::all();
    }
}

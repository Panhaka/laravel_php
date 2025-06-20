<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show($id)
    {
        return view(
            'user', 
            ['user' => User::find($id) ]
        );
    }
}

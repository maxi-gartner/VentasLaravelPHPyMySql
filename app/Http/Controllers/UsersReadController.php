<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersReadController extends Controller
{
    public function index(){

        //return view('admin.users.index');
        return view('admin.users.indexUser');
    }
}

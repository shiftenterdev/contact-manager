<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_index()
    {
    	$users = User::get();
    	return view('admin.user.index')
    		->with(compact('users'));
    }
}

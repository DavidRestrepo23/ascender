<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministratorController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function showLoginform(){
        return view('admin.auth.login');
    }
}

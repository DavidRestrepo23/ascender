<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AdministratorController extends Controller
{   
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('dashboard');
    }

    protected $redirectTo = '/admin/dashboard';
    
    protected function guard()
    {
        return Auth::guard('admin');
    }

    
    public function showLoginform(){
        return view('admin.auth.login');
    }
}

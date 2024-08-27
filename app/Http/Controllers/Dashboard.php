<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Authorization;
use Illuminate\Support\Facades\Session;

class Dashboard extends Controller
{
    public function __construct()
    {
        // Initialize the property with an instance of stdClass
        $this->blankObject = new \stdClass();
    }

    public function getBlankObject(): \stdClass
    {
        return new \stdClass();
    }

    public function showDashboard(){
        return view('admin.dash');
    }

    public function logout(){
        Session::flush();
        Authorization::logout();
        return redirect('/admin/login');
    }
}
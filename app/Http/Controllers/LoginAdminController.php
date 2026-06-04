<?php

namespace App\Http\Controllers;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view ('pages.admin.loginadmin');
    }
}

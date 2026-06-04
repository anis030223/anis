<?php

namespace App\Http\Controllers;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('pages.users.profile.index');
    }
}

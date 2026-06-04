<?php

namespace App\Http\Controllers;


class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.admin.profile.index',[
            'title' => 'APM | Profil',
            'header' => 'Profil',
            'breadcrumb1' => 'Profile',
            'breadcrumb2' => 'Index'
        ]);
    }
    public function detail()
    {
    return view('pages.admin.profile.editprofile',[
        'title' => 'APM | Profil',
            'header' => 'Profil',
            'breadcrumb1' => 'Profile',
            'breadcrumb2' => 'Edit'
    ]);
    }
}

<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.admin.dashboard.index',[
            'title' => 'APM | Dashboard',
            'header' => 'Dashboard',
            'breadcrumb1' => 'Dashboard',
            'breadcrumb2' => 'Index'
        ]);
    }
}
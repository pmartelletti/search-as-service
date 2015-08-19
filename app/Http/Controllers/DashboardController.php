<?php


namespace App\Http\Controllers;


use App\Model\App;

class DashboardController extends Controller
{
    public function index()
    {
        $apps = App::all();
        return view('dashboard', compact('apps'));
    }
}
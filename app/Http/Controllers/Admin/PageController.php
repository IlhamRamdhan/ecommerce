<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view ('admin.pages.dashboard');
    }

    public function pembeli()
    {
        $pembeli = User::all();
        return view('admin.pages.index',compact('pembeli'));
    }
}
      

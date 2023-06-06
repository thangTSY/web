<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminHomeController extends Controller
{
    public function home()
    {
        return view('admin_home ');
    }

}
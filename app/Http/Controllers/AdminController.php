<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;    // Assuming you have a User model

use Illuminate\Support\Facades\Auth; // For authentication

class AdminController extends Controller
{
    public function index()
    {
       if(Auth::id())
       {
        $usertype = Auth::user()->usertype; // Assuming 'usertype' is a field in your User model
        // echo $usertype; // Debugging line to check user type
        if($usertype == 'user')
        {
            return view('dashboard'); // Redirect to user dashboard
        }
        else if($usertype == 'admin')
        {
            return view('admin.index'); // Return admin view with users data
        }
        else
        {
            return redirect()->back();
        }
       }
    }

    public function home()
    {
        return view('home.index'); // Return the home view
    }
}

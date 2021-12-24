<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
//use Appevents;

class adminControl extends Controller
{
    //use Appevents; 

    public function user()
    {
        
        return view("admin.users");
    }

    public function project()
    {
        
        return view("projectmanager.projects");
    }

    public function leader()
    {
        
        return view("projectleader.projects");
    }
}

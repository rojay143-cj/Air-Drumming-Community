<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacy_controller extends Controller
{
    public function getPrivacy(){
        return view('privacy');
    }
}

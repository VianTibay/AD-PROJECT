<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class users extends BaseController
{
    public function index()
    {
        // code here
   return view('user/landing'); 
        
    }
}

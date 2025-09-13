<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index(): string
    {
        // code here
    return view('user/landing');
    }

}
// Template Controller
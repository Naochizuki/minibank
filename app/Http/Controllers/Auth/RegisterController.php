<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller {
    // Buat view
    public function show() {
        return "register";
    }

    // Buat register
    public function store() {
    }
}

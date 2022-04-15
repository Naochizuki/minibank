<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
    // Buat view
    public function show() {
        return view('login');
    }

    // Buat login
    public function authenticate() {
    }

    // Buat logout
    public function destroy() {
    }
}

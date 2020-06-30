<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function success(Request $request)
    {
        $name = $request->fname . " " . $request->lname;
        return view('welcome', ['name' => $name]);
    }
}

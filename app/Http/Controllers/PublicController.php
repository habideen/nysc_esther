<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('index');
    } // index


    public function register()
    {
        return view('register');
    } // register 


    public function login()
    {
        return view('login');
    } // login


    public function reg_successful()
    {
        return view('register_done');
    } // reg_successful


    public function change_password()
    {
        return view('change_password');
    } // change_password


    public function forgot_password()
    {
        return view('forgot_password');
    } // forgot_password
}

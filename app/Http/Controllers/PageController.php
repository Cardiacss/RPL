<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;


class PageController extends Controller
{
    public function home()
    {
        return view("home",["key" => "home"]);
    }
    public function login()
    {
        return view("login");
    }
    public function byr()
    {
        return view("byr");
    }
}

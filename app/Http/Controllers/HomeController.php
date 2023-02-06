<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Publicacion;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);//,'verified'
    }

    public function index()
    {
        return view('home');
    }
}

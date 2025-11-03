<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class LogoutController extends Controller
{
    public function index(){
        $albums = Album::with('songs')->get();
        return view('home', compact('albums'));
    }
}

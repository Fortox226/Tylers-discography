<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\User;

class AdminPanelController extends Controller
{
    public function index()
    {
        // Sprawdź czy użytkownik jest zalogowany
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Użyj prostej metody hasRole
        if (!auth()->user()->hasRole('admin')) {
            abort(403, 'Brak uprawnień administratora');
        }

        $albums = Album::with('songs')->get();
        $users = User::all();

        return view('admin', compact('users', 'albums'));
    }
}
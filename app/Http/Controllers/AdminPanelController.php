<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('admin'); // Twój widok panelu admina
    }
}
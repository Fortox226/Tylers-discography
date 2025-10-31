<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\User;

class AdminPanelController extends Controller
{
    public function index()
    {

        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (!auth()->user()->hasRole('admin')) {
            abort(403, 'Brak uprawnień administratora');
        }

        $albums = Album::with('songs')->get();
        $users = User::all();

        return view('admin', compact('users', 'albums'));
    }

    public function getUser($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Użytkownik został usunięty.');
    }
}
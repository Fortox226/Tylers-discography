<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    /**
     * Resetuje hasło użytkownika.
     */
    public function reset(Request $request)
    {
    // Walidacja danych z formularza
        $request->validate([
            'email' => ['required', 'email'],
            'token' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    // Próba zresetowania hasła
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

    // Przekierowanie po sukcesie lub błąd
        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', 'Hasło zostało pomyślnie zresetowane.');
        }

        return back()->withErrors(['email' => __($status)]);
    }

   public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset', [
            'token' => $token,
            'email' => $request->query('email', ''),
        ]);
    }
}

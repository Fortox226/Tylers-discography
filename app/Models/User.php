<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // DODAJ 'role' tutaj
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Sprawdź czy użytkownik ma określoną rolę
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Sprawdź czy użytkownik ma jakąkolwiek z podanych ról
     */
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            return in_array($this->role, $roles);
        }

        return $this->role === $roles;
    }

    /**
     * Przypisz rolę użytkownikowi
     */
    public function assignRole($role)
    {
        $this->role = $role;
        return $this->save();
    }
}
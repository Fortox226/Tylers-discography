<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(); // wyłącza CSRF i inne middleware
    }

    #[Test]
    public function reset_form_renders_properly(): void
    {
        $response = $this->get(route('password.reset', ['token' => 'test-token']));
        $response->assertStatus(200);
        $response->assertSee('test-token');
    }

    #[Test]
    public function user_can_reset_password_with_valid_token(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('old-password'),
        ]);

        $token = Password::createToken($user);

        $response = $this->post(route('password.update'), [
            'token' => $token,
            'email' => 'test@example.com',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ]);

        // zakładamy, że po udanym resecie redirectuje do /login
        $response->assertRedirect('/login');
        $this->assertTrue(Hash::check('new-password', $user->fresh()->password));
    }

    #[Test]
    public function reset_fails_with_invalid_token(): void
    {
        $user = User::factory()->create([
            'email' => 'wrong@example.com',
            'password' => Hash::make('old-password'),
        ]);

        $response = $this->post(route('password.update'), [
            'token' => 'invalid-token',
            'email' => 'wrong@example.com',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ]);

        // Laravel zwraca redirect z błędami do sesji przy nieudanym resecie
        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    #[Test]
    public function reset_fails_when_passwords_do_not_match(): void
    {
        $user = User::factory()->create([
            'email' => 'mismatch@example.com',
        ]);

        $token = Password::createToken($user);

        $response = $this->post(route('password.update'), [
            'token' => $token,
            'email' => 'mismatch@example.com',
            'password' => 'new-password',
            'password_confirmation' => 'different-password',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('password');
    }

    #[Test]
    public function reset_requires_all_fields(): void
    {
        $response = $this->post(route('password.update'), []);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['email', 'token', 'password']);
    }
}

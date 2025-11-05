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
        $this->withoutMiddleware(); // Wyłączenie csrf
    }

    #[Test]
    public function reset_form_renders_properly(): void
    {
        $response = $this->get(route('password.reset', ['token' => 'test-token']));
        $response->assertStatus(200);
        $response->assertSee('test-token');
    }




    #[Test]
    public function user_can_reset_password_with_valid_token(): void // test zresetowania hasła z poprawnym tokenem
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

        $response->assertRedirect('/login');
        $this->assertTrue(Hash::check('new-password', $user->fresh()->password));
    }

    #[Test]
    public function reset_fails_with_invalid_token(): void // test zresetowania hasła z niepoprawnym tokenem
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

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    #[Test]
    public function reset_fails_when_passwords_do_not_match(): void // test błędu resetowania gdy hasła do siebie nie pasują
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
    public function reset_requires_all_fields(): void // test udanego resetowania
    {
        $response = $this->post(route('password.update'), []);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['email', 'token', 'password']);
    }
}

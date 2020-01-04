<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\User;

class ForgotPasswordTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that a user receives the email request for resetting
     * their password. We assert that a notification has been sent
     * to the user.
     *
     * @return void
     * @since 1.0.0
     */
    public function testUserReceivesEmailWithPasswordResetLink()
    {
        Notification::fake();
      
        $user = factory(User::class)->create();
      
        $response = $this->post('/password/email', [
            'email' => $user->email,
        ]);

        $token = \DB::table('password_resets')->first();

        Notification::assertSentTo($user, ResetPassword::class, function ($notification, $channels) use ($token) {
            return Hash::check($notification->token, $token->token) === true;
        });
    }
}

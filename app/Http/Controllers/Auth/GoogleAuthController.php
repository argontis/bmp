<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    /**
     * Simulate redirecting the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirect()
    {
        return $this->callback();
    }

    /**
     * Simulate obtaining the user information from Google.
     *
     * @return Response
     */
    public function callback()
    {
        $email = 'adminbaktimerahputih@gmail.com';

        // Check if user already exists
        $user = User::where('email', $email)->first();

        if (! $user) {
            // Create new user
            $user = User::create([
                'name' => 'Admin Bakti Merah Putih',
                'email' => $email,
                'google_id' => 'mock_google_id_123',
                'is_admin' => 1,
                'password' => null,
            ]);
        }

        Auth::login($user);

        // Arahkan admin ke dashboard admin, user biasa ke account
        if ($user->is_admin) {
            return redirect()->intended('/admin');
        }

        return redirect()->intended('/account');
    }
}

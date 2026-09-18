<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        return \Laravel\Socialite\Facades\Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback()
    {
        try {
            $googleUser = \Laravel\Socialite\Facades\Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Gagal login menggunakan Google. Silakan coba lagi.');
        }

        // Check if user already exists based on google_id or email
        $user = User::where('google_id', $googleUser->id)
                    ->orWhere('email', $googleUser->email)
                    ->first();

        if (! $user) {
            // Create new user
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'is_admin' => 0, // Default to normal user
                'password' => null,
            ]);
        } elseif (! $user->google_id) {
            // Update existing user with google_id
            $user->update(['google_id' => $googleUser->id]);
        }

        Auth::login($user);

        // Redirect admin to admin dashboard, normal user to account
        if ($user->is_admin) {
            return redirect()->intended('/admin');
        }

        return redirect()->intended('/account');
    }
}

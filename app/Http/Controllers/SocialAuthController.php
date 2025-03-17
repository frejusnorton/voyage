<?php

namespace App\Http\Controllers;


use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->scopes([
            'profile',
            'email',
            'openid',
            'https://www.googleapis.com/auth/userinfo.profile',
            'https://www.googleapis.com/auth/contacts.readonly', 
        ])->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'nom' => $googleUser->user['family_name'],
                'prenom' => $googleUser->user['given_name'],
                'telephone' => $googleUser->user['phone_number'],
                'google_id' => $googleUser->getId(),
                'profil_img' => $googleUser->getAvatar(),
                'password' => bcrypt(uniqid())
            ]
        );
        dd($user);

        Auth::login($user);

        return redirect(route('home'));
    }
}

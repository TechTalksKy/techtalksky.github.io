<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\Token;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('meetup')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('meetup')->user();
        $token = Token::firstOrCreate([
            'provider' => 'meetup'
        ])->fill([
            'token' => json_encode($user)
        ])->save();
        return redirect('/');
    }
}

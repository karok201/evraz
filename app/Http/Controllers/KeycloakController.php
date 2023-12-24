<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class KeycloakController extends Controller
{
    protected const FIELD_USER_ROLES  = 'roles';
    protected const FIELD_GIVEN_NAME  = 'given_name';
    protected const FIELD_FAMILY_NAME = 'family_name';

    public function login()
    {
        return Socialite::driver('keycloak')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('keycloak')->user();

        $roles = $user->user[self::FIELD_USER_ROLES] ?? [];

        $localUser = User::query()->firstOrCreate([
            User::FIELD_EMAIL => $user->getEmail()
        ], [
            User::FIELD_USERNAME => $user->getNickname(),
            User::FIELD_FIRSTNAME => $user->user[self::FIELD_GIVEN_NAME] ?? '',
            User::FIELD_LASTNAME => $user->user[self::FIELD_FAMILY_NAME] ?? ''
        ]);

        Auth::login($localUser);

        $localUser->syncRoles($roles);

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect(Socialite::driver('keycloak')->getLogoutUrl());
    }
}

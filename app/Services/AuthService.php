<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function getAuthUser(): ?Authenticatable
    {
        return Auth::user();
    }
}

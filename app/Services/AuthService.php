<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function __construct(protected User $userModel)
    {
    }
    public function login(string $email, string $password)
    {
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        if (!Hash::check($password, $user->password)) {
            return response()->json(['error' => 'Password mismatch'], 403);
        }
        $token = $user->createToken(config('sanctum.token_name'));

        return (['token' => $token->plainTextToken, 'user' => $user]);
    }
}

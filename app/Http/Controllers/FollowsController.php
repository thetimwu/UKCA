<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    public function follow(User $user)
    {
        // dd($user);
        return auth()->user()->following()->toggle($user->profile);
    }
}

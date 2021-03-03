<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function __construct(private User $user)
    {
    }

    public function index(Request $request)
    {
        $user = $this->user->inRandomOrder()->where('id', '!=', $request->user()->id)->get();
        return UserResource::collection($user);
    }
}

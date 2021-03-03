<?php

namespace App\Http\Controllers\Api;

use App\Events\NewMessageEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Message\MessageStoreRequest;
use App\Http\Resources\MessageResource;
use App\Models\User;
use Illuminate\Http\Request;

class ChatApiController extends Controller
{
    public function __construct(private User $user)
    {
        
    }

    public function store(MessageStoreRequest $chatRequest){
        $message = $chatRequest->user()->messages()->create($chatRequest->all());
        event(new NewMessageEvent($message));
        
        return new MessageResource($message);
    }
}

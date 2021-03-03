<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'message' => $this->message,
            'date' => $this->created_at->format('d/m/Y H:i'),
            'receiver' => new UserResource($this->receiver),
            'sender' => new UserResource($this->sender),
        ];
    }
}

<?php

namespace App\Http\Resources\MailBox;

use App\Http\Resources\Media\FilesResource;
use App\Http\Resources\ProxyUserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RequestWithReplayBoxResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'request_type' => $this->requestType?$this->requestType->name:null,
            'show_date' => $this->show_date,
            'send_user'=>$this->sendUser?ProxyUserResource::make($this->sendUser):null,
            'recived_user'=>$this->recivedUser?ProxyUserResource::make($this->recivedUser):null,
            'files'=>FilesResource::collection($this->files),
            'replay_boxes'=>ReplayBoxResource::collection($this->replayBoxes)
        ];
    }
}

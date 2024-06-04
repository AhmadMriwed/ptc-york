<?php

namespace App\Http\Resources\MailBox;

use App\Http\Resources\Media\FilesResource;
use App\Http\Resources\ProxyUserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplayBoxResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            'id' => $this->id,
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'show_date' => $this->show_date,
            'send_user'=>$this->sendUser?ProxyUserResource::make($this->sendUser):null,
            'files'=>FilesResource::collection($this->files)
        ];
    }
}

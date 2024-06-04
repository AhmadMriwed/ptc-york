<?php

namespace App\Models\MailBox;

use App\Models\Media\Files;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestBoxFile extends Model
{
    use HasFactory;
    public function file()
    {
        return $this->belongsTo(Files::class,'files_id');
    }

    public function requestBox()
    {
        return $this->belongsTo(RequestBox::class,'request_boxes_id');
    }
}

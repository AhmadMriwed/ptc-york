<?php

namespace App\Models\MailBox;

use App\Models\Media\Files;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplayBoxFile extends Model
{
    use HasFactory;
    public function file()
    {
        return $this->belongsTo(Files::class,'files_id');
    }

    public function replayBox()
    {
        return $this->belongsTo(ReplayBox::class,'replay_boxes_id');
    }
}

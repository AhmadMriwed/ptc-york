<?php

namespace App\Models\MailBox;

use App\Models\Media\Files;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReplayBox extends Model
{
    use HasFactory;
    protected $fillable = [
      'title',
      'sub_title',
      'show_date',
      'send_id',
      'request_id'
  ];
    public function files()
    {
      return $this->belongsToMany(Files::class, ReplayBoxFile::class, 'replay_boxes_id', 'files_id')
      ->withTimestamps();
    }
    
    public function requestBox()
    {
      return $this->belongsTo(RequestBox::class,'request_id');
    }
    public function sendUser(): BelongsTo
    {
        return $this->belongsTo(User::class,'send_id');
    }
    
}

<?php

namespace App\Models\MailBox;

use App\Models\Media\Files;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestBox extends Model
{
    use HasFactory;
    protected $fillable = [
      'send_id',
      'recived_id',
        'title',
        'sub_title',
        'show_date',
        'request_type_id'
    ];

    public function files()
    {
      return $this->belongsToMany(Files::class, RequestBoxFile::class, 'request_boxes_id', 'files_id')
      ->withTimestamps();
    //  return $this->belongsToMany(Files::class, 'request_boxes_id');
    }
    public function requestType()
    {
      return $this->belongsTo(RequestType::class, 'request_type_id');
    }
    
    public function replayBoxes()
    {
      return $this->hasMany(ReplayBox::class,'request_id');
    }
    
    
    public function sendUser(): BelongsTo
    {
        return $this->belongsTo(User::class,'send_id');
    }
    public function recivedUser(): BelongsTo
    {
        return $this->belongsTo(User::class,'recived_id');
    }
}

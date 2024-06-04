<?php

namespace App\Models\MailBox;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    use HasFactory;
    public function requestBoxes()
    {
        return $this->hasMany(RequestBox::class);
    }
}

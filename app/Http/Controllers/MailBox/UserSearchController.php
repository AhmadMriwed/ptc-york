<?php

namespace App\Http\Controllers\MailBox;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailBox\RequestBoxRequest;
use App\Http\Resources\MailBox\RequestBoxResource;
use App\Models\MailBox\RequestBox;
use Illuminate\Http\Request;

use App\Http\Resources\ProxyUserResource;
use App\Models\MailBox\RequestBoxFile;
use App\Models\UserIds;
use App\Services\AccountsService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use Psy\Readline\Hoa\FileRead;

class UserSearchController extends Controller
{
    public function getAllUsers(Request $request)
    {
        $users=(AccountsService::getUserAccountByName($request));
        return ProxyUserResource::collection($users)->additional(['message' => __('messages.retrievedSuccess')]);
    }

}

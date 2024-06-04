<?php

namespace App\Http\Controllers\MailBox;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailBox\RequestBoxRequest;
use App\Http\Resources\MailBox\RequestBoxResource;
use App\Models\MailBox\RequestBox;
use Illuminate\Http\Request;
use App\Models\Media\Files;
use App\Traits\Media;
use App\Http\Controllers\Utils\Helper;
use App\Http\Requests\MailBox\StoreRequestWithoutFilesRequest;
use App\Http\Requests\MailBox\UploadFileRequest;
use App\Http\Requests\Media\FilesRequest;
use App\Http\Resources\Admin\Accounts\AccountsResource;
use App\Http\Resources\MailBox\RequestReplayBoxResource;
use App\Http\Resources\ProxyUserResource;
use App\Models\MailBox\RequestBoxFile;
use App\Models\UserIds;
use App\Services\Admin\AccountsService;
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

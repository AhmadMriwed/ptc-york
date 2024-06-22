<?php

namespace App\Http\Controllers\MailBox;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utils\Helper;
use App\Http\Requests\MailBox\ReplayBoxRequest;
use App\Http\Requests\MailBox\StoreReplaytWithoutFilesRequest;
use App\Http\Requests\MailBox\UpdateReplaytWithoutFilesRequest;
use App\Http\Requests\MailBox\UploadFileRequest;
use App\Http\Requests\Media\FilesRequest;
use App\Http\Resources\MailBox\ReplayBoxResource;
use App\Http\Resources\MailBox\RequestBoxResource;
use App\Models\MailBox\ReplayBox;
use App\Models\MailBox\RequestBox;
use App\Models\Media\Files;
use App\Traits\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class ReplayBoxController extends Controller
{
    use Media;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = ReplayBox::query();
        return ReplayBoxResource::collection($query->paginate(10))->additional(['message' => __('messages.retrievedSuccessReplayBox')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReplayBoxRequest $request)
    {
        $files=$this->upload_mulitple_files_with_details($request,'files',RequestBoxController::DIRECTORY_MAilBOX);

        $replayBox=Auth::user()->sendReplayBoxes()->create($request->validated());
        foreach($files as $file){
           $replayBox->files()->create($file->toArray());
        }
          return ReplayBoxResource::make( $replayBox)->additional(['message' => __('messages.createdSuccessReplayBox')]);
    }




    public function upload_files(FilesRequest $request)
    {
     $files=[];
     $filesDetails=$this->upload_mulitple_files_with_details($request,'files',RequestBoxController::DIRECTORY_MAilBOX);
     foreach($filesDetails as $file)
     $files[]=Files::query()->create($file->toArray());
     return response()->json(['message' => __('messages.createdSuccessFile'), 'files' => $files]);
    }

    public function store_replay_without_files(ReplayBoxRequest $request)
    {
       
        $replayBox=Auth::user()->sendReplayBoxes()->create($request->validated());
        $replayBox->files()->attach($request->file_ids);

        return ReplayBoxResource::make($replayBox)->additional(['message' => __('messages.createdSuccessReplayBox')]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ReplayBox $replyBox)
    {
    

        return ReplayBoxResource::make($replyBox)->additional(['message' => __('messages.retrievedSuccessReplayBox')]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReplayBoxRequest $request, ReplayBox $replayBox)
    {
        $replayBox->update( $request->validated());
        if($request->file_ids)
        $replayBox->files()->attach($request->file_ids);
        return ReplayBoxResource::make($replayBox)->additional(['message' => __('messages.updatedSuccessReplayBox')]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReplayBox $replyBox)
    {
        $replyBox->delete();
        return response()->json(['message' => __('messages.deletedSuccessReplayBox')]);
    }
}




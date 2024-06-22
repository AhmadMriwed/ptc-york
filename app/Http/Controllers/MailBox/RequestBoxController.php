<?php

namespace App\Http\Controllers\MailBox;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailBox\RequestBoxRequest;
use App\Http\Resources\MailBox\RequestBoxResource;
use App\Models\MailBox\RequestBox;
use Illuminate\Http\Request;
use App\Models\Media\Files;
use App\Traits\Media;
use App\Http\Requests\Media\FilesRequest;
use App\Http\Resources\MailBox\InfoMailBoxResource;
use App\Http\Resources\MailBox\RequestWithReplayBoxResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class RequestBoxController extends Controller
{
    use Media;
    const  DIRECTORY_MAilBOX='MailBox';
    /**
     * Display a listing of the resource.
     */

     public function getInfoMailBox()
    {
        $collect=collect();
        $collect['count_new_recived_boxes']=Auth::user()->recivedRequestBoxes()->count();
        $collect['count_new_send_boxes']=Auth::user()->sendRequestBoxes()->count();
        $collect['count_recived_boxes']=Auth::user()->recivedRequestBoxes()->count();
        $collect['count_send_boxes']=Auth::user()->sendRequestBoxes()->count();
        return InfoMailBoxResource::make($collect)->additional(['message' => __('messages.retrievedSuccess')]);;
    }
    public function index()
    {
        // $query = RequestType::query();
        // return RequestTypeResource::collection($query->get())->additional(['message' => __('messages.retrievedSuccessRequestBox')]);

    }
    public function indexSend()
    {
        return RequestBoxResource::collection(Auth::user()->sendRequestBoxes()->paginate(10))->additional(['message' => __('messages.retrievedSuccessRequestBox')]);;
    }
    public function indexRecived()
    {
        return RequestBoxResource::collection(Auth::user()->recivedRequestBoxes()->paginate(10))->additional(['message' => __('messages.retrievedSuccessRequestBox')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestBoxRequest $request)
    {
     $files=$this->upload_mulitple_files_with_details($request,'files',RequestBoxController::DIRECTORY_MAilBOX);
     $requestBox=Auth::user()->sendRequestBoxes()->create($request->validated());
     foreach($files as $file){
        $requestBox->files()->create($file->toArray());
     }
       return RequestBoxResource::make( $requestBox)->additional(['message' => __('messages.createdSuccessRequestBox')]);
    }

    public function upload_files(FilesRequest $request)
    {
     $files=[];
     $filesDetails=$this->upload_mulitple_files_with_details($request,'files',RequestBoxController::DIRECTORY_MAilBOX);
     foreach($filesDetails as $file)
     $files[]=Files::query()->create($file->toArray());
     return JsonResource::make($files)->additional(['message' => __('messages.uploadSuccessFile'), ]);
    }

    public function store_request_without_files(RequestBoxRequest $request)
    {

        $requestwithoutfiles=Auth::user()->sendRequestBoxes()->create($request->validated());
        $requestwithoutfiles->files()->attach($request->file_ids);

        return RequestBoxResource::make($requestwithoutfiles)->additional(['message' => __('messages.createdSuccessRequestBox')]);
    }





    /**
     * Display the specified resource.
     */
    public function show(RequestBox $RequestBox)
    {
        return RequestWithReplayBoxResource::make($RequestBox)->additional(['message' => __('messages.retrievedSuccess')]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}


    //  //RequestBox
    //  'retrievedSucessRequestBox' => 'RequestBox retrieved successfully.',
    //  'createdSucessRequestBox' => 'RequestBox created successfully.',
    //  'updatedSucessRequestBox' => 'RequestBox updated successfully.',
    //  'deletedSucessRequestBox' => 'RequestBox deleted successfully.',

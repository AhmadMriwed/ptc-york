<?php

namespace App\Http\Controllers\MailBox;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailBox\RequestTypeRequest;
use App\Http\Requests\MailBox\UpdateRequestTypeRequest;
use App\Http\Requests\Search\SearchTermRequest;
use App\Http\Resources\MailBox\RequestTypeResource;
use App\Models\MailBox\RequestType;
use App\Services\Search\SearchService;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class RequestTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = RequestType::query();
        return RequestTypeResource::collection($query->get())->additional(['message' => __('messages.retrievedSuccessRequestType')]);
    }
    public function searchByTerm(SearchTermRequest $request,SearchService $searchService)
    {
      
        $query =$searchService->searchByTerm(RequestType::class,$request->term,['name']);

        return RequestTypeResource::collection($query)->additional(['message' => __('messages.retrievedSuccessRequestType')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestTypeRequest $request)
    {
        $requestType=RequestType::query()->create($request->validated());
       return RequestTypeResource::make($requestType)->additional(['message' => __('messages.createdSuccessRequestType')]);
    }

    /**
     * Display the specified resource.
     */
    public function show( RequestType $requestType)
    {
        return RequestTypeResource::make($requestType)->additional(['message' => __('messages.retrievedSuccessRequestType')]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequestTypeRequest $request, RequestType $requestType)
    {
        $requestType->update( $request->validated());
        return RequestTypeResource::make($requestType)->additional(['message' => __('messages.updatedSuccessRequestType')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestType $requestType)
    {
        $requestType->delete();
        return response()->json(['message' => __('messages.deletedSuccessRequestType')]);
    }
}




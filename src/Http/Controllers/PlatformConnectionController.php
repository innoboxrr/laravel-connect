<?php

namespace Innoboxrr\LaravelConnect\Http\Controllers;

use Innoboxrr\LaravelConnect\Http\Requests\PlatformConnection\{
    PoliciesRequest,
    PolicyRequest,
    IndexRequest,
    ShowRequest,
    CreateRequest,
    UpdateRequest,
    DeleteRequest,
    RestoreRequest,
    ForceDeleteRequest,
    ExportRequest
};

class PlatformConnectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function policies(PoliciesRequest $request)
    {
        return $request->handle($this);   
    }

    public function policy(PolicyRequest $request)
    {
        return $request->handle();
    }

    public function index(IndexRequest $request)
    {
        return $request->handle();   
    }

    public function show(ShowRequest $request)
    {
        return $request->handle();   
    }

    public function create(CreateRequest $request)
    {
        return $request->handle();   
    }

    public function update(UpdateRequest $request)
    {
        return $request->handle();   
    }

    public function delete(DeleteRequest $request)
    {
        return $request->handle();   
    }

    public function restore(RestoreRequest $request)
    {
        return $request->handle();   
    }

    public function forceDelete(ForceDeleteRequest $request)
    {
        return $request->handle();   
    }

    public function export(ExportRequest $request)
    {
        return $request->handle();   
    }
}
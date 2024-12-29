<?php

namespace Innoboxrr\LaravelConnect\Http\Requests\PlatformConnection;

use Innoboxrr\LaravelConnect\Models\PlatformConnection;
use Innoboxrr\LaravelConnect\Http\Resources\Models\PlatformConnectionResource;
use Innoboxrr\LaravelConnect\Http\Events\PlatformConnection\Events\ForceDeleteEvent;
use Illuminate\Foundation\Http\FormRequest;

class ForceDeleteRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        //
    }

    public function authorize()
    {

        $platformConnection = PlatformConnection::withTrashed()->findOrFail($this->platform_connection_id);
        
        return $this->user()->can('forceDelete', $platformConnection);

    }

    public function rules()
    {
        return [
            'platform_connection_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            //
        ];
    }

    public function attributes()
    {
        return [
            //
        ];
    }

    protected function passedValidation()
    {
        //
    }

    public function handle()
    {

        $platformConnection = PlatformConnection::withTrashed()->findOrFail($this->platform_connection_id);

        $platformConnection->forceDeleteModel();

        $response = new PlatformConnectionResource($platformConnection);

        event(new ForceDeleteEvent($platformConnection, $this->all(), $response));

        return $response;

    }
    
}

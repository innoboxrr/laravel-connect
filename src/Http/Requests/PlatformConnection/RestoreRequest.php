<?php

namespace Innoboxrr\LaravelConnect\Http\Requests\PlatformConnection;

use Innoboxrr\LaravelConnect\Models\PlatformConnection;
use Innoboxrr\LaravelConnect\Http\Resources\Models\PlatformConnectionResource;
use Innoboxrr\LaravelConnect\Http\Events\PlatformConnection\Events\RestoreEvent;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RestoreRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        //
    }

    public function authorize()
    {
        
        $platformConnection = PlatformConnection::withTrashed()->findOrFail($this->platform_connection_id);
        
        return $this->user()->can('restore', $platformConnection);

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

        $platformConnection->restoreModel();

        $response = new PlatformConnectionResource($platformConnection);

        event(new RestoreEvent($platformConnection, $this->all(), $response));

        return $response;

    }
    
}

<?php

namespace Innoboxrr\LaravelConnect\Http\Requests\PlatformConnection;

use Innoboxrr\LaravelConnect\Models\PlatformConnection;
use Innoboxrr\LaravelConnect\Http\Resources\Models\PlatformConnectionResource;
use Innoboxrr\LaravelConnect\Http\Events\PlatformConnection\Events\UpdateEvent;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        //
    }

    public function authorize()
    {
        
        $platformConnection = PlatformConnection::findOrFail($this->platform_connection_id);

        return $this->user()->can('update', $platformConnection);

    }

    public function rules()
    {
        return [
            //
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

        $platformConnection = PlatformConnection::findOrFail($this->platform_connection_id);

        $platformConnection = $platformConnection->updateModel($this);

        $response = new PlatformConnectionResource($platformConnection);

        event(new UpdateEvent($platformConnection, $this->all(), $response));

        return $response;

    }

}

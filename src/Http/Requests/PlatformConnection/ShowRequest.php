<?php

namespace Innoboxrr\LaravelConnect\Http\Requests\PlatformConnection;

use Innoboxrr\LaravelConnect\Models\PlatformConnection;
use Innoboxrr\LaravelConnect\Http\Resources\Models\PlatformConnectionResource;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShowRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        //
    }

    public function authorize()
    {

        $platformConnection = PlatformConnection::findOrFail($this->platform_connection_id);

        return $this->user()->can('view', $platformConnection);

    }

    public function rules()
    {
        return [
            'load_relations' => [
                'nullable',
                'array',
                Rule::in(PlatformConnection::$loadable_relations)
            ],
            'load_counts' => [
                'nullable',
                'array',
                Rule::in(PlatformConnection::$loadable_counts)
            ],
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

        $platformConnection = PlatformConnection::where('id', $this->platform_connection_id)
            ->with($this->load_relations ?? [])
            ->withCount($this->load_counts ?? [])
            ->firstOrFail();

        return new PlatformConnectionResource($platformConnection);

    }
    
}

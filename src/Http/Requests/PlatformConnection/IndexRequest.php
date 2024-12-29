<?php

namespace Innoboxrr\LaravelConnect\Http\Requests\PlatformConnection;

use Innoboxrr\LaravelConnect\Models\PlatformConnection;
use Innoboxrr\LaravelConnect\Http\Resources\Models\PlatformConnectionResource;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Innoboxrr\SearchSurge\Search\Builder;

class IndexRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        //
    }

    public function authorize()
    {
        return $this->user()->can('index', PlatformConnection::class);
    }

    public function rules()
    {
        return [
            //
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

        $builder = new Builder();

        $query = $builder->get(PlatformConnection::class, $this->all());

        return PlatformConnectionResource::collection($query);

    }
}

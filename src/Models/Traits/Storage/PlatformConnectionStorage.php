<?php

namespace Innoboxrr\LaravelConnect\Models\Traits\Storage;

// use Innoboxrr\LaravelConnect\Models\PlatformConnectionMeta;

trait PlatformConnectionStorage
{

    public function createModel($request)
    {

        $platformConnection = $this->create($request->only($this->creatable));

        return $platformConnection;

    }

    public function updateModel($request)
    {
     
        $this->update($request->only($this->updatable));

        return $this;

    }

    /*
    public function updateModelMetas($request)
    {

        $this->update_metas($request, PlatformConnectionMeta::class, 'platform_connection_id')->updatePayload();

        return $this;

    }
    */

    public function deleteModel()
    {

        $this->delete();

    }

    public function restoreModel()
    {

        $this->restore();

    }

    public function forceDeleteModel()
    {

        abort(403);

        $this->forceDelete();
        
    }

}
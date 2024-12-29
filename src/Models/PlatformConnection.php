<?php

namespace Innoboxrr\LaravelConnect\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Innoboxrr\Traits\MetaOperations;
use Innoboxrr\Traits\ModelAppendsTrait;
use Innoboxrr\LaravelConnect\Models\Traits\Relations\PlatformConnectionRelations;
use Innoboxrr\LaravelConnect\Models\Traits\Storage\PlatformConnectionStorage;
use Innoboxrr\LaravelConnect\Models\Traits\Assignments\PlatformConnectionAssignment;
use Innoboxrr\LaravelConnect\Models\Traits\Operations\PlatformConnectionOperations;
use Innoboxrr\LaravelConnect\Models\Traits\Mutators\PlatformConnectionMutators;

class PlatformConnection extends Model
{

    use HasFactory,
        SoftDeletes,
        MetaOperations,
        ModelAppendsTrait,
        PlatformConnectionRelations,
        PlatformConnectionStorage,
        PlatformConnectionAssignment,
        PlatformConnectionOperations,
        PlatformConnectionMutators;
        
    protected $fillable = [
        //FILLABLE//
    ];

    protected $creatable = [
        //CREATABLE//
    ];

    protected $updatable = [
        //UPDATABLE//
    ];

    protected $casts = [
        //CASTS//
    ];

    protected $protected_metas = [];

    protected $editable_metas = [
        //EDITABLEMETAS//
    ];

    public static $export_cols = [
        //EXPORTCOLS//
    ];

    public static $loadable_relations = [
        //LOADABLERELATIONS//
    ];

    public static $loadable_counts = [
        //LOADABLECOUNTS//
    ];

    /*
    protected static function newFactory()
    {
        return \Innoboxrr\LaravelConnect\Database\Factories\PlatformConnectionFactory::new();
    }
    */

}

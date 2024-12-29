<?php
 
namespace Innoboxrr\LaravelConnect\Observers;
 
use Innoboxrr\LaravelConnect\Models\PlatformConnection;
 
class PlatformConnectionObserver
{

    /**
     * Handle events after all transactions are committed.
     *
     * @var bool
     */
    // public $afterCommit = true;

    /**
     * Handle the PlatformConnection "created" event.
     */
    public function created(PlatformConnection $platformConnection): void
    {
        // Remove if laravel-audit is used: $platformConnection->log('created');
    }
 
    /**
     * Handle the PlatformConnection "updated" event.
     */
    public function updated(PlatformConnection $platformConnection): void
    {
        // Remove if laravel-audit is used: $platformConnection->log('updated');
    }
 
    /**
     * Handle the PlatformConnection "deleted" event.
     */
    public function deleted(PlatformConnection $platformConnection): void
    {
        // Remove if laravel-audit is used: $platformConnection->log('deleted');
    }
 
    /**
     * Handle the PlatformConnection "restored" event.
     */
    public function restored(PlatformConnection $platformConnection): void
    {
        // Remove if laravel-audit is used: $platformConnection->log('restored');
    }
 
    /**
     * Handle the PlatformConnection "forceDeleted" event.
     */
    public function forceDeleted(PlatformConnection $platformConnection): void
    {
        // Remove if laravel-audit is used: $platformConnection->log('forceDeleted');
    }
}
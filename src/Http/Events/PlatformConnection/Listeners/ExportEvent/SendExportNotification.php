<?php

namespace Innoboxrr\LaravelConnect\Http\Events\PlatformConnection\Listeners\ExportEvent;

use Innoboxrr\LaravelConnect\Notifications\PlatformConnection\ExportNotification;
use Innoboxrr\LaravelConnect\Http\Events\PlatformConnection\Events\ExportEvent;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendExportNotification
{

    public function __construct()
    {
        //
    }

    public function handle(ExportEvent $event)
    {
        $event->user->notify((new ExportNotification($event->data))->locale($event->locale));
    }

}
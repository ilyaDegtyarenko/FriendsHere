<?php

namespace App\Listeners;

use App\Models\Tools\BugReport;
use Illuminate\Support\Facades\Log;

class BugReportListener
{
    /**
     * Handle the event.
     *
     * @param $event
     */
    public function handle($event)
    {
        try {
            BugReport::create([
                'place' => $event->place ?? null,
                'error' => $event->error ?? null,
                'user_info' => json_encode([
                    'id' => auth()->user() ? auth()->user()->id : null,
                    'name' => auth()->user() ? auth()->user()->name : null,
                    'email' => auth()->user() ? auth()->user()->email : null,
                    'is_blocked' => auth()->user() ? auth()->user()->is_blocked : null,
                ]),
                'comment' => $event->comment ?? null,
            ]);
        } catch (\Exception $exception) {
            Log::error(' Error writing bug report. ', ['data' => $event]);
        } catch (\Throwable $throwable) {
            Log::error(' Error writing bug report. ', ['data' => $event]);
        }
    }
}

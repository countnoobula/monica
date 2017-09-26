<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
        \App\Console\Commands\ResetTestDB::class,
        \App\Console\Commands\SendNotifications::class,
        \App\Console\Commands\CalculateStatistics::class,
        \App\Console\Commands\ImportCSV::class,
        \App\Console\Commands\SetupProduction::class,
        \App\Console\Commands\ImportVCards::class,
        \App\Console\Commands\PingVersionServer::class,
        \App\Console\Commands\FixRemindersNotSent::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('monica:sendnotifications')->hourly();
        $schedule->command('monica:calculatestatistics')->daily();
        $schedule->command('monica:ping')->daily();
    }
}

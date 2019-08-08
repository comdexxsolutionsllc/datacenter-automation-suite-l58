<?php

namespace App\Console;

use App\Console\Commands\ClearProjectFiles;
use App\Console\Commands\MakePHPDevelopmentReports;
use App\Console\Commands\MakeTreeOutput;
use App\Console\Commands\Stripe\CreatePlans;
use App\Console\Commands\Stripe\CreateProducts;
use App\Console\Commands\Stripe\CreateSubscriptions;
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
        ClearProjectFiles::class,
        MakePHPDevelopmentReports::class,
        MakeTreeOutput::class,
        CreatePlans::class,
        CreateProducts::class,
        CreateSubscriptions::class,
    ];

    /**
     * Register the commands for the application.
     *
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('horizon:snapshot')->everyFiveMinutes();
    }
}

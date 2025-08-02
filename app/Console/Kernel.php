<?php

namespace App\Console;

use App\Console\Commands\CancelExpiredAppointments;
use App\Console\Commands\CancelExpiredOrders;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('orders:cancel-expired')->dailyAt('00:00');
        $schedule->command('appointments:cancel-expired')->dailyAt('00:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
        CancelExpiredOrders::class;
        CancelExpiredAppointments::class;

        require base_path('routes/console.php');
    }
}

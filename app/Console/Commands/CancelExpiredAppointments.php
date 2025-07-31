<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Appointment;
use carbon\Carbon;

class CancelExpiredAppointments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'appointments:cancel-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cancela las citas pendientes cuya fecha ya pasó';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        $appointments = Appointment::where('status', 'Pendiente')
            ->where('date', '<', $now)
            ->get();

        $total = 0;

        foreach ($appointments as $appointment) {
            $appointment->status = 'Cancelada';
            $appointment->save();
            $total++;
        }

        $this->info("Se cancelaron $total citas pendientes cuya fecha ya pasó.");
    }
}

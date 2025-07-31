<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Order;

class CancelExpiredOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:cancel-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cancela las órdenes pendientes cuya fecha de entrega ya pasó';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        $orders = Order::where('status', 'Pendiente')
            ->whereRaw('DATE_ADD(pickup_date, INTERVAL 2 DAY) < ?', [$now])
            ->get();

        $total = 0;

        foreach ($orders as $order) {
            foreach ($order->details as $detail) {
                $product = $detail->product;
                $product->stock += $detail->quantity;
                $product->save();
            }

            $order->status = 'Cancelada';
            $order->save();

            $total++;
        }

        $this->info("Se cancelaron $total órdenes expiradas (con 2 días de tolerancia) y se restauró el stock.");
    }
}

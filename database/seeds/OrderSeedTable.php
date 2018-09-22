<?php

use Illuminate\Database\Seeder;
use App\OrderCopy;
use App\Order;

class OrderSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Order::create([
        'user_id'=> 4,
        'startDateOrder'=> new DateTime("-8 months"),
        'state'=> 0,
        'cycle_id'=> 1,
        'place'=> 0,
      ]);

      OrderCopy::create([
        'copy_id'=>1,
        'material_id'=> 1,
        'copyNumber'=> 1,
        'materialType'=> 2,
        'order_id'=> 1,
      ]);
    }
}

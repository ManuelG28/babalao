<?php

/*
 * @author    Felipe Sosa Patiño fsosap@eafit.edu.co
 */

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        factory(Order::class,8)->create();
    }
}

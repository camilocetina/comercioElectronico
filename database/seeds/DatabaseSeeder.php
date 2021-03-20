<?php

use Illuminate\Database\Seeder;
use App\Admin\Product;
use App\Admin\Suplier;
use App\Admin\Inventory;
use App\Admin\Client;
use App\Admin\Order;
use App\Admin\Recharge;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        factory(Product::class)->times(100)->create();
        factory(Suplier::class)->times(100)->create();
        factory(Inventory::class)->times(100)->create();
        factory(Client::class)->times(100)->create();
        factory(Order::class)->times(100)->create();
        factory(Recharge::class)->times(100)->create();
        
    }
}

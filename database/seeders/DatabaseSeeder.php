<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BranchOffice;
use App\Models\BranchProduct;
use App\Models\Product;
use App\Models\ServiceDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        ServiceDetail::factory()->count(10)->create();

        // Para cada oficina, crear 5 productos
        BranchOffice::all()->each(function ($branchOffice) {
            $branchOffice->branchProduct()->saveMany(
                BranchProduct::factory()->count(5)->make([
                    'product_id' => Product::inRandomOrder()->first()->id,
                ])
            );
        });
    }
}

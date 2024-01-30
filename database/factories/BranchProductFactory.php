<?php

namespace Database\Factories;

use App\Models\BranchProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchProductFactory extends Factory
{
    protected $model = BranchProduct::class;

    public function definition()
    {
        return [
            'stock' => $this->faker->numberBetween(0, 100),
            'product_id' => \App\Models\Product::factory(),
            'branch_office_id' => \App\Models\BranchOffice::factory(),
        ];
    }
}

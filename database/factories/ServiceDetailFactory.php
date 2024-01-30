<?php

namespace Database\Factories;

use App\Models\ServiceDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceDetailFactory extends Factory
{
    protected $model = ServiceDetail::class;

    public function definition()
    {
        return [
            'concept' => $this->faker->sentence,
            'quantity' => $this->faker->numberBetween(0, 100),
            'cost' => $this->faker->randomFloat(2, 1, 1000),
            'service_id' => \App\Models\Service::factory(),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}

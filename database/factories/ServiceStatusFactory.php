<?php

namespace Database\Factories;

use App\Models\ServiceStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceStatusFactory extends Factory
{
    protected $model = ServiceStatus::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['importante', 'en proceso', 'completado']),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'observation' => $this->faker->sentence,
            'total' => $this->faker->randomFloat(2, 1, 1000),
            'customer_id' => \App\Models\Customer::factory(),
            'service_type_id' => \App\Models\ServiceType::factory(),
            'service_status_id' => \App\Models\ServiceStatus::factory(),
            'user_id' => \App\Models\User::factory(),
            'branch_office_id' => \App\Models\BranchOffice::factory(),
        ];
    }
}

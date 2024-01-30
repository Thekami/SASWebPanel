<?php

namespace Database\Factories;

use App\Models\BranchOffice;
use Illuminate\Database\Eloquent\Factories\Factory;

class BranchOfficeFactory extends Factory
{
    protected $model = BranchOffice::class;

    public function definition()
    {
        return [
            'name' => $this->faker->companySuffix,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'company_id' => \App\Models\Company::factory(),
        ];
    }
}

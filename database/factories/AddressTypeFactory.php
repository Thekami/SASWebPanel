<?php

namespace Database\Factories;

use App\Models\AddressType;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressTypeFactory extends Factory
{
    protected $model = AddressType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}

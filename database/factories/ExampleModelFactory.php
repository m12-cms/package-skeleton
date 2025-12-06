<?php

namespace {{namespace}}\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use {{namespace}}\Models\ExampleModel;

class ExampleModelFactory extends Factory
{
    protected $model = ExampleModel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}

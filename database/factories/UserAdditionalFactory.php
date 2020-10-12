<?php

namespace Database\Factories;

use App\Models\UserAdditional;
use Faker\Provider\ru_RU\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserAdditionalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAdditional::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {  $faker = \Faker\Factory::create("ru_RU");
        return [
            'last_name' => $faker->lastName(),
            'first_name' => $faker->firstName(),
            'patronymic' => $faker->middleName()
        ];
    }
}

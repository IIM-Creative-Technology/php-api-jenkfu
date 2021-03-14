<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date_start = $this->faker->dateTimeBetween('-1 year', '+15 days')->format('Y-m-d');
        return [
            'subject' => $this->faker->sentence(1),
           'date_start' => $date_start,
           'date_end' => $this->faker->dateTimeBetween($date_start,'+5 days')->format('Y-m-d'),
        ];
    }
}

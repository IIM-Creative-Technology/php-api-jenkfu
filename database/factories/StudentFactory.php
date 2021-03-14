<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $class = DB::table('classes')->select(['id','year'])->inRandomOrder()->limit(1)->get();
        return [
            'name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'age' => $this->faker->numberBetween(18, 30),
            'year' => $this->faker->year,
            'class_id' => $class[0]->id,
        ];
    }
}

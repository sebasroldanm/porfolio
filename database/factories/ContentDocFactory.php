<?php

namespace Database\Factories;

use App\Models\ContentDoc;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentDocFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContentDoc::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->word,
        'code' => $this->faker->word,
        'language' => $this->faker->word,
        'documentation_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

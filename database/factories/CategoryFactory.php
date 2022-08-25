<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title_uz = $this->faker->sentence;
        return [
            'title_uz' => $title_uz,
            'title_ru' => $this->faker->sentence,
            'title_en' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),

            'slug' => \Str::slug($title_uz),
        ];
    }
}

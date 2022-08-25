<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Media;
use App\Models\Post;
use App\Models\StaticPage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaticPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StaticPage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = [
            1 => '/files\featured1.png',
            2 => '/files\featured2.png',
            3 => '/files\featured3.png',
            4 => '/files\featured4.png',
            5 => '/files\featured5.png'
        ];

        $type = random_int(1, 2);
        $title_uz = $this->faker->sentence;

        $page = [
            'title_uz' => $title_uz,
            'title_ru' => $this->faker->sentence,
            'title_en' => $this->faker->sentence,

            'text_uz' => $this->faker->realText(2000),
            'text_ru' => $this->faker->realText(2000),
            'text_en' => $this->faker->realText(2000),

            'slug' => \Str::slug($title_uz),
            'type' => $type,
            'created_at' => now(),
            'updated_at' => now(),

            'user_id' => User::all()->random()->id,
        ];

        if ($type == 2) {
            $page['sub_title_uz'] = $this->faker->text(255);
            $page['sub_title_ru'] = $this->faker->text(255);
            $page['sub_title_en'] = $this->faker->text(255);
            $page['image'] = $images[rand(1, 5)];
        }

        return $page;
    }
}

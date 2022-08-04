<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Media::class;

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

        $videos = [
            1 => '/files\1.mp4',
            2 => '/files\2.mp4',
            3 => '/files\3.mp4',
            4 => '/files\4.mp4',
            5 => '/files\5.mp4'
        ];

        $type = random_int(1, 2);

        if ($type == 1) {
            $page = [
                'title' => $this->faker->sentence,
                'type' => 'photo',
                'media' => $images[rand(1, 5)],
            ];
        } else {
            $page = [
                'title' => $this->faker->sentence,
                'type' => 'video',
                'media' => $videos[rand(1, 5)],
            ];
        }

        return $page;
    }
}

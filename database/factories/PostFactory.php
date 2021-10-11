<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = [
            'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
            'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
        ];
        return [
            'title' => str_replace('。', '', $this->faker->realText(mt_rand(10, 20))),
            'js_url' => $this->faker->url(),
            'thumbnail_url' => $this->faker->imageUrl($width = 640, $height = 480, $category = $categories[mt_rand(0, 12)]),
            'download_url' => $this->faker->url(),
            'comment' => $this->faker->realText(mt_rand(10, 100)),
            'area_id' => mt_rand(1, 90),
            'user_id' => mt_rand(1, 20),
        ];
    }
}

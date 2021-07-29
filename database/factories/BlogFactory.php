<?php

namespace Database\Factories;

use App\Models\blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->text(20);

        return [
            'title' => $title,
            'slug' => str::slug($title),
            'content' => $this->faker->text(2000),
            'author' => $this->faker->name(),
            'image' => $this->faker->image('public/images/blogs', 600,200, null, false),
            'published_at' => now(),
        ];
    }
}

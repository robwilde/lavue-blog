<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->sentence;

        return [
            'uuid'         => $this->faker->uuid,
            'title'        => $title,
            'slug'         => Str::slug($title),
            'body'         => $this->faker->paragraph,
            'teaser'       => $this->faker->sentence,
            'is_published' => $this->faker->boolean,
        ];
    }
}

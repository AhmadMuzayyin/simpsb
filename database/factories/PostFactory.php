<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (!is_dir(storage_path('/app/public/posts'))) {
            mkdir(storage_path('/app/public/posts'), 0777, true);
            $this->faker->image(
                storage_path("/app/public/posts"),
                640,
                480
            );
        }
        return [
            'category_id' => $this->faker->numberBetween(1, 10),
            'slug' => $this->faker->slug(),
            'judul' => $this->faker->sentence(),
            'isi' => $this->faker->paragraphs(5, true),
            'gambar' => 'https://picsum.photos/645/640/',
        ];
    }
}

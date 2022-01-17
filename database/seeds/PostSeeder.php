<?php

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence();
            $newPost->content = $faker->text();
            $newPost->image = $faker->imageUrl();
            $newPost->author = $faker->name();
            $newPost->date_created = $faker->date();
            $newPost->save();

        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $images = glob(public_path('images/*.*'));
        foreach ($images as $image) {
            unlink($image);
        }
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'Ayman Alshiekh',
            'email' => 'ayman@gmail.com',
            'password'  =>  bcrypt('11111111')
        ]);
        \App\Models\Post::factory(50)->create();

    }
}

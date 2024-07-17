<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'John Doe',
            'bio' => 'John Doe is an accomplished author with numerous bestsellers. He has a passion for writing and sharing his knowledge through his books.'
        ]);
    }
}

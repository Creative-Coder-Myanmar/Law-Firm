<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        News::truncate();
        Member::truncate();

        User::create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        News::factory(20)->create();
        $this->call([
            MemberSeeder::class,
        ]);
    }
}

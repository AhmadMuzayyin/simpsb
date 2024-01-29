<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'level' => 'admin',
        ]);
        $kelas = ['X', 'XI', 'XII'];
        foreach ($kelas as $item) {
            \App\Models\Kelas::create([
                'nama' => $item,
                'maksimal' => 50,
                'terisi' => 0,
            ]);
        }
        \App\Models\Pendaftaran::create([
            'mulai' => now(),
            'berakhir' => now()->addMonth(3),
            'tahun_akademik' => date('Y'),
        ]);
        \App\Models\Category::factory(10)->create();
        \App\Models\Post::factory(10)->create();
    }
}

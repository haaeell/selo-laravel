<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bayi')->insert([
            [
                'nama' => 'Bayu Pratama',
                'alamat' => 'Jl. Merdeka No. 10',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2023-06-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aisyah',
                'alamat' => 'Jl. Kartini No. 5',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2023-07-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('ibu_hamil')->insert([
            [
                'nama' => 'Rina Susanti',
                'alamat' => 'Jl. Sudirman No. 8',
                'jenis_kelamin' => 'Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('lansia')->insert([
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Ahmad Yani No. 12',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1950-02-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Suminah',
                'alamat' => 'Jl. Diponegoro No. 7',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '1948-10-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('dokumentasi')->insert([
            [
                'judul' => 'Kegiatan Posyandu',
                'deskripsi' => 'Kegiatan pemeriksaan bayi dan ibu hamil di Posyandu.',
                'gambar' => 'posyandu.jpg',
                'tanggal' => '2024-07-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pemeriksaan Lansia',
                'deskripsi' => 'Cek kesehatan rutin untuk lansia.',
                'gambar' => 'lansia.jpg',
                'tanggal' => '2024-07-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}

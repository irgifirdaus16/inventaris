<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Kondisi;
use Illuminate\Database\Seeder;

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

        User::create([
            'nama' => 'kepala_staff',
            'user_name' => 'kepalastaff',
            'password' => bcrypt('smkavicena'),
            'role' => 'kepalastaff'
        ]);
        User::create([
            'nama' => 'staff_gudang',
            'user_name' => 'staffgudang',
            'password' => bcrypt('smkavicena'),
            'role' => 'staffgudang'
        ]);
        User::create([
            'nama' => 'kepala_sekolah',
            'user_name' => 'kepalasekolah',
            'password' => bcrypt('smkavicena'),
            'role' => 'kepala_sekolah'
        ]);

        Kategori::create([
            'nama'=> 'Teknik Komputer & Jaringan'
        ]);
        Kategori::create([
            'nama'=> 'Teknik Otomotif'
        ]); 
        Kategori::create([
            'nama'=> 'Multimedia'
        ]);

        // Barang::create([
        //     'kategori_id' => '1',
        //     'nama_brg' => 'CPU CORE 2 DUO',
        //     'jumlah_brg' => '12'
        // ]);
        // Barang::create([
        //     'kategori_id' => '2',
        //     'nama_brg' => 'Laptop Acer',
        //     'jumlah_brg' => '12'
        // ]);
        // Barang::create([
        //     'kategori_id' => '3',
        //     'nama_brg' => 'Scanner',
        //     'jumlah_brg' => '12'
        // ]);
        // Kondisi::create([
        //     'barang_id' => '1',
        //     'baik' => '12',
        //     'rusak' => '0'
        // ]);
        // Kondisi::create([
        //     'barang_id' => '2',
        //     'baik' => '12',
        //     'rusak' => '0'
        // ]);
        // Kondisi::create([
        //     'barang_id' => '3',
        //     'baik' => '12',
        //     'rusak' => '0',
        // ]);


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Barang;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Barang
        Barang::create([
            'nama_barang' => 'Sabun batang',
            'harga_satuan' => '3000',
        ]);

        Barang::create([
            'nama_barang' => 'Mi Instan',
            'harga_satuan' => '2000',
        ]);

        Barang::create([
            'nama_barang' => 'Pensil',
            'harga_satuan' => '1000',
        ]);

        Barang::create([
            'nama_barang' => 'Kopi sachet',
            'harga_satuan' => '1500',
        ]);

        Barang::create([
            'nama_barang' => 'Air minum galon',
            'harga_satuan' => '20000',
        ]);
        //Barang

        //User
        User::create([
            'name' => 'FAIZAL DZULFIKAR DARMAWAN RUSLAN',
            'role' => 'admin',
            'email' => 'faisd405@gmail.com',
            'password' => Hash::make('bogor123'),
        ]);
    }
}

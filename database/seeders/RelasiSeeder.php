<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use App\Models\Wali;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa =Mahasiswa::create([
            'nama' => 'ilham',
            'nim' => '123456',
        ]);

        Wali::create([
            'nama' => 'fathahilah',
            'id_mahasiswa' => $mahasiswa->id,
        ]);
    }
}

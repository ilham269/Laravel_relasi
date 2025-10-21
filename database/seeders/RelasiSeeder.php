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
            'nama' => 'Andi',
            'nim' => '123456',
        ]);

        Wali::create([
            'nama' => 'Budi',
            'id_mahasiswa' => $mahasiswa->id,
        ]);
    }
}
